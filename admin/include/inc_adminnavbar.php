<?php
@session_start();
include_once('class/classpackage.php');
$package=new Package();
include_once('class/classvehiclerental.php');
$vehicle=new vehicle();
include_once('class/classhotelroom.php');
$room=new Room();
$date= date("Y-m-d h:i:sa");
$vendorid=$_SESSION['id'];?>
<nav class="navbar navbar-transparent navbar-absolute" style="z-index:25;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <?php
      if($_SESSION['admintype']=='1')
      {
        ?>
        <a class="navbar-brand" href="#"> <span style="text-transform:uppercase;font-weight:bolder;font-size:20px;"><?php echo $_SESSION['fname'] ." ". $_SESSION['lname'];?></a>
          <a href="faq.php" class="navbar-brand">FAQ</a>
          <a href="aboutus.php" class="navbar-brand">About Us </a>
              <a href="vendorinfo.php" class="navbar-brand">Vendor Requests </a>
        <?php
      }

      elseif($_SESSION['vendor']=='hotel')
      {

          $value=$room->getHotelName($sesid);
          foreach($value as $key => $hotelname)
          {
            $hotelid=$hotelname['id'];
            }
            ?>
            <a class="navbar-brand" href="#"> <span style="text-transform:uppercase;font-weight:bolder;font-size:20px;"> <?php echo $hotelname['company_name'];?></span></a>
          <?php

      }
          else {
            ?>
             <span style="text-transform:uppercase;font-weight:bolder;font-size:20px;">
               <?php echo $_SESSION['company'];?></span>
          <?php }
          ?>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                <i class="material-icons">dashboard</i>
                <p class="hidden-lg hidden-md">Dashboard</p>
              </a>
            </li>
            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="material-icons">notifications</i>
                <span class="notification">5</span>
                <p class="hidden-lg hidden-md">Notifications</p>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="#">Mike John responded to your email</a>
                </li>
                <li>
                  <a href="#">You have 5 new tasks</a>
                </li>
                <li>
                  <a href="#">You're now friend with Andrew</a>
                </li>
                <li>
                  <a href="#">Another Notification</a>
                </li>
                <li>
                  <a href="#">Another One</a>
                </li>
              </ul>
            </li> -->
            <li>
              <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                <!-- <i class="material-icons">person</i> -->
                <?php echo "<img src='../".$_SESSION['image']."' style='height:50px;width:50px;border-radius:100%;   '>";?>
                <p class="hidden-lg hidden-md">Profile</p>
                <ul class="dropdown-menu">

                  <li>

                    <?php include_once('session.php');

                    // include('dbconfig.php');
                    // $sql="SELECT * FROM admin WHERE id='$sesid'";
                    // $res=mysqli_query('$this->db,$sql');
                    if($_SESSION['admintype']=='1')
                    {
                      echo
                      "<img src='../".$_SESSION['image']."' style='height:50px;width:50px;border-radius:100%;border:2px groove gray;   '>".  "     ".$_SESSION['fname'] .$_SESSION['lname'].$_SESSION['admintype'];
                    }
                    elseif($_SESSION['admintype']=='4' && $_SESSION['vendor']=='package'){
                      echo
                      "<img src='../".$_SESSION['image']."' style='height:50px;width:50px;border-radius:100%;border:2px groove gray;   '>".  "     ".$_SESSION['company'];
                    }
                    elseif($_SESSION['admintype']=='4' && $_SESSION['vendor']=='rental'){
                      echo
                      "<img src='../".$_SESSION['image']."' style='height:50px;width:50px;border-radius:100%;border:2px groove gray;   '>".  "     ".$_SESSION['company'];
                    }
                     elseif($_SESSION['admintype']=='4' && $_SESSION['vendor']=='ecommerce'){
                        echo
                        "<img src='../".$_SESSION['image']."' style='height:50px;width:50px;border-radius:100%;border:2px groove gray;   '>".  "     ".$_SESSION['company'];
                      }
                    elseif($_SESSION['admintype']=='4' && $_SESSION['vendor']=='hotel'){
                      $value=$room->getHotelName($sesid);
                      foreach($value as $key => $hotelname)
                      {
                        $hotelid=$hotelname['id'];
                        }

                      echo
                      "<img src='../".$_SESSION['image']."' style='height:50px;width:50px;border-radius:100%;border:2px groove gray;   '>".  "     ".$hotelname['company_name'];;



                    }
                    ?> </a>
                  </li>

                  <li>
                    <?php
                    if($_SESSION['vendor']=='hotel')
                    {?>
                      <a href="edit.php?action=edit&hid=<?php echo $hotelid;?>&of=hotel&sidebar=hotel">Edit Profile</a>
                      <?php
                    }
                    elseif($_SESSION['vendor']=='package')
                    {
                      $vendorinfovar=$package->getAllVendorInfo($vendorid);
                      foreach($vendorinfovar as $key => $vendorinfovalue )
                      {

                        ?>
                        <a href="edit.php?action=edit&aid=<?php echo $vendorid;?>&of=admin">Edit Profile</a>

                      <?php }  }
                      else {
                        ?>
                        <a href="edit.php?action=edit&aid=<?php echo $vendorid;?>&of=admin">Edit Profile</a>
                      <?php }
                      ?>
                    </li>
                    <li style="text-center bg-danger">
                      <a href="logout.php">

                        <p>Logout</p>
                      </a>
                    </li>
                  </ul>
                </a>
              </li>
            </ul>

          </div>
        </div>
      </nav>
