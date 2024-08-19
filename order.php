
<?php include_once('include/header.php'); ?>
<?php require_once('include/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<?php 
  $seatdata=[];
  $transaction_id=$_GET['txnid'];
  $result=$mysqli->common_select_query("SELECT seat_book.*, schedule.couch_number,schedule.departure_time,
schedule.arrival_time,
(select route.name from route WHERE route.id=schedule.route_id) as route,
(select counter.counter_name from counter WHERE counter.id=schedule.departure_counter) as departure_counter,
(select counter.counter_name from counter WHERE counter.id=schedule.arrival_counter) as arrival_counter,
vehicle.name as vehicle_name, vehicle.registration_no FROM `seat_book`
JOIN schedule on schedule.id=seat_book.schedule_id
JOIN vehicle on vehicle.id=seat_book.vehicle_id WHERE seat_book.transaction_id='$transaction_id'"); 
  if($result){
    if($result['data']){
      $seatdata=$result['data'][0];
    }
  }
  
?>    

  <!-- start project list -->
                    <table class="table table-striped projects">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Customer ID</th>
                                                <th scope="col">Schedule</th>
                                                <th scope="col">Order Date </th>
                                                <th scope="col">Journey Date </th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Total Price</th>
                                                <th scope="col">Action</th>
                                            
                                            </tr>
                                        </thead>
                                   <tbody>
                         
                      <?php 
                        $result=$mysqli->common_select_query("select ticket.*,customer.name as name,schedule.departure_time as time
                        from ticket join customer on ticket.customer_id=customer.id
                        join schedule on ticket.schedule_id=schedule.id");
                        if($result){
                            if($result['data']){
                                $i=1;
                                foreach($result['data'] as $data){
                    ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $data-> name?></td>
                                            <td><?= $data-> time?></td>
                                            <td><?= $data-> discount?></td>
                                            <td><?= $data-> vat?></td>
                                            <td><?= $data-> total?></td>
                                            <td>
                                            <span>
                                                    <a href="<?= $baseurl ?>ticket_edit.php?id=<?= $data ->id ?>" class="mr-4" data-toggle="tooltip"
                                                        data-placement="top" title="Edit"><i
                                                            class="fa fa-pencil color-muted"></i> </a>
                                                    <a onclick="return confirm('Are you sure?')" href="<?= $baseurl ?>ticket_delete.php?id=<?= $data->id ?>" data-toggle="tooltip"
                                                        data-placement="top" title="Close"><i
                                                            class="fa fa-close color-danger"></i></a>
                                                </span>
                                            </td>
                                        </tr>
                                        <?php } } } ?>
                      </tbody>
                    </table>