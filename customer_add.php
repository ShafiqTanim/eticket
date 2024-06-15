<?php include('include/header.php') ; ?>

<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Customer/</span> Add New</h4>

    <!-- Basic Layout -->
    <div class="row">
    <div class="col-xl">
        <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Customer Information</h5>
        </div>
        <div class="card-body">
            <form method="post" action="">
                <div class="mb-3">
                    <label class="form-label" for="fullname">Full Name</label>
                    <input type="text" name="name" class="form-control" id="fullname" placeholder="John Doe" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="phone">Phone No</label>
                    <input type="text" name="contact_no" id="phone" class="form-control" placeholder="658 799 8941" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="0.00" />
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
                            echo "<script>window.location='{$baseurl}customer_list.php'</script>";
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