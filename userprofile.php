<?php
include_once('fsession.php');
$custid=$_SESSION['cus_id'];
include_once('class/fclassuserprofile.php');
$profile=new fProfile();
@ $mes=$_GET['mes'];
if($mes=='updated')
{
  echo "<script>alert('Profile Successfully updated!!')</script>";
}
@$cid=$_GET['cid'];
if($_SERVER['REQUEST_METHOD']=='POST')
  {
   extract($_POST);
     @$profile->updateProfile($cid,$upd_cusername,$upd_cfirstname,$upd_clastname,$upd_cemail,$upd_ccontact,$upd_caddress,$upd_cdob,$upd_cgender,$upd_cabout);
     @$profile->changeUserPassword($pw);
 }
include('include/inc_header-home.php');
?>
<div class="bg-primary bookingcart">
  <?php include('include/inc_navigation.php');?>
</div>
<div class="container-fluid" style="background:#F6F5F5;padding:100px 0px 60px 0px;">

  <div class="row ">
    <div class=" col-md-12">
      <div class="row justify-content-md-center">
      <Div class="col-md-10">
        <?php
        $profile->editUserProfile($custid);
        ?>
      </div>
  </div>
</div>
</div>


<script type="text/javascript">
  function validate()
  {
    var pw1 = $('#pw1').val();

    alert(pw1);
  //var pw2 = $('#pw2').val();
  $('errpwm').html("");

 // if(pw1.length<8)
  //{
   //  $('#errpw').html("length too short");
    // return false;

  //}
  if($('#pw1').val() != ($('#pw1').val())
  {
     $('#errpwm').html("password donot match");
     return false;
  }
  return true;

}


</script>