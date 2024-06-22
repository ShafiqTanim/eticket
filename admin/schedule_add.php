<?php include_once('include/header.php') ?>
<?php include_once('include/sidebar.php') ?>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Schedule</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Add New</h2>
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
                                                <select class="form-control"required name="vehicle_id" id="">
                                                    <option value="">Choose One</option>
                                                <?php 
                                                    $result=$mysqli->common_select('vehicle');
                                                    if($result){
                                                        if($result['data']){
                                                            foreach($result['data'] as $data){
                                                ?>
                                                    <option value="<?= $data->id ?>"><?= $data->name ?></option>
                                                <?php } } } ?>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Route<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <select class="form-control" required name="route_id" id="route_id" >
                                                    <option value="">Choose One</option>
                                                <?php 
                                                    $result=$mysqli->common_select('route');
                                                    if($result){
                                                        if($result['data']){
                                                            foreach($result['data'] as $data){
                                                ?>
                                                    <option value="<?= $data->id ?>"><?= $data->area_from ?>to<?= $data->area_to ?></option>
                                                <?php } } } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Departure Time<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="datetime-local" data-validate-length-range="6" data-validate-words="2" name="departure_time" required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Departure Counter<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <select class="form-control" required name="departure_counter" id="departure_counter" >
                                                    <option value="">Choose One</option>
                                                <?php 
                                                    $result=$mysqli->common_select('counter');
                                                    if($result){
                                                        if($result['data']){
                                                            foreach($result['data'] as $data){
                                                ?>
                                                    <option value="<?= $data->id ?>"><?= $data->departure_counter ?></option>
                                                <?php } } } ?>
                                                </select>
                                            </div>
                                        </div>
                                      
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Arrival Time<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="datetime-local" data-validate-length-range="6" data-validate-words="2" name="arrival_time" required="required" />
                                            </div>
                                        </div>
                                       <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Arrival Counter<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <select class="form-control" required name="counter_name" id="counter_name" >
                                                    <option value="">Choose One</option>
                                                <?php 
                                                    $result=$mysqli->common_select('counter');
                                                    if($result){
                                                        if($result['data']){
                                                            foreach($result['data'] as $data){
                                                ?>
                                                    <option value="<?= $data->id ?>"><?= $data->counter_name ?></option>
                                                <?php } } } ?>
                                                </select>
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
                                            $rs=$mysqli->common_create('schedule',$_POST);
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