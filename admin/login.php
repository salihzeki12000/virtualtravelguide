
<?php
include('include/inc_adminheader.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  include('class/classadmin.php');
  $admin=new Admin();
  extract($_POST);
  $admin->adminLogin($name,$password);
}
?>
<Div class="wrapper">
  <div class="container-fluid">
    <div class="row justify-content-md-center">
      <div class="col-md-4"></div>
      <div class="col-md-4 loginform center-block" >
        <center>
        <img src="../images/logo.png" class="logo">
      </center>
        <!-- START- FORM FOR LOGIN-->
        <form action="" method="POST">
          <div class="content">
            <div class="form-group">
      <label for="exampleInputtext">Admin Credential</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Username or Email">
    </div>


            <div class="form-group">
      <label for="exampleInputPassword1">Key</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>


            <br>
            <div>
              <center>
              <input type="submit" value="Login" class="btn btn-default btn-round button">
            </center>

            </div>
            <br>

          </form>
          <div class="form-group label-floating" style="font-size:12px;color:#555555;">
            * if you havent been approved by the admin,then you cannot login at the moment.Contact the admin for userlogin apporval
          </div>

          <!--END- FORM FOR LOGIN-->
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('include/inc_adminfooterscripts.php'); ?>
