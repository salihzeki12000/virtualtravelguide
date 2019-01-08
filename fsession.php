<?php
@session_start();
ob_start();

$sescusid=$_SESSION['cus_id'];
//$sesname=$_SESSION['first_name'];
//echo $sesname;

if($_SESSION['cus_id']=="")
{

header("Location: index.php?q=notloggedin");
      // echo "<script>alert('Login inorder to access this feature');</script>";

}
?>
