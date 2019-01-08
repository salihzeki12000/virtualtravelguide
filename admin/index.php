<?php include_once('session.php');
$admintype=$_SESSION['admintype'];
$vendortype=$_SESSION['vendor'];
$sesid=$_SESSION['id'];
@$message=$_GET['mes'];
if($message=='updated')
{
  echo "<script>alert('Successfully updated!');</script>";

}
include_once('class/classhotelroom.php');
$room=new Room();

$navhotelid=$room->getHotelId($sesid);
foreach($navhotelid as $key => $hotelvaluenav)
{
  @$hotelid=$hotelvaluenav['hid'];

}

 include('include/inc_adminheader.php');

include_once('class/classdashboard.php');
    $dashboard=new Dashboard();?>

    <div class="wrapper" >

            <?php include_once('include/inc_leftsidebar.php'); ?>

        <div class="main-panel">
          <?php include_once('include/inc_adminnavbar.php'); ?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                      <?php
                      if($_SESSION['admintype']=='1')
                      {
                        ?>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="red">
                                    <i class="material-icons">domain</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Hotels</p>
                                    <h3 class="title">
                                    <?php
                                          $dashboard->hotelCount();
                                          ?>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-danger">visibility</i>
                                        <a href="#">See all the hotels</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                      <?php  }?>

                      <?php
                      if($_SESSION['vendor']=='ecommerce')
                      {
                        ?>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="red">
                                    <i class="material-icons">domain</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Shop Items</p>
                                    <h3 class="title">
                                    <?php
                                          $dashboard->shopItemCount();
                                          ?>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-danger">visibility</i>
                                        <a href="#">See all the Items</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                      <?php  }?>
                      <?php
                      if($_SESSION['vendor']=='ecommerce')
                      {
                        ?>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="red">
                                    <i class="material-icons">domain</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Customer Orders</p>
                                    <h3 class="title">
                                    <?php
                                          $dashboard->customerCount();
                                          ?>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-danger">visibility</i>
                                        <a href="#">See all the Items</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                      <?php  }?>

                          <?php
                        if($_SESSION['vendor']=='hotel' || $_SESSION['admintype']=='1')
                        {
                          ?>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <i class="material-icons">local_hotel</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Rooms</p>
                                    <h3 class="title">
                                    <?php
                                    $dashboard->roomCount($admintype,$vendortype,$hotelid);
                                    ?>
                                  </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-danger">visibility</i> <a href="hotelroom.php?sidebar=hotel">See all Rooms</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                  <?php  }

                   if($_SESSION['admintype']=='1')
                    {?>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="blue">
                                    <i class="material-icons">loyalty</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Packages</p>
                                    <h3 class="title">
                                      <?php

                                    $dashboard->packageCount();

                                     ?>
                                   </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-danger">visibility</i> <a href="#">See all Packages</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                      <?php
                    }
                    elseif($_SESSION['vendor']=='package')
                    {
                      ?>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                          <div class="card card-stats">
                              <div class="card-header" data-background-color="blue">
                                  <i class="material-icons">loyalty</i>
                              </div>
                              <div class="card-content">
                                  <p class="category">Packages</p>
                                  <h3 class="title">
                                    <?php

                                  $dashboard->eachpackageCount($sesid);

                                   ?>
                                 </h3>
                              </div>
                              <div class="card-footer">
                                  <div class="stats">
                                      <i class="material-icons text-danger">visibility</i> <a href="#">See all Packages</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <?php
                    } if($_SESSION['admintype']=='1')
                      {?>
                          <div class="col-lg-3 col-md-6 col-sm-6">
                              <div class="card card-stats">
                                  <div class="card-header" data-background-color="green">
                                      <i class="material-icons">directions_car</i>
                                  </div>
                                  <div class="card-content">
                                      <p class="category">Vehicles</p>
                                      <h3 class="title">
                                        <?php

                                      $dashboard->vehicleCount($admintype);

                                       ?>
                                     </h3>
                                  </div>
                                  <div class="card-footer">
                                      <div class="stats">
                                          <i class="material-icons text-danger">visibility</i> <a href="#">See all Packages</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        <?php
                      }
                      elseif($_SESSION['vendor']=='rental')
                      {
                        ?>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="green">
                                    <i class="material-icons">directions_car</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Vehicles</p>
                                    <h3 class="title">
                                      <?php

                                    $dashboard->eachvehicleCount($sesid);

                                     ?>
                                   </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-danger">visibility</i> <a href="#">See all Vehicles</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                      }
                      if($_SESSION['admintype']=='1')
                      {
                      ?>

                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="red">
                                    <i class="material-icons">where_to_vote</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Things todo</p>
                                    <h3 class="title">
                                      <?php

                                    $dashboard->todoCount();

                                    ?>
                                  </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-danger" >visibility</i><a href="#"> See all things todo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="red">
                                    <i class="material-icons">edit_location</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Locations</p>
                                    <h3 class="title">
                                      <?php

                                    $dashboard->locationCount();

                                    ?>
                                  </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-danger" >visibility</i><a href="#"> View all things Locations</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                          }
                          if($_SESSION['admintype']=='1')
                          {
                         ?>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="default">
                                    <i class="material-icons">assignment_ind</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Admins</p>
                                    <h3 class="title">
                                      <?php

                                    $dashboard->adminCount();

                                    ?>
                                  </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> All Time
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="default">
                                    <i class="material-icons">assignment_ind</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Vendors</p>
                                    <h3 class="title">
                                      <?php

                                    $dashboard->vendorCount();

                                    ?>
                                  </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> All Time
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                      }
                      if($_SESSION['admintype']=='1')
                      {
                         ?>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="default">
                                    <i class="material-icons">how_to_reg</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Customers</p>
                                    <h3 class="title">
                                      <?php

                                    $dashboard->userCount();

                                    ?>
                                  </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> All Time
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php
                  }
                     ?>
                      <?php if(($admintype=='4' && $vendortype=='hotel') || ($admintype=='4' && $vendortype=='package') ||($admintype=='4' && $vendortype=='rental') )
                      // if($vendortype != 'ecommerce')
                      {
                      ?>
                      <div class="col-lg-3 col-md-6 col-sm-6">

                          <div class="card card-stats">
                            <div class="card-header" data-background-color="green">
                                <i class="material-icons">book</i>
                            </div>
                            <div class="card-content">
                                <p class="category">Bookings</p>
                                <h3 class="title">
                                  <?php
                                  if($vendortype=='hotel')
                                  {
                                $dashboard->bookingHotelCount($sesid,$admintype,$vendortype,$hotelid);
                              }
                              elseif($vendortype=='package')
                              {
                                $packageinfovar=$package->getAllPackageInfo();
                                foreach($packageinfovar as $key => $packageinfovalue )
                                    {
                                      $packageid=$packageinfovalue['pid'];
                                    }
                                      $dashboard->bookingPackageCount($sesid,$packageid,$admintype,$vendortype);

                              }
                              elseif($vendortype=='rental')
                              {
                                $vehicleinfovar=$dashboard->getAllVehicleInfo();
                                foreach($vehicleinfovar as $key => $vehicleinfovalue )
                                    {
                                      $vehicleid=$vehicleinfovalue['vid'];
                                    }
                                      $dashboard->bookingvehicleCount($sesid,$vehicleid,$admintype,$vendortype);

                              }
                                ?>
                              </h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">date_range</i> All Time
                                </div>
                            </div>
                        </div>
                      </div>
                      <?php }
                      elseif($admintype=='1') {
                        ?>

                        <!-- IF IT IS A ADMIN -->
                        <div class="col-lg-3 col-md-6 col-sm-6">

                        <div class="card card-stats">
                          <div class="card-header" data-background-color="blue">
                              <i class="material-icons">book</i>
                          </div>
                          <div class="card-content">
                              <p class="category">Total Hotel Bookings</p>
                              <h3 class="title">
                                <?php
                                $dashboard->  bookingHotelCount($sesid,$admintype,$vendortype,$hotelid)
                              ?>
                            </h3>
                          </div>
                          <div class="card-footer">
                              <div class="stats">
                                  <i class="material-icons">date_range</i> All Time
                              </div>
                          </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6">

                     <div class="card card-stats">
                       <div class="card-header" data-background-color="blue">
                           <i class="material-icons">book</i>
                       </div>
                       <div class="card-content">
                           <p class="category">Total Package Bookings</p>
                           <h3 class="title">
                             <?php
                             $packageinfovar=$package->getAllPackageInfo();
                             foreach($packageinfovar as $key => $packageinfovalue )
                                 {
                                   $packageid=$packageinfovalue['pid'];
                                 }
                             $dashboard-> bookingPackageCount($sesid,$packageid,$admintype,$vendortype)

                           ?>
                         </h3>
                       </div>
                       <div class="card-footer">
                           <div class="stats">
                               <i class="material-icons">date_range</i> All Time
                           </div>
                       </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">

                  <div class="card card-stats">
                    <div class="card-header" data-background-color="blue">
                        <i class="material-icons">book</i>
                    </div>
                    <div class="card-content">
                        <p class="category">Total Vehicle Bookings</p>
                        <h3 class="title">
                          <?php
                          $vehicleinfovar=$dashboard->getAllVehicleInfo();
                          foreach($vehicleinfovar as $key => $vehicleinfovalue )
                              {
                                $vehicleid=$vehicleinfovalue['vid'];
                              }
                          $dashboard-> bookingvehicleCount($sesid,$vehicleid,$admintype,$vendortype)

                        ?>
                      </h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">date_range</i> All Time
                        </div>
                    </div>
                  </div>
               </div>
                    <?php

                      }
                       ?>
                    <?php
                    if($_SESSION['admintype']=='1')
                    {?>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header" data-background-color="red">
                                <i class="material-icons">forum</i>
                            </div>
                            <div class="card-content">
                                <p class="category">Blogs</p>
                                <h3 class="title">
                                  <?php

                                $dashboard->blogCount($admintype);

                                ?>
                              </h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">date_range</i> All Time
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                  }
                      ?>

                      </div>
                     <div class="row">
                    <!--    <div class="col-md-4">
                            <div class="card">
                                <div class="card-header card-chart" data-background-color="green">
                                    <div class="ct-chart" id="dailySalesChart"></div>
                                </div>
                                <div class="card-content">
                                    <h4 class="title">Daily Sales</h4>
                                    <p class="category">
                                        <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">access_time</i> updated 4 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header card-chart" data-background-color="orange">
                                    <div class="ct-chart" id="emailsSubscriptionChart"></div>
                                </div>
                                <div class="card-content">
                                    <h4 class="title">Email Subscriptions</h4>
                                    <p class="category">Last Campaign Performance</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">access_time</i> campaign sent 2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header card-chart" data-background-color="red">
                                    <div class="ct-chart" id="completedTasksChart"></div>
                                </div>
                                <div class="card-content">
                                    <h4 class="title">Completed Tasks</h4>
                                    <p class="category">Last Campaign Performance</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">access_time</i> campaign sent 2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <?php
                    if($admintype=='1')
                    {
                     ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-nav-tabs">
                                <div class="card-header" data-background-color="red">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <span class="nav-tabs-title">Most Views:</span>
                                            <ul class="nav nav-tabs" data-tabs="tabs">

                                                <li class="active">
                                                    <a href="#packages" data-toggle="tab">
                                                        <i class="material-icons">loyalty</i> Packages
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#rental" data-toggle="tab">
                                                        <i class="material-icons">motorcycle</i> Vehicles
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#room" data-toggle="tab">
                                                        <i class="material-icons">local_hotel</i> Rooms
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#blog" data-toggle="tab">
                                                        <i class="material-icons">forum</i> Blog
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#todo" data-toggle="tab">
                                                        <i class="material-icons">place</i> Things Todo
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="tab-content">
                                        <div class="tab-pane " id="room">
                                          <table class="table table-hover">
                                              <thead class="text-warning">
                                                  <th>Room id</th>
                                                  <th>Name</th>
                                                  <th>Hotel Id</th>
                                                  <th>Views</th>
                                              </thead>
                                              <tbody>
                                                <?php
                                                  $mostviewedroomvar=$dashboard->mostviewedroom();
                                                  foreach($mostviewedroomvar as $key => $mvroom)
                                                  {
                                                 ?>
                                                  <tr>
                                                      <td><?php echo $mvroom['rid']; ?></td>
                                                      <td><?php echo $mvroom['rtitle']; ?></td>
                                                      <td><?php echo $mvroom['hid']; ?></td>
                                                      <td><?php echo $mvroom['rcounter']; ?></td>

                                                  </tr>
                                                <?php } ?>
                                                </tbody>
                                          </table>
                                        </div>
                                        <div class="tab-pane active" id="packages">
                                          <table class="table table-hover">
                                              <thead class="text-warning">
                                                  <th>Package id</th>
                                                  <th>Package Name</th>
                                                  <th>Provider Id</th>
                                                  <th>Views</th>
                                              </thead>
                                              <tbody>
                                                <?php
                                                  $mostviewedpackagevar=$dashboard->mostviewedpackage();
                                                  foreach($mostviewedpackagevar as $key => $mvpackage)
                                                  {
                                                 ?>
                                                  <tr>
                                                      <td><?php echo $mvpackage['pid']; ?></td>
                                                      <td><?php echo $mvpackage['pname']; ?></td>
                                                      <td><?php echo $mvpackage['id']; ?></td>
                                                      <td><?php echo $mvpackage['pcounter']; ?></td>

                                                  </tr>
                                                <?php } ?>
                                                </tbody>
                                          </table>
                                        </div>
                                        <div class="tab-pane" id="blog">
                                          <table class="table table-hover">
                                              <thead class="text-warning">
                                                  <th>Blog id</th>
                                                  <th>Title</th>
                                                  <th>Customer Id</th>
                                                  <th>Added On</th>
                                                  <th>Views</th>
                                              </thead>
                                              <tbody>
                                                <?php
                                                  $mostviewedblogvar=$dashboard->mostviewedblog();
                                                  foreach($mostviewedblogvar as $key => $mvblog)
                                                  {
                                                 ?>
                                                  <tr>
                                                      <td><?php echo $mvblog['bid']; ?></td>
                                                      <td><?php echo $mvblog['btitle']; ?></td>
                                                      <td><?php echo $mvblog['cid']; ?></td>
                                                      <td><?php echo $mvblog['bdate']; ?></td>
                                                      <td><?php echo $mvblog['bcounter']; ?></td>

                                                  </tr>
                                                <?php } ?>
                                                </tbody>
                                          </table>
                                        </div>
                                        <div class="tab-pane" id="rental">
                                          <table class="table table-hover">
                                              <thead class="text-warning">
                                                  <th>Vehicle id</th>
                                                  <th>Title</th>
                                                  <th>Provider Id</th>

                                                  <th>Views</th>
                                              </thead>
                                              <tbody>
                                                <?php
                                                  $mostviewedrentalvar=$dashboard->mostviewedrental();
                                                  foreach($mostviewedrentalvar as $key => $mvrental)
                                                  {
                                                 ?>
                                                  <tr>
                                                      <td><?php echo $mvrental['vid']; ?></td>
                                                      <td><?php echo $mvrental['vtitle']; ?></td>
                                                      <td><?php echo $mvrental['id']; ?></td>

                                                      <td><?php echo $mvrental['vcounter']; ?></td>

                                                  </tr>
                                                <?php } ?>
                                                </tbody>
                                          </table>
                                        </div>
                                        <div class="tab-pane" id="todo">
                                          <table class="table table-hover">
                                              <thead class="text-warning">
                                                  <th>Id</th>
                                                  <th>Todo</th>
                                                  <th>Location</th>
                                                  <th>Views</th>
                                              </thead>
                                              <tbody>
                                                <?php
                                                  $mostviewedtodovar=$dashboard->mostviewedtodo();
                                                  foreach($mostviewedtodovar as $key => $mvtodo)
                                                  {
                                                 ?>
                                                  <tr>
                                                      <td><?php echo $mvtodo['tid']; ?></td>
                                                      <td><?php echo $mvtodo['ttitle']; ?></td>
                                                      <td><?php echo $mvtodo['tlocation']; ?></td>
                                                        <td><?php echo $mvtodo['tcounter']; ?></td>
                                                  </tr>
                                                <?php } ?>
                                                </tbody>
                                          </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                      }
                         ?>
                        <?php
                        if($admintype=='1')
                        {
                         ?>
                        <!-- <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="red">
                                    <h4 class="title">Most Viewed Blog</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                            <th>Blog id</th>
                                            <th>Title</th>
                                            <th>Customer Id</th>
                                            <th>Added On</th>
                                            <th>Views</th>
                                        </thead>
                                        <tbody>
                                          <?php
                                            $mostviewedblogvar=$dashboard->mostviewedblog();
                                            foreach($mostviewedblogvar as $key => $mvblog)
                                            {
                                           ?>
                                            <tr>
                                                <td><?php echo $mvblog['bid']; ?></td>
                                                <td><?php echo $mvblog['btitle']; ?></td>
                                                <td><?php echo $mvblog['cid']; ?></td>
                                                <td><?php echo $mvblog['bdate']; ?></td>
                                                <td><?php echo $mvblog['bcounter']; ?></td>

                                            </tr>
                                          <?php } ?>
                                          </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="red">
                                    <h4 class="title">Most Viewed Things to do</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                            <th>Id</th>
                                            <th>Todo</th>
                                            <th>Location</th>
                                            <th>Views</th>
                                        </thead>
                                        <tbody>
                                          <?php
                                            $mostviewedtodovar=$dashboard->mostviewedtodo();
                                            foreach($mostviewedtodovar as $key => $mvtodo)
                                            {
                                           ?>
                                            <tr>
                                                <td><?php echo $mvtodo['tid']; ?></td>
                                                <td><?php echo $mvtodo['ttitle']; ?></td>
                                                <td><?php echo $mvtodo['tlocation']; ?></td>
                                                  <td><?php echo $mvtodo['tcounter']; ?></td>
                                            </tr>
                                          <?php } ?>
                                          </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> -->
                      <?php }
                      elseif($admintype=='4' && $vendortype=='hotel')
                      {
                      ?>

                      <div class="col-lg-6 col-md-12">
                          <div class="card">
                              <div class="card-header" data-background-color="orange">
                                  <h4 class="title">Most Viewed Rooms</h4>
                              </div>
                              <div class="card-content table-responsive">
                                  <table class="table table-hover">
                                      <thead class="text-warning">
                                          <th>Id</th>
                                          <th>Room</th>
                                          <th>Cost</th>
                                          <th>Views</th>
                                      </thead>
                                      <tbody>
                                        <?php
                                          $mostviewedhotelroomvar=$dashboard->mostviewedroomindi($sesid);
                                          foreach($mostviewedhotelroomvar as $key => $mvhotelroom)
                                          {
                                         ?>
                                          <tr>
                                              <td><?php echo $mvhotelroom['rid']; ?></td>
                                              <td><?php echo $mvhotelroom['rtitle']; ?></td>
                                              <td><?php echo $mvhotelroom['rhotelcost']; ?></td>
                                                <td><?php echo $mvhotelroom['rcounter']; ?></td>
                                          </tr>
                                        <?php } ?>
                                        </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6 col-md-12">
                          <div class="card">
                              <div class="card-header" data-background-color="green">
                                  <h4 class="title">Recent Bookings</h4>
                              </div>
                              <div class="card-content table-responsive">
                                  <table class="table table-hover">
                                      <thead class="text-warning">
                                          <th>Booking Id</th>
                                          <th>Room Id</th>
                                          <th>Customer Id</th>
                                          <th>Booked date</th>
                                      </thead>
                                      <tbody>
                                        <?php
                                          $rchbookvar=$dashboard->recenthotelbooking($sesid);
                                          foreach($rchbookvar as $key => $recenthotel)
                                          {
                                         ?>
                                          <tr>
                                              <td><?php echo $recenthotel['bid']; ?></td>
                                              <td><?php echo $recenthotel['rid']; ?></td>
                                              <td><?php echo $recenthotel['cid']; ?></td>
                                                <td><?php echo $recenthotel['hbook_date']; ?></td>
                                          </tr>
                                        <?php } ?>
                                        </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>

                    <?php }
                    elseif($admintype=='4' && $vendortype=='package')
                    {
                    ?>

                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-header" data-background-color="blue">
                                <h4 class="title">Most Viewed Packages</h4>
                            </div>
                            <div class="card-content table-responsive">
                                <table class="table table-hover">
                                    <thead class="text-warning">
                                        <th>Id</th>
                                        <th>Package</th>
                                        <th>Location</th>
                                        <th>Views</th>
                                    </thead>
                                    <tbody>
                                      <?php
                                        $mostviewedpackagevar=$dashboard->mostviewedpackageindi($sesid);
                                        foreach($mostviewedpackagevar as $key => $mvpackage)
                                        {
                                       ?>
                                        <tr>
                                            <td><?php echo $mvpackage['pid']; ?></td>
                                            <td><?php echo $mvpackage['pname']; ?></td>
                                            <td><?php echo $mvpackage['plocation']; ?></td>
                                              <td><?php echo $mvpackage['pcounter']; ?></td>
                                        </tr>
                                      <?php } ?>
                                      </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-header" data-background-color="green">
                                <h4 class="title">Recent Bookings</h4>
                            </div>
                            <div class="card-content table-responsive">
                                <table class="table table-hover">
                                    <thead class="text-warning">
                                        <th>Booking Id</th>
                                        <th>Package Id</th>
                                        <th>Customer Id</th>
                                        <th>Booked date</th>
                                    </thead>
                                    <tbody>
                                      <?php
                                        $rcbookvar=$dashboard->recentpackagebooking($sesid);
                                        foreach($rcbookvar as $key => $recentpackage)
                                        {
                                       ?>
                                        <tr>
                                            <td><?php echo $recentpackage['pbid']; ?></td>
                                            <td><?php echo $recentpackage['pid']; ?></td>
                                            <td><?php echo $recentpackage['cid']; ?></td>
                                              <td><?php echo $recentpackage['booked_date']; ?></td>
                                        </tr>
                                      <?php } ?>
                                      </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                  <?php }
                  elseif($admintype=='4' && $vendortype=='package')
                  {
                  ?>

                  <div class="col-lg-6 col-md-12">
                      <div class="card">
                          <div class="card-header" data-background-color="blue">
                              <h4 class="title">Most Viewed Packages</h4>
                          </div>
                          <div class="card-content table-responsive">
                              <table class="table table-hover">
                                  <thead class="text-warning">
                                      <th>Id</th>
                                      <th>Package</th>
                                      <th>Location</th>
                                      <th>Views</th>
                                  </thead>
                                  <tbody>
                                    <?php
                                      $mostviewedpackagevar=$dashboard->mostviewedpackage($sesid);
                                      foreach($mostviewedpackagevar as $key => $mvpackage)
                                      {
                                     ?>
                                      <tr>
                                          <td><?php echo $mvpackage['pid']; ?></td>
                                          <td><?php echo $mvpackage['pname']; ?></td>
                                          <td><?php echo $mvpackage['plocation']; ?></td>
                                            <td><?php echo $mvpackage['pcounter']; ?></td>
                                      </tr>
                                    <?php } ?>
                                    </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                      <div class="card">
                          <div class="card-header" data-background-color="green">
                              <h4 class="title">Recent Bookings</h4>
                          </div>
                          <div class="card-content table-responsive">
                              <table class="table table-hover">
                                  <thead class="text-warning">
                                      <th>Booking Id</th>
                                      <th>Package</th>
                                      <th>Customer</th>
                                      <th>Booked date</th>
                                  </thead>
                                  <tbody>
                                    <?php
                                      $rcbookvar=$dashboard->recentpackagebooking($sesid);
                                      foreach($rcbookvar as $key => $recentpackage)
                                      {
                                     ?>
                                      <tr>
                                          <td><?php echo $recentpackage['pbid']; ?></td>
                                          <td><?php echo $recentpackage['pid']; ?></td>
                                          <td><?php echo $recentpackage['cid']; ?></td>
                                            <td><?php echo $recentpackage['booked_date']; ?></td>
                                      </tr>
                                    <?php } ?>
                                    </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
                <?php }
                elseif($admintype=='4' && $vendortype=='rental')
                {
                ?>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="blue">
                            <h4 class="title">Most Viewed Vehicles</h4>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table table-hover">
                                <thead class="text-warning">
                                    <th>Id</th>
                                    <th>Vehicles</th>
                                    <th>Type</th>
                                    <th>Views</th>
                                </thead>
                                <tbody>
                                  <?php
                                    $mostviewedvehiclevar=$dashboard->mostviewedvehicle($sesid);
                                    foreach($mostviewedvehiclevar as $key => $mvvehicle)
                                    {
                                   ?>
                                    <tr>
                                        <td><?php echo $mvvehicle['vid']; ?></td>
                                        <td><?php echo $mvvehicle['vtitle']; ?></td>
                                        <td><?php echo $mvvehicle['vtype']; ?></td>
                                          <td><?php echo $mvvehicle['vcounter']; ?></td>
                                    </tr>
                                  <?php } ?>
                                  </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">

                    <div class="card">
                        <div class="card-header" data-background-color="green">
                            <h4 class="title">Recent Bookings</h4>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table table-hover">
                                <thead class="text-warning">
                                    <th>Booking Id</th>
                                    <th>Vehicles</th>
                                    <th>Customer</th>
                                    <th>Booked date</th>
                                </thead>
                                <tbody>
                                  <?php
                                    $vehiclebookvar=$dashboard->recentvehiclebooking($sesid);
                                    foreach($vehiclebookvar as $key => $recentvehicle)
                                    {
                                   ?>
                                    <tr>
                                        <td><?php echo $recentvehicle['vbid']; ?></td>
                                        <td><?php echo $recentvehicle['vid']; ?></td>
                                        <td><?php echo $recentvehicle['cid']; ?></td>
                                          <td><?php echo $recentvehicle['vbbook_date']; ?></td>
                                    </tr>
                                  <?php } ?>
                                  </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php }
                 ?>

                    </div>
                </div>
            </div>

        </div>
    </div>
<?php include('include/inc_adminfooterscripts.php'); ?>
