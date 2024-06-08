<?php $baseurl="http://localhost/eticket/"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="<?= $baseurl ?>asset/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= $baseurl ?>asset/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= $baseurl ?>asset/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?= $baseurl ?>asset/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= $baseurl ?>asset/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>


    <div id="register" class="animate form registration_form">
        <section class="login_content">
        <form method="post">
            <h1>Create Account</h1>
            <div>
            <input type="text" class="form-control" name="username" placeholder="Username" required="" />
            </div>
            <div>
            <input type="email" class="form-control" name="email" placeholder="Email" required="" />
            </div>
            <div>
            <input type="password" class="form-control" name="password" placeholder="Password" required="" />
            </div>
            <div>
            <a class="btn btn-default submit" href="dashboard.php">Submit</a>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
            <p class="change_link">Already a member ?
                <a href="#signin" class="to_register"> Log in </a>
            </p>

            <div class="clearfix"></div>
            <br />

            <div>
                <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 4 template. Privacy and Terms</p>
            </div>
            </div>
        </form>
        </section>
    </div>
      </div>
    </div>
  </body>
</html>
