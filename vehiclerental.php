<?php
include('class/fclassvehiclerental.php');
$fvehicle=new fvehicle();
@$category=$_GET['category'];
if($_SERVER['REQUEST_METHOD']=='GET')
{
	extract($_GET);
	@$fvehicle->searchvehicle($category);
}
include('include/inc_header-home.php');?>
<div class="container-fluid">

	<div class="row justify-content-md-center hotelbookingnav">

		<?php include('include/inc_navigation.php');?>


		<!--</div-->
		<div class="row" style="">


			<div class="covervehicle col-md-12" style="background:url('images/road.jpg');background-attachment:fixed;  background-size:cover;">
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
	<!-- <div class="row justify-content-md vehiclecover">
	PACAKAGES
</div> -->


<!-- Start vehicles Area -->
<section class="vehicle-area " id="vehicle" style="height:180px;">
	<div class="fvehicle col-md-12" style="">
		<div class="row d-flex justify-content-md-center">
			<div class="col-md-6 pb-80 header-text " style="text-align:center;">
				<h1 style="text-shadow:1px 2px black;">VEHICLES</h1>

			</div>
		</div>
		<div class="row justify-content-md-center "  style="">
			<nav class="menu_splash" style="position:relative;left:0px;top:0px;">
				<div class="row justify-content-md-center ">
					<ul id="menu_splash" class="clearfix" >
						<li class="nav1 ">
							<a href="#" class="rollover">
								<div class="cube">
									<div class="front">
										<img src="images/bike.png" alt="" class="img_icon">
										<div class="txt1">Bikes</div>
									</div>
									<div class="back" style="overflow:hidden;">
										<img src="images/bike.png" alt="" class="img_icon">
										<div class="txt1"><form action=" " method="GET">
											<input type="hidden" name="category" value="bike">

											<input type="submit" value="Bikes" class="col-md-12">
										</form></div>
									</div>
								</div>
							</a>
						</li>
						<li class="nav2">
							<a href="#" class="rollover">
								<div class="cube">
									<div class="front">
										<img src="images/motorcycle.png" alt="" class="img_icon">
										<div class="txt1">Motor Cycles</div>
									</div>
									<div class="back" style="overflow:hidden;">
										<img src="images/motorcycle.png" alt="" class="img_icon">
										<div class="txt1"><form action=" " method="GET">
											<input type="hidden" name="category" value="motorcycle">

											<input type="submit" value="Motor Cycles" class="col-md-12">
										</form></div>
									</div>
								</div>
							</a>
						</li>
						<li class="nav3">
							<a href="#" class="rollover">
								<div class="cube">
									<div class="front">
										<img src="images/car.png" alt="" class="img_icon">
										<div class="txt1">Cars</div>
									</div>
									<div class="back" style="overflow:hidden;">
										<img src="images/car2.png" alt="" class="img_icon">
										<div class="txt1"><form action=" " method="GET">
											<input type="hidden" name="category" value="car">

											<input type="submit" value="Car" class="col-md-12">
										</form></div>
									</div>
								</div>
							</a>
						</li>
						<li class="nav5">
							<a href="#" class="rollover">
								<div class="cube">
									<div class="front">
										<img src="images/suv.png" alt="" class="img_icon">
										<div class="txt1">4WD</div>
									</div>
									<div class="back" style="overflow:hidden;">
										<img src="images/pickup.png" alt="" class="img_icon">
										<div class="txt1"><form action=" " method="GET">
											<input type="hidden" name="category" value="4WD">

											<input type="submit" value="4WD" class="col-md-12">
										</form></div>
									</div>
								</div>
							</a>
						</li>
						<li class="nav4">
							<a href="#" class="rollover">
								<div class="cube">
									<div class="front">
										<img src="images/micro.png" alt="" class="img_icon">
										<div class="txt1">MicroBus</div>
									</div>
									<div class="back" style="overflow:hidden;">
										<img src="images/micro.png" alt="" class="img_icon">
										<div class="txt1"><form action=" " method="GET">
											<input type="hidden" name="category" value="micro">

											<input type="submit" value="MicroBus" class="col-md-12">
										</form></div>
									</div>
								</div>
							</a>
						</li>


					</ul>
				</div>
			</nav>


		</div>
	</div>
</section>
<!-- End vehicle Area -->
<!--END OF SEARCH PORTION -->

</div>
</div>
<!-- <div class="row">
<div class="flex-w flex-c-m m-tb-10">
	<div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">

		 Filter
	</div>


</div>
<div class="dis-none panel-filter w-full p-t-10">
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

					<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
						Low to High
					</a>
				</li>

				<li class="p-b-6">
					<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
						High to Low
					</a>
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
</div>
</div> -->
<div class="row" >
	<!--header-->
	<!--//header-->
	<!--main-->
	<!-- pricing plans -->
	<div class="pricing col-md-12" style="background:#FFFFFF;background-size:cover;padding:20px 50px 50px 50px;">


		<div class="row vehiclelist" style="margin-top:25px;" >

			<?php
			if($category)
			{
				?>
				<div class=" col-md-12 mb-2">
					<kbd style="text-align:left;font-size:15px;">Search Result for <span style="color:#007BFF; font-size:20px;"><?php echo $category;?></span></kbd>
				</div><br>
				<?php
				$fvehicle2=$fvehicle->searchvehicle($category);
				foreach($fvehicle2 as $key => $fsearchvalue)
				{
					?>
					<div class="col-md-3 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn" >
						<div href="#" style="box-shadow:0px 3px 5px black;border-radius:5px;" ><img src="<?php echo $fsearchvalue['vimg1'];?>" class="img-responsive" >
							<div class="desc">
								<span></span>
								<span class="vehicle-title" ><?php echo $fsearchvalue['vtitle']?></span>

								<section class="price badge badge-pill badge-primary" >Rs.<?php echo $fsearchvalue['vcost']?> per day</section><br>
								<!-- Button to Open the Modal -->
								<a href="#" data-toggle="modal" data-target="#myModal<?php echo $fsearchvalue['vid']?>">
									<button class="btn btn-primary btn-outline">Details</button>
								</a>
							</div>
						</div>
					</div>
				<?php }
			}
			else {
				?>

				<?php
				$fvehicle1=$fvehicle->fgetAllvehicle();
				foreach($fvehicle1 as $key => $fvehiclevalue)
				{
					$vid=$fvehiclevalue['vid'];
					?>

					<div class="col-md-3 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn" >
						<div href="#" style="box-shadow:0px 3px 5px black;border-radius:5px;" ><img src="<?php echo $fvehiclevalue['vimg1'];?>" class="img-responsive" >
							<div class="desc">
								<span></span>
								<span class="vehicle-title" ><?php echo $fvehiclevalue['vtitle']?></span>

								<section class="price badge badge-pill badge-primary" >Rs.<?php echo $fvehiclevalue['vcost']?> per day</section><br>
								<!-- Button to Open the Modal -->
								  <form action=" " method="POST">
								<a href="#" data-toggle="modal" data-target="#myModal<?php echo $fvehiclevalue['vid']?>">
									<input type="hidden" name="vid" value="<?php echo $fvehiclevalue['vid']?>">
                  <!-- <input type="hidden" name="action" value="counter"> -->

                  <input type="submit" class="btn btn-primary btn-outline test" name="action" value="Detail" onclick="increaseCounter(<?php echo $vid; ?>)">
				  <script>
					function increaseCounter(vid){
						$.post("class/vehicleCounter.php",
						{
							vcount_id : vid
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
				<?php } } ?>
			</div>
		</div>
	</div>
</div>
</div>
</div>

<!-- The Modal -->
<?php
$fvehicle1=$fvehicle->fgetAllvehicle();
foreach($fvehicle1 as $key => $fvehiclevalue)
{
	$image1=$fvehiclevalue['vimg1'];
	?>
	<div class="modal fade" id="myModal<?php echo $fvehiclevalue['vid']?>">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title"><?php echo $fvehiclevalue['vtitle']; ?></h4>
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


				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>

			</div>
		</div>
	</div>

<?php }?>


<!-- //pricing plans -->
<!--//main-->
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
