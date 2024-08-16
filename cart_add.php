<?php 
  session_start();
$seat_id=$_GET['seat_id'];
$price=$_GET['price'];
$name=$_GET['name'];
$schedule=$_GET['schedule'];
$vehicle=$_GET['vehicle'];

if(isset($_SESSION['cart']['item'][$seat_id.$schedule])){
  unset($_SESSION['cart']['item'][$seat_id.$schedule]);
}else{
  $_SESSION['cart']['item'][$seat_id.$schedule]['seat_id']=$seat_id;
  $_SESSION['cart']['item'][$seat_id.$schedule]['name']=$name;
  $_SESSION['cart']['item'][$seat_id.$schedule]['price']=$price;
}

cal_total();
echo json_encode($_SESSION['cart']);

  function cal_total(){
    
$schedule=$_GET['schedule'];
$vehicle=$_GET['vehicle'];
    $total_price=$total_qty=0;
    if(isset($_SESSION['cart']['item']) and $_SESSION['cart']['item']){
      foreach($_SESSION['cart']['item'] as $item){
        $total_price+=$item['price'];
      }
    }
    $_SESSION['cart']['total']=$total_price;
    $_SESSION['cart']['discount']=0;
    $_SESSION['cart']['cupon']="";
    $_SESSION['cart']['schedule_id']=$schedule;
    $_SESSION['cart']['vehicle_id']=$vehicle;
    $_SESSION['cart']['other_charge']= count($_SESSION['cart']['item']) * 20;
    $_SESSION['cart']['total_seat']=count($_SESSION['cart']['item']);
  }
?>
