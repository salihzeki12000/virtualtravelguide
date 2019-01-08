<?php
ob_start();



include_once('fsession.php');
  include_once('admin/class/dbconfig.php');

class fUser
{

    public function userLogin($name,$password)
    {
      // dbConnect::dbConnection();
      // $npassword=$_POST['password'];
      $epassword=md5($password);
      $db=new mysqli("localhost","root","","vtg");
      $sql5="SELECT * FROM user WHERE (cusername='$name' or cemail='$name' or ccontact='$name') AND cpassword='$epassword'";
      $result=mysqli_query($db,$sql5);

      $row=mysqli_fetch_array($result);
      $count_row=$result->num_rows;
      if($count_row)
      {

        $_SESSION['cus_id']=$row['cid'];
        $_SESSION['cus_username']=$row['cusername'];
        $_SESSION['cus_fname']=$row['cfirst_name'];
        $_SESSION['cus_lname']=$row['clast_name'];
        $_SESSION['cus_image']=$row['cimage'];
        $_SESSION['cus_email']=$row['cemail'];
             $sescusid= $_SESSION['cus_id'];
        $_SESSION['count']=0;
      //  header("Location: productdetail.php?id=$sesid");
        header('Location: '.$_SERVER['PHP_SELF']);
die;
      }
      else{
        echo "<script>alert('Wrong user details');</script>";
      }
    }



  }
