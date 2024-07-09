<?php require_once('include/header.php'); ?>



      <!-- hi, we are brave-->
      <section class="section section-lg bg-default">
        <div class="container container-bigger">
          <div class="row">
            <div class="col-12">
              <form action="" method="get">
                <div class="d-flex bd-highlight">
                  <div class="p-2 flex-even">
                    <div class="form-wrap form-wrap-inline">
                      <label class="form-label-outside">From</label>
                      <div class="form-wrap form-wrap-inline">
                        <select class="form-input select-filter" required name="area_from" id="area_from" data-placeholder="Choose One"  >
                          <option value=""></option>
                            <?php 
                              $result=$mysqli->common_select('area');
                                if($result){
                                  if($result['data']){
                                    foreach($result['data'] as $data){
                            ?>
                                <option value="<?= $data->id ?>" <?= $_GET['area_from']==$data->id?"selected":"" ?>><?= $data->name ?></option>
                            <?php } } } ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="p-2 flex-even">
                    <label class="form-label-outside">To</label>
                    <div class="form-wrap form-wrap-inline">
                      <select class="form-input select-filter" data-placeholder="Choose One" required name="area_to" id="area_to">
                        <option value=""></option>
                          <?php 
                            $result=$mysqli->common_select('area');
                              if($result){
                                if($result['data']){
                                  foreach($result['data'] as $data){
                          ?>
                              <option value="<?= $data->id ?>" <?= $_GET['area_to']==$data->id?"selected":"" ?>><?= $data->name ?></option>
                          <?php } } } ?>
                      </select>
                    </div>
                  </div>
                  <div class="p-2 flex-even">
                    <label class="form-label-outside">Depart Date</label>
                    <div class="form-wrap form-wrap-validation">
                      <input class="form-input" id="dateForm" name="dep_date" type="text" value="<?= $_GET['dep_date'] ?>" data-time-picker="date">
                      <label class="form-label" for="dateForm">Choose the date</label>
                    </div>
                  </div>
                  <div class="p-2 flex-even">
                    <button class="button button-block button-secondary mt-3" type="submit">search</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          
          <?php 
            $cols=array(1,2,3,4);
            $depdate=date('Y-m-d',strtotime($_GET['dep_date']));
            $result=$mysqli->common_select_query("SELECT schedule.*,route.name,vehicle.name as bus,vehicle.registration_no,vehicle.vehicle_type,(select area.name from area where area.id= route.break_area) as breakarea,
                                                  (select counter.counter_name from counter WHERE counter.id=schedule.departure_counter) as depcounter,
                                                  (select counter.counter_name from counter WHERE counter.id=schedule.arrival_counter) as arrcounter
                                                  FROM `schedule`
                                                  JOIN vehicle on vehicle.id=schedule.vehicle_id
                                                  JOIN route on route.id=schedule.route_id
                                                  WHERE route.area_from={$_GET['area_from']} and route.area_to={$_GET['area_to']} and 
                                                  date(schedule.departure_time)='{$depdate}'");
           
            if($result){
              if($result['data']){
                  foreach($result['data'] as $data){
                    $seat=$rows=array();
                    $con['id']=$_GET['id'] ?? 0;
                    $result=$mysqli->common_select_query("SELECT vehicle_seat_type.*,seat.name,seat_type.name as stype FROM `vehicle_seat_type` 
                                                  JOIN seat on seat.id=vehicle_seat_type.seat_id
                                                  JOIN seat_type on seat_type.id=vehicle_seat_type.seat_type_id
                                                  WHERE vehicle_seat_type.vehicle_id={$data->vehicle_id} and vehicle_seat_type.deleted_at is null order by seat.name");
                    if($result){
                      if($result['data']){
                        foreach($result['data'] as $rs){
                          $rows[substr($rs->name,0,1)]=substr($rs->name,0,1);
                          $seat[$rs->name]=$rs;
                        }
                      }
                    }
                    if(count($seat) > 0){
          ?>


          <div class="row row-50 justify-content-md-center align-items-lg-center justify-content-xl-between">
            <div class="col-md-10 col-lg-6">
              <h3>
                <button type="button" onclick="show_seatplan(<?= $data->id ?>)" class="btn btn-link">
                  <?= $data->bus ?> #<?= $data->couch_number ?>
                </button>
              </h3>
              <p>
                Bus Type: <?= $data->vehicle_type ?><br>
                Start Counter: <?= $data->depcounter ?><br>
                Break: <?= $data->breakarea ?><br>
                End Counter: <?= $data->arrcounter ?><br>
                Time: <?= date('h:i A',strtotime($data->departure_time)) ?> - <?= date('h:i A',strtotime($data->arrival_time)) ?><br>
              </p>
              <div class="divider divider-decorate"></div>
              <table class="table">
                <tr>
                  <th>Seat</th>
                  <th>Price</th>
                </tr>
                <tbody class="vehicle<?= $data->id ?>">

                </tbody>
                <tr>
                  <th class="total_qty<?= $data->id ?>">0</th>
                  <th class="total_price<?= $data->id ?>">0.00</th>
                </tr>
              </table>
              
            </div>
            <div class="col-md-10 col-lg-6">
              <div class="p-3 seat_plan seat_plan<?= $data->id ?>" style="display:none">
                <table style="border:2px solid #ffa900" class="table">
                  
                  <tbody>
                    <?php 
                      if(count($rows)){
                        foreach($rows as $r){
                    ?>
                          <tr>
                            <?php
                              if(count($cols)){
                                foreach($cols as $c){
                            ?>
                                <td>
                                  <?php if(isset($seat["{$r}{$c}"])){ ?>
                                  <button title="<?= $seat["{$r}{$c}"]->name ?? '' ?>" onclick="get_seat(this)" type="button" data-seat='<?= json_encode($seat["{$r}{$c}"]) ?>' class="btn btn-link p-0 vseat<?= $data->id ?>" value="">
                                    <img width="25px" src="<?= $baseurl ?>asset/images/seat_black.svg" alt="">
                                  </button>
                                  <?php } ?>
                                </td>
                            <?php } } ?>
                          </tr>
                    <?php } } ?>
                    
                  </thead>
                </table>
              </div>
              
            </div>
          </div>
          <?php } } } } ?>
        </div>
      </section>

      <!-- Small Features-->
      <section class="section section-lg section-lg-alternative bg-gray-lighter novi-background bg-cover">
        <div class="container container-wide">
          <div class="row row-50 justify-content-sm-center text-gray-light">
            <div class="col-sm-10 col-md-6 col-xl-3">
              <article class="box-minimal">
                <div class="box-minimal-header">
                  <div class="box-minimal-icon box-minimal-icon-lg novi-icon mdi mdi mdi-airplane"></div>
                  <h6 class="box-minimal-title">Air Tickets</h6>
                </div>
                <p>At our travel agency, you can book air tickets to any world destination. We also provide online ticket booking via our website in just a couple of steps.</p>
              </article>
            </div>
            <div class="col-sm-10 col-md-6 col-xl-3">
              <article class="box-minimal">
                <div class="box-minimal-header">
                  <div class="box-minimal-icon box-minimal-icon-lg novi-icon mdi mdi-map"></div>
                  <h6 class="box-minimal-title">Voyages & Cruises</h6>
                </div>
                <p>Besides regular tours and excursions, we also offer a variety of cruises & sea voyages for different customers  looking for awesome experiences.</p>
              </article>
            </div>
            <div class="col-sm-10 col-md-6 col-xl-3">
              <article class="box-minimal">
                <div class="box-minimal-header">
                  <div class="box-minimal-icon box-minimal-icon-lg novi-icon mdi mdi-city"></div>
                  <h6 class="box-minimal-title">Hotel Bookings</h6>
                </div>
                <p>We offer a wide selection of hotel ranging from 5-star ones to small properties located worldwide so that you could book a hotel you like.</p>
              </article>
            </div>
            <div class="col-sm-10 col-md-6 col-xl-3">
              <article class="box-minimal">
                <div class="box-minimal-header">
                  <div class="box-minimal-icon box-minimal-icon-lg novi-icon mdi mdi-beach"></div>
                  <h6 class="box-minimal-title">Tailored Summer Tours</h6>
                </div>
                <p>Our agency provides varied tours including tailored summer tours for clients who are searching for an exclusive and memorable vacation.</p>
              </article>
            </div>
          </div>
        </div>
      </section>



      <!-- CTA Gradient-->
      <section class="section section-xs text-center bg-gray-700 novi-background bg-cover">
        <div class="container container-wide">
          <div class="box-cta-thin">
            <p class="big"><strong>The most affordable prices!  </strong>&nbsp;<span>Choose your favorite destination!</span>&nbsp;<a class="link-bold" href="#">Order a tour! </a></p>
          </div>
        </div>
      </section>
<?php require_once('include/footer.php'); ?>
<!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> -->
<script>
  function show_seatplan(e){
    $('.seat_plan').hide()
    $('.seat_plan'+e).show()
  }
  function get_seat(e){
    $(e).toggleClass('btn-warning');
    let seat= $(e).data('seat');
    let seat_data="";
    let seat_qty=0;
    let seat_total=0;
    $('.vseat'+seat.vehicle_id+'.btn-warning').each(function(e){
      seat_qty++;
      seat_total+=parseFloat($(this).data('seat').price);
      
      seat_data+="<tr>";
      seat_data+="<td>"+$(this).data('seat').name+"</td>";
      seat_data+="<td>"+$(this).data('seat').price+"</td>";
      seat_data+="</tr>";
      
    })
    $('.vehicle'+seat.vehicle_id).html(seat_data)
    $('.total_qty'+seat.vehicle_id).html(seat_qty)
    $('.total_price'+seat.vehicle_id).html(seat_total)
  }
</script>