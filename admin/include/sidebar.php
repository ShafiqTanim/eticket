            
            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?= $baseurl ?>asset/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?= $_SESSION['username'] ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="dashboard.php">Dashboard</a></li>
                      <!-- <li><a href="index2.html">Dashboard2</a></li>
                      <li><a href="index3.html">Dashboard3</a></li> -->
                    </ul>
                  </li>
                  <li><a><i class="fa fa-cog"></i> Ticket Details <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a>Schedule<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="schedule_add.php">Add New</a></li>
                          <li><a href="schedule_list.php">List</a></li>
                        </ul>
                      </li>
                      <li><a>Vehicle<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="vehicle_add.php">Add New</a></li>
                          <li><a href="vehicle_list.php">List</a></li>
                        </ul>
                      </li>
                      <li><a>Seat<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="seat_add.php">Add New</a></li>
                          <li><a href="seat_list.php">List</a></li>
                        </ul>
                      </li>

                      <li><a>Seat Type<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="seat_type_add.php">Add New</a></li>
                          <li><a href="seat_type_list.php">List</a></li>
                        </ul>
                      </li>

                      <li><a>Vehicle Seat Type<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="vehicle_seat_type_add.php">Add New</a></li>
                          <li><a href="vehicle_seat_type_list.php">List</a></li>
                        </ul>
                      </li>

                      <li><a></i>Counter<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="counter_add.php">Add New</a></li>
                          <li><a href="counter_list.php">List</a></li>
                        </ul>
                      </li>

                      <li><a>Route<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="route_add.php">Add New</a></li>
                          <li><a href="route_list.php">List</a></li>
                        </ul>
                      </li>
                      <li><a>Area<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="area_add.php">Add New</a></li>
                          <li><a href="area_list.php">List</a></li>
                        </ul>
                      </li>

                      <li><a>District<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="district_add.php">Add New</a></li>
                          <li><a href="district_list.php">List</a></li>
                        </ul>
                      </li>

                      <li><a>Division<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="division_add.php">Add New</a></li>
                          <li><a href="division_list.php">List</a></li>
                        </ul>
                      </li>

                    </ul>
                  </li>   

                  <li><a><i class="fa fa-users"></i>Customer <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="customer_add.php">Add New</a></li>
                      <li><a href="customer_list.php">List</a></li>
                    </ul>
                  </li>
                  

                  <li><a><i class="fa fa-list"></i>Ticket<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="ticket_list.php">List</a></li>
                    </ul>
                  </li>

                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->
            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
            <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?= $baseurl ?>asset/images/img.jpg" alt=""><?= $_SESSION['username'] ?>
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Profile</a>
                    <a class="dropdown-item"  href="javascript:;">Help</a>
                    <a class="dropdown-item"  href="<?= $baseurl ?>/logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->