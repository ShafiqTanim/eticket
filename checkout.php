<?php

session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

# This is a sample page to understand how to connect payment gateway

require_once(__DIR__ . "/sslcmz/lib/SslCommerzNotification.php");

include("include/connection.php");

use SslCommerz\SslCommerzNotification;

# Organize the submitted/inputted data
$post_data = array();
$total_amount=($_SESSION['cart']['total'] + $_SESSION['cart']['other_charge']) - $_SESSION['cart']['discount'];
$post_data['total_amount'] =$total_amount;
$post_data['currency'] = "BDT";
$post_data['tran_id'] = "SSLCZ_TEST_" . uniqid();

# CUSTOMER INFORMATION
$post_data['cus_name'] = $_POST['name'];
$post_data['cus_email'] = $_POST['email'];
$post_data['cus_add1'] = $_POST['address'];
$post_data['cus_add2'] = "Dhaka";
$post_data['cus_city'] = "Dhaka";
$post_data['cus_state'] = "Dhaka";
$post_data['cus_postcode'] = "1000";
$post_data['cus_country'] = "Bangladesh";
$post_data['cus_phone'] = $_POST['phone'];
$post_data['cus_fax'] = $_POST['phone'];

# SHIPMENT INFORMATION
$post_data["shipping_method"] = "NO";
$post_data['ship_name'] = "Tickf0";
$post_data['ship_add1'] = "Chattogram";
$post_data['ship_add2'] = "Chattogram";
$post_data['ship_city'] = "Chattogram";
$post_data['ship_state'] = "Chattogram";
$post_data['ship_postcode'] = "1000";
$post_data['ship_phone'] = "";
$post_data['ship_country'] = "Bangladesh";

$post_data['emi_option'] = "1";
$post_data["product_category"] = "Ticket";
$post_data["product_profile"] = "general";
$post_data["product_name"] = "Ticket";
$post_data["num_of_item"] = $_SESSION['cart']['total_seat'];



# First, save the input data into local database table `orders`
$_POST['vehicle_id']=$_SESSION['cart']['vehicle_id'];
$_POST['schedule_id']=$_SESSION['cart']['schedule_id'];
$_POST['total_amount']=$total_amount;
$_POST['total_seat']=$_SESSION['cart']['total_seat'];
$_POST['other_charge']=$_SESSION['cart']['other_charge'];
$_POST['discount']=$_SESSION['cart']['discount'];
$_POST['transaction_id']=$post_data['tran_id'];
$_POST['currency']=$post_data['currency'];
$_POST['created_at']=date('Y-m-d H:i:s');
$_POST['created_by']=1;
$rs=$mysqli->common_create('seat_book',$_POST);
if($rs){
    if($rs['data']){
        if($_SESSION['cart']['item']){
            foreach($_SESSION['cart']['item'] as $k => $v){
                $purd['vehicle_id']=$_SESSION['cart']['vehicle_id'];
                $purd['schedule_id']=$_SESSION['cart']['schedule_id'];
                $purd['seat_book_id']=$rs['data'];
                $purd['seat_id']=$v['seat_id'];
                $purd['price']=$v['price'];
                $purd['created_at']=date("Y-m-d H:i:s");
                $purd['created_by']=$_SESSION['id'];
                $prs=$mysqli->common_create('seat_book_details',$purd);
            }
        }
        unset($_SESSION['cart']);
        # Call the Payment Gateway Library
        $sslcz = new SslCommerzNotification();
        $msg = $sslcz->makePayment($post_data, 'hosted');
        if (!is_array($msg)) {
            echo $msg;
        }
    }else{
        echo $rs['error'];
    }
}


