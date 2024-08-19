<?php include('include/header.php') ?>

<?php require_once('include/connection.php'); ?>
<div class="container">
  <div class="row">
    <div class="col-6 offset-3 mb-5 pb-5">

        <div class="animate form login_form">
          <section class="login_content">
            <form method="post">
              <a href=""></a>
              <h1>Register Form</h1>
              <div>
                <input type="text" name="name" class="form-control" placeholder="Full Name" required="" />
              </div>
              <div>
                <input type="text" name="contact_no" class="form-control" placeholder="Contact Number" required="" />
              </div>
              <div>
                <input type="text" name="address" class="form-control" placeholder="Address"/>
              </div>
              <div>
                <input type="text" name="email" class="form-control" placeholder="E-mail" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <button class="btn btn-default submit" type="submit">Submit</button>
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
                  $rs=$mysqli->common_create('customer',$_POST);
                  if($rs['data']){
                    if(isset($_GET['rurl'])){
                      echo "<script>window.location='{$baseurl}login.php?rurl{$_GET['rurl']}'</script>";
                    }else{
                      echo "<script>window.location='{$baseurl}login.php'</script>";
                    }
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

