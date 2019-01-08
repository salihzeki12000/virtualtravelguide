<?php include('include/inc_header-home.php');
include_once('class/fclasshomestay.php');
     $homestay=new fHomestay();
     @$location=$_GET['hslocation'];
// if($_SERVER['REQUEST_METHOD']=='GET')
// {
// 	extract($_GET);
//  @$homestay->searchhomestay($hslocation);
// }
 ?>
<div class="container-fluid">

<div class="row justify-content-md-center hotelbookingnav">
<?php include('include/inc_navigation.php'); ?>
    <div class="colorlib-wrap" >

        <div class="row">
          <div class="coverhotelbooking col-md-12" style="background:url('images/ghandrul.jpg');background-attachment:fixed;  background-size:contain;">
            <!--SEARCH PORTION-->
              <div class="row justify-content-md-center offset-md-3" >
                    <form class="form-inline col-md-10 " action=" " method="GET">
                      <div class="btn btn-default hotels" >Homestays in  </div>
                      <select class="custom-select col-md-3" name="slocation">
                      <?php $homestay->getAllLocation();?>
                      </select>

                        <input type="submit" value="Find Homestay" class="btn btn-primary ml-2">
                    </form>
            </div>
            <!--END OF SEARCH PORTION -->

          </div>
        </div>

        <div class="row" style="margin-top:20px;">


					<div class="col-md-12 " style="//padding:0px 50px 0px 50px;">
            <div class="row">

            <?php
            if($location)
            {?>

              <div class="col-md-12 " style="padding:0px 50px 0px 50px;">
                <div class="row mb-2">
            <kbd style="text-align:left;font-size:15px;">Search Result for Hotels in<span style="color:#007BFF; font-size:20px;"> <?php echo $location;?></span></kbd>
          </div>


                              <div class="row  ">
            <?php
              $homestayvariable=$homestay->searchhomestay($hslocation);
              foreach($homestayvariable as $key => $searchresult)
              {
                $hsid=$searchresult['hsid'];


                ?>


                      <a href="hotelroom.php?hid=<?php  echo $searchresult['hsid'];?>" style="text-decoration:none;">
            <div class="col-md-4 fh5co-tours animate-box" data-animate-effect="fadeIn">
              <div href="#"><img src="<?php echo $searchresult['hsimg1']; ?>" alt="hotel image here" class="img-responsive" style="width:100%;">
                <!-- <div class="box">
                                 <div class="ribbon"><span>Something</span></div>
                 </div> -->

                <div class="desc">
                  <span></span>
                  <h3 style="text-transform:capitalize;"><?php echo $searchresult['hstitle'] ?></h3>
                  <span class="location"><img src="images/placeholder.png" style="height:30px;"> <?php echo $searchresult['hslocation'] ?></span>


                  <a class="btn btn-default btn-round btn-outline" href="#" style="text-transform:capitalize;">
                    adsd </a>
                </div>
              </div>

        </div>
          </a>
          <?php
        }?>
      </div>
    </div>
    <?php
            }
            else {
              $homestay->fgetAllHomestay();
            }

            ?>

        </div><!--STARTING DIV IS INSIDE THE CLASS-->

      </div>

				</div>

							</div>

				</div>
        <div class="row justify-content-md-center" >
          <nav aria-label="...">
              <ul class="pagination">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item ">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
        </div>

			</div>
		</div>
      <?php include('include/inc_footer.php');?>
      <!-- Magnific Popup -->
      	<script src="assets/js/jquery.magnific-popup.min.js"></script>
      	<script src="assets/js/magnific-popup-options.js"></script>
    	<!-- Date Picker -->
    	<script src="assets/js/bootstrap-datepicker.js"></script>
