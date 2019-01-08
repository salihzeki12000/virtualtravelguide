<!-- <?php
// session_start();
// if($_SESSION['id']=="")
// {
//   header('location: ../admin/login.php');
//   echo"invalid login";
// }
?> -->

<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
    if($_SESSION['id']=="")
    {
      header('location: ../admin/login.php');

    }
}
?>
