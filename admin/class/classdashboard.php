<?php
@include_once('session.php');
include_once('dbconfig.php');

 Class Dashboard extends dbConnect
 {

  public function hotelCount()
  {
    dbConnect::dbConnection();

    $sql="SELECT * FROM admin WHERE vtype='hotel'";
    $result=mysqli_query($this->db,$sql);
    $user_data=mysqli_fetch_array($result);
    $count_hotelrow=$result->num_rows;
    echo $count_hotelrow;
  }

  public function shopItemCount()
  {
    dbConnect::dbConnection();
    $aid=$_SESSION['id'];
    $sql="SELECT * FROM product WHERE aid='$aid'";
    $result=mysqli_query($this->db,$sql);
    $user_data=mysqli_fetch_array($result);
    $count_row=$result->num_rows;
    echo $count_row;
  }
   //this is left
  public function customerCount()
  {
    dbConnect::dbConnection();
    $aid=$_SESSION['id'];
    $count=0;
    $sql="SELECT * FROM product WHERE aid='$aid'";
    $result=mysqli_query($this->db,$sql);
    while($row=mysqli_fetch_array($result))
    {
      $a=$row['prid'];
      $sql1="SELECT * FROM product_order WHERE prid='$a'";
      $result1=mysqli_query($this->db,$sql1);
      while($row=mysqli_fetch_array($result1))
      {
        $count=$count + 1;
      }

    }
    echo $count;
    // $user_data=mysqli_fetch_array($result);
    // $count_row=$result->num_rows;
    // echo $count_row;
  }


  public function roomCount($admintype,$vendortype,$hotelid)
  {
    dbConnect::dbConnection();
    if($admintype=='1')
    {
      $sql1="SELECT * FROM room";
    }
    if($vendortype=='hotel')
    {
    $sql1="SELECT * FROM room where hid='$hotelid'";
    }
    $result1=mysqli_query($this->db,$sql1);
    $user_data=mysqli_fetch_array($result1);
    $count_userrow=$result1->num_rows;
    echo $count_userrow;
  }



  public function userCount()
  {
    dbConnect::dbConnection();

    $sql1="SELECT * FROM user";
    $result1=mysqli_query($this->db,$sql1);
    $user_data=mysqli_fetch_array($result1);
    $count_userrow=$result1->num_rows;
    echo $count_userrow;
  }


  public function adminCount()
  {
    dbConnect::dbConnection();

    $sql1="SELECT * FROM admin WHERE type='1'";
    $result1=mysqli_query($this->db,$sql1);
    $user_data=mysqli_fetch_array($result1);
    $count_userrow=$result1->num_rows;
    echo $count_userrow;
  }
  public function vendorCount()
  {
    dbConnect::dbConnection();

    $sql1="SELECT * FROM admin WHERE type='4'";
    $result1=mysqli_query($this->db,$sql1);
    $user_data=mysqli_fetch_array($result1);
    $count_userrow=$result1->num_rows;
    echo $count_userrow;
  }

  public function packageCount()
  {
    dbConnect::dbConnection();

    $sql5="SELECT * FROM package";
    $result5=mysqli_query($this->db,$sql5);
    $user_data=mysqli_fetch_array($result5);
    $count_userrow=$result5->num_rows;
    echo $count_userrow;
  }

  public function todoCount()
  {
    dbConnect::dbConnection();

    $sql6="SELECT * FROM todo";
    $result5=mysqli_query($this->db,$sql6);
    $user_data=mysqli_fetch_array($result5);
    $count_userrow=$result5->num_rows;
    echo $count_userrow;
  }
  public function locationCount()
  {
    dbConnect::dbConnection();

    $sql13="SELECT * FROM location";
    $result13=mysqli_query($this->db,$sql13);
    $user_data=mysqli_fetch_array($result13);
    $count_userrow=$result13->num_rows;
    echo $count_userrow;
  }
  public function blogCount($admintype)
  {
    dbConnect::dbConnection();
    if($admintype=='1')
    {
    $sql5="SELECT * FROM blog";
    $result5=mysqli_query($this->db,$sql5);
    $user_data=mysqli_fetch_array($result5);
    $count_userrow=$result5->num_rows;
    echo $count_userrow;
  }
}
public function vehicleCount($admintype)
{
  dbConnect::dbConnection();
  if($admintype=='1')
  {
  $sql5i="SELECT * FROM vehicle";
  $result5i=mysqli_query($this->db,$sql5i);
  $user_data=mysqli_fetch_array($result5i);
  $count_userrow=$result5i->num_rows;
  echo $count_userrow;
}
}
  public function bookingHotelCount($sesid,$admintype,$vendortype,$hotelid)
  {
    dbConnect::dbConnection();
  if($admintype=='1')
{
    $sql6="SELECT * FROM book_hotel";
}
  if($vendortype=='hotel')
  {
    $sql6="SELECT * FROM book_hotel where hid='$hotelid'";
  }
    $result5=mysqli_query($this->db,$sql6);
    $user_data=mysqli_fetch_array($result5);
    $count_userrow=$result5->num_rows;
    echo $count_userrow;
  }

 public function bookingPackageCount($sesid,$packageid,$admintype,$vendortype)
 {
   dbConnect::dbConnection();
   if($admintype=='1')
   {
     $sql10="SELECT * FROM book_package";
   }
   if($vendortype=='package')
   {
   $sql10="SELECT * FROM book_package INNER JOIN package where book_package.pid=package.pid && package.id='$sesid'";
 }
    $result10=mysqli_query($this->db,$sql10);
   // $user_data10=mysqli_fetch_array($result10);
   $count_userrow1=$result10->num_rows;
   echo $count_userrow1;
 }
 public function eachpackageCount($sesid)
 {
   dbConnect::dbConnection();

   $sql5="SELECT * FROM package WHERE id ='$sesid'";
   $result5=mysqli_query($this->db,$sql5);
   $user_data=mysqli_fetch_array($result5);
   $count_userrow=$result5->num_rows;
   echo $count_userrow;
 }
 public function eachvehicleCount($sesid)
 {
   dbConnect::dbConnection();

   $sql5="SELECT * FROM vehicle WHERE id ='$sesid'";
   $result5=mysqli_query($this->db,$sql5);
   $user_data=mysqli_fetch_array($result5);
   $count_userrow=$result5->num_rows;
   echo $count_userrow;
 }
 public function mostviewedblog()
 {
   dbConnect::dbConnection();

   $sql11="SELECT * FROM blog ORDER BY bcounter DESC LIMIT 0,5 ";
   $result11=mysqli_query($this->db,$sql11);
   return $result11;
 }
 public function mostviewedtodo()
 {
   dbConnect::dbConnection();

   $sql12="SELECT * FROM todo ORDER BY tcounter DESC LIMIT 0,5 ";
   $result12=mysqli_query($this->db,$sql12);
   return $result12;
 }

 public function mostviewedpackageindi($sesid)
 {
   dbConnect::dbConnection();

   $sql12="SELECT * FROM package WHERE id='$sesid' ORDER BY pcounter DESC LIMIT 0,5 ";
   $result12=mysqli_query($this->db,$sql12);
   return $result12;
 }
 public function recenthotelbooking($sesid)
 {
   dbConnect::dbConnection();
   //$sql="SELECT * FROM book_hotel INNER JOIN room WHERE book_hotel.rid=room.rid && package.id='$sesid' ORDER BY book_package.booked_date DESC";
   $sql12="SELECT * FROM admin WHERE id='$sesid' ";

   $result=mysqli_query($this->db,$sql12);
   while($row=mysqli_fetch_array($result))
  {
    $hotelid=$row['id'];
    //echo $hotelid;
      // $sqlin="SELECT * from room WHERE hid='$hotelid'";
      // $resultin=mysqli_query($this->db,$sqlin);
  //     while($rowin=mysqli_fetch_array($resultin))
  //    {
  //       $roomid=$rowin['rid'];
  //       echo $roomid;
  //
  //       $sqlinside="SELECT * from book_hotel WHERE rid='$roomid' ORDER BY hbook_date DESC LIMIT 0,5";
  //       $resultinside=mysqli_query($this->db,$sqlinside);
  //       return $resultinside;
  //
  //
  // }
        $sqlinside="SELECT * FROM book_hotel WHERE hid='$hotelid' ORDER BY hbook_date DESC LIMIT 0,5";
        $resultinside=mysqli_query($this->db,$sqlinside);
        return $resultinside;
 }
}
 public function mostviewedroom()
 {
   dbConnect::dbConnection();

   $sql12="SELECT * FROM room ORDER BY rcounter DESC LIMIT 0,5 ";
   $result12=mysqli_query($this->db,$sql12);
   return $result12;
 }
 public function mostviewedpackage()
 {
   dbConnect::dbConnection();

   $sql12="SELECT * FROM package ORDER BY pcounter DESC LIMIT 0,5 ";
   $result12=mysqli_query($this->db,$sql12);
   return $result12;
 }

 public function recentpackagebooking($sesid)
 {
        dbConnect::dbConnection();

   $sql="SELECT * FROM book_package INNER JOIN package WHERE book_package.pid=package.pid && package.id='$sesid' ORDER BY book_package.booked_date DESC LIMIT 0,5";
    $result=mysqli_query($this->db,$sql);
    return $result;
  }

public function mostviewedroomindi($sesid)
{
  dbConnect::dbConnection();
  //$sql="SELECT * FROM book_hotel INNER JOIN room WHERE book_hotel.rid=room.rid && package.id='$sesid' ORDER BY book_package.booked_date DESC";
  $sql12="SELECT * FROM admin WHERE id='$sesid' ";

  $result=mysqli_query($this->db,$sql12);
  while($row=mysqli_fetch_array($result))
 {
   $hotelid=$row['id'];
   //echo $hotelid;
     $sqlin="SELECT * from room WHERE hid='$hotelid' ORDER BY rcounter DESC LIMIT 0,5";
     $resultin=mysqli_query($this->db,$sqlin);
     return $resultin;

}
}

		public function getAllVehicleInfo()
		{
		  dbConnect::dbConnection();
		  $sql5="SELECT * FROM vehicle ";
		  $result5=mysqli_query($this->db,$sql5);
		  return $result5;
		}
    public function bookingVehicleCount($sesid,$vehicleid,$admintype,$vendortype)
    {
      dbConnect::dbConnection();
      if($admintype=='1')
      {
        $sql10="SELECT * FROM book_vehicle";
      }
      if($vendortype=='rental')
      {
      $sql10="SELECT * FROM book_vehicle INNER JOIN vehicle where book_vehicle.vid=vehicle.vid && vehicle.id='$sesid'";
    }
       $result10=mysqli_query($this->db,$sql10);
      // $user_data10=mysqli_fetch_array($result10);
      $count_userrow1=$result10->num_rows;
      echo $count_userrow1;
    }
    public function mostviewedhotel()
    {
      dbConnect::dbConnection();

      $sql12="SELECT * FROM package ORDER BY pcounter DESC LIMIT 0,5 ";
      $result12=mysqli_query($this->db,$sql12);
      return $result12;
    }
    public function mostviewedvehicle($sesid)
    {
      dbConnect::dbConnection();

      $sql12="SELECT * FROM vehicle WHERE id='$sesid' ORDER BY vcounter DESC LIMIT 0,5 ";
      $result12=mysqli_query($this->db,$sql12);
      return $result12;
    }
    public function recentvehiclebooking($sesid)
    {
           dbConnect::dbConnection();

      $sql="SELECT * FROM book_vehicle INNER JOIN vehicle WHERE book_vehicle.vid=vehicle.vid && vehicle.id='$sesid' ORDER BY book_vehicle.vbbook_date DESC LIMIT 0,5";
       $result=mysqli_query($this->db,$sql);
       return $result;
     }
     public function mostviewedrental()
     {
       dbConnect::dbConnection();

       $sql11="SELECT * FROM vehicle ORDER BY vcounter DESC LIMIT 0,5 ";
       $result11=mysqli_query($this->db,$sql11);
       return $result11;
     }
}


?>
