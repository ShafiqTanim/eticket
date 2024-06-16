<?php include('include/header.php') ; ?>
<?php include('include/sidebar.php') ; ?>

<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Vehicle/</span> Add New</h4>

    <!-- Basic Layout -->
    <div class="row">
    <div class="col-xl">
        <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Vehicle Information</h5>
        </div>
        <div class="card-body">
            <form method="post" action="">
                <div class="mb-3">
                    <label class="form-label" for="fullname">Vehicle Name</label>
                    <input type="text" name="name" class="form-control" id="fullname" placeholder="John Doe" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="phone">Registration</label>
                    <input type="text" name="registration_no" id="registration_no" class="form-control" placeholder="658 799 8941" />
                </div>
               
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <?php 
                if($_POST){
                    $_POST['created_at']=date('Y-m-d H:i:s');
                    $_POST['created_by']=1;
                    $rs=$mysqli->common_create('customer',$_POST);
                    if($rs){
                        if($rs['data']){
                            echo "<script>window.location='{$baseurl}vehicle_list.php'</script>";
                        }else{
                            echo $rs['error'];
                        }
                    }
                }
            ?>
        </div>
        </div>
    </div>
    
    </div>
</div>
<!-- / Content -->

<?php include('include/footer.php') ; ?>