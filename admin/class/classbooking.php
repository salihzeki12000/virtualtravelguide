<?php
@include_once('session.php');
include_once('dbconfig.php');

Class Booking extends dbConnect
{
  public function getAllBooking($admintype,$vendortype,$sesid,$hotelid)
  {
    dbConnect::dbConnection();
    if($admintype=='1')
    {
    $sql="SELECT * FROM book_hotel ORDER BY bid DESC";
    }
    else {
      if($vendortype=='hotel')
      {
        $sql="SELECT * FROM book_hotel WHERE hid='$hotelid' ORDER BY bid DESC";
      }
    }


    $result=mysqli_query($this->db,$sql);
    return $result;
  }


  public function getBookingCustomerDetail($cid)
  {
    dbConnect::dbConnection();

    $sql2="SELECT * FROM user WHERE cid='$cid'";
    $result2=mysqli_query($this->db,$sql2);
    return $result2;
  }
  public function getBookingHotelDetail($hid)
  {
    dbConnect::dbConnection();

    $sql3="SELECT * FROM admin WHERE id='$hid'";
    $result3=mysqli_query($this->db,$sql3);
    return $result3;
  }
  public function getBookingRoomDetail($rid)
  {
    dbConnect::dbConnection();

    $sql4="SELECT * FROM room WHERE rid='$rid'";
    $result4=mysqli_query($this->db,$sql4);
    return $result4;
  }

  public function getAllPackageBooking($packageid)
  {
    dbConnect::dbConnection();
    // if($admintype=='1')
    // {
    // $sql="SELECT * FROM book_package ORDER BY pbid DESC";
    // }
    // else {

        $sql="SELECT * FROM book_package WHERE pid='$packageid' ORDER BY pbid DESC";
    $result=mysqli_query($this->db,$sql);
    return $result;
  }
  public function getPackageDetail($adminid)
  {
    dbConnect::dbConnection();
    $sql10="SELECT * FROM package WHERE id='$adminid'";

    //$sql10="SELECT * FROM package INNER JOIN book_package WHERE package.pid=book_package.pid && package.id='$adminid'";
    $result10=mysqli_query($this->db,$sql10);
    return $result10;
  }
  public function getAllVehicleBooking($vehicleid)
  {
    dbConnect::dbConnection();
    // if($admintype=='1')
    // {
    // $sql="SELECT * FROM book_package ORDER BY pbid DESC";
    // }
    // else {

        $sql="SELECT * FROM book_vehicle WHERE vid='$vehicleid' ORDER BY vbid DESC";
    $result=mysqli_query($this->db,$sql);
    return $result;
  }
  public function getVehicleDetail($adminid)
  {
    dbConnect::dbConnection();
    $sql10="SELECT * FROM vehicle WHERE id='$adminid'";

    //$sql10="SELECT * FROM package INNER JOIN book_package WHERE package.pid=book_package.pid && package.id='$adminid'";
    $result10=mysqli_query($this->db,$sql10);
    return $result10;
  }
  public function changeVehicleBookingStatus($upd_status,$vbid)
  {
    dbConnect::dbConnection();

    $sql3="UPDATE book_vehicle SET vbstatus='$upd_status' WHERE vbid=$vbid";
    $result3=mysqli_query($this->db,$sql3);
    if($result3)
    {
      echo "<script>alert('Status Succesfully Changed!!');</script>";
    }
  }
  public function changeHotelBookingStatus($upd_status,$hbid)
  {
    dbConnect::dbConnection();

    $sql66="UPDATE book_hotel SET b_h_status='$upd_status' WHERE bid=$hbid";
    $result66=mysqli_query($this->db,$sql66);
    if($result66)
    {
      echo "<script>alert('Status Succesfully Changed!!');</script>";
    }
  }
  public function changePackageBookingStatus($upd_status,$pbid)
  {
    dbConnect::dbConnection();

    $sql3="UPDATE book_package SET status='$upd_status' WHERE pbid=$pbid";
    $result3=mysqli_query($this->db,$sql3);
    if($result3)
    {
      echo "<script>alert('Status Succesfully Changed!!');</script>";
    }
  }
}
