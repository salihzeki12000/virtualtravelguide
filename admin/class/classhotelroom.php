<?php
@include_once('session.php');
include_once('dbconfig.php');
Class Room extends dbConnect
{
  //FUNCTION TO ADD new Hotel from Hotelroom page
public function createHotelroom($hid,$rno,$rtitle,$rhotelcost,$totalroom,$refrigerator,$wifi,$hotwater,$aircondition,$tv,$private_bathroom,$noofbed,$restaurant,$roomservice,$laundry,$sesid,$sesname)
  {    dbConnect::dbConnection();
    //$result1=mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Things to do data cannot be inserted");;
    if(!isset($_FILES['fileToUpload']) || $_FILES['fileToUpload']['error'] == UPLOAD_ERR_NO_FILE) {
      if(!isset($_FILES['coverToUpload']) || $_FILES['coverToUpload']['error'] == UPLOAD_ERR_NO_FILE) {
         $sql1="INSERT INTO room SET  hid='$hid',rno='$rno',rtitle='$rtitle',rhotelcost='$rhotelcost',totalroom='$totalroom',refrigerator='$refrigerator',wifi='$wifi',hotwater='$hotwater',aircondition='$aircondition',tv='$tv',private_bathroom='$private_bathroom',noofbed='$noofbed',restaurant='$restaurant',roomservice='$roomservice',laundry='$laundry',rstatus='1',aid='$sesid',ausername='$sesname'";
        $result1=mysqli_query($this->db,$sql1);
      }
      else {
        $target_dir = "../images/hotels/room/";
        $db_dir="images/hotels/room/";
        $target_file = $target_dir  . date("d-m-Y")."-".time() . basename($_FILES["coverToUpload"]["name"]);
        $db=$db_dir . date("d-m-Y")."-".time() . basename($_FILES["coverToUpload"]["name"]);


        $uploadOk1 = 1;
        $imageName=basename($_FILES["coverToUpload"]["name"]);
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        // Check file size
        if ($_FILES["coverToUpload"]["size"] > 50000000) {
          echo "Sorry, your file is too large.";
          $uploadOk1 = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "png" ) {
          echo "Sorry, only jpg, png files are allowed.";
          $uploadOk1 = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk1 == 0) {
          echo "Sorry, your file was not uploaded.";
          // if everything is ok, try to upload file
        } else {
          if (move_uploaded_file($_FILES["coverToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["coverToUpload"]["name"]). " has been uploaded.";
               $sql10="INSERT INTO room SET hid='$hid',rno='$rno',rtitle='$rtitle',rhotelcost='$rhotelcost',rimage2='$db',totalroom='$totalroom',refrigerator='$refrigerator',wifi='$wifi',hotwater='$hotwater',aircondition='$aircondition',tv='$tv',private_bathroom='$private_bathroom',noofbed='$noofbed',restaurant='$restaurant',roomservice='$roomservice',laundry='$laundry',rstatus='1',aid='$sesid',ausername='$sesname'";
                $result10=mysqli_query($this->db,$sql10)or die(mysqli_connect_errno()."Room data cannot be inserted here");
          }
          else {
            echo "Sorry, there was an error uploading your file.";
          }
        }
      }
    }
    else {
      if(!isset($_FILES['coverToUpload']) || $_FILES['coverToUpload']['error'] == UPLOAD_ERR_NO_FILE) {
        $date=date('Y-m-d H:i:s');
        $target_dir = "../images/hotels/room/";
        $db_dir="images/hotels/room/";
        $target_file = $target_dir . date("d-m-Y")."-".time(). basename($_FILES["fileToUpload"]["name"]);
        $db= $db_dir . date("d-m-Y")."-".time().basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageName=basename($_FILES["fileToUpload"]["name"]);
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 50000000) {
          echo "Sorry, your file is too large.";
          $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "png" ) {
          echo "Sorry, only jpg, png files are allowed.";
          $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
          echo "Sorry, your file was not uploaded.";
          // if everything is ok, try to upload file
        } else {
          if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
           $sql10="INSERT INTO room SET hid='$hid',rno='$rno',rtitle='$rtitle',rhotelcost='$rhotelcost',rimage1='$db',totalroom='$totalroom',refrigerator='$refrigerator',wifi='$wifi',hotwater='$hotwater',aircondition='$aircondition',tv='$tv',private_bathroom='$private_bathroom',noofbed='$noofbed',restaurant='$restaurant',roomservice='$roomservice',laundry='$laundry',rstatus='1',aid='$sesid',ausername='$sesname'";
            $result10=mysqli_query($this->db,$sql10);
          }
        }
      }
      else {
        $target_dir = "../images/hotels/room/";
        $db_dir="images/hotels/room/";
        $target_dir1 = "../images/hotels/room/";
        $db_dir1="images/hotels/room/";
        $target_file = $target_dir .date("d-m-Y")."-".time(). basename($_FILES["coverToUpload"]["name"]);
        $db=$db_dir .date("d-m-Y")."-".time(). basename($_FILES["coverToUpload"]["name"]);
        $target_file1 = $target_dir1 .date("d-m-Y")."-".time(). basename($_FILES["fileToUpload"]["name"]);
        $db1=$db_dir1 .date("d-m-Y")."-".time().basename($_FILES["fileToUpload"]["name"]);
        $uploadOk1 = 1;
        $imageName=basename($_FILES["coverToUpload"]["name"]);
        $imageName1=basename($_FILES["fileToUpload"]["name"]);
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        $imageFileType1 = pathinfo($target_file1,PATHINFO_EXTENSION);
        // Check file size
        if ($_FILES["coverToUpload"]["size"] > 50000000) {
          echo "Sorry, your file is too large.";
          $uploadOk1 = 0;
        }
        if ($_FILES["fileToUpload"]["size"] > 50000000) {
          echo "Sorry, your file is too large.";
          $uploadOk1 = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "png" ) {
          echo "Sorry, only jpg, png files are allowed.";
          $uploadOk1 = 0;
        }
        if($imageFileType1 != "jpg" && $imageFileType1 != "JPG" && $imageFileType1 != "PNG" && $imageFileType1 != "png" ) {
          echo "Sorry, only jpg, png files are allowed.";
          $uploadOk1 = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk1 == 0) {
          echo "Sorry, your file was not uploaded.";
          // if everything is ok, try to upload file
        } else {
          if (move_uploaded_file($_FILES["coverToUpload"]["tmp_name"], $target_file)) {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file1)) {
              echo "The file ". basename( $_FILES["coverToUpload"]["name"]). " has been uploaded.";
              echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
              $sql1="INSERT INTO room SET hid='$hid',rno='$rno',rtitle='$rtitle',rhotelcost='$rhotelcost',rimage1='$db1',rimage2='$db',totalroom='$totalroom',refrigerator='$refrigerator',wifi='$wifi',hotwater='$hotwater',aircondition='$aircondition',tv='$tv',private_bathroom='$private_bathroom',noofbed='$noofbed',restaurant='$restaurant',roomservice='$roomservice',laundry='$laundry',rstatus='1',aid='$sesid',ausername='$sesname'";
              $result1=mysqli_query($this->db,$sql1);
            }
          }
          else {
            echo "Sorry, there was an error uploading your file.";
          }
        }
      }
      /////
    }
}
  // FUNCTION FOR DISPLAYING THE All the HotelRooms
  public function getAllHotelroomforadmin()
  {
    dbConnect::dbConnection();
    $sql="SELECT * FROM room ORDER BY rid DESC";
    $result=mysqli_query($this->db,$sql);
    while($row=mysqli_fetch_array($result))
    {
     $hid=$row['hid'];
      echo"
      <tr>
        <td>".$row['rid']."</td>
        <td>".$row['rno']."</td>
        <td style='color:#A0A0A0;'>".$row['hid']."</td>";
        $sql1="SELECT * FROM admin where id='$hid'";
        $result1=mysqli_query($this->db,$sql1);
        while($row1=mysqli_fetch_array($result1))
        {
            $rstatus=$row['rstatus'];

          $hotelcost=$row['rhotelcost'];
          $homestaycost=$row['rhomestaycost'];
        echo"
            <td style='color:#A0A0A0;'>".$row1['hname']."</td>
        <td>".$row['rtitle']."</td>


        <td>Rs.";
        if($hotelcost=='0')
        {
          echo " X ";
        }
        else
        {
          echo $hotelcost;
        }
        echo "</td>
        <td>".$row['totalroom']."</td>
        <td>";
        switch($rstatus)
        {
          case '0':
          {
            echo "<kbd class='btn btn-xs btn-danger'>Disabled</kbd>";
            break;
          }
          case '1':
          {
            echo "<kbd class='btn btn-xs btn-success'>Enabled</kbd>";
            break;
          }

        }

        echo "</td>
      ";
echo "<td>";
        if($row['refrigerator']==1)
        {
          echo "Refrigerator";
        }
        else {
          echo "";
        };
        if($row['wifi']==1)
        {
          echo ",Wifi";
        }
        else {
          echo "";
        }
        if($row['hotwater']==1)
        {
          echo ",Hotwater";
        }
        else {
          echo "";
        }
        if($row['aircondition']==1)
        {
          echo ",Airconditioning";
        }
        else {
          echo "";
        }
        if($row['tv']==1)
        {
          echo ",Tv";
        }
        else {
          echo "";
        }
        if($row['private_bathroom']==1)
        {
          echo ",Private Bathroom";
        }
        else {
          echo "";
        }
        if($row['restaurant']==1)
        {
          echo ",Restaurant";
        }
        else {
          echo "";
        }
        if($row['laundry']==1)
        {
          echo ",Laundry";
        }
        else {
          echo "";
        }
        echo "</td>";
      echo
        "<td>".$row['noofbed']."</td>
        <td><img src='../".$row['rimage1']."' style='height:80px;width:120px;' alt='image'></td>
         <td><img src='../".$row['rimage2']."' style='height:80px;width:120px;' alt='image'></td>

        <td>

                      <a href='edit.php?action=edit&rid=".$row['rid']."&of=room&sidebar=room'> <button type='button' rel='tooltip' title='Edit Room' class='btn btn-success btn-simple btn-xs'><i class='fa fa-edit'></i></button></a>
                    <a href='delete.php?action=delete&rid=".$row['rid']."&of=room'><button type='button' rel='tooltip' title='Delete Room' class='btn btn-danger btn-simple btn-xs' id='delbutton'>
                        <i class='fa fa-times'></i>
                    </button></a>
                    </td>
                    </tr>
        ";
    }
  }
}
public function getAllHotelroomforven($sesid)
{
  dbConnect::dbConnection();
  $sql="SELECT * FROM room WHERE aid='$sesid' ORDER BY rid DESC";
  $result=mysqli_query($this->db,$sql);
  return $result;
 /* while($row=mysqli_fetch_array($result))
  {
   $hid=$row['hid'];
    echo"
    <tr>
      <td>".$row['rid']."</td>
      <td>".$row['rno']."</td>
      <td style='color:#A0A0A0;'>".$row['hid']."</td>";
      $sql1="SELECT * FROM admin where id='$hid'";
      $result1=mysqli_query($this->db,$sql1);
      return $result1;
//       while($row1=mysqli_fetch_array($result1))
//       {
//           $rstatus=$row['rstatus'];

//         $hotelcost=$row['rhotelcost'];
//         $homestaycost=$row['rhomestaycost'];
//       echo"
//           <td style='color:#A0A0A0;'>".$row1['company_name']."</td>
//       <td>".$row['rtitle']."</td>


//       <td>Rs.";
//       if($hotelcost=='0')
//       {
//         echo " X ";
//       }
//       else
//       {
//         echo $hotelcost;
//       }
//       echo "</td>
//       <td>".$row['totalroom']."</td>
//       <td>";
//       switch($rstatus)
//       {
//         case '0':
//         {
//           echo "<kbd class='btn btn-xs btn-danger'>Disabled</kbd>";
//           break;
//         }
//         case '1':
//         {
//           echo "<kbd class='btn btn-xs btn-success'>Enabled</kbd>";
//           break;
//         }

//       }

//       echo "</td>
//     ";
// echo "<td>";
//       if($row['refrigerator']==1)
//       {
//         echo "Refrigerator";
//       }
//       else {
//         echo "";
//       };
//       if($row['wifi']==1)
//       {
//         echo ",Wifi";
//       }
//       else {
//         echo "";
//       }
//       if($row['hotwater']==1)
//       {
//         echo ",Hotwater";
//       }
//       else {
//         echo "";
//       }
//       if($row['aircondition']==1)
//       {
//         echo ",Airconditioning";
//       }
//       else {
//         echo "";
//       }
//       if($row['tv']==1)
//       {
//         echo ",Tv";
//       }
//       else {
//         echo "";
//       }
//       if($row['private_bathroom']==1)
//       {
//         echo ",Private Bathroom";
//       }
//       else {
//         echo "";
//       }
//       if($row['restaurant']==1)
//       {
//         echo ",Restaurant";
//       }
//       else {
//         echo "";
//       }
//       if($row['laundry']==1)
//       {
//         echo ",Laundry";
//       }
//       else {
//         echo "";
//       }
//       echo "</td>";
//     echo
//       "<td>".$row['noofbed']."</td>
//       <td><img src='../".$row['rimage1']."' style='height:80px;width:120px;' alt='image'></td>
//       <td>
//                     <a href='edit.php?action=edit&rid=".$row['rid']."&of=room&sidebar=room'> <button type='button' rel='tooltip' title='Edit Room' class='btn btn-success btn-simple btn-xs'><i class='fa fa-edit'></i></button></a>
//                   <a href='delete.php?action=delete&rid=".$row['rid']."&of=room'><button type='button' rel='tooltip' title='Delete Room' class='btn btn-danger btn-simple btn-xs' id='delbutton'>
//                       <i class='fa fa-times'></i>
//                   </button></a>
//                   </td>
//                   </tr>
//       ";
//   }
 }*/
}
  // FUNCTION FOR DISPLAYING THE All the Hotel names used while entering the new room
  public function getAllHotelName()
  {
    dbConnect::dbConnection();
    $sql4="SELECT * FROM admin ORDER BY company_name";
    $result4=mysqli_query($this->db,$sql4);
    while($row=mysqli_fetch_array($result4))
    {
      $hid=$row['id'];
      $hname=$row['company_name'];
      echo"
            <option value='".$hid."' >".$hname."</option>
      ";
    }
  }
  // public function gethotelname()
  // {
  //       dbConnect::dbConnection();
  //   $sql5="SELECT room.hname from hotel LEFT JOIN room on hotel.hid=room.hid ";
  //   $result5=mysqli_query($this->db,$sql5);
  //   while($row=mysqli_fetch_array($result5))
  //   {
  //     echo  $row['hname'];
  //   }
  //
  //
  // }
  //Function to delete hotel
  public function deleteHotelroom($rid)
  {
    dbConnect::dbConnection();
    $sqlSel="SELECT * FROM room where rid=$rid";
    $data=mysqli_query($this->db,$sqlSel);
    while($row=mysqli_fetch_array($data))
		{
      $low="../";
      $con=$low . $row["rimage1"];
			unlink($con);
		}
    $sql2="DELETE from room where rid=$rid";
    $delete=mysqli_query($this->db,$sql2);
    if($delete)
    {
      header('location: hotelroom.php?mes=deleted&sidebar=room');
    }
    else {
      echo "Error in Hotel deletion";
    }
  }
//FUNCTION TO ADD new Room from Hotel page
  public function createroom($hid,$rno,$rtitle,$rhomestaycost,$rhotelcost,$totalroom,$refrigerator,$wifi,$hotwater,$aircondition,$tv,$private_bathroom,$noofbed,$restaurant,$roomservice,$laundry)
{
    dbConnect::dbConnection();
         if(!isset($_FILES['fileToUpload']) || $_FILES['fileToUpload']['error'] == UPLOAD_ERR_NO_FILE) {
           $sql5="INSERT INTO room SET  hid='$hid',rno='$rno',rtitle='$rtitle',rhomestaycost='$rhomestaycost',rhotelcost='$rhotelcost',totalroom='$totalroom',refrigerator='$refrigerator',wifi='$wifi',hotwater='$hotwater',aircondition='$aircondition',tv='$tv',private_bathroom='$private_bathroom',noofbed='$noofbed',restaurant='$restaurant',roomservice='$roomservice',laundry='$laundry',rstatus='0'";
           $result5=mysqli_query($this->db,$sql5) or die(mysqli_connect_errno()."Room data cannot be inserted");;
         }
         else {
           $target_dir = "../images/hotels/room/";
           $db_dir="images/hotels/room/";
           $target_file = $target_dir . date("d-m-Y")."-".time() . basename($_FILES["fileToUpload"]["name"]);
           $db=$db_dir . date("d-m-Y")."-".time() .basename($_FILES["fileToUpload"]["name"]);
           $uploadOk = 1;
           $imageName=basename($_FILES["fileToUpload"]["name"]);
           $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
           // Check file size
           if ($_FILES["fileToUpload"]["size"] > 50000000) {
             echo "Sorry, your file is too large.";
             $uploadOk = 0;
           }
           // Allow certain file formats
           if($imageFileType != "jpg" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "png" ) {
             echo "Sorry, only jpg, png files are allowed.";
             $uploadOk = 0;
           }
           // Check if $uploadOk is set to 0 by an error
           if ($uploadOk == 0) {
             echo "Sorry, your file was not uploaded.";
             // if everything is ok, try to upload file
           } else {
             if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
               echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
               $sql5="INSERT INTO room SET  hid='$hid',rno='$rno',rtitle='$rtitle',rhomestaycost='$rhomestaycost',rhotelcost='$rhotelcost',rimage1='$db',totalroom='$totalroom',refrigerator='$refrigerator',wifi='$wifi',hotwater='$hotwater',aircondition='$aircondition',tv='$tv',private_bathroom='$private_bathroom',noofbed='$noofbed',restaurant='$restaurant',roomservice='$roomservice',laundry='$laundry',rstatus='0'";
               $result5=mysqli_query($this->db,$sql5) or die(mysqli_connect_errno()."Room data cannot be inserted");;
             } else {
               echo "Sorry, there was an error uploading your file.";
             }
           }
         }
}

// FUNCTION FOR DISPLAYING THE All the Rooms of the hotel from separate hotel page
public function getAllRoomFromHotel($id)
{
  dbConnect::dbConnection();
  $sql="SELECT * FROM room Where hid=$id ORDER BY rid DESC";
  $result=mysqli_query($this->db,$sql);
  while($row=mysqli_fetch_array($result))
  {
    $rstatus=$row['rstatus'];

    echo"
    <tr>
      <td>".$row['rid']."</td>
      <td>".$row['rno']."</td>
      <td>".$row['rtitle']."</td>
      <td>".$row['rtype']."</td>
      <td>Rs.".$row['rhomestaycost']."</td>
      <td>Rs.".$row['rhotelcost']."</td>
      <td>".$row['totalroom']."</td>
      <td><img src='../".$row['rimage1']."' style='height:80px;width:120px;'></td>
    ";
echo "<td>";
      if($row['refrigerator']==1)
      {
        echo "Refrigerator";
      }
      else {
        echo "";
      };
      if($row['wifi']==1)
      {
        echo ",Wifi";
      }
      else {
        echo "";
      }
      if($row['hotwater']==1)
      {
        echo ",Hotwater";
      }
      else {
        echo "";
      }
      if($row['aircondition']==1)
      {
        echo ",Airconditioning";
      }
      else {
        echo "";
      }
      if($row['tv']==1)
      {
        echo ",Tv";
      }
      else {
        echo "";
      }
      if($row['private_bathroom']==1)
      {
        echo ",Private Bathroom";
      }
      else {
        echo "";
      }
      if($row['restaurant']==1)
      {
        echo ",Restaurant";
      }
      else {
        echo "";
      }
      if($row['laundry']==1)
      {
        echo ",Laundry";
      }
      else {
        echo "";
      }
      echo "</td>";
    echo
      "<td>".$row['noofbed']."</td>
      <td>";
      switch($rstatus)
      {
        case '0':
        {
          echo "<kbd class='btn btn-xs btn-danger'>Disabled</kbd>";
          break;
        }
        case '1':
        {
          echo "<kbd class='btn btn-xs btn-success'>Enabled</kbd>";
          break;
        }

      }


      echo "</td>

                    <!--<a href='edit.php?action=edit&rid=".$row['rid']."&of=room'> <button type='button' rel='tooltip' title='Edit Profile' class='btn btn-success btn-simple btn-xs'><i class='fa fa-edit'></i></button></a>
                  <a href='delete.php?action=delete&rid=".$row['rid']."&of=room'><button type='button' rel='tooltip' title='Remove' class='btn btn-danger btn-simple btn-xs' id='delbutton'>
                      <i class='fa fa-times'></i>
                  </button></a>-->
      ";
  }
}
public function editHotelroom($rid)
{
  dbConnect::dbConnection();
  $sql3="SELECT * FROM room where rid=$rid";
  $result3=mysqli_query($this->db,$sql3);
  while($row=mysqli_fetch_array($result3))
  {
            $rid=$row['rid'];
            $rno=$row['rno'];

              $rtitle=$row['rtitle'];
                $totalroom=$row['totalroom'];
            $rhomestaycost=$row['rhomestaycost'];
            $rhotelcost=$row['rhotelcost'];
            $rimage1=$row['rimage1'];
            $noofbed=$row['noofbed'];
            $rstatus=$row['rstatus'];

                          switch($rstatus)
                          {
                            case 0:
                            {
                              $rstatus='Disabled';
                              break;
                            }
                            case 1:
                            {
                              $rstatus='Enabled';
                              break;
                            }
                          }
            echo "
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-md-8'>
                        <div class='card'>
                            <div class='card-header' data-background-color='red'>
                                <h4 class='title'>Edit Room</h4>
                                <p class='category'>Complete the Room profile</p>
                            </div>
                            <div class='card-content'>
                <form method='POST' action='edit.php?action=edit&rid=".$row['rid']."&of=room' enctype='multipart/form-data'>
                    <div class='row'>
                        <div class='col-md-5'>
                            <div class='form-group label-floating'>
                                <label class='control-label'>Room Id (disabled)</label>
                                <input type='text' class='form-control' value='".$rid."' name='rid' disabled>
                            </div>
                        </div>
                        <div class='col-md-7'>
                            <div class='form-group label-floating'>
                                <label class='control-label'>Room Number</label>
                                <input type='text' class='form-control' value='".$rno."' name='upd_rno'>
                            </div>
                        </div>
                      </div>
                    <div class='row'>
                        <div class='col-md-12'>
                            <div class='form-group label-floating'>
                                <label class='control-label'>Room Title(Name)</label>
                                <input type='text' class='form-control' value='".$rtitle."' name='upd_rtitle'>
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                    <div class='col-md-6'>
                        <div class='form-group label-floating'>
                            <label class='control-label'>Change image</label>
                        </div>
                      <input type='file' class='form-control-file' name='fileToUpload' id='fileToUpload'>
                    </div>

                    </div>
                    <Div class='row'>
                      <div class='col-md-7'>
                          <div class='form-group label-floating'>
                              <label class='control-label'>HotelRoom Cost</label>
                              <input type='text' class='form-control' value='".$rhotelcost."' name='upd_rhotelcost'>
                              <span class='bmd-help'>Only edit if it is a hotel </span>
                          </div>
                      </div>
                      <div class='col-md-5'>
                          <div class='form-group label-floating'>
                              <label class='control-label'>Homestay Cost</label>
                              <input type='text' class='form-control' value='".$rhomestaycost."' name='upd_rhomestaycost'>
                              <span class='bmd-help'>Only edit if it is a Homestay</span>
                          </div>
                      </div>
                    </div>

                        <div class='row'>
                        <div class='col-md-4'>
                            <div class='form-group label-floating'>
                            <label for='exampleFormControlSelect1'>Total Rooms</label>
                            <select class='form-control' id='exampleFormControlSelect1' name='upd_totalroom' value='".$totalroom."'>
                              <option value='$totalroom'>$totalroom</option>
                              <option value='1'>1</option>
                              <option value='2'>2</option>
                              <option value='3'>3</option>

                            </select>
                            </div>
                        </div>
                        <div class='form-group col-md-4'>
                           <label for='exampleFormControlSelect1'>No. of Bed</label>
                           <select class='form-control' id='exampleFormControlSelect1' name='upd_noofbed'>
                            <option value='$noofbed'>$noofbed</option>
                             <option value='1'>1</option>
                             <option value='2'>2</option>
                              <option value='3'>3</option>
                           </select>
                         </div>
                         <div class='form-group col-md-4'>
                            <label for='exampleFormControlSelect1'>Status</label>
                            <select class='form-control' id='exampleFormControlSelect1' name='upd_rstatus' disabled>
                             <option value='$rstatus'>$rstatus</option>
                              <option value='1'>Enabled</option>
                              <option value='0'>Disabled</option>
                            </select>
                          </div>
                         </div>
                    <button type='submit' class='btn btn-danger pull-right'>Update </button>
                    <div class='clearfix'></div>
                </form>
                          </div>
                      </div>
                  </div>
                  <div class='col-md-4'>
                   <div class='card card-profile'>
                          <div class='card-avatar'>
                              <a href='#pablo'>
                                  <img class='img' src='../$rimage1' style='height:150px;'>
                              </a>
                          </div>
                          <div class='content'>
                            <h6 class='category text-gray'>".$rstatus."</h6>
                            <h4 class='card-title' style='text-transform:capitalize;'>".$rtitle."</h4>
                            <p class='card-content'>
                              Total No of room :  ".$totalroom."
                            </p>
                            <a href='#pablo' class='btn btn-default btn-round' disabled>Rs ".$rhotelcost."</a>
                        </div>

                      </div>
                  </div>
              </div>
            </div>
            ";
  }
}
public function updateHotelroom($rid,$upd_rno,$upd_rtitle,$upd_totalroom,$upd_rhotelcost,$upd_rhomestaycost,$upd_noofbed,$upd_rstatus)
{
  dbConnect::dbConnection();

        if(!isset($_FILES['fileToUpload']) || $_FILES['fileToUpload']['error'] == UPLOAD_ERR_NO_FILE) {
          $sql5="UPDATE room SET rno='$upd_rno',rtitle='$upd_rtitle',totalroom='$upd_totalroom',rhomestaycost='$upd_rhomestaycost',rhotelcost='$upd_rhotelcost',noofbed='$upd_noofbed',rstatus='$upd_rstatus' WHERE rid=$rid";
          $result5=mysqli_query($this->db,$sql5) or die(mysqli_connect_errno()."Room data cannot be inserted");;
          if($result5)
          {
           @header('location: hotelroom.php?mes=updated&sidebar=room');

          //echo"fudge";
          }
          else
          {
          echo "Update Failed!";
          }
        }
        else {
          $target_dir = "../images/hotels/room/";
          $db_dir="images/hotels/room/";
          $target_file = $target_dir . date("d-m-Y")."-".time() . basename($_FILES["fileToUpload"]["name"]);
          $db=$db_dir . date("d-m-Y")."-".time() .basename($_FILES["fileToUpload"]["name"]);
          $uploadOk = 1;
          $imageName=basename($_FILES["fileToUpload"]["name"]);
          $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
          // Check file size
          if ($_FILES["fileToUpload"]["size"] > 50000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
          }
          // Allow certain file formats
          if($imageFileType != "jpg" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "png" ) {
            echo "Sorry, only jpg, png files are allowed.";
            $uploadOk = 0;
          }
          // Check if $uploadOk is set to 0 by an error
          if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
          } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
              echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
              $sqldeletedb="SELECT * FROM room where rid=$rid";
              $data=mysqli_query($this->db,$sqldeletedb);
              while($row=mysqli_fetch_array($data))
              {
                $low="../";
                $con=$low . $row["rimage1"];
                unlink($con);
              }
              $sql5="UPDATE room SET rno='$upd_rno',rtitle='$upd_rtitle',totalroom='$upd_totalroom',rhomestaycost='$upd_rhomestaycost',rimage1='$db',rhotelcost='$upd_rhotelcost',noofbed='$upd_noofbed',rstatus='$upd_rstatus' WHERE rid=$rid";
              $result5=mysqli_query($this->db,$sql5) or die(mysqli_connect_errno()."Room data cannot be inserted");;
              if($result5)
              {
                @header ('location: hotelroom.php?mes=updated&sidebar=room');

              }
             else {
              echo "Sorry, there was an error uploading your file.";
            }
          }
        }
}

}
public function getHotelId($sesid)
{
  dbConnect::dbConnection();
$sql10="SELECT * FROM admin ";
$result10=mysqli_query($this->db,$sql10);
return $result10;
}
/*getting hotel id for hotelroom page*/
public function getHotelIdForHotelroom($sesid)
{
  dbConnect::dbConnection();
$sql10="SELECT * FROM admin WHERE id='$sesid'";
$result10=mysqli_query($this->db,$sql10);
return $result10;
}
// HOTEL NAME FOR NAVBAR

public function getHotelName($sesid)
{
  dbConnect::dbConnection();
$sql11="SELECT * FROM admin WHERE id='$sesid'";
$result11=mysqli_query($this->db,$sql11);
return $result11;
}


public function publishroom($rid,$rstatus)
  {

    dbConnect::dbConnection();
    if($rstatus=='1')
    {
      $sql4="UPDATE room SET rstatus='0' WHERE rid=$rid";
    }
    else {
      $sql4="UPDATE room SET rstatus='1' WHERE rid=$rid";
    }
    $result1=mysqli_query($this->db,$sql4);
    if($result1)
    {
      header('Location: '.$_SERVER['PHP_SELF'].'?sidebar=hotelroom');

    }

  }
}
?>
