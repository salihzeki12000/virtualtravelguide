<?php include_once('include/inc_header-home.php'); ?>
<div class="container-fluid">
  <div class="row justify-content-md-center busbookingnav">
    <?php include_once('include/inc_navigation.php'); ?>
  </div>
  <div class="row">
    <div class="coverbusbooking col-md-12" style="background:url('images/b5.jpg');background-attachment:fixed;  background-size:cover;">
      <!--SEARCH PORTION-->
        <div class="row justify-content-md-center offset-md-1" >
              <form class="form-inline col-md-10 "  >
                <select class="custom-select col-md-3">
                  <option selected>FROM</option>
                  <option value="1">Kathmandu</option>
                  <option value="2">Pokhara</option>
                  <option value="3">Chitwan</option>
                </select>
                <select class="custom-select col-md-3">
                  <option selected>TO </option>
                  <option value="1">Kathmandu</option>
                  <option value="2">Pokhara</option>
                  <option value="3">Chitwan</option>
                </select>
                <input type="number" placeholder="date" class="form-control col-md-2">
                <select class="custom-select col-md-2">
                  <option selected>SHIFT</option>
                  <option value="1">Day</option>
                  <option value="2">Night</option>

                </select>
                  <input type="submit" value="Search" class="btn btn-primary">
              </form>
      </div>
      <!--END OF SEARCH PORTION -->

    </div>
  </div>
  <div class="row">
    <div id="fh5co-features">

			<div class="col-md-10 offset-md-1">
        <div class="row">
        <h2>  FEATURES<sup>*</sup></h2>
        </div>
				<div class="row justify-content-md-center ">

					<div class="col-md-4 busfeature  ">

						<div class="feature-left ">
              <div class="row justify-content-md-center">
								<img src="images/wifib.png" class="img-responsive">
              </div>
							<div class="feature-copy ">
								<h3>Free Wi-Fi </h3>
								<p>Wi-Fi is free on all our buses, for all passengers. We see it as a must-have these days, not a premium feature.</p>
								<p><a href="#">Learn More</a></p>
							</div>
						</div>

					</div>

					<div class="col-md-4 animate-box busfeature">
						<div class="feature-left">
              <div class="row justify-content-md-center">
								<img src="images/recliningb.png" class="img-responsive">
              </div>
							<div class="feature-copy">
								<h3>Reclining Seat</h3>
								<p>Our comfy seats are adjustable and have a handy footrest, so you can find just the right spot to relax. </p>
								<p><a href="#">Learn More</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box busfeature ">
						<div class="feature-left">
              <div class="row justify-content-md-center">
                <img src="images/storageb.png" class="img-responsive">
              </div>
							<div class="feature-copy">
								<h3>Overhead Storage</h3>
								<p>You can free up more room around you by putting your carry-on baggage in the storage compartment above your seat.</p>
								<p><a href="#">Learn More</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 animate-box busfeature">

						<div class="feature-left">.lfmbkfdvm.lf
              <div class="row justify-content-md-center">
                <img src="images/legroomb.png" class="img-responsive">
              </div>
							<div class="feature-copy">
								<h3>Extra Leg Room</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								<p><a href="#">Learn More</a></p>
							</div>
						</div>

					</div>

					<div class="col-md-4 animate-box busfeature">
						<div class="feature-left">
              <div class="row justify-content-md-center">
                <img src="images/isleb.png" class="img-responsive">
              </div>
							<div class="feature-copy">
								<h3>No middle Seat</h3>
								<p>On our buses, everyone gets a window or an aisle seat. </p>
								<p><a href="#">Learn More</a></p>
							</div>
						</div>

					</div>
					<div class="col-md-4 animate-box busfeature">
						<div class="feature-left">
              <div class="row justify-content-md-center">
                <img src="images/ac3b.png" class="img-responsive">
              </div>
							<div class="feature-copy">
								<h3>Air Conditioned</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								<p><a href="#">Learn More</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

  </div>

  <div class="row">
    <?php include_once('include/inc_footer.php'); ?>
  </div>
</div>
