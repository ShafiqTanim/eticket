<?php include('include/header.php') ?>

<?php require_once('include/connection.php'); ?>
<div class="container">
  <div class="row">
    <div class="col-6 offset-3 mb-5 pb-5">

        <div class="animate form login_form">
          <section class="login_content">
            <form method="post">
              <a href=""></a>
              <h1>Login Form</h1>
              <div>
                <input type="text" name="email" class="form-control" placeholder="E-mail" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <button class="btn btn-default submit" type="submit">Log in</button>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="signup.php" class="to_register"> Create Account </a>
                </p>

              </div>
            </form>
              <?php
                if($_POST){
                    $_POST['password']=sha1($_POST['password']);
                    $rs=$mysqli->common_select_single('customer','*',$_POST);
                    if($rs['data']){
                        $_SESSION['customer_loggedin']="true";
                        $_SESSION['email']=$rs['data']->email;
                        $_SESSION['customer_id']=$rs['data']->id;
                        echo "<script>window.location='{$baseurl}profile.php'</script>";
                    }else{
                        echo "Please check your user name and password again.";
                    }
                  }
              ?>
          </section>
        </div>
    </div>
  </div>
</div>
      

     
  <?php include('include/footer.php') ?>

