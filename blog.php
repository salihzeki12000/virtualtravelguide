<?php include_once('include/inc_header-home.php');
include_once('class/fclassblog.php');
$fblog=new fBlog();
@$query=$_GET['query'];
if($_SERVER['REQUEST_METHOD']=='GET')
{
	extract($_GET);
 @$fblog->searchblog($query);
}
?>
<div class="container-fluid">
  <div class="row justify-content-md-center " >

    <div class="row justify-content-md-center blognav">
      <?php include_once('include/inc_navigation.php'); ?>
    </div>
  </div>
  <div class="row ">
    <div class="coverblog col-md-12" style="background:url('images/4e.jpg');background-attachment:fixed;">
      <!--SEARCH PORTION-->
      <div class="row justify-content-md-center" >
        <div style="text-align:center;color:white;font-size:55px;" class="">
        Blogs
      </div>
    </div>
      <div class="row col-md-12 justify-content-md-center ">
        <form class="form-inline col-md-8 ml-5"  action=" " method="GET">
          <input type="text" class="form-control col-md-10 mr-3" style="width:70%;"  name="query" value="<?php if($query)
              {
                echo $query;
              }
              else{echo " ";}
          ?>" placeholder="Enter Keyword here">
          <input type="submit" value="Search" class="btn btn-primary">
        </form>
      </div>
      <div class="row col-md-12 justify-content-md-center mt-5 ">
        <a href="addblog.php"><button class="btn btn-success">Add New Blog</button></a>
      </div>
    </div>

      <!--END OF SEARCH PORTION -->

    </div>
  </div>

<div class="row justify-content-center" >
  <div class="blogresult col-md-11" >
    <?php

    ?>
    <Div class="row justify-content-md-center" >
      <?php
      if($query)
      {?>
				<div class=" col-md-12">
			<kbd style="text-align:left;font-size:15px;">Search Result for Blogs related to <span style="color:#007BFF; font-size:20px;"><?php echo $query;?></span></kbd>
		</div><br>
		<?php
        $blogvar=$fblog->searchblog($query);
        foreach($blogvar as $key => $searchvalue)
        {
          ?>

          <Div class="blogcontent col-md-11  card">
            <a href="single.php?q=blog&bid=<?php echo $searchvalue['bid'];?>"><h3><?php echo $searchvalue['btitle'];?></h3></a>
            <span class="blogdate"><?php echo $searchvalue['bdate'];?></span>
            <span class="shortdes"><?php echo substr($searchvalue['bdescription'],0,300);?>........................ </span><br>
            <span class="blogauthor">By: <?php
            $cusid=$searchvalue['cid'];
            include_once('class/fclassbooking.php');
            $fbooking=new fBooking();
            $cusdet=$fbooking->confirmbooking_customerdetail($cusid);
            foreach($cusdet as $key => $customervalue)
            {
              echo $customervalue['cusername'];
            }
            ?></span>
          </div>
    <?php
        }
      }
      else
      {
      $blog=$fblog->fgetAllBlog();
      foreach($blog as $key => $blogvalue)
      {

        ?>

        <Div class="blogcontent col-md-11  card">
          <a href="single.php?q=blog&bid=<?php echo $blogvalue['bid'];?>"><h3><?php echo $blogvalue['btitle'];?></h3></a>
          <span class="blogdate"><?php echo $blogvalue['bdate'];?></span>
          <span class="shortdes"><?php echo substr($blogvalue['bdescription'],0,300);?>........................ </span><br>
          <span class="blogauthor">By: <?php
          $cusid=$blogvalue['cid'];
          include_once('class/fclassbooking.php');
          $fbooking=new fBooking();
          $cusdet=$fbooking->confirmbooking_customerdetail($cusid);
          foreach($cusdet as $key => $customervalue)
          {
            echo $customervalue['cusername'];
          }
          ?></span>
        </div>  <?php }
      } ?>
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
<?php include_once('include/inc_footer.php'); ?>
