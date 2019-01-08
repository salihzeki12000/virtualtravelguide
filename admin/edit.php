<?php

include('class/classuser.php');
$user=new User();
include('class/classadmin.php');
  $admin=new Admin();
  include_once('class/classhotel.php');
  $hotel=new Hotel();
include_once('class/classhotelroom.php');
$room=new Room();
include_once('class/classpackage.php');
$package=new Package();
include_once('class/classtodo.php');
$todo=new Todo();
include_once('class/classshop.php');
$shop=new Shop();
include_once('class/classvehiclerental.php');
$vehicle=new vehicle();

include_once('class/classAboutus.php');
$Aboutus=new Aboutus();
include_once('class/classfaq.php');
$faq=new faq();
include_once('class/classhomestay.php');
$homestay=new homestay();
  @$action=$_GET['action'];
  @$of=$_GET['of'];
  @$aid=$_GET['aid'];
  @$cid=$_GET['cid'];
  @$hid=$_GET['hid'];
  @$rid=$_GET['rid'];
  @$pid=$_GET['pid'];
  @$prid=$_GET['prid'];
  @$tid=$_GET['tid'];
  @$vid=$_GET['vid'];
 @$Abid=$_GET['Abid'];
 @$fid=$_GET['fid'];
 @$hsid=$_GET['hsid'];
 @$admintype=$_GET['type'];
  switch($action)
  {
    case 'edit':
    {
        switch($of)
        {
          case 'admin':
          {
            if($_SERVER['REQUEST_METHOD']=='POST')
              {
               extract($_POST);
                 $admin->updateAdmin($aid,$upd_username,$upd_firstname,$upd_lastname,$upd_companyname,$upd_email,$upd_contact,$upd_address,$upd_description,$upd_title,$upd_type,$upd_status,$upd_latitude,$upd_longitude);
             }
          break;
        }
         case 'user':
              {
                 if($_SERVER['REQUEST_METHOD']=='POST')
              {
               extract($_POST);
                 $user->updateUser($cid,$upd_cusername,$upd_cfirstname,$upd_clastname,$upd_caddress,$upd_ccontact,$upd_cemail,$upd_cdob,$upd_cgender,$upd_cabout,$upd_cstatus);
               }
               break;
              }
            case 'hotel':
            {
              if($_SERVER['REQUEST_METHOD']=='POST')
           {
            extract($_POST);
            $hotel->updateHotel($hid,$upd_hname,$upd_husername,$upd_hemail,$upd_hcontact,$upd_haddress,$upd_hlocation,$upd_hdescription,$upd_hlatitude,$upd_hlongitude);

            }
            break;
            }
            case 'room':
            {
              if($_SERVER['REQUEST_METHOD']=='POST')
           {
            extract($_POST);
                $room->updateHotelroom($rid,$upd_rno,$upd_rtitle,$upd_totalroom,$upd_rhotelcost,$upd_rhomestaycost,$upd_noofbed,$upd_rstatus);
            }
            break;
            }
            case 'package':
            {
              if($_SERVER['REQUEST_METHOD']=='POST')
           {
            extract($_POST);
              $package->updatePackage($pid,$upd_pname,$upd_paddress,$upd_plocation,$upd_pdescription,$upd_pcost,$upd_pduration,$upd_pstartdate,$upd_pexpiry,$upd_pcategory,$upd_pitinerary,$upd_pmap);
            }
            break;
            }
            case 'todo':
            {
              if($_SERVER['REQUEST_METHOD']=='POST')
           {
            extract($_POST);
              $todo->updateTodo($tid,$upd_ttitle,$upd_taddress,$upd_tlocation,$upd_tdescription,$upd_tlatitude,$upd_tlongitude,$upd_tstatus);
            }
            break;
            }
            case 'shop':
            {
              if($_SERVER['REQUEST_METHOD']=='POST')
           {
            extract($_POST);
            /*Eccomerce ko form submission paxi ko update garne yeta*/
              $shop->updateProduct($prid,$prname,$prcolor,$prcategory,$prgender,$prbrand,$prcost,$prdescription,$prstatus,$prquantity,$psize);
            }
            break;
            }
            case 'vehicle':
           {
             if($_SERVER['REQUEST_METHOD']=='POST')
          {
           extract($_POST);
             $vehicle->updatevehicle($vid,$upd_vtitle,$upd_vtype,$upd_vdescription,$upd_vtotalseat,$upd_vcost,$upd_vstatus,$upd_vkeyword);
           }
           break;
           }

                   case 'aboutus':
           {
             if($_SERVER['REQUEST_METHOD']=='POST')
          {
           extract($_POST);
             $Aboutus->updateAboutus($Abid,$upd_adescription,$upd_astatus);
           }
           break;
           }
                   case 'faq':
           {
             if($_SERVER['REQUEST_METHOD']=='POST')
          {
           extract($_POST);
             $faq->updatefaq($fid,$upd_fques,$upd_fans);
           }
           break;
           }
                         case 'homestay':
           {
             if($_SERVER['REQUEST_METHOD']=='POST')
          {
           extract($_POST);
             $homestay->updatehomestay($hsid,$upd_hstitle,$upd_hslocation,$upd_hsdescription,$upd_hscost,$upd_hsstatus);
           }
           break;
           }


          }
        }
      }


 ?>

<?php include('include/inc_adminheader.php'); ?>
    <div class="wrapper">
<?php include('include/inc_leftsidebar.php'); ?>
        <div class="main-panel">
          <?php include('include/inc_adminnavbar.php'); ?>



            <div class="content">

              <?php
              switch($action)
              {
                case 'edit':
                {
                  switch($of)
                  {
                      case 'admin':
                                  {
                                    $admin->editAdmin($aid,$admintype);
                                    break;
                                  }
                    case 'user':
                                {

                                  $user->editUser($cid);
                                  break;
                                }
                    case 'hotel':
                    {
                      $hotel->editHotel($hid);
                      break;
                    }
                    case 'room':
                    {
                      $room->editHotelroom($rid);
                      break;
                    }
                    case 'package':
                    {
                      $package->editPackage($pid);
                      break;
                    }
                    case 'todo':
                    {
                      $todo->editTodo($tid);
                      break;
                    }
                    case 'product':
                    {
                      $shop->editShop($prid);
                      break;
                    }
                    case 'vehicle':
                 {
                   $vehicle->editvehicle($vid);
                   break;
                 }
                   case 'aboutus':
                 {
                   $Aboutus->editAboutus($Abid);
                   break;
                 }

                  case 'faq':
                 {
                   $faq->editfaq($fid);
                   break;
                 }
                    case 'homestay':
                 {
                   $homestay->edithomestay($hsid);
                   break;
                 }
                  }
                  break;
                }
              }
            ?>



            </div>

        </div>
    </div>
    <script>
    var x = document.getElementById("demo");

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition, showError);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {
        var lati=position.coords.latitude;
        var long=position.coords.longitude;
        x.innerHTML = "New Latitude:<input type='text' class='form-control' name='latitude' value='"+lati+"'>New Longitude:<input class='form-control' type='text' name='longitude' value='"+long+"'>"

    }

    function showError(error) {
        switch(error.code) {
            case error.PERMISSION_DENIED:
                x.innerHTML = "User denied the request for Geolocation."
                break;
            case error.POSITION_UNAVAILABLE:
                x.innerHTML = "Location information is unavailable."
                break;
            case error.TIMEOUT:
                x.innerHTML = "The request to get user location timed out."
                break;
            case error.UNKNOWN_ERROR:
                x.innerHTML = "An unknown error occurred."
                break;
        }
    }

    </script>

<?php include('include/inc_adminfooterscripts.php');?>
