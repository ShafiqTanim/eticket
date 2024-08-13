<?php include('include/header.php') ?>



    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        
                        <div class="x_content">
                            <form class="" action="" method="post" novalidate>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Name<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" class='optional' name="name" value="<?= $olddata->name ?>" data-validate-length-range="5,15" type="text" /></div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Contact No<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" data-validate-length-range="6" data-validate-words="2" value="<?= $olddata->contact_no ?>" name="contact_no" required="required" />
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Email<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" data-validate-length-range="6" data-validate-words="2" value="<?= $olddata->email ?>" name="email" required="required" />
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Password<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" data-validate-length-range="6" data-validate-words="2" value="<?= $olddata->password ?>" name="password" required="required" />
                                    </div>
                                </div>
                                <div class="ln_solid">
                                    <div class="form-group">
                                        <div class="col-md-6 offset-md-3">
                                            <button type='submit' class="btn btn-primary">Submit</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <?php 
                                        if($_POST){
                                            $_POST['created_at']=date('Y-m-d H:i:s');
                                            $_POST['created_by']=1;
                                            $rs=$mysqli->common_create('customer',$_POST);
                                            if($rs){
                                                if($rs['data']){
                                                    echo "<script>window.location='{$baseurl}customer_details.php'</script>";
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
    </div>
    <!-- /page content -->