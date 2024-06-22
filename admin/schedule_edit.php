<?php include_once('include/header.php') ?>
<?php include_once('include/sidebar.php') ?>

    <?php 
        $olddata=array();
        $con['id']=$_GET['id'];
        $result=$mysqli->common_select_single('schedule','*',$con);
        if($result){
            if($result['data']){
                $olddata=$result['data'];
            }
        }
    ?>
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Schedule</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>

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
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Couch number<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" class='optional' name="couch_number" data-validate-length-range="5,15" type="text" /></div>
                                        </div>
                                      <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">vehicle<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <select class="form-control" name="vehicle_id" id="" required="vehicle_id">
                                                    <option value="">Choose One</option>
                                                <?php 
                                                    $result=$mysqli->common_select('vehicle');
                                                    if($result){
                                                        if($result['data']){
                                                            foreach($result['data'] as $data){
                                                ?>
                                                    <option value="<?= $data->id ?>"<?= $d->id==$olddata->vehicle_id ? "selected" :"" ?>><?= $data->name ?></option>
                                                <?php } } } ?>
                                                </select>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Route<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="route_id" value="<?= $olddata->route_id ?>" required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Departure Time<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="datetime-local" data-validate-length-range="6" data-validate-words="2" name="departure_time" value="<?= $olddata->departure_time ?>" required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Departure Counter<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <select class="form-control" name="departure_counter"  value="<?= $olddata->departure_counter ?>" required="departure_counter">
                                                    <option value="">Choose One</option>
                                                <?php 
                                                    $result=$mysqli->common_select('counter');
                                                    if($result){
                                                        if($result['data']){
                                                            foreach($result['data'] as $data){
                                                ?>
                                                    <option value="<?= $data->id ?>"<?= $d->id==$olddata->departure_counter ? "selected" :"" ?>><?= $data->departure_counter ?></option>
                                                <?php } } } ?>
                                                </select>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Arrival Time<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="datetime-local" data-validate-length-range="6" data-validate-words="2" name="arrival_time"  value="<?= $olddata->arrival_time ?>" required="required" />
                                            </div>
                                        </div>
                                       <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Arrival Counter<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <select class="form-control" name="counter_name" id="counter_name" required="counter_name">
                                                    <option value="">Choose One</option>
                                                <?php 
                                                    $result=$mysqli->common_select('counter');
                                                    if($result){
                                                        if($result['data']){
                                                            foreach($result['data'] as $data){
                                                ?>
                                                    <option value="<?= $data->id ?>"<?= $d->id==$olddata->counter_name ? "selected" :"" ?>><?= $data->counter_name ?></option>
                                                <?php } } } ?>
                                                </select>
                                            </div>
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
                                    $rs=$mysqli->common_update('schedule',$_POST, $con);
                                    if($rs){
                                        if($rs['data']){
                                            echo "<script>window.location='{$baseurl}schedule_list.php'</script>";
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