<?php
@include_once('session.php');
include_once('dbconfig.php');
Class Location extends dbConnect
{
  public function getAllLocationA()
  {
      dbConnect::dbConnection();
    $sql="SELECT * FROM location";
    $result=mysqli_query($this->db,$sql);
     return $result;
    // while($row=mysqli_fetch_array($result))
    // {
    //   $location=$row['lname'];
    //   $limage=$row['limage'];
    //   $lstatus=$row['lstatus'];
    //
    //   echo "
    //   <tr>
    //     <td>".$row['lid']."</td>
    //     <td>".$row['lname']."</td>
    //     <td><img src='../$limage' style='height:80px;width:110px;' alt='First image'></td>
    //     <td><img src='' style='height:80px;width:110px;' alt='Second image'></td>
    //
    //     <td>";
    //     switch($lstatus)
    //     {
    //       case '0':
    //       {
    //         echo "<kbd class='btn btn-xs btn-danger'>Disabled</kbd>";
    //         break;
    //       }
    //       case '1':
    //       {
    //         echo "<kbd class='btn btn-xs btn-success'>Enabled</kbd>";
    //         break;
    //       }
    //
    //     }
    //
    //     echo"</td>
    //
    //       <td>
    //       <a href='edit.php?action=edit&lid=".$row['lid']."&of=todo'> <button type='button' rel='tooltip' title='Edit Location' class='btn btn-success btn-simple btn-xs'><i class='fa fa-edit'></i></button></a>
    //       <a href='delete.php?action=delete&lid=".$row['lid']."&of=todo'><button type='button' rel='tooltip' title='Delete Location' class='btn btn-danger btn-simple btn-xs' id='delbutton'><i class='fa fa-times'></i>
    //       </button></a></td>
    //
    //                   </tr>
    //   ";
    // }
  }
  public function getAllLocation()
  {
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
  public function createLocation($lid,$lname)
  {
    dbConnect::dbConnection();
    date_default_timezone_set('Asia/Kathmandu');
    $date= date("Y-m-d h:i:sa");
    //$result1=mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Things to do data cannot be inserted");;
    if(!isset($_FILES['fileToUpload']) || $_FILES['fileToUpload']['error'] == UPLOAD_ERR_NO_FILE) {
      if(!isset($_FILES['coverToUpload']) || $_FILES['coverToUpload']['error'] == UPLOAD_ERR_NO_FILE) {
        $sql1="INSERT INTO location SET lid='$lid',lname='$lname',lstatus='1'";
        $result1=mysqli_query($this->db,$sql1);
      }
      else {
        $target_dir = "../images/location/";
        $db_dir="images/location/";
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
            $sql1="INSERT INTO location SET lid='$lid',lname='$lname',lstatus='1',limage2='$db'";
            $result1=mysqli_query($this->db,$sql1);
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
        $target_dir = "../images/location/";
        $db_dir="images/location/";
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

            $sql1="INSERT INTO location SET lid='$lid',lname='$lname',lstatus='1',limage='$db'";
            $result1=mysqli_query($this->db,$sql1);
          }
        }
      }
      else {
        $target_dir = "../images/location/";
        $db_dir="images/location/";
        $target_dir1 = "../images/location/";
        $db_dir1="images/location/";
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
              $sql1="INSERT INTO location SET lid='$lid',lname='$lname',lstatus='1',limage='$db1',limage2='$db'";
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

  public function getLocation()
  {
      dbConnect::dbConnection();
    $sql="SELECT * FROM location ORDER BY lid";
    $result=mysqli_query($this->db,$sql);
    return $result;
  }

public function publishLocation($lid,$lstatus)
  {

    dbConnect::dbConnection();
    if($lstatus=='1')
    {
      $sql4="UPDATE location SET lstatus='0' WHERE lid=$lid";
    }
    else {
      $sql4="UPDATE location SET lstatus='1' WHERE lid=$lid";
    }
    $result1=mysqli_query($this->db,$sql4);
    if($result1)
    {
      header('Location: '.$_SERVER['PHP_SELF'].'?sidebar=location');

    }

  }
  public function deleteLocation($lid)
  {
    dbConnect::dbConnection();
    $sqlSel="SELECT * FROM location where lid=$lid";
    $data=mysqli_query($this->db,$sqlSel);
    while($row=mysqli_fetch_array($data))
    {
      $low="../";
      $img=$low . $row["limage"];
      $cimg=$low . $row["limage2"];
      unlink($cimg);
      unlink($img);
    }
    $sql3="DELETE from location where lid=$lid";
    $data=mysqli_query($this->db,$sql3);
    if($data)
    {
      header('location: location.php?mes=deleted&sidebar=location');

    }
    else {
      echo "Error in deletion";
    }
  }

}
