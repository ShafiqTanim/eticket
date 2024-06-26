<?php include_once('include/header.php') ?>
<?php include_once('include/sidebar.php') ?>

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Ticket</h3>
                </div>


            </div>
            <div class="clearfix"></div>

            <?php 
        $olddata=array();
        $con['id']=$_GET['id'];
        $result=$mysqli->common_select_single('ticket','*',$con);
        if($result){
            if($result['data']){
                $olddata=$result['data'];
            }
        }
    ?>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Edit</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Settings 1</a>
                                        <a class="dropdown-item" href="#">Settings 2</a>
                                    </div>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form class="" action="" method="post" novalidate>
                                
                                
                                
                            <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align" for="subject_id">Customer ID</label>
                                        <div class="col-md-6 col-sm-6">
                                        <select class="form-control form-select" required name="customer_id" id="customer_id">
                                            <option value="">Select Subject</option>
                                            <?php 
                                                $result=$mysqli->common_select('customer');
                                                if($result){
                                                    if($result['data']){
                                                        $i=1;
                                                        foreach($result['data'] as $d){
                                            ?>
                                                <option value="<?= $d->id ?>"<?= $d->id==$olddata->customer_id? "selected" :"" ?>> <?= $d->name ?></option>
                                            <?php } } } ?>
                                        </select>
                                    </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align" for="subject_id">Schedule ID</label>
                                        <div class="col-md-6 col-sm-6">
                                        <select class="form-control form-select" required name="schedule_id" id="schedule_id">
                                            <option value="">Select Subject</option>
                                            <?php 
                                                $result=$mysqli->common_select('schedule');
                                                if($result){
                                                    if($result['data']){
                                                        $i=1;
                                                        foreach($result['data'] as $d){
                                            ?>
                                                <option value="<?= $d->id ?>"<?= $d->id==$olddata->schedule_id ? "selected" :"" ?>> <?= $d->route_id ?> <?= $d->departure_time?> </option>
                                            <?php } } } ?>
                                        </select>
                                    </div>
                                    </div>
                                        
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Quantity<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='optional' name="qty" id="qty" data-validate-length-range="5,15" type="text" value="<?= $olddata->qty ?>" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Sub total<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='optional' name="sub_total" id="sub_total" data-validate-length-range="5,15" type="text" value="<?= $olddata->sub_total ?>" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Discount<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='optional' name="discount" id="discount" data-validate-length-range="5,15" type="text" value="<?= $olddata->discount ?>" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Vat<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='optional' name="vat" id="vat" data-validate-length-range="5,15" type="text" value="<?= $olddata->vat ?>"  /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Total<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='optional' name="total" id="total" data-validate-length-range="5,15" type="text" value="<?= $olddata->total ?>"  /></div>
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
                                    $_POST['updated_at']=date('Y-m-d H:i:s');
                                    $_POST['updated_by']=1;
                                    $rs=$mysqli->common_update('ticket',$_POST, $con);
                                    if($rs){
                                        if($rs['data']){
                                            echo "<script>window.location='{$baseurl}ticket_list.php'</script>";
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

    <!-- /page footer -->
    <?php include('include/footer.php') ?>