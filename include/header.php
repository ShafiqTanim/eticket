<?php require_once("connection.php"); ?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en"> 
  <head>
    <!-- Site Title-->
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="<?= $baseurl?>asset/images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= $baseurl?>asset/css/bootstrap.css">
    <link rel="stylesheet" href="<?= $baseurl?>asset/css/style.css">
    <link rel="stylesheet" href="<?= $baseurl?>asset/css/fonts.css">
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"> </script>
		<![endif]--> 
  </head>
  <body>
    <!-- Page-->
    <div class="page">
      <a class="section section-banner text-center" href="">
        <img src="<?= $baseurl?>asset/images/eticket-banner.jpg" alt="" width="1600" height="50px">
</a>
      <!-- Page Header -->
      <header class="section page-header">
        <!-- <-- RD Navbar -->
        <div class="rd-navbar-wrap rd-navbar-corporate">
          <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fullwidth" data-xl-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-device-layout="rd-navbar-static" data-md-stick-up-offset="130px" data-lg-stick-up-offset="100px" data-stick-up="true" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true" data-xl-stick-up="true">
            <div class="rd-navbar-collapse-toggle" data-rd-navbar-toggle=".rd-navbar-collapse">
            <div class="rd-navbar-top-panel rd-navbar-collapse novi-background">
              <div class="rd-navbar-top-panel-inner">
                <ul class="list-inline">
                  <li class="box-inline list-inline-item"><span class="icon novi-icon icon-md-smaller icon-secondary mdi mdi-phone"></span>
                    <ul class="list-comma">
                      <li><a href="tel:#">0182344578</a></li>
                      <li><a href="tel:#">0174457890</a></li>
                    </ul>
                  </li>
                  <li class="box-inline list-inline-item"><span class="icon novi-icon icon-md-smaller icon-secondary mdi mdi-map-marker"></span><a href="#">centrol plaza 5th floor,GEC junction,GEC,chittagong</a></li>
                  <li class="box-inline list-inline-item"><span class="icon novi-icon icon-md-smaller icon-secondary mdi mdi-email"></span><a href="mailto:#">eticket@gmail.com</a></li>
                </ul>
                <ul class="list-inline">
                  <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-facebook" href="#"></a></li>
                  <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-twitter" href="#"></a></li>
                  <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-instagram" href="#"></a></li>
                  <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-google-plus" href="#"></a></li>
                  <li class="list-inline-item"><a class="icon novi-icon icon-sm-bigger icon-gray-1 mdi mdi-linkedin" href="#"></a></li>
                </ul>
              </div>
            </div>
           </div>
            <div class="rd-navbar-inner ">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel ">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand">
                  <a class="brand-name" href="<?= $baseurl ?>">
                    <img class="logo-default" src="<?= $baseurl?>asset/images/logo-f.png" alt="" width="100"/>
                    <img class="logo-inverse" src="<?= $baseurl?>asset/images/logo-f.pg" alt="" width="100"/>
                  </a>
                </div>
              </div>
              <div class="rd-navbar-aside-center ">
                <div class="rd-navbar-nav-wrap">
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li class="active"><a href="index.php">Home</a>
                    </li>
                    <li><a href="about-us.html">About Us</a>
                    </li>
                    <li><a href="contacts.html">Contacts</a>
                    </li>
                    <li><a href="typography.html">Typography</a>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- <div class="rd-navbar-aside-right"><a class="button button-sm button-secondary button-nina" href="#">Book a tour now</a></div>
            </div> -->
          </nav>
        </div>
      </header>