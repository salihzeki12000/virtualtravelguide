<?php
  include_once('admin/class/dbconfig.php');

class fBooking extends dbConnect
{

  /*FUNCTION TO EXECUTE WHEN THE REGISTERED USERS CLICK ON BOOK NOW*/
  public function confirmbooking_roomdetail($roomid)
  {
    dbConnect::dbConnection();
    $sql8="SELECT *  FROM room where rid='$roomid'";
    $result8=mysqli_query($this->db,$sql8);
    return $result8;

  }
  public function confirmbooking_hoteldetail($hotelid)
  {
    dbConnect::dbConnection();
    $sql9="SELECT * FROM admin where id='$hotelid'";
    $result9=mysqli_query($this->db,$sql9);
    return $result9;

  }

  public function confirmbooking_customerdetail($cusid)
  {
    dbConnect::dbConnection();
    $sql10="SELECT *  FROM user where cid='$cusid'";
    $result10=mysqli_query($this->db,$sql10);
    return $result10;

  }
  public function confirmbooking_packagedetail($packageid)
  {
    dbConnect::dbConnection();
    $sql11="SELECT *  FROM package where pid='$packageid'";
    $result11=mysqli_query($this->db,$sql11);
    return $result11;

  }
  public function confirmbooking_vendordetail($vendorid)
  {
    dbConnect::dbConnection();
    $sql12="SELECT *  FROM admin where id='$vendorid'";
    $result12=mysqli_query($this->db,$sql12);
    return $result12;

  }
  public function confirmbooking_vehicledetail($vehicleid)
  {
    dbConnect::dbConnection();
    $sql7="SELECT * FROM vehicle WHERE vid='$vehicleid'";
    $result7=mysqli_query($this->db,$sql7);
    return $result7;
  }
  public function final_hotelbooking($cusid,$hotelid,$roomid,$totalroom,$checkin,$checkout,$rhotelcost)
  {

      dbConnect::dbConnection();
       date_default_timezone_set('Asia/Kathmandu');
      $date= date("Y-m-d h:i:sa");
      $date1=date_create("$checkin");
      $date2=date_create("$checkout");
      $diff=date_diff($date1,$date2);
      $duration=$diff->format("%a");

      $calculate=$rhotelcost*$duration;
      $totalamount=$calculate*$totalroom;


echo $cusid  ;echo "  ";echo $hotelid ;echo "  ";echo $roomid ;echo "  ";echo $totalroom ;echo "  ";echo $date;echo "  ";echo $checkin ;echo "  ";echo $checkout ;echo "  ";echo $duration ;echo "  ";echo $rhotelcost ;echo "  ";echo $totalamount ;echo "  ";

      $sql20="INSERT INTO book_hotel SET  cid='$cusid',hid='$hotelid',rid='$roomid',rno='$totalroom',hbook_date='$date',checkin='$checkin',checkout='$checkout',bduration='$duration',b_h_cost='$totalamount', b_h_status='2' ";

      // $sql20="INSERT INTO book_hotel(cid,hid,rid,rno,hbook_date,checkin,checkout,bduration,b_h_cost,b_h_status) values ($cusid,$hotelid,$roomid,$totalroom,'$date','$checkin','$checkout','$duration','$totalamount','2') ";
       $result20=mysqli_query($this->db,$sql20);
      if($result20)
      {
        $sql6="SELECT * FROM room WHERE rid='$roomid'";
        $result6=mysqli_query($this->db,$sql6);
        while($row=mysqli_fetch_array($result6))
        {
          $p=$row['totalroom'];
          $a=$p-$totalroom;
          $sql7="UPDATE room SET totalroom='$a' WHERE rid=$roomid";
          mysqli_query($this->db,$sql7);
        }

        $sql12="SELECT *  FROM admin where id='$hotelid'";
                $result12=mysqli_query($this->db,$sql12);
                while($arr=mysqli_fetch_array($result12))
                {
                  $name=$arr['company_name'];
                  $this->hotelEmailbooking($name);
                }
               @header('Location: profile.php?mes=hotelbooking');
              }
              else {
                @header('Location: profile.php?mes=hotelbooking');
      }

  }

  public function hotelEmailbooking($name)
  {
    define('EMAIL','vtgnepal@gmail.com');
    define('PASS','g@it0nd3');
    require 'PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    $mail->SMTPDebug = 1;                               // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = EMAIL;                 // SMTP username
    $mail->Password = PASS;                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    $email=$_SESSION['cus_email'];
    $firstName=$_SESSION['cus_fname'];
    $mail->setFrom(EMAIL, 'Virtual Travel Guide');
    $mail->addAddress($email, $firstName);     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo(EMAIL, 'Information');
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Hotel Booking Confirmation';
    $firstName=$_SESSION['cus_fname'];
    //$lastName=$_SESSION['cus_lname'];
    $mail->Body    = 'Namaste Mr.'.$firstName.' <br> Your booking for '.$name.' has been successful <br> Thank you for using Virtual Travel Guide.';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
  }

  /*FUNCTION THAT SHOWS THE HOTEL BOOKING DETAILS AFER CUSTOMER BOOKS*/
  public function customerbookeddetail($custid)
  {
    dbConnect::dbConnection();
    $sql12="SELECT *  FROM book_hotel where checkin >= DATE(NOW()) && cid='$custid' ORDER BY bid DESC";
    $result12=mysqli_query($this->db,$sql12);
    return $result12;

  }
  public function customerdetail($custid)
  {
    dbConnect::dbConnection();
    $sql10="SELECT *  FROM user where cid='$custid'";
    $result10=mysqli_query($this->db,$sql10);
    return $result10;

  }
  public function final_packagebooking($cusid,$packageid,$tot,$startdate,$pcost,$pduration)
  {
      dbConnect::dbConnection();
       date_default_timezone_set('Asia/Kathmandu');
      $date= date("Y-m-d h:i:sa");
      $calculate=$pcost*$tot;


      $sql11="INSERT INTO book_package SET  cid='$cusid',pid='$packageid',totalno='$tot',booked_date='$date',startdate='$startdate',pduration='$pduration',pcost='$calculate', status='2' ";
      $result11=mysqli_query($this->db,$sql11);
      if($result11)
      {

             $sql12="SELECT *  FROM package where pid='$packageid'";
             $result12=mysqli_query($this->db,$sql12);
             while($arr=mysqli_fetch_array($result12))
             {
               $name=$arr['pname'];
               $this->packageEmailbooking($name);
             }

        //echo "<script>alert('Booking Successfully Made!Youll Soon recieve the confirmation');</script>";
       @header('Location: profile.php?mes=hotelbooking');
      }

  }
  public function packageEmailbooking($name)
 {
   define('EMAIL','vtgnepal@gmail.com');
   define('PASS','g@it0nd3');
   require 'PHPMailerAutoload.php';
   $mail = new PHPMailer;
   $mail->SMTPOptions = array(
       'ssl' => array(
           'verify_peer' => false,
           'verify_peer_name' => false,
           'allow_self_signed' => true
       )
   );

   //$mail->SMTPDebug = 1;                               // Enable verbose debug output
   $mail->isSMTP();                                      // Set mailer to use SMTP
   $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
   $mail->SMTPAuth = true;                               // Enable SMTP authentication
   $mail->Username = EMAIL;                 // SMTP username
   $mail->Password = PASS;                           // SMTP password
   $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
   $mail->Port = 587;                                    // TCP port to connect to
   $email=$_SESSION['cus_email'];
   $firstName=$_SESSION['cus_fname'];
   $mail->setFrom(EMAIL, 'Virtual Travel Guide');
   $mail->addAddress($email, $firstName);     // Add a recipient
   // $mail->addAddress('ellen@example.com');               // Name is optional
   //$mail->addReplyTo(EMAIL, 'Information');
   // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
   $mail->isHTML(true);                                  // Set email format to HTML

   $mail->Subject = 'Package Booking Confirmation';
   $firstName=$_SESSION['cus_fname'];
   //$lastName=$_SESSION['cus_lname'];
   $mail->Body    = 'Namaste Mr.'.$firstName.' <br> Your booking for '.$name.' has been successful <br> Thank you for using Virtual Travel Guide.';
   $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

   if(!$mail->send()) {
       echo 'Message could not be sent.';
       echo 'Mailer Error: ' . $mail->ErrorInfo;
   } else {
       echo 'Message has been sent';
   }
 }
  /*FUNCTION THAT SHOWS THE PACKAGE BOOKING DETAILS AFER CUSTOMER BOOKS*/
  public function packagebookeddetail($custid)
  {
    dbConnect::dbConnection();
  //  $sql14="SELECT *  FROM book_package where cid='$custid' ORDER BY pid DESC";
    $sql14="SELECT * FROM book_package WHERE startdate >= DATE(NOW()) && cid='$custid'";
    $result14=mysqli_query($this->db,$sql14);
    return $result14;

  }
  /*FUNCTION THAT SHOWS THE PAST PACKAGE BOOKING DETAILS AFER CUSTOMER BOOKS*/
  public function pastpackagebookeddetail($custid)
  {
    dbConnect::dbConnection();
  //  $sql14="SELECT *  FROM book_package where cid='$custid' ORDER BY pid DESC";
    $sql14="SELECT * FROM book_package WHERE startdate <= DATE(NOW()) && cid='$custid' ORDER BY pbid DESC";
    $result14=mysqli_query($this->db,$sql14);
    return $result14;

  }
  /*FUNCTION THAT SHOWS THE PAST HOTEL BOOKING DETAILS AFER CUSTOMER BOOKS*/
  public function pastphotelbookeddetail($custid)
  {
    dbConnect::dbConnection();
  //  $sql14="SELECT *  FROM book_package where cid='$custid' ORDER BY pid DESC";
  dbConnect::dbConnection();
  $sql12="SELECT *  FROM book_hotel where checkin <= DATE(NOW()) && cid='$custid' ORDER BY bid DESC";
  $result12=mysqli_query($this->db,$sql12);
  return $result12;

  }

  public function cancelhotelbooking($bid)
  {
    dbConnect::dbConnection();
  $sql14="UPDATE book_hotel SET b_h_status='0' WHERE bid='$bid' ";
  $result14=mysqli_query($this->db,$sql14);
  return $result14;

  }


  public function final_vehiclebooking($cusid,$vehicleid,$vcost,$startdate,$duration)
  {
    dbConnect::dbConnection();
     date_default_timezone_set('Asia/Kathmandu');
    $date= date("Y-m-d h:i:sa");
    $calculate=$vcost*$duration;


    $sql11="INSERT INTO book_vehicle SET  vid='$vehicleid',cid='$cusid',vbbook_date='$date',vbstart_date='$startdate',vbduration='$duration',vbtotal_cost='$calculate', vbstatus='2' ";
    $result11=mysqli_query($this->db,$sql11);
    if($result11)
    {
      $sql12="SELECT *  FROM vehicle where vid='$vehicleid'";
            $result12=mysqli_query($this->db,$sql12);
            while($arr=mysqli_fetch_array($result12))
            {
              $name=$arr['vtitle'];
              $this->vehicleEmailbooking($name);
            }
     @header('Location: profile.php?mes=vehiclebooking');
    }
  }
  public function vehicleEmailbooking($name)
  {
    define('EMAIL','vtgnepal@gmail.com');
    define('PASS','g@it0nd3');
    require 'PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    //$mail->SMTPDebug = 1;                               // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = EMAIL;                 // SMTP username
    $mail->Password = PASS;                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    $email=$_SESSION['cus_email'];
    $firstName=$_SESSION['cus_fname'];
    $mail->setFrom(EMAIL, 'Virtual Travel Guide');
    $mail->addAddress($email, $firstName);     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo(EMAIL, 'Information');
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Vehicle Booking Confirmation';
    $firstName=$_SESSION['cus_fname'];
    //$lastName=$_SESSION['cus_lname'];
    $mail->Body    = 'Namaste Mr.'.$firstName.' <br> Your booking for '.$name.' has been successful <br> Thank you for using Virtual Travel Guide.';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
  }
  /*FUNCTION THAT SHOWS THE VEHICLE OOKING DETAILS AFER CUSTOMER BOOKS*/
  public function vehiclebookeddetail($custid)
  {
    dbConnect::dbConnection();
    $sql12="SELECT *  FROM book_vehicle where vbstart_date >= DATE(NOW()) && cid='$custid' ORDER BY vbid DESC";
    $result12=mysqli_query($this->db,$sql12);
    return $result12;

  }
  /*FUNCTION THAT SHOWS THE PAST VEHICLE BOOKING DETAILS AFER CUSTOMER BOOKS*/
  public function pastvehiclebookeddetail($custid)
  {
    dbConnect::dbConnection();
    $sql16="SELECT * FROM book_vehicle WHERE vbstart_date <= DATE(NOW()) && cid='$custid' ORDER BY vbid DESC";
    $result16=mysqli_query($this->db,$sql16);
    return $result16;

  }
  public function cancelpackagebooking($pbid)
  {
    dbConnect::dbConnection();
  $sql15="UPDATE book_package SET status='0' WHERE pbid='$pbid' ";
  $result15=mysqli_query($this->db,$sql15);
  return $result15;

  }
  public function cancelvehiclebooking($vbid)
  {
    dbConnect::dbConnection();
  $sql16="UPDATE book_vehicle SET vbstatus='0' WHERE vbid='$vbid' ";
  $result16=mysqli_query($this->db,$sql16);
  return $result16;

  }
  public function purchaseddetail($custid)
  {
    dbConnect::dbConnection();

    $sql15="SELECT * FROM product_order WHERE cid='$custid'";
    $result15=mysqli_query($this->db,$sql15);
    return $result15;

  }
  public function confirmbooking_productdetail($purchaseid)
  {
    dbConnect::dbConnection();
    $sql12="SELECT *  FROM product where prid='$purchaseid'";
    $result12=mysqli_query($this->db,$sql12);
    return $result12;

  }
}
?>
