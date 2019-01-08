<?php include_once('include/inc_header-home.php');
include_once('class/fclassblog.php');
$fblog=new fBlog();
$bid=$_GET['bid'];
include_once('class/fclassbooking.php');
$fuser=new fBooking();

?>
<!-- FACEBOOK PLUGIN -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=182940855875172&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="container-fluid">

    <div class="row justify-content-md-center blognav">
      <?php include_once('include/inc_navigation.php'); ?>
    </div>
  <div class="row singlepage" style="">

    <div class="col-md-12 ">
      <?php
      $fblogva=$fblog->fgetBlog($bid);
        $fblog->add_counter($bid);
      foreach($fblogva as $key =>$fsblogvalue )
      {
        $custid=$fsblogvalue['cid'];

       ?>
      <div class="col-md-8 card-box float-left " style="padding:20px;">

            <h1 class="mb-4"><?php echo $fsblogvalue['btitle'];?></h1>
            <div class="post-meta">
                        <span class="category"><?php echo $fsblogvalue['blocation'];?></span>
                        <span class="mr-2"><?php echo $fsblogvalue['bdate'];?></span> &bullet;

                      </div>
            <div class="post-content-body ">
              <p><?php echo $fsblogvalue['bdescription'];?></p>
            <div class="row mb-5">
              <div class="col-md-12 mb-4 element-animate">
                <img src="<?php echo $fsblogvalue['bimg'];?>" alt="Image placeholder" class="img-fluid">
              </div>
              <!-- <div class="col-md-6 mb-4 element-animate">
                <img src="images/img_9.jpg" alt="Image placeholder" class="img-fluid">
              </div>
              <div class="col-md-6 mb-4 element-animate">
                <img src="images/img_11.jpg" alt="Image placeholder" class="img-fluid">
              </div> -->
            </div>

            <div class="fb-like" data-href="http://localhost/projects/virtualtravelguide/single.php?bid=<?php echo $fsblogvalue['bid'] ;?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" ></div>

<div class="fb-comments" data-href="http://localhost/projects/virtualtravelguide/single.php?bid=<?php echo $fsblogvalue['bid'] ;?>" data-numposts="5" data-width="100%"></div>      </div>
        </div>
      <?php } ?>


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
         <div class="sidebar-box">
           <?php
           $fuservar=$fuser->customerdetail($custid);
           foreach($fuservar as $key => $customervalue)
           {


            ?>
              <div class="bio text-center">
                <img src="<?php echo $customervalue['cimage']?>" alt="Image Placeholder" class="img-fluid">
                <div class="bio-body">
                  <h2><?php echo $customervalue['cfirst_name'] ." ".$customervalue['clast_name'] ;?></h2>
                    <h6><?php echo $customervalue['cemail']?></h6>
                  <p><?php echo $customervalue['cabout']?></p>
                  <!-- <p><a href="#" class="btn btn-primary btn-sm">See my other Experiences</a></p> -->
                  <p class="social">
                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                  </p>
                </div>
              </div>
            </div>

            <!-- END sidebar-box -->
         <div class="sidebar-box">
              <h3 class="heading">Recent Blogs</h3>
              <div class="post-entry-sidebar">
                <ul>
                  <?php
                      $recentb=$fblog ->fgetrecentBlog();
                      foreach($recentb as $key => $recentblog)
                      {
                   ?>
                  <li>
                    <a href="single.php?q=blog&bid=<?php echo $recentblog['bid']; ?>">
                      <img src="<?php echo $recentblog['bimg']?>" alt="Image placeholder" class="mr-4">
                      <div class="text">
                        <h4><?php echo $recentblog['btitle']; ?></h4>
                        <div class="post-meta">
                          <span class="mr-2"<?php echo $recentblog['bdate'] ?> </span>
                          By:<span class="ml-2" style="text-transform:capitalize;"><?php echo $customervalue['cfirst_name'] ." ".$customervalue['clast_name'] ?></span> </span>
                        </div>
                      </div>
                    </a>
                  </li>
                <?php }
              }?>

                </ul>
              </div>
            </div>
            <!-- END sidebar-box -->

         <div class="sidebar-box">
              <!-- <h3 class="heading">Categories</h3>
              <ul class="categories">
                <li><a href="#">Hiking <span>(12)</span></a></li>
                <li><a href="#">Trekking <span>(22)</span></a></li>
                <li><a href="#">Religious Tours <span>(37)</span></a></li>
                <li><a href="#">Tours <span>(42)</span></a></li>
              </ul> -->
            </div>
            <!-- END sidebar-box -->

            <div class="sidebar-box">
              <h3 class="heading">Tags</h3>
              <ul class="tags">
                <?php
                  $fblog->fgetKeywordBlog($bid);
                ?>
              </ul>
            </div>
          </div>
          <!-- END sidebar -->

        </div>

      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="mb-3 ">Popular Blogs</h2>
          </div>
        </div>
        <div class="row">
          <?php
            $blogvar=$fblog->fgetPopularBlog();
            foreach($blogvar as $key => $blogpopular)
            {
           ?>
          <div class="col-md-6 col-lg-4">
            <a href="single.php?q=blog&bid=<?php echo $blogpopular['bid']; ?>" class="a-block d-flex align-items-center height-md" style="background-image: url(
            <?php echo $blogpopular['bimg']; ?>); ">
              <div class="text">
                <div class="post-meta">
                  <span class="category"><?php echo $blogpopular['blocation']; ?></span>
                  <span class="mr-2"><?php echo $blogpopular['bdate']; ?> </span> &bullet;<br>
                  <span class="ml-2"><span class="fa fa-id-badge"></span> <?php
                  $userid=$blogpopular['cid'];
                    $uservar=$fblog->fgetUserDetail($userid);
                    foreach($uservar as $key => $uservalue)
                    {
                        echo $uservalue['cfirst_name']. " ".$uservalue['clast_name']  ;

                      }?>


                </span>
                </div>
                <h3><?php echo $blogpopular['btitle']; ?></h3>
              </div>
            </a>
          </div>
          <?php
        }
           ?>


        </div>
      </div>
    </div>
    <!-- END section -->

  </div>
</div>
</div>
<?php include_once('include/inc_footer.php'); ?>
