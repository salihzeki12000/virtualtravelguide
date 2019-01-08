<?php include_once('include/inc_header-home.php');
include_once('class/fclassthingstodo.php');
$ftodo=new fTodo();
@$query=$_GET['slocation'];
if($_SERVER['REQUEST_METHOD']=='GET')
{
  extract($_GET);
  @$ftodo->searchtodo($query);
}
?>
<div class="container-fluid">
  <div class="row justify-content-md-center " >

    <div class="row justify-content-md-center blognav">
      <?php include_once('include/inc_navigation.php'); ?>
    </div>
  </div>
  <div class="row ">
    <div class="coverblog col-md-12" style="background:url('images/white.jpg');background-attachment:fixed;">
      <!--SEARCH PORTION-->
      <div class="row justify-content-md-center" >
        <div style="text-align:center;color:white;font-size:55px;text-shadow:2px 2px black;" class="">
          Things To Do in
        </div>
      </div>
      <div class="row justify-content-md-center ">
        <div class="col-md-5"></div>
        <div class="col-md-7">
          <form class="form-inline col-md-10"  action=" " method="GET">

            <select class="custom-select col-md-3" name="slocation">
              <?php  $todosel=$ftodo-> getAllLocation();
              foreach($todosel as $key => $selval)
              {
                $location=$selval['lname'];
                ?>
                <option value="<?php echo $location?>"><?php echo $location ?> </option>
                <?php
              }
               ?>
            </select>

            <input type="submit" value="Search" class="btn btn-primary ml-2">
          </form>
        </div>

      </div>

    </div>

    <!--END OF SEARCH PORTION -->

  </div>

  <div class="col-md-12" >
    <?php

    if($query)
    {
      ?>
      <div class=" col-md-12"><br>
    <kbd style="text-align:left;font-size:15px;">Search Result for Things to do in <span style="color:#007BFF; font-size:20px;"><?php echo $query;?></span></kbd>
  </div>
      <div class="row justify-content-center" style="padding-top:20px;">

        <div class="row col-md-12 ">
          <?php
          $ftodovar=$ftodo->searchtodo($query);
          foreach($ftodovar as $key => $fsearchresult)
          {
            ?>

            <div class="col-md-4">
              <a href="ttdsingle.php?q=todo&tid=<?php echo $fsearchresult['tid'];?>" class="a-block d-flex align-items-center " style="background-image: url('<?php echo $fsearchresult['timage1']?>'); ">
                <div class="text">
                  <div class="post-meta">
                    <span class="category"><?php echo $fsearchresult['tlocation']?></span>
                    <!--
                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span> -->
                  </div>
                  <h3><?php echo $fsearchresult['ttitle']?></h3>
                </div>
              </a>
            </div>
          <?php } ?>


        </div>
      </div>

        <?php
      }
      else {
        ?>
        <div class="row justify-content-md-center " style="padding:80px 0px 30px 0px;">

          <!-- Start top-post Area -->
          <section class="top-post-area col-md-12 ">
            <div class="container no-padding">
              <div class="row small-gutters">
                <?php
                $todovar=$ftodo->fgetTopTodo();
                foreach($todovar as $key => $toptodo)
                {
                  ?>
                  <div class="col-lg-8 top-post-left">
                    <div class="feature-image-thumb relative">
                      <div class="overlay overlay-bg"></div>
                      <img class="img-fluid" src="<?php echo $toptodo['timage1']; ?>" alt="" style="height:420px;">
                    </div>
                    <div class="top-post-details">
                      <ul class="tags">
                        <span class="category"><?php echo $toptodo['tlocation']; ?></span>
                      </ul>
                      <a href="ttdsingle.php?q=todo&tid=<?php  echo $toptodo['tid']; ?>">
                        <h3><?php echo $toptodo['ttitle']; ?></h3>
                      </a>
                      <!-- <ul class="meta">
                      <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                      <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                      <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                    </ul> -->
                  </div>
                </div>
              <?php } ?>


              <div class="col-lg-4 top-post-right">
                <?php
                $ftodova=$ftodo->fgetPopularTodo();
                foreach($ftodova as $key => $ftodopopular)
                {
                  ?>
                  <a href="ttdsingle.php?q=todo&tid=<?php  echo $ftodopopular['tid']; ?>">
                    <div class="single-top-post">
                      <div class="feature-image-thumb relative">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid" src="<?php echo $ftodopopular['timage1'] ?>" alt="Popular image here" style="height:200px;margin:8px;">
                      </div>
                      <div class="top-post-details">
                        <ul class="tags">
                          <span class="category"><?php echo $ftodopopular['tlocation'] ?></span>
                        </ul>

                        <h4><?php echo $ftodopopular['ttitle'] ?></h4>

                        <ul class="meta">
                          <!-- <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                          <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                          <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li> -->
                        </ul>
                      </div>
                    </div>	</a>
                  <?php }?>

                </div>

              </div>
            </div>
          </section>
        </div>

        <div class="row justify-content-center" >

          <div class="row col-md-12 ">
            <?php
            $ftodov=$ftodo->fgetAllTodo();
            foreach($ftodov as $key => $ftodovalue)
            {
              ?>

              <div class="col-md-4">
                <a href="ttdsingle.php?q=todo&tid=<?php echo $ftodovalue['tid'];?>" class="a-block d-flex align-items-center " style="background-image: url('<?php echo $ftodovalue['timage1']?>'); ">
                  <div class="text">
                    <div class="post-meta">
                      <span class="category"><?php echo $ftodovalue['tlocation']?></span>
                      <!--
                      <span class="ml-2"><span class="fa fa-comments"></span> 3</span> -->
                    </div>
                    <h3><?php echo $ftodovalue['ttitle']?></h3>
                  </div>
                </a>
              </div>
            <?php } ?>


          </div>
        </div>
      <?php } ?>

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
</div>
<?php include('include/inc_footer.php');?>
