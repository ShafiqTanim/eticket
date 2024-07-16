<?php require_once('include/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
    <title>Document</title>

</head>
<body>

<?php 
           
  $id=$_GET['invoice'];
  $result=$mysqli->common_select_query("SELECT seat_book.first_name as fname, seat_book.last_name as lname, seat_book.phone as phone,schedule.route_id as route,counter.counter_name as issue_counter,schedule.created_at as issue_date,seat_book.total_seat as seat_qty,seat_book.total_amount as total_price(select area.name from area where area.id= route.break_area) as breakarea,
                                       
                                        FROM `schedule`
                                        JOIN vehicle on vehicle.id=schedule.vehicle_id
                                        JOIN route on route.id=schedule.route_id
                                        WHERE route.area_from={$_GET['area_from']} and route.area_to={$_GET['area_to']} and 
                                        date(schedule.departure_time)='{$depdate}'");



?>

<div class="container">
    <div class="row bg-warning">
   
        <div class="col-md-4">
          
            <p> ticket NO: 00002</p>
            
        </div>
        <div class="col-md-4 text-center ">
            <h2 class="text-align-center">TICKET F0!</h2>
            <p>Coach no-#0001 Chittagong-Dhaka</p>
        </div>
        <div class="col-md-4">
            <p>Passenser Copy</p>
        </div>
    </div>

        <div class="container">
            <div class="row ">
                <div class="col-md-4 bg-light">
                    <div class="col-md-8 mt-5">
                        <ul class="list-unstyled">
                            <li>Name:<span>kamal</span></li>
                            <li>Contact No:<span>01976465865</span></li>
                            <li>Route:<span>Chittagong to cox-bazar</span></li>
                            <li>Issue Counter:<span>dampara,Chittagong</span></li>
                            <li>Issue Date:<span>10/08/24</span></li>
                            <li>Seat QTY:<span>4</span></li>
                            <li>unit price:<span>400</span></li>
                            <li>Total price:<span>1600</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 bg-light">
                    <div class="col-md-8 mt-5">
                        <ul class="list-unstyled">
                            <li>start counter:<span>dampara station</span></li>
                            <li>End counter:<span>kolatoli station</span></li>
                            <li>Route:<span>Chittagong to cox-bazar</span></li>
                            <li>Journey Date:<span>11/08/24</span></li>
                            <li>Seat QTY:<span>4</span></li>
                            <li>unit price:<span>400</span></li>
                            <li>Total price:<span>1600</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 bg-light">
                <?php 
                    $booked=$mysqli->common_select_single('seat_book','*',array('id'=>$_GET['invoice']))['data'];
                    
                    $cols=array(1,2,3,4);
                    $seat=$rows=array();
                    $result=$mysqli->common_select_query("SELECT vehicle_seat_type.*,seat.name,seat_type.name as stype FROM `vehicle_seat_type` 
                                                  JOIN seat on seat.id=vehicle_seat_type.seat_id
                                                  JOIN seat_type on seat_type.id=vehicle_seat_type.seat_type_id
                                                  WHERE vehicle_seat_type.vehicle_id={$booked->vehicle_id} and vehicle_seat_type.deleted_at is null order by seat.name");
                    if($result){
                      if($result['data']){
                        foreach($result['data'] as $rs){
                          $rows[substr($rs->name,0,1)]=substr($rs->name,0,1);
                          $seat[$rs->name]=$rs;
                        }


                        $booked_seat=array();
                        $conbook['seat_book_id']=$booked->id;
                        $booked=$mysqli->common_select('seat_book_details','*',$conbook);
                        if($booked){
                            if($booked['data']){
                              foreach($booked['data'] as $bd){
                                $booked_seat[$bd->seat_id]=$bd->seat_id;
                              }
                            }
                        }
                      }
                    }
                    if(count($seat) > 0){
          ?>
          
                <table style="border:2px solid #ffa900; width:150px; margin-top:30px">
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
                                <td style="padding:0; border:1px solid #aaa">
                                  <?php if(isset($seat["{$r}{$c}"])){ 
                                        if(isset($booked_seat[$seat["{$r}{$c}"]->seat_id])){ ?>
                                          <button title="<?= $seat["{$r}{$c}"]->name ?? '' ?>" type="button" class="btn btn-dark p-0 " value="">
                                            <?= $seat["{$r}{$c}"]->name ?? '' ?>
                                          </button>
                                  <?php }else{ ?>
                                            <button title="<?= $seat["{$r}{$c}"]->name ?? '' ?>" type="button"  class="btn  p-0 vseat" value="">
                                              <?= $seat["{$r}{$c}"]->name ?? '' ?>
                                            </button>
                                  <?php }} ?>
                                </td>
                            <?php } } ?>
                          </tr>
                    <?php } } ?>
                  </tbody>
                  
                </table>
              
          <?php }  ?>

                </div>
            </div> 
        </div>
        <div class="row bg-warning">
        <p><i>fa-fa-phone</i></p>
                    



        </div>
</div>      
</body>
</html>