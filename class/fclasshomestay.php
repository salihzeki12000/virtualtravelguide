<?php
  include_once('admin/class/dbconfig.php');

class fHomestay extends dbConnect
{
  /*FUNCTION TO GET ALL THE HOMESTAYS IN THE FRONT END WHICH HAS STATUS 1*/
  public function fgetAllHomestay()
  {
      dbConnect::dbConnection();
      $sql="SELECT * FROM homestay where hsstatus='1' ORDER BY hsid DESC";
      $result=mysqli_query($this->db,$sql);
      echo "  <div class='row row-bottom-padded-md hotellist' style='padding:0px 30px 0px 30px;'>";
      while($row=mysqli_fetch_array($result))
      {
        $hsid=$row['hsid'];

        echo "


        <a href='homestayroom.php?hid=".$hsid."' style='text-decoration:none;'>
    <div class='col-md-4 fh5co-tours animate-box' data-animate-effect='fadeIn'>
      <div href='#'><img src='".$row['hsimg1']."' alt='hotel image here' class='img-responsive'>
        <!-- <div class='box'>
                         <div class='ribbon'><span>Something</span></div>
         </div> -->

        <div class='desc'>
          <span></span>

          <h3 style='text-transform:capitalize;'>".$row['hstitle']."</h3>
          <span class='location'><img src='images/placeholder.png'> ".$row['hslocation']."</span>
          <span class='price'>Starting from Rs.
          ";
         //  $min="SELECT MIN(rhomestaycost) as minimum FROM room WHERE hid='$hid' && rtype='homestay'";
         //  $res=mysqli_query($this->db,$min);
         //  while($mini=mysqli_fetch_array($res))
         //  {
         //      echo $mini['minimum'];
         //  }
         //
         //
         echo "/ night</span>



          <a class='btn btn-default btn-round btn-outline' href='#' style='text-transform:capitalize;'></a>
        </div>
      </div>
    </div>
  </a>
";
      }
  }
  public function getAllLocation()
  {
      dbConnect::dbConnection();
    $sql="SELECT * FROM location ORDER BY lid";
    $result=mysqli_query($this->db,$sql);
    dbConnect::dbConnection();
  $sql="SELECT * FROM location ORDER BY lid";
  $result=mysqli_query($this->db,$sql);

  while($row=mysqli_fetch_array($result))
  {
    $location=$row['lname'];
    echo "
    <option value='$location'>$location</option>

    ";
  }
  }
  public function searchhomestay($hslocation)
  {
    dbConnect::dbConnection();
    $sql6="SELECT * FROM homestay where hslocation='$hslocation'";
    $result6=mysqli_query($this->db,$sql6);
    return $result6;
  }
}
  ?>
