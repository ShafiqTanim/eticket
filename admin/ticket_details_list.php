
<?php include('include/header.php') ?>
<?php include('include/sidebar.php') ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Ticket Details</h3>
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
                                                <th scope="col">Ticket ID</th>
                                                <th scope="col">Customer ID</th>
                                                <th scope="col">Schedule ID</th>
                                                <th scope="col">Vehicle_seat_type_id</th>
                                                <th scope="col">price</th>
                                                <th scope="col">Action</th>
                                            
                                            </tr>
                                        </thead>
                                      <tbody>
                         
                                  <?php 
                                    $result=$mysqli->common_select_query("select ticket_details.*,ticket.id as ticket ,customer.name as name,schedule.departure_time as time ,vehicle_seat_type.seat_type_id as type ,from ticket_details 
                                    join ticket on ticket_details.ticket_id=ticket.id
                                    join customer on ticket_details.customer_id=name.id
                                    join schedule on ticket_details.schedule_id=time.id
                                    join vehicle_seat_type on ticket_details.vehicle_seat_type_id=type.id");
                                    if($result){
                                        if($result['data']){
                                            $i=1;
                                            foreach($result['data'] as $data){
                                ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $data-> ticket ?></td>
                                            <td><?= $data-> name ?></td>
                                            <td><?= $data-> time?></td>
                                            <td><?= $data-> type?></td>
                                            <td><?= $data-> price?></td>
                                            <td>
                                            <span>
                                                    <a href="<?= $baseurl ?>ticket_details_edit.php?id=<?= $data ->id ?>" class="mr-4" data-toggle="tooltip"
                                                        data-placement="top" title="Edit"><i
                                                            class="fa fa-pencil color-muted"></i> </a>
                                                    <a onclick="return confirm('Are you sure?')" href="<?= $baseurl ?>ticket_details_delete.php?id=<?= $data ->id ?>" data-toggle="tooltip"
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