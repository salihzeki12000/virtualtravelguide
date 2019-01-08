<?php
@include_once('fsession.php');

include_once('class/fclassblog.php');
$fblog=new fBlog();

if($_SERVER['REQUEST_METHOD']=='POST')
{
  extract($_POST);
  $custid=$_SESSION['cus_id'];
  $fblog->createBlog($custid,$btitle,$blocation,$bdescription,$bkeyword);
}
 ?>

<?php include('include/inc_header-home.php'); ?>
<div class="bg-primary">
<?php include('include/inc_navigation.php'); ?>
</div>
<div class="container-fluid" style="padding:40px 0px 60px 0px;">
<div class="row justify-content-md-center">
  <div class="card col-md-10" style="box-shadow:0px 2px 3px black;">
    <div class="row">
    <div class="col-md-5 red blogform_cover" style="background:url('images/4e.jpg');background-size:cover;">
          <h2>ADD YOUR EXPERIENCE</h2>
          <span class="experience">Your experence can be a valuable knowledge for someone else</span>
    </div>
    <div class="col-md-7 pd20">

        <form method="POST" action=" " enctype="multipart/form-data">
    <div class="form-group">
      <label for="exampleFormControlInput1">Blog Title</label>
      <input type="text" class="form-control" name="btitle" placeholder="Example:Experience of Pokhara" required>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Location</label>
      <select class="form-control" id="exampleFormControlSelect1" name="blocation" required>
        <?php
        $fblogvar=$fblog->getLocation();
        foreach($fblogvar as $key => $fblogvalue)
        {
          $location=$fblogvalue['lname'];
        ?>
        <option value="<?php echo $location; ?>"><?php echo $location ?></option>
        <?php
        }
        ?>
        ?>
      </select>
    </div>
<div class="form-group">
    <label for="exampleFormControlTextarea1">Picture</label>
  <input type="file" name="fileToUpload" required>

</div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Description</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="bdescription"></textarea>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Blog Keywords</label>
      <input type="text" class="form-control" name="bkeyword">
    </div>
    <div class="form-group">
<input type="submit" class=" col-md-12 btn btn-success btn-lg " value="Add">
    </div>
  </form>
  </div>
</div>
</div>
</div>

</div>





<?php include('include/inc_footer.php');?>
