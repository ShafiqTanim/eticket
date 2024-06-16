<?php include('include/header.php') ; ?>
<?php include('include/sidebar.php') ; ?>

<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Customer/</span> Update</h4>
    <?php 
        $olddata=array();
        $con['id']=$_GET['id'];
        $result=$mysqli->common_select_single('vehicle','*',$con);
        if($result){
            if($result['data']){
                $olddata=$result['data'];
            }
        }
    ?>
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
                    <input type="text" name="name" class="form-control" id="fullname" value="<?= $olddata->name ?>" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="phone">Registration</label>
                    <input type="text" name="contact_no" id="phone" class="form-control phone-mask" value="<?= $olddata->contact ?>" />
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <?php 
                if($_POST){
                    $_POST['udated_at']=date('Y-m-d H:i:s');
                    $_POST['updated_by']=1;
                    $rs=$mysqli->common_update('customer',$_POST,$con);
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