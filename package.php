<?php
include('class/fclasspackage.php');
$fpackage=new fPackage();
   @$category=$_GET['pcategory'];
//if($_SERVER['REQUEST_METHOD']=='GET')
if(isset($_POST["action"]))
{
if($_POST["action"] == "Detail")
{
  extract($_POST);
  @$fpackage->updateCounter($pid);
}
}
if($_SERVER['REQUEST_METHOD']=='GET')
{
	extract($_GET);
 @$fpackage->searchpackage($pcategory);
}
include('include/inc_header-home.php'); ?>
<div class="container-fluid">

  <div class="row justify-content-md-center hotelbookingnav">
    <?php include('include/inc_navigation.php'); ?>
    <!-- </div> -->

    <div class="row" style="">


      <div class="coverhotelbooking col-md-12" style="background:url('images/packages.jpg');background-attachment:fixed;  background-size:cover;">
        <!--SEARCH PORTION-->
        <!-- <div class="row justify-content-md-center offset-md-3" >
        <form class="form-inline col-md-10 "  >
        <div class="btn btn-default hotels" >Hotels in  </div>
        <select class="custom-select col-md-3">
        <option>Choose</option>
        <option>Kathmandu</option>
        <option>Pokhara</option>
        <option>Chitwan</option>
        <option>Mustang</option>
        <option>Lumbini</option>
      </select>
      <input type="submit" value="Find Hotel" class="btn btn-primary ml-2">
    </form>
  </div> -->
  <!-- <div class="row justify-content-md packagecover">
  PACAKAGES
</div> -->


<!-- Start packages Area -->
<section class="packages-area " id="package" style="height:190px;">
  <div class="fpackage col-md-12" style="">
    <div class="row d-flex justify-content-md-center">
      <div class="col-md-6 pb-80 header-text">
        <h1>CATEGORIES</h1>

      </div>
    </div>
    <div class="row justify-content-md-center">
      <nav class="menu_splash" style="position:relative;left:0px;top:0px;">
        <div class="row justify-content-md-center ">
        <ul id="menu_splash" class="clearfix" >
          <li class="nav1 ">
            <a href="#" class="rollover">
              <div class="cube">
                <div class="front">
                  <img src="images/hike.png" alt="" class="img_icon">
                  <div class="txt1">Hiking</div>

                </div>
                <div class="back" style="overflow:hidden;">
                  <img src="images/hike.png" alt="" class="img_icon">
                  <div class="txt1">  <form action=" " method="GET">
                      <input type="hidden" name="pcategory" value="hiking">

                      <input type="submit" value="Hiking" class="col-md-12">
                    </form></div>
                </div>
              </div>
            </a>
          </li>
          <li class="nav2">
            <a href="#" class="rollover">
              <div class="cube">
                <div class="front">
                  <img src="images/trekking.png" alt="" class="img_icon">
                  <div class="txt1">Treking</div>
                </div>
                <div class="back" style="overflow:hidden;">
                  <img src="images/trekking.png" alt="" class="img_icon">
                  <div class="txt1">  <form action=" " method="GET">
                      <input type="hidden" name="pcategory" value="trekking">

                      <input type="submit" value="Trekking" class="col-md-12">
                    </form></div>
                </div>
              </div>
            </a>
          </li>
          <li class="nav3">
            <a href="#" class="rollover">
              <div class="cube">
                <div class="front">
                  <img src="images/religious.png" alt="" class="img_icon">
                  <div class="txt1">Religious Tour</div>
                </div>
                <div class="back" style="overflow:hidden;">
                  <img src="images/religious.png" alt="" class="img_icon">
                  <div class="txt1"><form action=" " method="GET">
                    <input type="hidden" name="pcategory" value="religious">

                    <input type="submit" value="Religious Tour" class="col-md-12">
                  </form></div>
                </div>
              </div>
            </a>
          </li>
          <li class="nav4">
            <a href="#" class="rollover">
              <div class="cube">
                <div class="front">
                  <img src="images/site.png" alt="" class="img_icon">
                  <div class="txt1">Site Seeing</div>
                </div>
                <div class="back" style="overflow:hidden;">
                  <img src="images/site.png" alt="" class="img_icon">
                  <div class="txt1"><form action=" " method="GET">
                    <input type="hidden" name="pcategory" value="site">

                    <input type="submit" value="Site Seeing" class="col-md-12">
                  </form></div>
                </div>
              </div>
            </a>
          </li>
          <li class="nav4">
            <a href="#" class="rollover">
              <div class="cube">
                <div class="front">
                  <img src="images/tour.png" alt="" class="img_icon">
                  <div class="txt1">Tours</div>
                </div>
                <div class="back" style="overflow:hidden;">
                  <img src="images/tour.png" alt="" class="img_icon">
                  <div class="txt1"><form action=" " method="GET">
                    <input type="hidden" name="pcategory" value="tour">

                    <input type="submit" value="Tour" class="col-md-12">
                  </form></div>
                </div>
              </div>
            </a>
          </li>


        </ul>
      </div>
      </nav>
      <!-- <div class="col-md-2 single-packages no-padding">
        <div class="content">

            <div class="content-overlay"></div>
            <img class="packageimage" style="width:100%;" src="images/t2.jpg" alt="">
            <div class="content-details fadeIn-bottom">
              <form action=" " method="GET">
                <input type="hidden" name="pcategory" value="hiking">

                <input type="submit" value="Hiking" class="col-md-12">
              </form>
            </div>

        </div>
      </div>
      <div class="col-md-2 single-packages no-padding">
        <div class="content">
          <a href="#" target="_blank">
            <div class="content-overlay"></div>
            <img class="content-image img-fluid d-block mx-auto" src="images/t1.jpg" alt="">
            <div class="content-details fadeIn-bottom">
              <form action=" " method="GET">
                <input type="hidden" name="pcategory" value="trekking">

                <input type="submit" value="Trekking" class="col-md-12">
              </form>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-2 single-packages no-padding">
        <div class="content">
          <a href="#" target="_blank">
            <div class="content-overlay"></div>
            <img class="content-image img-fluid d-block mx-auto" src="images/t3.jpg" alt="">
            <div class="content-details fadeIn-bottom">
              <form action=" " method="GET">
                <input type="hidden" name="pcategory" value="religious">

                <input type="submit" value="Religious Tour" class="col-md-12">
              </form>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-2 single-packages no-padding">
        <div class="content">
          <a href="#" target="_blank">
            <div class="content-overlay"></div>
            <img class="content-image img-fluid d-block mx-auto" src="images/t4.jpg" alt="">
            <div class="content-details fadeIn-bottom">
              <form action=" " method="GET">
                <input type="hidden" name="pcategory" value="site">

                <input type="submit" value="Site Seeing" class="col-md-12">
              </form>
            </div>
          </a>
        </div>
      </div> -->

      <!-- <div class="col-md-2 single-packages no-padding">
        <div class="content">
          <a href="#" target="_blank">
            <div class="content-overlay"></div>
            <img class="content-image img-fluid d-block mx-auto" src="images/t5.jpg" alt="">
            <div class="content-details fadeIn-bottom">
              <form action=" " method="GET">
                <input type="hidden" name="pcategory" value="tour">

                <input type="submit" value="Tour" class="col-md-12">
              </form>
            </div>
          </a>
        </div>
      </div> -->
    </div>
  </div>
</section>
<!-- End packages Area -->
<!--END OF SEARCH PORTION -->

</div>
</div>
<div class="row" >
  <!--header-->
  <!--//header-->
  <!--main-->
  <!-- pricing plans -->
  <div class="pricing col-md-12" style="background:#FFFFFF;background-size:cover;padding:20px 50px 50px 50px;">
    <div class="row packagelist" >

      <?php

      if($category)
      {?>
        <div class=" col-md-12 mb-2">
    <kbd style="text-align:left;font-size:15px;">Search Result for Packages related to <span style="color:#007BFF; font-size:20px;"><?php echo $category;?></span></kbd>
  </div><br>
  <?php
        $fpackagevar=$fpackage->searchpackage($pcategory);
        foreach($fpackagevar as $key => $fsearchvalue)
        {
          $pid=$fsearchvalue['pid'];

          ?>
          <div class="col-md-3 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn" >
            <div href="#" style="box-shadow:0px 3px 5px black;border-radius:5px;" ><img src="<?php echo $fsearchvalue['pimg1'];?>" class="img-responsive" >
              <div class="desc">
                <span></span>
                <span class="package-title" ><?php echo $fsearchvalue['pname']?></span>
                <span><?php echo $fsearchvalue['pduration']?> days </span>
                <section class="price badge badge-pill badge-primary" >Rs.<?php echo $fsearchvalue['pcost']?></section><br>
                <!-- Button to Open the Modal -->
                <form action=" " method="POST">
                  <a href="#" data-toggle="modal" data-target="#myModal<?php echo $fsearchvalue['pid']?>">

                    <input type="hidden" name="pid" value="<?php echo $fsearchvalue['pid']?>">
                    <!-- <input type="hidden" name="action" value="counter"> -->

                    <input type="submit" class="btn btn-primary btn-outline test" name="action" value="Detail" onclick="increaseCounter(<?php echo $pid; ?>)">
  				  <script>
  					function increaseCounter(pid){
  						$.post("class/packageCounter.php",
  						{
  							pcount_id : pid
  						},
  						function(data, status){
  							console.log(data);
  						});
  					}
  				  </script>
                  </a>

                </form>
              </div>
            </div>
          </div>
        <?php }
      }
      else {



      $fpackagev=$fpackage->fgetAllPackage();
      foreach($fpackagev as $key => $fpackagevalue)
      {
        $pid=$fpackagevalue['pid'];
        ?>
        <div class="col-md-3 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn" >
          <div href="#" style="box-shadow:0px 3px 5px black;border-radius:5px;" ><img src="<?php echo $fpackagevalue['pimg1'];?>" class="img-responsive" >
            <div class="desc">
              <span></span>
              <span class="package-title" ><?php echo $fpackagevalue['pname']?></span>
              <span><?php echo $fpackagevalue['pduration']?> days </span>
              <section class="price badge badge-pill badge-primary" >Rs.<?php echo $fpackagevalue['pcost']?></section><br>
              <!-- Button to Open the Modal -->
              <form action=" " method="POST">
                <a href="#" data-toggle="modal" data-target="#myModal<?php echo $fpackagevalue['pid']?>">

                  <input type="hidden" name="pid" value="<?php echo $fpackagevalue['pid']?>">
                  <!-- <input type="hidden" name="action" value="counter"> -->

                  <input type="submit" class="btn btn-primary btn-outline test" name="action" value="Detail" onclick="increaseCounter(<?php echo $pid; ?>)">
				  <script>
					function increaseCounter(pid){
						$.post("class/packageCounter.php",
						{
							pcount_id : pid
						},
						function(data, status){
							console.log(data);
						});
					}
				  </script>
                </a>

              </form>
            </div>
          </div>
        </div>
      <?php }
    }?>
    </div>
  </div>
</div>
</div>
</div>
</div>

<!-- The Modal -->
<?php
$fpackagev=$fpackage->fgetAllPackage();
foreach($fpackagev as $key => $fpackagevalue)
{
  $pid=$fpackagevalue['pid'];
  $vendorid=$fpackagevalue['id'];
  $fvendorv=$fpackage->fgetAllVendor($vendorid);
  foreach($fvendorv as $key => $fvendorvalue)
  {
    ?>
    <div class="modal fade" id="myModal<?php echo $fpackagevalue['pid']?>">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <?php
          //$fpackage->add_counter($pid);
          ?>
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
                          <input type="number" name="totalno" class="form-control" placeholder="Total Number of people" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        Date:
                      </div>


                      <div class="col-md-8 ">
                        <div class="form-group">

                          <input type="date" class="form-control" name="customdate" placeholder="Select Date" required>

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

<?php } }?>


<!-- //pricing plans -->
<!--//main-->
<?php include('include/inc_footer.php');?>
<script src="assets/vendor/slick/slick.min.js"></script>
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
