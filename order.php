
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
  $result=$mysqli->common_select_query("SELECT ticket.*,schedule.departure_time as journey_date,seat_book.total_amount
(select seat_book.name from seat_book WHERE seat_book.id=ticket.customer_id) as customer,
(select seat_book.schedule_id from seat_book WHERE seat_book.id=ticket.schedule_id) as schedule,
(select seat_book.created_at from seat_book WHERE seat_book.id=ticket.order_date) as order_date,
(select seat_book.status from seat_book WHERE seat_book.id=ticket.status) as status,
(select seat_book.total_amount from seat_book WHERE seat_book.id=ticket.total_price) as total_price
FROM `ticket`
JOIN schedule on schedule.id=ticket.schedule_id"); 
  if($result){
    if($result['data']){
      $data=$result['data'][0];
    }
  }
  
?>
                                          
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= date('d-m-Y h:iA',strtotime( $data-> journey_date)) ?></td>
                                            <td><?= $data-> customer?></td>
                                            <td><?= $data-> schedule?></td>
                                            <td><?= $data-> sub_total?></td>
                                            <td><?= date('d-m-Y h:iA',strtotime($data-> order_date)) ?></td>
                                            <td><?= $data-> status?></td>
                                            <td><?= $data-> total_price?></td>
                                            <td>
                                            <button class="btn-warning">View</button>
                                            <button class="btn-warning">Cencel</button>
                                                    
                                            </td>
                                        </tr>
                                        
                      </tbody>
                    </table>