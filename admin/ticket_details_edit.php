<?php include_once('include/header.php') ?>
<?php include_once('include/sidebar.php') ?>

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Ticket Dtails</h3>
                </div>


            </div>
            <div class="clearfix"></div>

            <?php 
        $olddata=array();
        $con['id']=$_GET['id'];
        $result=$mysqli->common_select_single('ticket_details','*',$con);
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
                                         <label class="col-form-label col-md-3 col-sm-3  label-align" for="ticket_id">Ticket ID</label>
                                        <div class="col-md-6 col-sm-6">
                                            <select class="form-control form-select" required name="ticket_id" id="ticket_id">
                                                <option value="">more</option>
                                                <?php 
                                                    $result=$mysqli->common_select('ticket');
                                                    if($result){
                                                        if($result['data']){
                                                            $i=1;
                                                            foreach($result['data'] as $d){
                                                ?>
                                                    <option value="<?= $d->id ?>"<?= $d->id==$olddata->ticket_id ? "selected" :"" ?>> <?= $d->id ?> </option>
                                                <?php } } } ?>
                                            </select>
                                    </div>
                                </div>
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
                                                    <option value="<?= $d->id ?>"<?= $d->id==$olddata->customer_id ? "selected" :"" ?>> <?= $d->name ?></option>
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
                                                    <option value="<?= $d->id ?>"<?= $d->id==$olddata->schedule_id? "selected" :"" ?>> <?= $d->route_id ?> <?= $d->departure_time?> </option>
                                                <?php } } } ?>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="field item form-grou">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align" for="subject_id">Vehicle Seat Type ID</label>
                                            <div class="col-md-6 col-sm-6">
                                            <select class="form-control form-select" required name="vehicle_seat_type_id" id="vehicle_seat_type_id">
                                                <option value="">Select Subject</option>
                                                <?php 
                                                    $result=$mysqli->common_select('vehicle_seat_type');
                                                    if($result){
                                                        if($result['data']){
                                                            $i=1;
                                                            foreach($result['data'] as $d){
                                                ?>
                                                    <option value="<?= $d->id ?>"<?= $d->id==$olddata->vehicle_seat_type_id ? "selected" :"" ?>> <?= $d->seat_type_id ?> </option>
                                                <?php } } } ?>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Price<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="text" data-validate-length-range="6" data-validate-words="2" name="price" value="<?= $olddata->price ?>" required="required" />
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
                                    $_POST['updated_at']=date('Y-m-d H:i:s');
                                    $_POST['updated_by']=1;
                                    $rs=$mysqli->common_update('ticket_details',$_POST, $con);
                                    if($rs){
                                        if($rs['data']){
                                            echo "<script>window.location='{$baseurl}ticket_details_list.php'</script>";
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