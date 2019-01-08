<?php include_once('include/inc_header-home.php');
include_once('class/fclassthingstodo.php');
$ftodo=new fTodo();
include_once('class/fclassbooking.php');
$fuser=new fBooking();
@$tid=$_GET['tid'];
?>

<div class="container-fluid">

  <div class="row justify-content-md-center blognav">
    <?php include_once('include/inc_navigation.php'); ?>
  </div>
  <div class="row singlepage" style="">

    <div class="col-md-12 ">
      <?php
      $tid=$_GET['tid'];
      $ftodova=$ftodo->fgetTodo($tid);
      $ftodo->add_counter($tid);
      foreach($ftodova as $key =>$fstodovalue )
      {
        // $custid=$fstodovalue['cid'];

        ?>
        <div class="col-md-8 card-box float-left " style="padding:20px;">

          <h1 class="mb-4"><?php echo $fstodovalue['ttitle'];?></h1>
          <div class="post-meta">
            <span class="category" style="background: #546214"><?php echo $fstodovalue['taddress'];?></span>
            <span class="category"><?php echo $fstodovalue['tlocation'];?></span>
            <span class="mr-2"><?php echo $fstodovalue['tadded_date'];?></span>

          </div>
          <div class="post-content-body ">
            <div class="row pd20 ">
              <p><?php echo $fstodovalue['tdescription'];?></p>
            </div>
            <div class="row justify-content-md-center">
              <div id="map" class="col-md-11 mb-5 mt-3 frameset" style="height:350px;padding:12px;">
                <?php

                $latitude= $fstodovalue['tlatitude'];
                $longitude= $fstodovalue['tlongitude'];
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
                  content: "<span style='color:black;'><?php echo $fstodovalue['ttitle']?></span>"
                });
                infowindow.open(map,marker);
              }
              </script>


              <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCsECxd_wtoSKo5qRXlRgbNV4GVU_g2q8&callback=myMap"></script>


            </div>
            <div class="row mb-5 justify-content-md-center">
              <div class="col-md-11 mb-4 element-animate ">
                <img src="<?php echo $fstodovalue['timage1'];?>" alt="Image placeholder" class="img-fluid frameset col-md-12" style="padding:0px;">
              </div>
              <div class="col-md-11 mb-4 element-animate">
                <img src="<?php echo $fstodovalue['timage2'];?>" alt="Second Image" class="img-fluid frameset col-md-12" style="padding:0px;">
              </div>
              <!-- <div class="col-md-6 mb-4 element-animate">
              <img src="images/img_9.jpg" alt="Image placeholder" class="img-fluid">
            </div>
            <div class="col-md-6 mb-4 element-animate">
            <img src="images/img_11.jpg" alt="Image placeholder" class="img-fluid">
          </div> -->
        </div>

        <div class="fb-like" data-href="http://localhost/projects/virtualtravelguide/ttdsingle.php?tid=<?php echo $fstodovalue['tid'] ;?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>

        <div class="fb-share-button" data-href="http://localhost/projects/virtualtravelguide/ttdsingle.php?tid=&lt;?php echo $fstodovalue[&#039;tid&#039;] ;?&gt;" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2Fprojects%2Fvirtualtravelguide%2Fttdsingle.php%3Ftid%3D%253C%253Fphp%2Becho%2B%2524fstodovalue%255B%2527tid%2527%255D%2B%253B%253F%253E&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>

        <div class="fb-comments" data-href="http://localhost/projects/virtualtravelguide/ttdsingle.php?tid=<?php echo $fstodovalue['tid'] ;?>" data-numposts="5" data-width="100%"></div>

      </div>
    </div>


      <div class="col-md-4 card float-left" style="padding:20px;">
        <!-- <div class="sidebar-box search-form-wrap">
        <form action="#" class="search-form">
        <div class="form-group">
        <span class="icon fa fa-search"></span>
        <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
      </div>
    </form>
  </div> -->
  <!-- END sidebar-box -->
  <div class="sidebar-box green">

    <div class="bio text-center">    <h3 class="heading">Other Places in same area</h3>
      <div class="post-entry-sidebar justify-content-md-center ">
        <div class="row justify-content-md-center">

          <div class="row col-md-12 justify-content-md-center ">
            <?php
            $similar=$fstodovalue['tlocation'];
            $ftodovar=$ftodo->fgetSimilarTodo($similar);
            foreach($ftodovar as $key => $ftodosimvalue)
            {
              ?>

              <div class="col-md-12 mt-3 " style="height:250px;overflow:hidden;">
                <a href="ttdsingle.php?q=todo&tid=<?php echo $ftodosimvalue['tid'];?>" class="a-block d-flex align-items-center " style="background-image: url('<?php echo $ftodosimvalue['timage1']?>');border-radius:5px; ">
                  <div class="text">
                    <div class="post-meta">
                      <span class="category"><?php echo $ftodosimvalue['taddress']?></span>


                    </div>
                    <h3><?php echo $ftodosimvalue['ttitle']?></h3>
                  </div>
                </a>
              </div>
            <?php } ?>

          <?php } ?>
        </div>


      </div>
    </div>
  </div>
</div>

<!-- END sidebar-box -->


<!-- <div class="sidebar-box">
  <h3 class="heading">Categories</h3>
  <ul class="categories">
    <li><a href="#">Hiking <span>(12)</span></a></li>
    <li><a href="#">Trekking <span>(22)</span></a></li>
    <li><a href="#">Religious Tours <span>(37)</span></a></li>
    <li><a href="#">Tours <span>(42)</span></a></li>
  </ul>
</div> -->
<!-- END sidebar-box -->

<div class="sidebar-box">
  <h3 class="heading">Tags</h3>
  <ul class="tags">
    <?php
      $fKeywordvar=$ftodo->fgetKeywordTodo($tid);
    ?>
  </ul>
</div>
</div>
<!-- END sidebar -->

</div>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="mb-3 ">Popular Places</h2>
    </div>
  </div>
  <div class="row">
    <?php
    $popularvar=$ftodo->fgetPopularTodo();
    foreach($popularvar as $key => $populartodo)
    {
    ?>

    <div class="col-md-6 col-lg-4">
      <a href="ttdsingle.php?q=todo&tid=<?php echo $populartodo['tid']?>" class="a-block d-flex align-items-center height-md" style="background-image: url(<?php echo $populartodo['timage1'] ?>); ">
        <div class="text">
          <div class="post-meta">
            <span class="category"><?php echo $populartodo['tlocation'] ?></span>
            <span class="mr-2"><?php echo $populartodo['taddress'] ?> </span>
            <!-- <span class="ml-2"><span class="fa fa-comments"></span> 3</span> -->
          </div>
          <h3><?php echo $populartodo['ttitle'] ?></h3>
        </div>
      </a>
    </div>

  <?php } ?>


  </div>
</div>
</div>
<!-- END section -->

</div>
</div>
</div>
<?php include_once('include/inc_footer.php'); ?>
