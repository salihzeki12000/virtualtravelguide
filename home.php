<?php
ob_start();
session_start();
include_once('class/fclassindex.php');
$display=new fIndex();
include_once('class/fclasspackage.php');
$fpackage=new fPackage();
include('class/fclassvehiclerental.php');
$fvehicle=new fvehicle();
@$mes=$_GET['q'];
if($mes)
{
  echo "<script>alert('Please Login first to use the service')</script>";
}
@$query=$_GET['query'];
if($_SERVER['REQUEST_METHOD']=='GET')
{
	extract($_GET);
 @$display->searchPackageIndex($query);
 @$display->searchHotelIndex($query);
 @$display->searchTodoIndex($query);
 @$display->searchBlogIndex($query);
 @$display->searchVehicleIndex($query);
}


 ?>
<div class="row " >
  <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel" >
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" >

      <!--TOP NAVBAR-->
     <nav class="navbar justify-content-between col-md-12" style="z-index:10;position:absolute;top:0%;text-transform:capitalize;background:rgba(0,0,0,0);">
        <a class="navbar-brand ml-4" href="#">
          <img src="images/logo.png" width="60" height="60" alt="">
        </a>
            <?php if (isset($_SESSION['cus_id'])) { ?>
              <div class="navbarbtn mr-4" style="color:white;">
              <?php echo "Welcome" ." ".$_SESSION['cus_fname']." ". $_SESSION['cus_lname'];?>
            <a href='flogout.php'><button type="button" class="btn btn-outline-danger ml-3">Log Out</button> </a>


             </div>
     <?php }
     else {
       ?><div class="navbarbtn mr-4">

         <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#loginModal">
           Login
         </button>
         <button type="button" class="btn btn-outline-primary ml-3" data-toggle="modal" data-target="#registerModal" >
         Register</button>

      </div>
      <?php
    } ?>



      </nav>
      <!--END OF TOP NAVBAR-->
      <?php
      //include('class/fclassuser.php');
      // if (isset($_SESSION['cus_id'])) {
      //   echo "Loggedin";
      // }
      // else {
      //   echo "Not logged in";
      // }

       ?>
    <!--SEARCH PORTION-->
    <div class="row justify-content-md-center" style="background:red;">
      <img src="images/quote.png" style="height:100px;position:absolute;top:40%;z-index:10;">
      <form class="form-inline col-md-8" style="position:absolute;top:56%;z-index:10;" method="GET" action=" ">
        <input type="text" class="form-control col-md-10 mr-3" style="width:70%;padding:10px;" placeholder="Enter You Keyword here" name="query" value="<?php if($query)
        {
          echo $query;
        }
        else {
          echo "";
        }
        ?>">
        <input type="submit" value="Search" class="btn btn-primary btn-lg">
      </form>
    </div>
    <!--END OF SEARCH PORTION -->

    <div class="carousel-item active" >
      <img class="d-block w-100" src="images/4.jpg" alt="First slide" style="height:100%;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/1.jpg" alt="Second slide" style="height:100%;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/2.jpg" alt="Third slide" style="height:100%;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<div class="row justify-content-md-center"  style="">
<nav class="menu_splash justify-content-md-center " style="width:100%;position:realtive;left:0px;top:60%;">
  <div class="row justify-content-md-center ">
  <ul id="menu_splash" class="clearfix ">
    <li class="nav1">
      <a href="thingstodo.php?b=ttodo" class="rollover">
        <div class="cube">
          <div class="front">
            <img src="images/ic1.png" alt="" class="img_icon">
            <div class="txt1">Things To do</div>
          </div>
          <div class="back">
            <img src="images/ic1.png" alt="" class="img_icon">
            <div class="txt1">Things to do</div>
          </div>
        </div>
      </a>
    </li>
    <li class="nav2">
      <a href="vehiclerental.php?b=rental" class="rollover">
        <div class="cube">
          <div class="front">
            <img src="images/ic6.png" alt="" class="img_icon">
            <div class="txt1">Vehicle Rental</div>
          </div>
          <div class="back">
            <img src="images/ic6.png" alt="" class="img_icon">
            <div class="txt1">Vehicle Rental</div>
          </div>
        </div>
      </a>
    </li>
    <li class="nav3">
      <a href="package.php?b=package" class="rollover">
        <div class="cube">
          <div class="front">
            <img src="images/ic5.png" alt="" class="img_icon">
            <div class="txt1">Packages</div>
          </div>
          <div class="back">
            <img src="images/ic5.png" alt="" class="img_icon">
            <div class="txt1">Packages</div>
          </div>
        </div>
      </a>
    </li>
    <li class="nav4">
      <a href="hotel.php?b=hotel" class="rollover">
        <div class="cube">
          <div class="front">
            <img src="images/ic4.png" alt="" class="img_icon">
            <div class="txt1">Hotels</div>
          </div>
          <div class="back">
            <img src="images/ic4.png" alt="" class="img_icon">
            <div class="txt1">Hotels</div>
          </div>
        </div>
      </a>
    </li>
    <!-- <li class="nav5">
      <a href="busbooking.php?b=busb" class="rollover">
        <div class="cube">
          <div class="front">
            <img src="images/ic7.png" alt="" class="img_icon">
            <div class="txt1">Bus Booking</div>
          </div>
          <div class="back">
            <img src="images/ic7.png" alt="" class="img_icon">
            <div class="txt1">Bus Booking</div>
          </div>
        </div>
      </a>
    </li> -->
    <li class="nav6">
      <a href="ecommerce.php?b=shop" class="rollover">
        <div class="cube">
          <div class="front">
            <img src="images/ic8.png" alt="" class="img_icon">
            <div class="txt1">Shop</div>
          </div>
          <div class="back">
            <img src="images/ic8.png" alt="" class="img_icon">
            <div class="txt1">Shop</div>
          </div>
        </div>
      </a>
    </li>
    <li class="nav7">
      <a href="blog.php?b=blog" class="rollover">
        <div class="cube">
          <div class="front">
            <img src="images/ic10.png" alt="" class="img_icon">
            <div class="txt1">Blog</div>
          </div>
          <div class="back">
            <img src="images/ic10.png" alt="" class="img_icon">
            <div class="txt1">Blog</div>
          </div>
        </div>
      </a>
    </li>
  </ul>
</div>
</nav>

<div class="row homenavbar bg-primary" style="width:100%;">

  <!--NAVIGATION BAR-->
  <?php include_once('include/inc_navigation.php'); ?>

  <!--END OF NAVIGATION BAR-->

<!-- </div> -->

<?php
if($query)
{
?>
<div class=" col-md-12">
<kbd style="text-align:left;font-size:15px;">Search results for keyword <span style="color:#007BFF; font-size:20px;"> <?php echo $query;?></span></kbd>
</div>


    <div id="fh5co-tours col-md-12" class="hotpackage" >
    <div class="row packagelist ">

      <div class=" col-md-12">
      <kbd style="text-align:left;font-size:15px;">Packages related to <span style="color:#007BFF; font-size:20px;"> <?php echo $query;?></span></kbd>
      </div>
<?php
        $searchvar=$display->searchPackageIndex($query);
        foreach($searchvar as $key => $searchpackageresult)
        {
          ?>
      <div class="col-md-3 fh5co-tours animate-box " data-animate-effect="fadeIn" style=" ">
        <div href="#"><img src="<?php echo $searchpackageresult['pimg1'] ;?>" class="img-responsive">
          <div class="desc">
            <span></span>
            <span class="package-title"><?php echo $searchpackageresult['pname'];?></span>
            <span><?php echo $searchpackageresult['pduration']; ?> days</span>
            <section class="price badge badge-pill badge-primary" >Rs.<?php echo $searchpackageresult['pcost']; ?></section><br>
            <a class="btn btn-default btn-outline"  data-toggle="modal" data-target="#myModal<?php echo $searchpackageresult['pid']; ?>">Book Now </a>
          </div>
        </div>
      </div>
    <?php } ?>







          <div class=" col-md-12">
          <kbd style="text-align:left;font-size:15px;">Hotels related to <span style="color:#007BFF; font-size:20px;"> <?php echo $query;?></span></kbd>
          </div>
          <?php
  $searchhotelvar=$display->searchHotelIndex($query);
  foreach($searchhotelvar as $key => $searchhotelresult)
  {
    $hotid=$searchhotelresult['id'];
  ?>
  <a href="hotelroom.php?hid=<?php echo $hotid ?>">
  <div class="col-md-3 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
    <div href="hotelroom.php?hid=<?php echo $hotelid ?>"><img src="<?php echo $searchhotelresult['image'] ;?>" class="img-responsive">
      <div class="desc">
        <span></span>
        <span class="package-title"><?php echo $searchhotelresult['company_name'];?></span>

        <span>Starting from</span>
        <section class="price badge badge-pill badge-primary" >
          Rs.<?php
        $displayvar=$display->fgetminroom($hotid);
        foreach($displayvar as $key => $minhotel)
        {
          echo $minhotel['minimum'];
        }

         ?>
       </section><br>
        <a class="btn btn-default btn-outline" ><?php echo $searchhotelresult['location'];?></a>
      </div>
    </div>
  </div>
</a>
  <?php
  }
  ?>
  <div class=" col-md-12">
  <kbd style="text-align:left;font-size:15px;">Things to do related to <span style="color:#007BFF; font-size:20px;"> <?php echo $query;?></span></kbd>
  </div>

<?php
$searchtodovar=$display->searchTodoIndex($query);
foreach($searchtodovar as $key => $searchtodoresult)
{
  $todoid=$searchtodoresult['tid'];
?>
<a href="ttdsingle.php?tid=<?php echo $todoid ?>">

<div class="col-md-3 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
  <div href="ttdsingle.php?tid=<?php echo $todoid ?>"><img src="<?php echo $searchtodoresult['timage1'] ;?>" class="img-responsive">
    <div class="desc">
      <span></span>
      <span class="package-title"><?php echo $searchtodoresult['ttitle'];?></span>

      <section class="price badge badge-pill badge-primary" >
        <?php echo $searchtodoresult['taddress']; ?>
     </section><br>
      <a class="btn btn-default btn-outline" ><?php echo $searchtodoresult['tlocation'];?></a>
    </div>
  </div>
</div>
</a>
<?php
}?>
<div class=" col-md-12">
<kbd style="text-align:left;font-size:15px;">Vehicles related to <span style="color:#007BFF; font-size:20px;"> <?php echo $query;?></span></kbd>
</div>

<?php
$searchvehiclevar=$display->searchVehicleIndex($query);
foreach($searchvehiclevar as $key => $searchvehicleresult)
{
  ?>
  <div class="col-md-3 fh5co-tours animate-box " data-animate-effect="fadeIn" style=" ">
    <div href="#"><img src="<?php echo $searchvehicleresult['vimg1'] ;?>" class="img-responsive">
      <div class="desc">
        <span></span>
        <span class="package-title"><?php echo $searchvehicleresult['vtitle'];?></span>
        <span><?php echo $searchvehicleresult['vtype']; ?> days</span>
        <section class="price badge badge-pill badge-primary" >Rs.<?php echo $searchvehicleresult['vcost']; ?></section><br>
        <a class="btn btn-default btn-outline"  data-toggle="modal" data-target="#vehicleModal<?php echo $searchvehicleresult['vid']; ?>">Book Now </a>
      </div>
    </div>
  </div>
<?php
}?>
<div class=" col-md-12">
<kbd style="text-align:left;font-size:15px;">Blogs related to <span style="color:#007BFF; font-size:20px;"> <?php echo $query;?></span></kbd>
</div>

<?php
$searchblogvar=$display->searchBlogIndex($query);
foreach($searchblogvar as $key => $searchblogresult)
{
$blogid=$searchblogresult['bid'];
?>
<a href="single.php?bid=<?php echo $blogid ?>">

<div class="col-md-3 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
<div href="todo.php?hid=<?php echo $blogid ?>"><img src="<?php echo $searchblogresult['bimg'] ;?>" class="img-responsive">
  <div class="desc">
    <span></span>
    <span class="package-title"><?php echo $searchblogresult['btitle'];?></span>

    <section class="price badge badge-pill badge-primary" >
      <?php echo $searchblogresult['bdate']; ?>
   </section><br>
    <a class="btn btn-default btn-outline" ><?php echo $searchblogresult['blocation'];?></a>
  </div>
</div>
</div>
</a>
<?php
}?>
<?php
}
else {

 ?>
<div class="row">
  <div id="fh5co-destination">
    <div class="tour-fluid">
      <div class="row">
        <div class="col-md-12">
          <ul id="fh5co-destination-list" class="animate-box">
            <li class="one-forth text-center" style="background-image: url(images/p1.jpg);">
              <a href="#">
                <div class="case-studies-summary" >
                  <h2>Kathmandu</h2>
                </div>
              </a>
            </li>
            <li class="one-forth text-center" style="background-image: url(images/p2.jpg); ">
              <a href="#">
                <div class="case-studies-summary">
                  <h2>Pokhara</h2>
                </div>
              </a>
            </li>
            <li class="one-forth text-center" style="background-image: url(images/p3.jpg); ">
              <a href="#">
                <div class="case-studies-summary">
                  <h2>Lumbini</h2>
                </div>
              </a>
            </li>
            <li class="one-forth text-center" style="background-image: url(images/p4.jpg); ">
              <a href="#">
                <div class="case-studies-summary">
                  <h2>Chitwan</h2>
                </div>
              </a>
            </li>

            <li class="one-forth text-center" style="background-image: url(images/p5.jpg); ">
              <a href="#">
                <div class="case-studies-summary">
                  <h2>Ghalegaun</h2>
                </div>
              </a>
            </li>
            <li class="one-half text-center">
              <div class="title-bg">
                <div class="case-studies-summary" style="  padding:1em;">
                  <h2>Most Popular Destinations</h2>
                  <a href="#"><button class="btn btn-outline-light">View All Destinations</button></a>
                </div>
              </div>
            </li>
            <li class="one-forth text-center" style="background-image: url(images/p6.jpg); ">
              <a href="#">
                <div class="case-studies-summary">
                  <h2>Bandipur</h2>
                </div>
              </a>
            </li>
            <li class="one-forth text-center" style="background-image: url(images/p7.jpg); ">
              <a href="#">
                <div class="case-studies-summary">
                  <h2>ABC</h2>
                </div>
              </a>
            </li>
            <li class="one-forth text-center" style="background-image: url(images/p8.jpg); ">
              <a href="#">
                <div class="case-studies-summary">
                  <h2>Mustang</h2>
                </div>
              </a>
            </li>
            <li class="one-forth text-center" style="background-image: url(images/p9.jpg); ">
              <a href="#">
                <div class="case-studies-summary">
                  <h2>PoonHill</h2>
                </div>
              </a>
            </li>
            <li class="one-forth text-center" style="background-image: url(images/p10.jpg); ">
              <a href="#">
                <div class="case-studies-summary">
                  <h2>Langtang</h2>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- <div class="flex-w flex-c-m m-tb-10">
<div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
   Filter
</div>
</div> -->
<!-- <div class="dis-none panel-filter w-full p-t-10">
  <div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
    <div class="filter-col1 p-r-15 p-b-27">
      <div class="mtext-102 cl2 p-b-15">
        Sort By Price
      </div>

      <ul>
        <li class="p-b-6">
          <a href="#" class="filter-link stext-106 trans-04" style="color:black;">
            Default
          </a>
        </li>

        <li class="p-b-6">
          <a href="#" class="filter-link stext-106 trans-04">
            Popularity
          </a>
        </li>

        <li class="p-b-6">
          <a href="#" class="filter-link stext-106 trans-04">
            Average rating
          </a>
        </li>

        <li class="p-b-6">
          <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
            Newness
          </a>
        </li>

        <li class="p-b-6">



      <button type="btn btn-success btn-xs" id="lowhigh">Low to High</button>

        </li>

        <li class="p-b-6">
          <button type="btn btn-success btn-xs" id="highlow" >High to Low</button>
        </li>
      </ul>
    </div>

    <div class="filter-col2 p-r-15 p-b-27">
      <div class="mtext-102 cl2 p-b-15">
        Price
      </div>

      <ul>
        <li class="p-b-6">
          <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
            All
          </a>
        </li>

        <li class="p-b-6">
          <a href="#" class="filter-link stext-106 trans-04">
          Rs.0 - Rs. 2000
          </a>
        </li>

        <li class="p-b-6">
          <a href="#" class="filter-link stext-106 trans-04">
            Rs.2000 - Rs.5000
          </a>
        </li>

        <li class="p-b-6">
          <a href="#" class="filter-link stext-106 trans-04">
            Rs.5000 - Rs.10000
          </a>
        </li>



        <li class="p-b-6">
          <a href="#" class="filter-link stext-106 trans-04">
          Rs.10000+
          </a>
        </li>
      </ul>
    </div>

    <div class="filter-col3 p-r-15 p-b-27">
      <div class="mtext-102 cl2 p-b-15">
        Color
      </div>

      <ul>
        <li class="p-b-6">
          <span class="fs-15 lh-12 m-r-6" style="color: #222;">
            <i class="zmdi zmdi-circle"></i>
          </span>

          <a href="#" class="filter-link stext-106 trans-04">
            Black
          </a>
        </li>

        <li class="p-b-6">
          <span class="fs-15 lh-12 m-r-6" style="color: #4272d7;">
            <i class="zmdi zmdi-circle"></i>
          </span>

          <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
            Blue
          </a>
        </li>

        <li class="p-b-6">
          <span class="fs-15 lh-12 m-r-6" style="color: #b3b3b3;">
            <i class="zmdi zmdi-circle"></i>
          </span>

          <a href="#" class="filter-link stext-106 trans-04">
            Grey
          </a>
        </li>

        <li class="p-b-6">
          <span class="fs-15 lh-12 m-r-6" style="color: #00ad5f;">
            <i class="zmdi zmdi-circle"></i>
          </span>

          <a href="#" class="filter-link stext-106 trans-04">
            Green
          </a>
        </li>

        <li class="p-b-6">
          <span class="fs-15 lh-12 m-r-6" style="color: #fa4251;">
            <i class="zmdi zmdi-circle"></i>
          </span>

          <a href="#" class="filter-link stext-106 trans-04">
            Red
          </a>
        </li>

        <li class="p-b-6">
          <span class="fs-15 lh-12 m-r-6" style="color: #aaa;">
            <i class="zmdi zmdi-circle-o"></i>
          </span>

          <a href="#" class="filter-link stext-106 trans-04">
            White
          </a>
        </li>
      </ul>
    </div>

     <div class="filter-col4 p-b-27">
      <div class="mtext-102 cl2 p-b-15">
        Tags
      </div>

      <div class="flex-w p-t-4 m-r-5">
        <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
          Fashion
        </a>

        <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
          Lifestyle
        </a>

        <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
          trousers
        </a>

        <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
          tents
        </a>

        <a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
          boots
        </a>
      </div>
    </div>
  </div>
</div> -->
<div class="row" >
  <div id="fh5co-tours col-md-12" class="hotpackage" >
    <div class="row">
      <div class="col-md-12  text-center package-heading animate-box">
        <span>Hot Packages</span>

      </div>
    </div>
    <div class="row packagelist" >
      <?php
        $packages=$display->displayPackage();
        foreach($packages as $key => $packageinfo)
        {


      ?>
      <div class="col-md-3 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
        <div href="#"><img src="<?php echo $packageinfo['pimg1'] ;?>" class="img-responsive">
          <div class="desc">
            <span></span>
            <span class="package-title"><?php echo $packageinfo['pname'];?></span>
            <span><?php echo $packageinfo['pduration']; ?> days</span>
            <section class="price badge badge-pill badge-primary" >Rs.<?php echo $packageinfo['pcost']; ?></section><br>
            <a class="btn btn-default btn-outline"  data-toggle="modal" data-target="#myModal<?php echo $packageinfo['pid']; ?>">Book Now </a>
          </div>
        </div>
      </div>
    <?php } ?>
      <div class="col-md-12 text-center animate-box">
          <p><a class="btn btn-lg btn-outline-primary" href="package.php?b=package">See All Packages </a></p>
      </div>
    </div>
  </div>
</div>

<!-- For Hot Hotels -->
<div class="row" >
  <div id="fh5co-tours col-md-12" class="hotpackage" >
    <div class="row">
      <div class="col-md-12  text-center package-heading animate-box">
        <span>Hot Hotels</span>

      </div>
    </div>
    <div class="row packagelist" >
      <?php
        $hotelvar=$display->fgetPopularHotel();
        foreach($hotelvar as $key => $hotelinfo)
        {
          $hotelid=$hotelinfo['id'];

      ?>
      <a href="hotelroom.php?hid=<?php echo $hotelid ?>">
      <div class="col-md-3 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
        <div href="hotelroom.php?hid=<?php echo $hotelid ?>"><img src="<?php echo $hotelinfo['image'] ;?>" class="img-responsive">
          <div class="desc">
            <span></span>
            <span class="package-title"><?php echo $hotelinfo['company_name'];?></span>

            <span>Starting from</span>
            <section class="price badge badge-pill badge-primary" >
              Rs.<?php
            $displayvar=$display->fgetminroom($hotelid);
            foreach($displayvar as $key => $minhotel)
            {
              echo $minhotel['minimum'];
            }

             ?> </section><br>
            <a class="btn btn-default btn-outline" ><?php echo $hotelinfo['location'];?></a>
          </div>
        </div>
      </div>
    </a>
    <?php } ?>
      <div class="col-md-12 text-center animate-box">
        <p><a class="btn btn-lg btn-outline-primary" href="hotel.php?b=hotel">See All Hotels </a></p>
      </div>
    </div>
  </div>
</div>

<!--Hot vehicles -->
<div class="row" >
  <div id="fh5co-tours col-md-12" class="hotvehicle" >
    <div class="row">
      <div class="col-md-12  text-center package-heading animate-box">
        <!-- <span>Hot Vehicles</span> -->

      </div>
    </div>
    <div class="row packagelist" >
      <?php
        $vehicles=$display->displayVehicle();
        foreach($vehicles as $key => $vehicleinfo)
        {


      ?>
      <div class="col-md-3 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
        <div href="#"><img src="<?php echo $vehicleinfo['vimg1'] ;?>" class="img-responsive">
          <div class="desc">
            <span></span>
            <span class="package-title"><?php echo $vehicleinfo['vtitle'];?></span>
            <span><?php echo $vehicleinfo['vtype']; ?> days</span>
            <section class="price badge badge-pill badge-primary" >Rs.<?php echo $vehicleinfo['vcost']; ?></section><br>
            <a class="btn btn-default btn-outline"  data-toggle="modal" data-target="#vehicleModal<?php echo $vehicleinfo['vid']; ?>">Book Now </a>
          </div>
        </div>
      </div>
    <?php } ?>
      <div class="col-md-12 text-center animate-box">
        <p><a class="btn btn-lg btn-outline-primary" href="vehiclerental.php?b=rental">See All Vehicles </a></p>
      </div>
    </div>
  </div>
</div>

<?php } ?>
<!-- The Modal -->
<?php
$fpackagev=$fpackage->fgetAllPackage();
foreach($fpackagev as $key => $fpackagevalue)
{
  $vendorid=$fpackagevalue['id'];
  $fvendorv=$fpackage->fgetAllVendor($vendorid);
  foreach($fvendorv as $key => $fvendorvalue)
  {
  ?>
<div class="modal fade" id="myModal<?php echo $fpackagevalue['pid']?>">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><?php echo $fpackagevalue['pname']; ?> (<?php echo $fvendorvalue['company_name']; ?>)</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">


          <div class="container">
            <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
              <div class="row ">
                <div class="col-md-6 col-lg-7 p-b-30">
                  <div class="p-l-25 p-r-30 p-lr-0-lg">
                    <div class="wrap-slick3 flex-sb flex-w">
                      <div class="wrap-slick3-dots"></div>
                      <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

                      <div class="slick3 gallery-lb">
                      <div class="item-slick3" data-thumb="<?php echo $fpackagevalue['pimg1']?>">
                        <div class="wrap-pic-w pos-relative">
                          <img src="<?php echo $fpackagevalue['pimg1']?>" alt="IMG-PRODUCT">

                          <!-- <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="$image1">
                             <i class="fa fa-expand"></i> -->
                          </a>
                        </div>
                      </div>

                        <div class="item-slick3" data-thumb="<?php echo $fpackagevalue['pimg2']?>">
                          <div class="wrap-pic-w pos-relative">
                            <img src="<?php echo $fpackagevalue['pimg2']?>" alt="IMG-PRODUCT">

                            <!-- <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/p2.jpg">
                               <i class="fa fa-expand"></i> -->
                            </a>
                          </div>
                        </div>

                        <div class="item-slick3" data-thumb="images/pa6.jpg">
                          <div class="wrap-pic-w pos-relative">
                            <img src="images/pa6.jpg" alt="IMG-PRODUCT">

                            <!-- <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/pa6.jpg"> -->
                              <!-- <i class="fa fa-expand"></i> -->
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <span class="heading">Tags</span>
                    <ul class="tags">
                      <?php
                       $pid=$fpackagevalue['pid'];
                        $fpackage->fgetKeywordpackage($pid);
                      ?>
                    </ul>

                  </div>
                </div>

                <div class="col-md-6 col-lg-5 p-b-30">
                  <div class="col-md-12">
                    <form action="packagebookingdetail.php?book" method="GET">
                    <h4 class="mtext-105 cl2 js-name-detail p-b-14" style="font-weight:bolder;text-transform:capitalize">
                    <?php echo $fpackagevalue['pname'];?>
                  </h4><kbd><?php echo $fpackagevalue['pcategory'];?></kbd><br>
                    <span style="color:green;font-size:20px;"><?php echo $fvendorvalue['company_name'];?>,</span><span style="font-size:15px;color:green;"><?php echo $fvendorvalue['address'];?></span><br>
                    <input type="hidden" name="pid" value="<?php echo $fpackagevalue['pid'] ?>">
                    <span class="mtext-106 cl2" style="color:red;">
                   Rs.<?php echo $fpackagevalue['pcost'];?> </span>for <?php echo $fpackagevalue['pduration'];?> days
                    <br><br>
                    <input type="hidden" name="pduration" value="<?php echo $fpackagevalue['pduration'];?>">

                    <input type="hidden" name="pcost" value="<?php echo $fpackagevalue['pcost'];?>;">

                    <div class="row mb-2" style="border:1px solid gray;color:gray;padding:5px;">
                      <div class="col-md-5">
                    Start Date:
                      </div>
                      <div class="col-md-7">
                        <?php
                        $startdate=$fpackagevalue['pstartdate'];
                        if($startdate=="")
                          {
                            echo "<span style='font-size:12px;color:red; '>Date not mentioned!You can Add date as per your convinience</span>";
                          }
                          else {
                            echo $startdate;
                          }
                        ?>
                      </div>
                      <div class="col-md-5">
                      End Date:
                      </div>
                      <div class="col-md-7">
                        <?php echo $fpackagevalue['pexpiry'];?>
                      </div>
                    </div>
                    <span style="color:red;"><small>If the provided date is not convinient for you, then you can add custom date</small></span>

                      <div class="row">
                        <div class="col-md-4">
                       Number of people:
                        </div>
                        <div class="col-md-8 ">
                        <div class="form-group">
                          <input type="number" name="totalno" class="form-control" placeholder="Total Number of people">
                         </div>
                          </div>
                        </div>
                        <div class="row">
                        <div class="col-md-4">
                          Date:
                        </div>


                          <div class="col-md-8 ">
                          <div class="form-group">

                                 <input type="date" class="form-control" name="customdate" placeholder="Select Date">

                           </div>
                            </div>
                          </div>
                        <div class="flex-w flex-r-m p-b-10">
                          <div class="size-204 flex-w flex-m respon6-next">
                            <input type="submit" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail"
                              value="Book Now">

                          </div>
                        </div>
                      </form>
                      </div>
                        </div>
                      </div>
                    </div><br>
                      <div class="row">
                <div class="col-md-12" style='padding:5px 60px 20px 60px;'>
                  <div class="row">
                    <p class="stext-102 cl3 p-t-23"><h4>Description:</h4>
                  <?php echo $fpackagevalue['pdescription'];?>
                   </p>
                 </div>
                 <div class="row">
                   <p class="stext-102 cl3 p-t-23"><h4>Itinerary:</h4>
                 <?php echo $fpackagevalue['pitinerary'];?>
                  </p>

                  </div>

                  <div class="row">
                    <!--  -->
                    <div class="flex-w flex-m p-l-100 p-t-40 respon7">
                      <div class="flex-m bor9 p-r-10 m-r-11">
                        <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
                          <i class="zmdi zmdi-favorite"></i>
                        </a>
                      </div>

                      <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
                        <i class="fa fa-facebook"></i>
                      </a>

                      <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
                        <i class="fa fa-twitter"></i>
                      </a>

                      <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
                        <i class="fa fa-google-plus"></i>
                      </a>
                    </div>
                  </div>
                </div>


               </div>
            </div>
          </div>
        </div>


      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<?php
}} ?>
<!--Vehicle Rental modal-->
<?php
$vehiclevar=$display->fgetAllVehicle();
foreach($vehiclevar as $key => $fvehiclevalue)
{

  ?>
<div class="modal fade" id="vehicleModal<?php echo $fvehiclevalue['vid']?>">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><?php echo $fvehiclevalue['vtitle']; ?> </h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">


        <div class="container">
          <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
            <div class="row ">
              <div class="col-md-6 col-lg-7 p-b-30">
                <div class="p-l-25 p-r-30 p-lr-0-lg">
                  <div class="wrap-slick3 flex-sb flex-w">
                    <div class="wrap-slick3-dots"></div>
                    <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
                    <form action="vehiclebookingdetail.php?mes=book" method="GET">
                      <input type="hidden" name="vid" value="<?php echo $fvehiclevalue['vid'];?>">
                      <div class="slick3 gallery-lb">
                        <div class="item-slick3" data-thumb="<?php echo $fvehiclevalue['vimg1']?>">
                          <div class="wrap-pic-w pos-relative">
                            <img src="<?php echo $fvehiclevalue['vimg1']?>" alt="IMG-PRODUCT">

                            <!-- <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="$image1">
                            <i class="fa fa-expand"></i> -->
                          </a>
                        </div>
                      </div>

                      <div class="item-slick3" data-thumb="<?php echo $fvehiclevalue['vimg2']?>">
                        <div class="wrap-pic-w pos-relative">
                          <img src="<?php echo $fvehiclevalue['vimg2']?>" alt="IMG-PRODUCT">

                          <!-- <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/p2.jpg">
                          <i class="fa fa-expand"></i> -->
                        </a>
                      </div>
                    </div>

                    <!-- <div class="item-slick3" data-thumb="images/pa6.jpg">
                      <div class="wrap-pic-w pos-relative">
                        <img src="images/pa6.jpg" alt="IMG-PRODUCT">

                        <!-- <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/pa6.jpg"> -->
                        <!-- <i class="fa fa-expand"></i> -->
                      <!-- </a>
                    </div>
                  </div> -->
                </div>
              </div>
              <span class="heading">Tags</span>
              <ul class="tags">
                <?php
                 $vid=$fvehiclevalue['vid'];
                  $fvehicle->fgetKeywordvehicle($vid);
                ?>
              </ul>


            </div>
          </div>

          <div class="col-md-6 col-lg-5 p-b-30">
            <div class="col-md-12">

              <h4 class="mtext-105 cl2 js-name-detail p-b-14" style="font-weight:bolder;text-transform:capitalize;margin-bottom:-5px;">
                <?php echo $fvehiclevalue['vtitle'];?>
              </h4>
              <span class="mtext-106 cl2" style="color:#003E80;text-transform:uppercase;">

              <?php
              $vendorid=$fvehiclevalue['id'];
              $vendorvar=$fvehicle->vendordetail($vendorid);
              foreach($vendorvar as $key =>$vendorvalue)
              {
                echo $vendorvalue['company_name'];
              }
               ?>
             </span><br>
              <span class="mtext-106 cl2" style="color:red;">
                Rs.<?php echo $fvehiclevalue['vcost'];?> </span>Per day
                <br><br>
                <h4 class="mtext-104 cl2 js-name-detail p-b-14" >Total seat=
                  <?php echo $fvehiclevalue['vtotalseat'];?>
                </h4>
                <div class="row ">
                  <div class="col-md-4">
                    Number of days:
                  </div>
                  <div class="col-md-8 ">
                    <div class="form-group">

                      <input type="text" class="form-control" placeholder="Number of days vehicle is required for" name="days" required>

                    </div>
                  </div>
                </div>

                  <div class="row ">
                    <div class="col-md-4">
                      Date:
                    </div>

                    <div class="col-md-8 ">
                      <div class="form-group">

                        <input type="date" class="form-control" placeholder="Select Date" name="date" required>

                      </div>
                    </div>


                    <div class="flex-w flex-r-m p-b-10">
                      <div class="size-204 flex-w flex-m respon6-next">
                        <input type="submit" value="Book Now" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                      </div>
                    </div>
                  </div>
                </form>
                </div>
              </div>
            </div><br>
            <div class="row">
              <div class="col-md-12" style='padding:5px 60px 20px 60px;'>
                <div class="row">
                  <p class="stext-102 cl3 p-t-23"><h4>Description:</h4>
                    <?php echo $fvehiclevalue['vdescription'];?>
                  </p>
                </div>
                <div class="row">


                </div>

                <div class="row">
                  <!--  -->
                  <div class="flex-w flex-m p-l-100 p-t-40 respon7">
                    <div class="flex-m bor9 p-r-10 m-r-11">
                      <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
                        <i class="zmdi zmdi-favorite"></i>
                      </a>
                    </div>

                    <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
                      <i class="fa fa-facebook"></i>
                    </a>

                    <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
                      <i class="fa fa-twitter"></i>
                    </a>

                    <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
                      <i class="fa fa-google-plus"></i>
                    </a>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
          </div>
        </div>


      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
</div>
<?php }  ?>
<?php include('include/inc_footer.php');?><script src="assets/vendor/slick/slick.min.js"></script>
<script src="assets/js/slick-custom.js"></script>
<script src="assets/vendor/select2/select2.min.js"></script>
<script>
  $(".js-select2").each(function(){
    $(this).select2({
      minimumResultsForSearch: 20,
      dropdownParent: $(this).next('.dropDownSelect2')
    });
  })
</script>

  <!--===============================================================================================-->


  <!--===============================================================================================-->
    <script src="assets/vendor/slick/slick.min.js"></script>
    <script src="assets/js/slick-custom.js"></script>
  <!--===============================================================================================-->
