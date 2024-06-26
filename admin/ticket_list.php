
<?php include('include/header.php') ?>
<?php include('include/sidebar.php') ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Ticket</h3>
              </div>


            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List</h2>
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

                    <!-- start project list -->
                    <table class="table table-striped projects">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Customer ID</th>
                                                <th scope="col">Schedule ID</th>
                                                <th scope="col">Quanty</th>
                                                <th scope="col">Sub Total</th>
                                                <th scope="col">Discount</th>
                                                <th scope="col">Vat</th>
                                                <th scope="col">Total</th>
                                                <th scope="col">Action</th>
                                            
                                            </tr>
                                        </thead>
                                   <tbody>
                         
                      <?php 
                        $result=$mysqli->common_select_query("select ticket.*,customer.name as name,schedule.departure_time as time
                        from ticket join customer on ticket.customer_id=customer.id
                        join schedule on ticket.schedule_id=schedule.id");
                        if($result){
                            if($result['data']){
                                $i=1;
                                foreach($result['data'] as $data){
                    ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $data-> name?></td>
                                            <td><?= $data-> time?></td>
                                            <td><?= $data-> qty?></td>
                                            <td><?= $data-> sub_total?></td>
                                            <td><?= $data-> discount?></td>
                                            <td><?= $data-> vat?></td>
                                            <td><?= $data-> total?></td>
                                            <td>
                                            <span>
                                                    <a href="<?= $baseurl ?>ticket_edit.php?id=<?= $data ->id ?>" class="mr-4" data-toggle="tooltip"
                                                        data-placement="top" title="Edit"><i
                                                            class="fa fa-pencil color-muted"></i> </a>
                                                    <a onclick="return confirm('Are you sure?')" href="<?= $baseurl ?>ticket_delete.php?id=<?= $data->id ?>" data-toggle="tooltip"
                                                        data-placement="top" title="Close"><i
                                                            class="fa fa-close color-danger"></i></a>
                                                </span>
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

        <!-- footer content -->
        <?php include('include/footer.php') ; ?>