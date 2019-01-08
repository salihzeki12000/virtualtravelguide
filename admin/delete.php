<?php
include_once('class/classadmin.php');
$admin=new Admin();
include_once('class/classhotel.php');
$hotel=new Hotel();
include_once('class/classhotelroom.php');
$room=new Room();
include_once('class/classpackage.php');
$package=new Package();
include_once('class/classuser.php');
$user=new user();
include_once('class/classtodo.php');
$todo=new Todo();
include_once('class/classblog.php');
$blog=new Blog();
include_once('class/classshop.php');
$shop=new Shop();
include_once('class/classvehiclerental.php');
$vehicle=new vehicle();
include_once('class/classlocation.php');
$location=new Location();
include_once('class/classAboutus.php');
$Aboutus=new Aboutus();
include_once('class/classfaq.php');
$faq=new faq();
include_once('class/classvendorinfo.php');
$vendorinfo=new vendorinfo();
include_once('class/classhomestay.php');
$homestay=new homestay();
@$action=$_GET['action'];
@$of=$_GET['of'];
@$aid=$_GET['aid'];
@$cid=$_GET['cid'];
@$tid=$_GET['tid'];
@$bid=$_GET['bid'];
@$prid=$_GET['prid'];
@$vid=$_GET['vid'];
@$Abid=$_GET['Abid'];
@$fid=$_GET['fid'];
@$id=$_GET['id'];
@$lid=$_GET['lid'];
@$hsid=$_GET['hsid'];

switch($action)
{
  case 'delete':
  {
    switch($of)
    {
      case 'admin':
      {
        $admin->deleteAdmin($aid);
        break;
      }
      case 'hotel':
      {
        $hid=$_GET['id'];
        $hotel->deleteHotel($hid);
        break;
      }
      case 'room':
      {
        $rid=$_GET['rid'];
        $room->deleteHotelroom($rid);
        break;
      }
      case 'user':
      {
        $cid=$_GET['cid'];
        $user->deleteUser($cid);
        break;
      }
      case 'package':
      {
        $pid=$_GET['pid'];
        $package->deletePackage($pid);
        break;
      }
      case 'todo':
      {
        $todo->deleteTodo($tid);
        break;
      }
      case 'blog':
      {
        $blog->deleteBlog($bid);
        break;
      }
      case 'product':
     {
       $shop->deleteProduct($prid);
       break;
     }
     case 'vehicle':
     {
       $vehicle->deletevehicle($vid);
       break;
     }
      case 'aboutus':
     {
       $Aboutus->deleteAboutus($Abid);
       break;
     }

        case 'faq':
     {
       $faq->deletefaq($fid);
       break;
     }
           case 'vendorinfo':
     {
       $vendorinfo->deletevendor($id);
       break;
     }
     case 'location':
     {
       $location->deleteLocation($lid);
       break;
     }
     case 'homestay':
     {
       $homestay->deletehomestay($hsid);
       break;
     }
    }
     break;
  }

}



 ?>
