<?php require_once('include/connection.php'); ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>invoice</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="css/invoice.css">
</head>
<body>
<?php 
    $invdata=array();
    $con['id']=$_GET['invoice'];
    $result=$mysqli->common_select_single('orders','*',$con);
    if($result){
        if($result['data']){
            $invdata=$result['data'];
        }
    }
?>
<!-- Invoice 2 start -->
<div class="invoice-2 invoice-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="invoice-inner clearfix">
                    <div class="invoice-info clearfix" id="invoice_wrapper">
                        <div class="invoice-headar">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="invoice-logo">
                                        <!-- logo started -->
                                        <div class="logo">
                                            <h1 style="color:white">TICKET FO!</h1>
                                            <a href=""></a>
                                        </div>
                                        <!-- logo ended --> 
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="invoice-id">
                                        <div class="info">
                                            <h1 class="inv-header-1">Invoice</h1>
                                            <p class="mb-1">Invoice Number: <span>#<?= str_pad($invdata->id,7,"0",STR_PAD_LEFT) ?></span></p>
                                            <p class="mb-0">Invoice Date: <span><?= date('d M Y',strtotime($invdata->created_at)) ?></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-top">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="invoice-number mb-30">
                                        <h4 class="inv-title-1">Invoice To</h4>
                                        <h2 class="name"><?= $invdata->first_name ?> <?= $invdata->last_name ?></h2>
                                        <span>Phone: <?= $invdata->phone ?></span><br/>
                                        <span>Email: <?= $invdata->email ?></span><br/>
                                        <span>Address: <?= $invdata->address ?></span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="invoice-number mb-30">
                                        <div class="invoice-number-inner">
                                            <h4 class="inv-title-1">Invoice From</h4>
                                            <h2 class="name">TICKET FO!</h2>
                                            <p class="invo-addr-1">
                                                Ticket fo BD  <br/>
                                                ticketfo.com <br/>
                                                Chittagong, Bangladesh <br/>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-center">
                            <div class="table-responsive">
                                <table class="table mb-0 table-striped invoice-table">
                                    <thead class="bg-active">
                                    <tr class="tr">
                                        <th>No.</th>
                                        <th class="pl0 text-start">Item Description</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Quantity</th>
                                        <th class="text-end">Amount</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $cartdata=json_decode(base64_decode($invdata->cart_data));
                                            
                                            $i=0;
                                            foreach($cartdata->item as $item){
                                        ?>
                                            <tr class="tr">
                                                <td>
                                                    <div class="item-desc-1">
                                                        <span><?= str_pad(++$i,2,"0",STR_PAD_LEFT) ?></span>
                                                    </div>
                                                </td>
                                                <td class="pl0"><?= $item->product_name ?></td>
                                                <td class="text-center">BDT <?= $item->price ?></td>
                                                <td class="text-center"><?= $item->qty ?></td>
                                                <td class="text-end">BDT <?= $item->price * $item->qty ?></td>
                                            </tr>
                                        <?php } ?>
                                    
                                    <tr class="tr2">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center">SubTotal</td>
                                        <td class="text-end">BDT <?= $cartdata->total ?></td>
                                    </tr>
                                    <tr class="tr2">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center">Discount</td>
                                        <td class="text-end">BDT <?= $cartdata->discount ?></td>
                                    </tr>
                                    <tr class="tr2">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center f-w-600 active-color">Grand Total</td>
                                        <td class="f-w-600 text-end active-color">BDT <?= $cartdata->total - $cartdata->discount ?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <div class="invoice-btn-section clearfix d-print-none">
                        <a href="javascript:window.print()" class="btn btn-lg btn-print">
                            <i class="fa fa-print"></i> Print Invoice
                        </a>
                        <a id="invoice_download_btn" class="btn btn-lg btn-download btn-theme">
                            <i class="fa fa-download"></i> Download Invoice
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Invoice 2 end -->

</body>
</html>
