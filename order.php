<?php include_once('include/header.php') ?>
<?php include_once('include/auth_check.php') ?>
<div class="untree_co-section">
    <div class="container">
      	<div class="row">
        	<div class="col-md-12 text-center pt-5">
              <!-- start project list -->
            <table class="table table-striped projects">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Customer</th>
                  <th scope="col">Route</th>
                  <th scope="col">Order Date </th>
                  <th scope="col">Journey Date </th>
                  <th scope="col">Total Seat</th>
                  <th scope="col">Total Price</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                    $result=$mysqli->common_select_query("SELECT seat_book.*, schedule.couch_number,schedule.departure_time,
                                                          schedule.arrival_time,
                                                          (select route.name from route WHERE route.id=schedule.route_id) as route,
                                                          (select counter.counter_name from counter WHERE counter.id=schedule.departure_counter) as departure_counter,
                                                          (select counter.counter_name from counter WHERE counter.id=schedule.arrival_counter) as arrival_counter,
                                                          vehicle.name as vehicle_name, vehicle.registration_no FROM `seat_book`
                                                          JOIN schedule on schedule.id=seat_book.schedule_id
                                                          JOIN vehicle on vehicle.id=seat_book.vehicle_id WHERE seat_book.customer_id='{$_SESSION['customer_id']}'"); 
                    if($result){
                      if($result['data']){
                        foreach($result['data'] as $i=>$data){
                  ?>
                <tr>
                  <td><?= ++$i ?></td>
                  <td><?= $data->name ?></td>
                  <td><?= $data->route ?></td>
                  <td><?= date('d-m-Y h:iA',strtotime( $data->created_at)) ?></td>
                  <td><?= date('d-m-Y h:iA',strtotime( $data->departure_time)) ?></td>
                  <td><?= $data->total_seat?></td>
                  <td><?= $data->total_amount?></td>
                  <td><?= $data->status==1 ? "canceled" : "Paid" ?></td>
                  <td>
                    <a href="invoice.php?txnid=<?= $data->transaction_id ?? "" ?>" class="btn btn-success">Invoice</a>
                      <?php
                        $today = time();
                        $dayinpass= strtotime($data->departure_time);
                        $hourRemain=round(abs($today-$dayinpass)/60/60);

                        if($hourRemain > 12){
                      ?>
                        <a  class="btn btn-danger" onclick="return confirm('Are you sure?')" href="<?= $baseurl ?>cencel_request.php?id=<?= $data ->id ?>" class="btn btn-Warning btn-xs"> Cencel </a>
                    <?php }else{ ?>
                      <button disable title="You cannot cancel your ticket as your journey time is less than 12 hours." class="btn btn-danger"></button>
                    <?php } ?>
                  </td>
                </tr>
                <?php }}} ?>
              </tbody>
            </table>
          </div>
      	</div>
    </div>
</div>
<!-- Start Footer Section -->
<?php include_once('include/footer.php')?>