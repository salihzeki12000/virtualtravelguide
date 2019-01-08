<?php
include_once('fsession.php');
$custid=$_SESSION['cus_id'];
include_once('class/fclassbooking.php');
$fbooking=new fBooking();
if(isset($_POST["action"]))
{
if($_POST["action"] == "cancelhotel")
{

  extract($_POST);
    $fbooking->cancelhotelbooking($bid);

}
if($_POST["action"] == "cancelpackage")
{

  extract($_POST);
    $fbooking->cancelpackagebooking($pbid);

}
if($_POST["action"] == "cancelvehicle")
{

  extract($_POST);
    $fbooking->cancelvehiclebooking($vbid);

}
}
include('include/inc_header-home.php'); ?>

<div class="bg-primary bookingcart">
  <?php include('include/inc_navigation.php');?>
</div>
<div class="container-fluid" style="background:#F6F5F5;padding:100px 0px 60px 0px;">

  <div class="row ">
    <div class=" col-md-12">
      <div class="row justify-content-md-center">
      <Div class="col-md-9">

  <div class="bd-example bd-example-tabs card" style="padding:20px;">
    <nav class="nav nav-tabs" id="nav-tab" role="tablist">
      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="home" aria-expanded="true">Current/Active Bookings</a>
      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="profile" aria-expanded="false">Past Booking</a>
        <a class="nav-item nav-link" id="nav-purchase-tab" data-toggle="tab" href="#nav-purchase" role="tab" aria-controls="purchase" aria-expanded="false">Purchases</a>

    </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" aria-expanded="true">
        <!-- <h5 class="ml-3">Current/Active Bookings</h5> -->
        <?php
        $fbookingvar=$fbooking->customerbookeddetail($custid);
        foreach($fbookingvar as $key => $fbookvalue)
        {
          $roomid=$fbookvalue['rid'];
          $hotelid=$fbookvalue['hid'];
          // echo $roomid;
          // echo $hotelid;
          $roomvar=$fbooking->confirmbooking_roomdetail($roomid);
          $hotelvar=$fbooking->confirmbooking_hoteldetail($hotelid);
          foreach ($roomvar as $key => $froomvalue) {
            foreach ($hotelvar as $key => $fhotelvalue) {
              ?>
              <div class="row justify-content-md-center">

                <div class="card col-md-11  mt-3" >
                  <div class="box beta">
                  <div class="ribbon"><span style="background:green;">Hotel</span></div>
                  </div>
                  <div class="row" style="padding:12px;">
                    <div class="card col-md-5 float-left pad-">
                      <div class="row justify-content-md-center pd20 ">
                        <span style="text-transform:capitalize;" > <span style="font-size:20px;text-transform:uppercase;"> <?php echo $fhotelvalue['company_name']; ?></span> (Booking ID: <?php echo $fbookvalue['bid']; ?>)<br>
                        <?php echo $fhotelvalue['address']; ?>
                        <br> <span class="cgreen" style="font-size:20px"><?php echo $froomvalue['rtitle']; ?> Room </span></span>

                      </div>
                    </div>
                    <div class=" card col-md-3 float-left">
                      <div class="row justify-content-md-center pd20">
                        Check-In Date:<span class="cgreen"> <?php echo $fbookvalue['checkin']; ?></span>
                        Check-Out Date: <span class="cred"><?php echo $fbookvalue['checkout']; ?></span>
                        Booked Date: <span class="cdefault"><?php echo $fbookvalue['hbook_date']; ?></span>
                      </div>
                    </div>
                    <div class=" card col-md-2 float-left">
                      <div class="row justify-content-md-center pd20">
                        Total Amount:<br> <Span class="cred">Rs.<?php echo $fbookvalue['b_h_cost']; ?></span>
                      </div>
                    </div>
                    <div class=" card col-md-2 float-left pd20">
                    <?php
                      $bookstatus=$fbookvalue['b_h_status'];
                      if($bookstatus=='0')
                      {
                        echo "  <kbd class='mb-2 red' style='font-size:12px;text-align:center;'>Customer Cancelled</kbd>";
                      }
                      elseif($bookstatus=='1')
                      {
                        echo "<kbd class='mb-2 btn-success' style='font-size:12px;text-align:center;'>Transaction Complete</kbd>";
                      }
                      elseif($bookstatus=='2')
                      {
                        echo "<kbd class='mb-2 btn-warning' style='font-size:12px;text-align:center;'>Booking Pending</kbd>";
                      }
                      elseif($bookstatus=='3')
                      {
                        echo "<kbd class='mb-2 btn-info' style='font-size:12px;text-align:center;'>Booking has been confirmed</kbd>";
                      }
                      elseif($bookstatus=='4')
                      {
                        echo "<kbd class='mb-2 btn-warning' style='font-size:12px;text-align:center;'>Vendor has Cancelled</kbd>";
                      }
                      else {
                        echo "<kbd>Booking Status Unknown</kbd>";
                      }
                       ?>
                      <form action="" method="POST">
                        <input type="hidden" name="bid" value="<?php echo $fbookvalue['bid'];?>">
                        <input type="hidden" name="action" value="cancelhotel">

                      <input type="submit" class="btn btn-danger " value="Cancel Booking">
                    </form>
                    </div>
                  </div>
                </div></div>
              <?php }
            }
          }?>


          <?php
          $fpackagebookvar=$fbooking->packagebookeddetail($custid);
          foreach($fpackagebookvar as $key => $fpackagebookvalue)
          {
            $packageid=$fpackagebookvalue['pid'];
            $packagevar=$fbooking->confirmbooking_packagedetail($packageid);
            foreach ($packagevar as $key => $fpackagevalue) {
                ?>
                <div class="row justify-content-md-center">

                  <div class="card col-md-11  mt-3" >
                    <div class="box beta ">
                    <div class="ribbon"><span style="background:#007BFF;font-size:13px;">Package</span></div>
                    </div>
                    <div class="row " style="padding:12px;">
                      <div class="card col-md-5 float-left pad-">
                        <div class="row justify-content-md-center pd20 ">
                          <span style="text-transform:capitalize;" > <span style="font-size:20px;text-transform:uppercase;"> <?php echo $fpackagevalue['pname']; ?></span> (Booking ID: <?php echo $fpackagebookvalue['pbid']; ?>)<br>
                          <?php echo $fpackagevalue['paddress']; ?>
                          <br> <span class="cgreen" style="font-size:20px">
                            <?php
                            $vendorid=$fpackagevalue['id'];
                           $pacvendorval=$fbooking->confirmbooking_vendordetail($vendorid);
                           foreach($pacvendorval as $key => $fpacvendorval)
                           {
                             echo $fpacvendorval['company_name'];
                           }


                             ?>

                           </span></span>

                        </div>
                      </div>
                      <div class=" card col-md-3 float-left">
                        <div class="row justify-content-md-center pd20">
                          Tour Start Date: <span class="cgreen"><?php echo $fpackagebookvalue['startdate']; ?></span><br>
                          Booked Date: <span class="cdefault"> <?php echo $fpackagebookvalue['booked_date']; ?></span>
                        </div>
                      </div>
                      <div class=" card col-md-2 float-left">
                        <div class="row justify-content-md-center pd20">
                          Total Amount:<br> <Span class="cred">Rs.<?php echo $fpackagebookvalue['pcost']; ?></span>
                        </div>
                      </div>
                      <div class=" card col-md-2 float-left pd20">
                        <?php
                          $pbookstatus=$fpackagebookvalue['status'];
                          if($pbookstatus=='0')
                          {
                            echo "  <kbd class='mb-2 red' style='font-size:12px;text-align:center;'>Customer Cancelled</kbd>";
                          }
                          elseif($pbookstatus=='1')
                          {
                            echo "<kbd class='mb-2 btn-success' style='font-size:12px;text-align:center;'>Transaction Complete</kbd>";
                          }
                          elseif($pbookstatus=='2')
                          {
                            echo "<kbd class='mb-2 btn-warning' style='font-size:12px;text-align:center;'>Booking Pending</kbd>";
                          }
                          elseif($pbookstatus=='3')
                          {
                            echo "<kbd class='mb-2 btn-info' style='font-size:12px;text-align:center;'>Booking has been confirmed</kbd>";
                          }
                          elseif($pbookstatus=='4')
                          {
                            echo "<kbd class='mb-2 btn-warning' style='font-size:12px;text-align:center;'>Vendor has Cancelled</kbd>";
                          }
                          else {
                            echo "<kbd>Booking Status Unknown</kbd>";
                          }
                           ?>

                           <form action="" method="POST">
                             <input type="hidden" name="pbid" value="<?php echo $fpackagebookvalue['pbid'];?>">
                             <input type="hidden" name="action" value="cancelpackage">

                           <input type="submit" class="btn btn-danger " value="Cancel Booking">
                         </form>
                      </div>
                    </div>
                  </div></div>
                <?php }

            }?>
            <?php
            $fvehiclebookvar=$fbooking->vehiclebookeddetail($custid);
            foreach($fvehiclebookvar as $key => $fvehiclebookvalue)
            {
              $vehicleid=$fvehiclebookvalue['vid'];
              $vehiclevar=$fbooking->confirmbooking_vehicledetail($vehicleid);
              foreach ($vehiclevar as $key => $fvehiclevalue) {
                  ?>
                  <div class="row justify-content-md-center">

                    <div class="card col-md-11  mt-3" >
                      <div class="box beta ">
                      <div class="ribbon"><span style="background:purple;font-size:13px;">Vehicle</span></div>
                      </div>
                      <div class="row " style="padding:12px;">
                        <div class="card col-md-5 float-left pad-">
                          <div class="row justify-content-md-center pd20 ">
                            <span style="text-transform:capitalize;" > <span style="font-size:20px;text-transform:uppercase;"> <?php echo $fvehiclevalue['vtitle']; ?></span> (Booking ID: <?php echo $fvehiclebookvalue['vbid']; ?>)<br>
                            Type:<?php echo $fvehiclevalue['vtype']; ?>
                            <br> <span class="cgreen" style="font-size:20px">
                              <?php
                              $vendorid=$fvehiclevalue['id'];
                              //echo $vendorid;
                              $vendorval=$fbooking->confirmbooking_vendordetail($vendorid);
                              foreach($vendorval as $key => $fvendorval)
                              {
                                echo $fvendorval['company_name'];
                              }
                              ?>

                            </span></span>

                          </div>
                        </div>
                        <div class=" card col-md-3 float-left">
                          <div class="row justify-content-md-center pd20">
                            Booking For: <span class="cgreen"><?php echo $fvehiclebookvalue['vbstart_date']; ?></span><br>
                            Booked Date: <span class="cdefault"> <?php echo $fvehiclebookvalue['vbbook_date']; ?></span>
                          </div>
                        </div>
                        <div class=" card col-md-2 float-left">
                          <div class="row justify-content-md-center pd20">
                            Total Amount:<br> <Span class="cred">Rs.<?php echo $fvehiclebookvalue['vbtotal_cost']; ?></span>
                          </div>
                        </div>
                        <div class=" card col-md-2 float-left pd20">
                          <?php
                            $vbookstatus=$fvehiclebookvalue['vbstatus'];
                            if($vbookstatus=='0')
                            {
                              echo "  <kbd class='mb-2 red' style='font-size:12px;text-align:center;'>Customer Cancelled</kbd>";
                            }
                            elseif($vbookstatus=='1')
                            {
                              echo "<kbd class='mb-2 btn-success' style='font-size:12px;text-align:center;'>Transaction Complete</kbd>";
                            }
                            elseif($vbookstatus=='2')
                            {
                              echo "<kbd class='mb-2 btn-warning' style='font-size:12px;text-align:center;'>Booking Pending</kbd>";
                            }
                            elseif($vbookstatus=='3')
                            {
                              echo "<kbd class='mb-2 btn-info' style='font-size:12px;text-align:center;'>Booking has been confirmed</kbd>";
                            }
                            elseif($vbookstatus=='4')
                            {
                              echo "<kbd class='mb-2 btn-warning' style='font-size:12px;text-align:center;'>Vendor has Cancelled</kbd>";
                            }
                            else {
                              echo "<kbd>Booking Status Unknown</kbd>";
                            }
                             ?>

                                                        <form action="" method="POST">
                                                          <input type="hidden" name="vbid" value="<?php echo $fvehiclebookvalue['vbid'];?>">
                                                          <input type="hidden" name="action" value="cancelvehicle">

                                                        <input type="submit" class="btn btn-danger " value="Cancel Booking">
                                                      </form>
                        </div>
                      </div>
                    </div></div>
                  <?php }

              }?>


      </div>
      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" aria-expanded="false">
        <!--TAB FOR PAST BOOKINGS-->
        <?php
        $fpastbookingvar=$fbooking->pastphotelbookeddetail($custid);
        foreach($fpastbookingvar as $key => $fpastbookvalue)
        {
          $roomid=$fpastbookvalue['rid'];
          $hotelid=$fpastbookvalue['hid'];


          // echo $roomid;
          // echo $hotelid;
          $roomvar=$fbooking->confirmbooking_roomdetail($roomid);
          $hotelvar=$fbooking->confirmbooking_hoteldetail($hotelid);
          foreach ($roomvar as $key => $froomvalue) {
            foreach ($hotelvar as $key => $fhotelvalue) {
              ?>
              <div class="row justify-content-md-center">

                <div class="card col-md-11  mt-3" >
                  <div class="box beta">
                  <div class="ribbon"><span style="background:green;">Hotel</span></div>
                  </div>
                  <div class="row" style="padding:12px;">
                    <div class="card col-md-5 float-left pad-">
                      <div class="row justify-content-md-center pd20 ">
                        <span style="text-transform:capitalize;" > <span style="font-size:20px;text-transform:uppercase;"> <?php echo $fhotelvalue['company_name']; ?></span> (Booking ID: <?php echo $fbookvalue['bid']; ?>)<br>
                        <?php echo $fhotelvalue['address']; ?>
                        <br> <span class="cgreen" style="font-size:20px"><?php echo $froomvalue['rtitle']; ?> Room </span></span>

                      </div>
                    </div>
                    <div class=" card col-md-3 float-left">
                      <div class="row justify-content-md-center pd20">
                        Check-In Date:<span class="cgreen"> <?php echo $fpastbookvalue['checkin']; ?></span>
                        Check-Out Date: <span class="cred"><?php echo $fpastbookvalue['checkout']; ?></span>
                        Booked Date: <span class="cdefault"><?php echo $fpastbookvalue['hbook_date']; ?></span>
                      </div>
                    </div>
                    <div class=" card col-md-2 float-left">
                      <div class="row justify-content-md-center pd20">
                        Total Amount:<br> <Span class="cred">Rs.<?php echo $fpastbookvalue['b_h_cost']; ?></span>
                      </div>
                    </div>
                    <div class=" card col-md-2 float-left pd20">
                 <?php   $bookstatus=$fpastbookvalue['b_h_status'];
                      if($bookstatus=='1')
                      {
                        echo "  <kbd class='red' style='text-align:Center;'> Booking Failed</kbd>";
                      }
                      elseif($bookstatus=='2')
                      {
                        echo "  <kbd class='btn-success' style='text-align:Center;'> Successfully Completed</kbd>";
                      }
                       ?>
                    </div>
                  </div>
                </div></div>
              <?php }

            }
          }?>


        <?php
        $fpastpackagebookvar=$fbooking->pastpackagebookeddetail($custid);
        foreach($fpastpackagebookvar as $key => $fpastpackagebookvalue)
        {
          $packageid=$fpastpackagebookvalue['pid'];
          $pastpackagevar=$fbooking->confirmbooking_packagedetail($packageid);
          foreach ($pastpackagevar as $key => $fpastpackagevalue) {
              ?>
              <div class="row justify-content-md-center">

                <div class="card col-md-11  mt-3" >
                  <div class="box beta ">
                  <div class="ribbon"><span style="background:#007BFF;font-size:13px;">Package</span></div>
                  </div>
                  <div class="row" style="padding:12px;">
                    <div class="card col-md-5 float-left pad-">
                      <div class="row justify-content-md-center pd20 ">
                        <span style="text-transform:capitalize;" > <span style="font-size:20px;text-transform:uppercase;"> <?php echo $fpastpackagevalue['pname']; ?></span> (Booking ID: <?php echo $fpastpackagebookvalue['pbid']; ?>)<br>
                        <?php echo $fpastpackagevalue['paddress']; ?>
                        <br> <span class="cgreen" style="font-size:20px">
                        <?php $vendorid=$fpastpackagevalue['id'];
                        $pavendorval=$fbooking->confirmbooking_vendordetail($vendorid);
                        foreach($pavendorval as $key => $fpavendorval)
                        {
                          echo $fpavendorval['company_name'];
                        }
                        ?></span></span>

                      </div>
                    </div>
                    <div class=" card col-md-3 float-left">
                      <div class="row justify-content-md-center pd20">
                        Tour Start Date: <span class="cgreen"><?php echo $fpastpackagebookvalue['startdate']; ?></span><br>
                        Booked Date: <span class="cdefault"> <?php echo $fpastpackagebookvalue['booked_date']; ?></span>
                      </div>
                    </div>
                    <div class=" card col-md-2 float-left">
                      <div class="row justify-content-md-center pd20">
                        Total Amount:<br> <Span class="cred">Rs.<?php echo $fpastpackagebookvalue['pcost']; ?></span>
                      </div>
                    </div>
                    <div class=" card col-md-2 float-left pd20">
                      <?php   $packagebookstatus=$fpastpackagebookvalue['status'];
                           if($packagebookstatus=='3')
                           {
                             echo "  <kbd class='btn-success' style='text-align:Center;'> Successfully Completed</kbd>";
                           }
                           elseif($packagebookstatus=='4')
                           {
                             echo "  <kbd class='red' style='text-align:Center;'> Booking failed</kbd>";
                           }
                           else {
                             echo "<kbd>Status Unknown</kbd>";
                           }                            ?>
                    </div>
                  </div>
                </div></div>
              <?php }
            }
        ?>


      <?php
      $fpastvehiclebookvar=$fbooking->pastvehiclebookeddetail($custid);
      foreach($fpastvehiclebookvar as $key => $fpastvehiclebookvalue)
      {
        $vehicleid=$fpastvehiclebookvalue['vid'];
        //echo $vehicleid;
        $pastvehiclevar=$fbooking->confirmbooking_vehicledetail($vehicleid);
        foreach ($pastvehiclevar as $key => $fpastvehiclevalue) {
            ?>
            <div class="row justify-content-md-center">

              <div class="card col-md-11  mt-3" >
                <div class="box beta ">
                <div class="ribbon"><span style="background:purple;font-size:13px;">vehicle</span></div>
                </div>
                <div class="row" style="padding:12px;">
                  <div class="card col-md-5 float-left pad-">
                    <div class="row justify-content-md-center pd20 ">
                      <span style="text-transform:capitalize;" > <span style="font-size:20px;text-transform:uppercase;"> <?php echo $fpastvehiclevalue['vtitle']; ?></span> (Booking ID: <?php echo $fpastvehiclebookvalue['vbid']; ?>)<br>

                        Type:<?php echo $fpastvehiclevalue['vtype']; ?>
                      <br> <span class="cgreen" style="font-size:20px"> <?php
                        $vendorid=$fpastvehiclevalue['id'];
                        //echo $vendorid;
                        $vendorval=$fbooking->confirmbooking_vendordetail($vendorid);
                        foreach($vendorval as $key => $fvendorval)
                        {
                          echo $fvendorval['company_name'];
                        }
                        ?></span></span>

                    </div>
                  </div>
                  <div class=" card col-md-3 float-left">
                    <div class="row justify-content-md-center pd20">
                      Booking for: <span class="cgreen"><?php echo $fpastvehiclebookvalue['vbstart_date']; ?></span><br>
                      Booked Date: <span class="cdefault"> <?php echo $fpastvehiclebookvalue['vbbook_date']; ?></span>
                    </div>
                  </div>
                  <div class=" card col-md-2 float-left">
                    <div class="row justify-content-md-center pd20">
                      Total Amount:<br> <Span class="cred">Rs.<?php echo $fpastvehiclebookvalue['vbtotal_cost']; ?></span>
                    </div>
                  </div>
                  <div class=" card col-md-2 float-left pd20">
                    <?php   $vehiclebookstatus=$fpastvehiclebookvalue['vbstatus'];
                         if($vehiclebookstatus=='3')
                         {
                           echo "  <kbd class='btn-success' style='text-align:Center;'> Successfully Completed</kbd>";
                         }
                         elseif($vehiclebookstatus=='4')
                         {
                           echo "  <kbd class='red' style='text-align:Center;'> Booking failed</kbd>";
                         }
                         else {
                           echo "<kbd>Status Unknown</kbd>";
                         }                            ?>
                  </div>
                </div>
              </div></div>
            <?php }
          }
      ?>
  </div>

    <!--AJA KO KAAM-->
      <div class="tab-pane fade" id="nav-purchase" role="tabpanel" aria-labelledby="nav-purchase-tab" aria-expanded="false">
        <!-- CONTENT-->
        <?php

        $fpurchasevar=$fbooking->purchaseddetail($custid);
        foreach($fpurchasevar as $key => $fpurchasevalue)
        {
          $purchaseid=$fpurchasevalue['prid'];

              ?>
      <div class="row justify-content-md-center">

          <div class="card col-md-11  mt-3" >
            <div class="box beta">
            <div class="ribbon"><span style="background:#222222;">Ecommerce</span></div>
            </div>
            <div class="row" style="padding:12px;">
              <div class="card col-md-5 float-left pad-">
                <div class="row justify-content-md-center pd20 ">
                  <span style="text-transform:capitalize;" > <span style="font-size:20px;text-transform:uppercase;"> <?php $productid=$fpurchasevalue['prid'];
                  $productvar=$fbooking->confirmbooking_productdetail($productid);
                  foreach ($productvar as $key => $fproductvalue) {
                    echo $fproductvalue['prname'];
                  ?></span> <br>
                  Booking ID: <?php echo $fpurchasevalue['id']; ?><br>
                  <span style="color:green;font-size:20px;">Vendor: <?php $vendorid=$fproductvalue['aid'];
                   $pvendorvar=$fbooking->confirmbooking_vendordetail($vendorid);
                   foreach($pvendorvar as $key => $pvendorvalue )
                   {
                     echo $pvendorvalue['company_name'];
                   }
                   ?></span>
              </span>

                </div>
              </div>
              <div class=" card col-md-3 float-left">
                <div class="row justify-content-md-center pd20">
                Order Date: <?php echo $fpurchasevalue['orderdate']; ?><br>

                  Cost: <?php echo $fpurchasevalue['prcost']; ?><br>
                  Quantity: <?php echo $fpurchasevalue['prquantity'];?>
                </div>
              </div>
              <div class=" card col-md-2 float-left">
                <div class="row justify-content-md-center pd20">
                  Total Amount:<br> <Span class="cred">Rs.<?php echo $fpurchasevalue['prcosttotal']; ?></span>
                </div>
              </div>
              <div class=" card col-md-2 float-left pd20">
           <?php   $ebookstatus=$fpurchasevalue['pr_orderstatus'];
                if($ebookstatus=='0')
                {
                  echo "  <kbd class='red' style='text-align:Center;'> Order Cancelled</kbd>";
                }
                elseif($ebookstatus=='1')
                {
                  echo "  <kbd class='btn-success' style='text-align:Center;'> Successfully Completed</kbd>";
                }
                elseif($ebookstatus=='2')
                {
                  echo "  <kbd class='btn-info' style='text-align:Center;'> In Process</kbd>";
                }
                elseif($ebookstatus=='3')
                {
                    echo "  <kbd class='btn-info' style='text-align:Center;'> In Process</kbd>";
                }
                elseif($ebookstatus=='4')
                {
                  echo "  <kbd class='red' style='text-align:Center;'> Order Cancelled</kbd>";
                  //echo "  <kbd class='btn-success' style='text-align:Center;'> Successfully Completed</kbd>";
                }
                 ?>
              </div>
            </div>
          </div></div>
    </div>
  <?php } } ?>
  </div>
</div>
      </div>
    </div>
      </div>
    </div>

  </div>
</div>




<?php include('include/inc_footer.php');?>
