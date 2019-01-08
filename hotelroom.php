<?php
$hotelid=$_GET['hid']; /*This is the hid sent from the hotel page when clicking the hotel name*/
include_once('class/fclasshotel.php');
$hotelroom=new fHotel();

?>
<?php include('include/inc_header-home.php');
?>
<div class="container-fluid" >

  <div class="row hotelroomnav">
    <?php include('include/inc_navigation.php'); ?>
  </div>
  <div class="colorlib-wrap" >
    <div class="row">
      <?php $hotelroom->fgetHotelNameCover($hotelid); ?>
      <!--END OF HOTEL ROOM PORTION -->

    </div>
  </div>

  <Div class="row"  style="padding:0px 30px 20px 30px;"  >


    <!-- SIDEBAR-->
    <div class="col-md-3" style="margin-top:15px;">
      <div class="sidebar-wrap ">
        <div class="side search-wrap animate-box bg-primary" >


            <div class="row">
              <div id="map" style="width:100%;height:500px">
                <?php
                //echo $hotelid;
                $hotelvar=$hotelroom->getMap($hotelid);
                foreach($hotelvar as $key => $hotelvalue)
                {
                  $latitude= $hotelvalue['latitude'];
                  $longitude= $hotelvalue['longitude'];
                  echo $latitude;
                  if($latitude==' ')
                  {
                    echo "Map not available";
                  }
                  ?>
              </div>

                <script>
                function myMap() {
                  var myCenter = new google.maps.LatLng(<?php echo $latitude?>,<?php echo $longitude?>);
                  var mapCanvas = document.getElementById("map");
                  var mapOptions = {center: myCenter, zoom: 15};
                  var map = new google.maps.Map(mapCanvas, mapOptions);
                  var marker = new google.maps.Marker({position:myCenter});
                  marker.setMap(map);
                  var infowindow = new google.maps.InfoWindow({
   content: "<span style='color:black;text-transform:capitalize;'><?php echo $hotelvalue['company_name']?></span>"
 });
 infowindow.open(map,marker);
                }
              </script>


              <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAuRPnMVYQ_WURxAlCwCTRHhS32dKTgBCM&callback=myMap"></script>
            <?php } ?>
          </div>
        </form>
      </div>
      <!-- <div class="side animate-box">
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
</div> -->
</div>
</div>

<!-- END OF SIDEBAR -->
<div class="col-md-9 ">
  <div class="row">

    <nav aria-label="breadcrumb" class="mt-3">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item"><a href="hotel.php">Hotels</a></li>
        <li class="breadcrumb-item active" aria-current="page">Rooms</li>
      </ol>
    </nav>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="wrap-division">
        <div class="col-md-12 col-md-offset-0 heading2 animate-box ">
          <?php $hotelroom->fgetHotelName($hotelid)

          ?>


        </div>
        <div class="row">
          <div class="col-md-12 animate-box">
            <?php
            $hotelroom->fgetAllRoom($hotelid);?>

          </div>
        </div>
      </div>
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

<!-- The Modal -->
<?php $hotelroom->fRoomDetail(); ?>

<?php include('include/inc_footer.php');?>

</div>




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
