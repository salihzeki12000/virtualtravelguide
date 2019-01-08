<?php
 @session_start();
 @$sidebar=$_GET['b'];
 if(isset($_POST["action"]))
 {
 if($_POST["action"] == "Login")
 {
   include('class/fclassuser.php');
   $user=new fUser();
   extract($_POST);
   $user->userLogin($name,$password);
 }
 if($_POST["action"] == "Register")
 {
   include_once('admin/class/classuser.php');
   $auser=new User();
   if($_SERVER['REQUEST_METHOD']=='POST')
   {
     extract($_POST);
     $auser->fcreateUser($cusername,$cfirst_name,$clast_name,$caddress,$ccontact,$cemail,$cdob,$cgender,$cpassword);
   }

}
}
?>

<!--MAIN NAVIGATION BAR-->
<nav class="navbar navbar-expand-lg navbar-dark centered" style="padding:10px;" id="header" >
  <!-- <div class="box beta">
  <div class="ribbon"><span>Design only</span></div>
</div> -->
<a class="navbar-brand ml-4" href="index.php">


  <img src="images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
  Virtual Travel Guide
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse " id="navbarSupportedContent" style="">
  <ul class="navbar-nav" style="">
    <li class="nav-item <?php
      if($sidebar=='home')
      {
        echo 'current';
      }
      else {
        echo ' ';
      }
    ?>">
      <a class="nav-link" href="index.php?b=home">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item <?php
      if($sidebar=='ttodo')
      {
        echo 'current';
      }
      else {
        echo ' ';
      }
    ?>">
      <a class="nav-link" href="thingstodo.php?b=ttodo">Things To Do</a>
    </li>
    <li class="nav-item  <?php
      if($sidebar=='package')
      {
        echo 'current';
      }
      else {
        echo ' ';
      }
    ?>">
      <a class="nav-link" href="package.php?b=package">Packages</a>
    </li>
    <li class="nav-item <?php
      if($sidebar=='hotel')
      {
        echo 'current';
      }
      else {
        echo ' ';
      }
    ?>">
      <a class="nav-link" href="hotel.php?b=hotel">Hotels</a>
    </li>

    <li class="nav-item <?php
      if($sidebar=='rental')
      {
        echo 'current';
      }
      else {
        echo ' ';
      }
    ?>">
      <a class="nav-link" href="vehiclerental.php?b=rental">Vehicle Rental</a>
    </li>
    <li class="nav-item <?php
      if($sidebar=='shop')
      {
        echo 'current';
      }
      else {
        echo ' ';
      }
    ?>">
      <a class="nav-link" href="ecommerce.php?b=shop">Shop</a>
    </li>
    <li class="nav-item <?php
      if($sidebar=='blog')
      {
        echo 'current';
      }
      else {
        echo ' ';
      }
    ?>">
      <a class="nav-link" href="blog.php?b=blog">Blog</a>
    </li>
    <!-- <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" href="#"><del>Transport</del></a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="busbooking.php">Bus Booking</a>
        <a class="dropdown-item" href="vehiclerental.php">Vehicle Rental</a>

      </div>
    </li> -->


    <!--TOP NAVBAR-->
    <!-- USER DETAIL -->
</ul>
  <ul style="position:absolute;right:30px;text-transform:capitalize;" class="navbar-nav ">
    <li style="color:white;"  >
    <?php

    if (isset($_SESSION['cus_id'])) { ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" href="#"><?php echo $_SESSION['cus_fname']." ". $_SESSION['cus_lname'];?></a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="userprofile.php">Profile</a>
            <a class="dropdown-item" href="profile.php">My Bookings</a>
          <a class="dropdown-item" href="flogout.php">Log Out </a>

        </div>
      </li>

      <!-- <?php echo "Welcome" ." ".$_SESSION['cus_fname']." ". $_SESSION['cus_lname'];?>
    <a href='flogout.php'><button type="button" class="btn btn-outline-danger ml-3">Log Out</button> </a> -->

    <?php }
    else {?>

        <button type="button" class="btn btn-outline-success ml-3" data-toggle="modal" data-target="#loginModal" style="color:white;" >
          Login
        </button>
        <button type="button" class="btn btn-outline-success ml-3" data-toggle="modal" data-target="#registerModal" style="color:white;;" >
          Register
        </button>

<?php }?>  </li>
      <!--END OF TOP NAVBAR-->
    </ul>
  </div>
</nav>
</div>
</div>
<!--END OF NAVIGATION BAR-->
<!-- Modallogin -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-body" style="background:rgba(0,0,0,0.9);" >
        <button type="button" class="close ml-1" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span> </button>

          <div class="wrap-login100" >
            <form class="login100-form validate-form" method="POST" action=" ">
              <span class="login100-form-logo">
                <img src="images/logo.png" style="height:130px;">
              </span>

              <span class="login100-form-title p-b-34 p-t-27">
                Log in
              </span>

              <div class="wrap-input100 validate-input" data-validate = "Enter username">
                <input class="input100" type="text" name="name" >
                <span class="focus-input100" data-placeholder="username"></span>
              </div>

              <div class="wrap-input100 validate-input" data-validate="Enter password">
                <input class="input100" type="password" name="password" >
                <span class="focus-input100" data-placeholder="password"></span>
              </div>
              <!-- <div class="contact100-form-checkbox">
              <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
              <label class="label-checkbox100" for="ckb1">
              Remember me
            </label>
          </div> -->
<div class="container-login100-form-btn">
  <input type="hidden" name="action" value="Login">
<button class="login100-form-btn " >Login</button>
          </div>

          <div class="text-center p-t-90">
          <a href="forgotpassword.php" class="txt1" href="#">
              Forgot Password?
            </a>
          </div>
        </form>
      </div>

    </div>

  </div>
</div>
</div>

<!-- Modal - Register -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="registerModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-body " style="background:rgba(0,0,0,0.9);" >
        <div class="col-md-12">
        <button type="button" class="close ml-1" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span> </button>

          <div class="wrap-login100"  style="padding:60px 60px 60px 100px;">
            <form class="login100-form validate-form" method="POST" action=" " enctype='multipart/form-data'>
              <span class="login100-form-logo">
                <img src="images/logo.png" style="height:130px;">
              </span>

              <span class="login100-form-title p-b-34 p-t-27">
                Register
              </span>
                <div class="row">

                  <div class="col-md-5 mr-5 wrap-input100 validate-input" data-validate = "Enter firstname">
                    <input type="text" class="input100" name="cfirst_name" id="cfirst_name">
                    <span class="focus-input100" data-placeholder="Firstname"></span>
                  </div>

                  <div class="col-md-5 mr-5 wrap-input100 validate-input" data-validate="Enter Lastname">
                    <input type="text" class="input100" name="clast_name" id="clast_name">
                    <span class="focus-input100" data-placeholder="Lastname"></span>
                  </div>
              <div class="col-md-5 mr-5 wrap-input100 validate-input" data-validate = "Enter username">
                <input type="text" class="input100" name="cusername" id="cusername">
                <span class="focus-input100" data-placeholder="Username"></span>
              </div>

              <div class="col-md-5  mr-5 wrap-input100 validate-input" data-validate="Enter password">
                <input type="password" class="input100" name="cpassword" id="cpassword">
                <span class="focus-input100" data-placeholder="Password"></span>
              </div>
              <div class="col-md-11 mr-5 wrap-input100 validate-input" data-validate="Enter email id">
                <input type="text" class="input100" name="cemail" id="cemail">
                <span class="focus-input100" data-placeholder="Email"></span>
              </div>
              <div class="col-md-5 mr-5 wrap-input100 validate-input" data-validate="Enter Contact">
                <input type="text" class="input100" name="ccontact" id="ccontact">
                <span class="focus-input100" data-placeholder="Contact"></span>
              </div>
              <div class="col-md-5 mr-5 wrap-input100 validate-input" data-validate="Enter Contact">
                <input type="text" class="input100" name="caddress" id="caddress">
                <span class="focus-input100" data-placeholder="Address"></span>
              </div>
              <div class="col-md-5 mr-5 wrap-input100 validate-input" data-validate="Enter Contact">
                <input type="date" class="input100" name="cdob" id="cdob">
                <span class="focus-input100" data-placeholder="Date Of Birth"></span>
              </div>
              <div class="col-md-5 mr-5 wrap-input100 validate-input" data-validate="Enter Contact">
                <select class="input100" name="cgender" id="cgender" style="margin-left:60px;width:150px;">
                  <option value="male">male</option>
                  <option value="female">female</option>
                  <option value="other">other</option>
                </select>
                <span class="focus-input100" data-placeholder="Gender"></span>
              </div>
              </div>
              <!-- <div class="contact100-form-checkbox">
              <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
              <label class="label-checkbox100" for="ckb1">
              Remember me
            </label>
          </div> -->
<div class="container-login100-form-btn">
  <input type="hidden" name="action" value="Register">
<button class="login100-form-btn " >Register</button>
          </div>

          <div class="text-center p-t-90">
            <a class="txt1" href="#">
              Login
            </a>
          </div>
        </form>
      </div>

    </div>

  </div>
</div>
</div>
</div>

<script>
    function scrolling()
	{
    var y=window.pageYOffset;
    //document.write(y);
    if(y>185)
		{
			  document.getElementById("header").style.background="#007BFF";
        document.getElementById("header").style.width="100%";


		}
		else
		{
        document.getElementById("header").style.background="rgba(0,0,0,0.3)";
    }
	}
</script>
