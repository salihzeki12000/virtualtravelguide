<!-- <?php
// session_start();
// if($_SESSION['id']=="")
// {
//   header('location: login.php');
//     echo"invalid login";
// }
?> -->
<?php
@session_start();
$sesid=$_SESSION['id'];
//$sesname=$_SESSION['first_name'];
//echo $sesname;

if($_SESSION['id']=="")
{
  header('location: login.php');
    echo"invalid login";
}
?>
