<?php include('include/inc_header-home.php');
include_once('class/fclasshotel.php');
     $hotel=new fHotel();
     @$location=$_GET['slocation'];
if($_SERVER['REQUEST_METHOD']=='GET')
{
	extract($_GET);
 @$hotel->searchhotel($slocation);
}
 ?>
<div class="container-fluid">

<div class="row justify-content-md-center hotelbookingnav">
<?php include('include/inc_navigation.php'); ?>
    <div class="colorlib-wrap" >

        <div class="row">
          <div class="coverhotelbooking col-md-12" style="background:url('images/hotelcover1.jpg');background-attachment:fixed;  background-size:contain;">
            <!--SEARCH PORTION-->
              <div class="row justify-content-md-center offset-md-3" >
                    <form class="form-inline col-md-10 " action=" " method="GET">
                      <div class="btn btn-default hotels" >Hotels in  </div>
                      <select class="custom-select col-md-3" name="slocation">
                      <?php $hotel->getAllLocation();?>
                      </select>

                        <input type="submit" value="Find Hotel" class="btn btn-primary ml-2">
                    </form>
            </div>
            <!--END OF SEARCH PORTION -->

          </div>
        </div>

        <div class="row" style="margin-top:20px;">

          					<!-- SIDEBAR-->
          					<!-- <div class="col-md-3" >
          						<div class="sidebar-wrap ">
          							<div class="side search-wrap animate-box bg-primary" >
          								<h3 class="sidebar-heading">Find your hotel</h3>
          								<form method="post" class="colorlib-form">
          				              	<div class="row">
          				                <div class="col-md-12">
                                 <div class="form-group"><label for="date">Check-in:</label>
                                    <div class="input-group date" data-provide="datepicker">

                                        <input type="text" class="form-control" placeholder="Checkin date" >
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                                  </div>
          				                </div>
                                  <div class="col-md-12">
                                  <div class="form-group"><label for="date">Check-Out:</label>
                                     <div class="input-group date" data-provide="datepicker">

                                         <input type="text" class="form-control" placeholder="Checkout date">
                                         <div class="input-group-addon">
                                             <span class="glyphicon glyphicon-th"></span>
                                         </div>
                                     </div>
                                   </div>
                                 </div>
          				                <!-- <div class="col-md-12">
          				                  <div class="form-group">
          				                    <label for="guests">Guest</label>
          				                    <div class="form-field">
          				                      <i class="icon icon-arrow-down3"></i>
          				                      <select name="people" id="people" class="form-control">
          				                        <option value="#">1</option>
          				                        <option value="#">2</option>
          				                        <option value="#">3</option>
          				                        <option value="#">4</option>
          				                        <option value="#">5+</option>
          				                      </select>
          				                    </div>
          				                  </div>
          				                </div> -->
          				                <!-- <div class="col-md-12">
          				                  <input type="submit" name="submit" id="submit" value="Find Hotel" class="btn btn-default btn-block">
          				                </div>
          				              </div>
          				            </form>
          							</div>
          							<div class="side animate-box">
          								<div class="row">
          									<div class="col-md-12">
          										<h3 class="sidebar-heading">Price Range</h3>
          										<form method="post" class="colorlib-form-2">
          						              	<div class="row">
          						                <div class="col-md-6">
          						                  <div class="form-group">
          						                    <label for="guests">Price from:</label>
          						                    <div class="form-field">
          						                      <i class="icon icon-arrow-down3"></i>
          						                      <select name="people" id="people" class="form-control">
          						                        <option value="#">1</option>
          						                        <option value="#">200</option>
          						                        <option value="#">300</option>
          						                        <option value="#">400</option>
          						                        <option value="#">1000</option>
          						                      </select>
          						                    </div>
          						                  </div>
          						                </div>
          						                <div class="col-md-6">
          						                  <div class="form-group">
          						                    <label for="guests">Price to:</label>
          						                    <div class="form-field">
          						                      <i class="icon icon-arrow-down3"></i>
          						                      <select name="people" id="people" class="form-control">
          						                        <option value="#">2000</option>
          						                        <option value="#">4000</option>
          						                        <option value="#">6000</option>
          						                        <option value="#">8000</option>
          						                        <option value="#">10000</option>
          						                      </select>
          						                    </div>
          						                  </div>
          						                </div>
          						              </div>
          						            </form>
          					            </div>
          								</div>
          							</div> -->
          							<!-- <div class="side animate-box">
          								<div class="row">
          									<div class="col-md-12">
          										<h3 class="sidebar-heading">Review Rating</h3>
          										<form method="post" class="colorlib-form-2">
          										   <div class="form-check">
          												<input type="checkbox" class="form-check-input" id="exampleCheck1">
          												<label class="form-check-label" for="exampleCheck1">
          													<p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="glyphicon glyphicon-star-empty"></i><i class="icon-star-full"></i>

                                    </span></p>
          												</label>
          										   </div>
          										   <div class="form-check">
          										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
          										      <label class="form-check-label" for="exampleCheck1">
          										    	   <p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
          										      </label>
          										   </div>
          										   <div class="form-check">
          										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
          										      <label class="form-check-label" for="exampleCheck1">
          										      	<p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
          										     </label>
          										   </div>
          										   <div class="form-check">
          										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
          										      <label class="form-check-label" for="exampleCheck1">
          										      	<p class="rate"><span><i class="icon-star-full"></i><i class="icon-star-full"></i></span></p>
          										     </label>
          										   </div>
          										   <div class="form-check">
          										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
          										      <label class="form-check-label" for="exampleCheck1">
          										      	<p class="rate"><span><i class="icon-star-full"></i></span></p>
          										     </label>
          										   </div>
          										</form>
          									</div>
          								</div>
          							</div> -->
          							<!-- <div class="side animate-box">
          								<div class="row">
          									<div class="col-md-12">
          										<h3 class="sidebar-heading">Categories</h3>
          										<form method="post" class="colorlib-form-2">
          										   <div class="form-check">
          												<input type="checkbox" class="form-check-input" id="exampleCheck1">
          												<label class="form-check-label" for="exampleCheck1">
          													<h4 class="place">Homestay</h4>
          												</label>
          										   </div>
          										   <div class="form-check">
          										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
          										      <label class="form-check-label" for="exampleCheck1">
          													<h4 class="place">Hotel</h4>
          												</label>
          										   </div>
          										   <div class="form-check">
          										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
          										      <label class="form-check-label" for="exampleCheck1">
          													<h4 class="place">Hostel</h4>
          												</label>
          										   </div>
          										   <div class="form-check">
          										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
          										      <label class="form-check-label" for="exampleCheck1">
          													<h4 class="place">Resort</h4>
          												</label>
          										   </div>
          										</form>
          									</div>
          								</div>
          							</div> -->
          							<!-- <div class="side animate-box">
          								<div class="row">
          									<div class="col-md-12">
          										<h3 class="sidebar-heading">Location</h3>
          										<form method="post" class="colorlib-form-2">
          										   <div class="form-check">
          												<input type="checkbox" class="form-check-input" id="exampleCheck1">
          												<label class="form-check-label" for="exampleCheck1">
          													<h4 class="place">Greece</h4>
          												</label>
          										   </div>
          										   <div class="form-check">
          										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
          										      <label class="form-check-label" for="exampleCheck1">
          													<h4 class="place">Italy</h4>
          												</label>
          										   </div>
          										   <div class="form-check">
          										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
          										      <label class="form-check-label" for="exampleCheck1">
          													<h4 class="place">Spain</h4>
          												</label>
          										   </div>
          										   <div class="form-check">
          										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
          										      <label class="form-check-label" for="exampleCheck1">
          													<h4 class="place">Germany</h4>
          												</label>
          										   </div>
          										   <div class="form-check">
          										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
          										      <label class="form-check-label" for="exampleCheck1">
          													<h4 class="place">Japan</h4>
          												</label>
          										   </div>
          										</form>
          									</div>
          								</div>
          							</div> -->
          							<!-- <div class="side animate-box">
          								<div class="row">
          									<div class="col-md-12">
          										<h3 class="sidebar-heading">Facilities</h3>
          										<form method="post" class="colorlib-form-2">
                                <div class="form-check">
                                 <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                 <label class="form-check-label" for="exampleCheck1">
                                   <h4 class="place">Wifi</h4>
                                 </label>
                                </div>
                                <div class="form-check">
                                 <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                 <label class="form-check-label" for="exampleCheck1">
                                   <h4 class="place">Hot Water</h4>
                                 </label>
                                </div>
                                <div class="form-check">
                                 <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                 <label class="form-check-label" for="exampleCheck1">
                                   <h4 class="place">Air Condtioning</h4>
                                 </label>
                                </div>


                                 <div class="form-check">
          												<input type="checkbox" class="form-check-input" id="exampleCheck1">
          												<label class="form-check-label" for="exampleCheck1">
          													<h4 class="place">Airport Transfer</h4>
          												</label>
          										   </div>
          										   <div class="form-check">
          										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
          										      <label class="form-check-label" for="exampleCheck1">
          													<h4 class="place">Resto Bar</h4>
          												</label>
          										   </div>
          										   <div class="form-check">
          										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
          										      <label class="form-check-label" for="exampleCheck1">
          													<h4 class="place">Restaurant</h4>
          												</label>
          										   </div>
          										   <div class="form-check">
          										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
          										      <label class="form-check-label" for="exampleCheck1">
          													<h4 class="place">Swimming Pool</h4>
          												</label>
          										   </div>
          										  </form>
          									</div>
          								</div>
          							</div>
          						</div>
          					</div> -->
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
              $hotelvariable=$hotel->searchhotel($slocation);
              foreach($hotelvariable as $key => $searchresult)
              {
                $hid=$searchresult['id'];
                $htype=$searchresult['vtype'];
                switch($htype)
                {
                  case '1':
                  {$nhtype='Hotel';
                    break;
                  }
                  case '2':
                  {
                    $nhtype='Homestay';
                  }
                };

                ?>


                      <a href="hotelroom.php?hid=<?php  echo $searchresult['id'];?>" style="text-decoration:none;">
            <div class="col-md-4 fh5co-tours animate-box" data-animate-effect="fadeIn">
              <div href="#"><img src="<?php echo $searchresult['image']; ?>" alt="hotel image here" class="img-responsive" style="width:100%;">
                <!-- <div class="box">
                                 <div class="ribbon"><span>Something</span></div>
                 </div> -->

                <div class="desc">
                  <span></span>
                  <h3 style="text-transform:capitalize;"><?php echo $searchresult['company_name'] ?></h3>
                  <span class="location"><img src="images/placeholder.png" style="height:30px;"> <?php echo $searchresult['location'] ?></span>
                  <span class="price">Starting from Rs.

                  <?php
                  $minvar=$hotel-> fgetminroom($hid);
                  foreach($minvar as $key => $minvalue)
                  {
                    echo  $minvalue['minimum'];
                  }
                  ?>
              / night</span>

                  <a class="btn btn-default btn-round btn-outline" href="#" style="text-transform:capitalize;">
                    <?php echo $htype; ?> </a>
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
              $hotel->fgetAllHotel();
            }

            ?>

        </div><!--STARTING DIV IS INSIDE THE CLASS-->

      </div>

				</div>

							</div>

				</div>
        <!-- <div class="row justify-content-md-center" >
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
        </div> -->

			</div>
		</div>
      <?php include('include/inc_footer.php');?>
      <!-- Magnific Popup -->
      	<script src="assets/js/jquery.magnific-popup.min.js"></script>
      	<script src="assets/js/magnific-popup-options.js"></script>
    	<!-- Date Picker -->
    	<script src="assets/js/bootstrap-datepicker.js"></script>
