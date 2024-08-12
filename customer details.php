<?php require_once('include/header.php'); ?>


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
             
                <h3>Customer Details</h3>
         
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  
                  <div class="x_content">

                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">#</th>
                          <th style="width: 20%">Name</th>
                          <th style="width: 20%">Contact no</th>
                          <th style="width: 20%">Email</th>
                          <th style="width: 20%">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php 
                            $result=$mysqli->common_select('customer');
                            if($result){
                                if($result['data']){
                                    $i=1;
                                    foreach($result['data'] as $data){
                          ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $data-> name ?></td>
                                <td><?= $data-> contact_no ?></td>
                                <td><?= $data-> email ?></td>
                                <td>
                                  <a href="<?= $baseurl ?>customer_edit.php?id=<?= $data ->id ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                  <a onclick="return confirm('Are you sure?')"href="<?= $baseurl ?>customer_delete.php?id=<?= $data ->id ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>View </a>
                                </td>
                                
                            </tr>
                          <?php } } } ?>
                      </tbody>
                    </table>
                    <!-- end project list -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

      