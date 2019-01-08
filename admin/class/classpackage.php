<?php
@include_once('session.php');
include_once('dbconfig.php');
Class Package extends dbConnect
{
  //FUNCTION TO ADD new PAckage
  public function createPackage($pname,$paddress,$plocation,$pdescription,$pcost,$pduration,$pstartdate,$pexpiry,$pcategory,$pitinerary,$id,$username,$pmap,$pkeyword)
  {
    dbConnect::dbConnection();

    if(!isset($_FILES['fileToUpload']) || $_FILES['fileToUpload']['error'] == UPLOAD_ERR_NO_FILE) {
      if(!isset($_FILES['coverToUpload']) || $_FILES['coverToUpload']['error'] == UPLOAD_ERR_NO_FILE) {
        $sql1="INSERT INTO package SET  pname='$pname',paddress='$paddress',plocation='$plocation',pdescription='$pdescription',pcost='$pcost',pduration='$pduration',pstartdate='$pstartdate',pexpiry='$pexpiry',pcategory='$pcategory',pitinerary='$pitinerary',id='$id',username='$username',pmap='$pmap',pkeyword='$pkeyword',pstatus='1'";
        $result1=mysqli_query($this->db,$sql1);
      }
      else {
        $target_dir = "../images/package/";
        $db_dir="images/package/";
        $date=date('Y-m-d H:i:s');
        $target_file = $target_dir . date("d-m-Y")."-".time(). basename($_FILES["coverToUpload"]["name"]);
        $db= $db_dir . date("d-m-Y")."-".time().basename($_FILES["coverToUpload"]["name"]);

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
            $sql2="INSERT INTO package SET  pname='$pname',paddress='$paddress',plocation='$plocation',pdescription='$pdescription',pcost='$pcost',pduration='$pduration',pstartdate='$pstartdate',pexpiry='$pexpiry',pcategory='$pcategory',pitinerary='$pitinerary',id='$id',pimg2='$db',username='$username',pmap='$pmap',pkeyword='$pkeyword',pstatus='1'";
            $result2=mysqli_query($this->db,$sql2);
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
        $target_dir = "../images/package/";
        $db_dir="images/package/";
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

            $sql1="INSERT INTO package SET  pname='$pname',paddress='$paddress',pimg1='$db',plocation='$plocation',pdescription='$pdescription',pcost='$pcost',pduration='$pduration',pstartdate='$pstartdate',pexpiry='$pexpiry',pcategory='$pcategory',pitinerary='$pitinerary',id='$id',username='$username',pmap='$pmap',pkeyword='$pkeyword',pstatus='1'";
            $result1=mysqli_query($this->db,$sql1);
          }
        }
      }
      else {
        $target_dir = "../images/package/";
        $db_dir="images/package/";
        $target_dir1 = "../images/package/";
        $db_dir1="images/package/";
        $target_file = $target_dir .date("d-m-Y")."-".time(). basename($_FILES["coverToUpload"]["name"]);
        $db=$db_dir . date("d-m-Y")."-".time() . basename($_FILES["coverToUpload"]["name"]);
        $target_file1 = $target_dir1 .date("d-m-Y")."-".time(). basename($_FILES["fileToUpload"]["name"]);
        $db1=$db_dir1 . date("d-m-Y")."-".time() . basename($_FILES["fileToUpload"]["name"]);
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
              $sql1="INSERT INTO package SET  pname='$pname',paddress='$paddress',pimg1='$db1',pimg2='$db',plocation='$plocation',pdescription='$pdescription',pcost='$pcost',pduration='$pduration',pstartdate='$pstartdate',pexpiry='$pexpiry',pcategory='$pcategory',pitinerary='$pitinerary',id='$id',username='$username',pmap='$pmap',pkeyword='$pkeyword',pstatus='1'";
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


  public function getAllPackage($sesid,$admintype)
  {
    dbConnect::dbConnection();
    if($admintype=='1')
    {
    $sql2="SELECT * FROM package ORDER BY pid DESC";
    }
    else {
      $sql2="SELECT * FROM package WHERE id='$sesid' ORDER BY pid DESC";
    }
    $result2=mysqli_query($this->db,$sql2);
    return $result2;
  }

  //Function to delete package
  public function deletePackage($pid)
  {
    dbConnect::dbConnection();
    $sqlSel="SELECT * FROM package where pid=$pid";
    $data=mysqli_query($this->db,$sqlSel);
    while($row=mysqli_fetch_array($data))
    {
      $low="../";
      $img=$low . $row["pimg1"];
      $cimg=$low . $row["pimg2"];


      unlink($cimg);
      unlink($img);
    }
    $sql3="DELETE from package where pid=$pid";
    $data=mysqli_query($this->db,$sql3);
    if($data)
    {
      header('location: package.php?mes=deleted&sidebar=package');

    }
    else {
      echo "Error in deletion";
    }
  }


  public function editPackage($pid)
  {
    dbConnect::dbConnection();
    $sql3="SELECT * FROM package where pid=$pid";
    $result3=mysqli_query($this->db,$sql3);
    while($row=mysqli_fetch_array($result3))
    {
      $pid=$row['pid'];
      $pname=$row['pname'];

      $paddress=$row['paddress'];
      $plocation=$row['plocation'];
      $pcost=$row['pcost'];
      $pduration=$row['pduration'];
      $pstartdate=$row['pstartdate'];
      $pexpiry=$row['pexpiry'];
      $pcategory=$row['pcategory'];
      $pdescription=$row['pdescription'];
      $pitinerary=$row['pitinerary'];
      $pimage=$row['pimg1'];
      $pstatus=$row['pstatus'];
      $pmap=$row['pmap'];
      $pkeyword=$row['pkeyword'];

      switch($pstatus)
      {
        case 0:
        {
          $pstatus_name='Disabled';
          break;
        }
        case 1:
        {
          $pstatus_name='Enabled';
          break;
        }
      }
      echo "
      <div class='container-fluid'>
      <div class='row'>
      <div class='col-md-8'>
      <div class='card'>
      <div class='card-header' data-background-color='red'>
      <h4 class='title'>Edit Package</h4>
      <p class='category'>Complete the Package Details</p>
      </div>
      <div class='card-content'>
      <form method='POST' action='edit.php?action=edit&pid=".$row['pid']."&of=package' enctype='multipart/form-data'>
      <div class='row'>
      <div class='col-md-5'>
      <div class='form-group label-floating'>
      <label class='control-label'>Package Id (disabled)</label>
      <input type='text' class='form-control' value='".$pid."' name='pid' disabled>
      </div>
      </div>
      <div class='col-md-7'>
      <div class='form-group label-floating'>
      <label class='control-label'>Package Name</label>
      <input type='text' class='form-control' value='".$pname."' name='upd_pname'>
      </div>
      </div>
      </div>
      <div class='row'>
      <div class='col-md-12'>
      <div class='form-group label-floating'>
      <label class='control-label'>Address</label>
      <input type='text' class='form-control' value='".$paddress."' name='upd_paddress'>
      </div>
      </div>
      </div>
      <Div class='row'>
      <div class='col-md-7'>
      <div class='form-group label-floating'>
      <label class='control-label'>Location</label>
      <input type='text' class='form-control' value='".$plocation."' name='upd_plocation'>
      </div>
      </div>
      <div class='col-md-6'>
      <div class='form-group label-floating'>
      <label class='control-label'>Total Cost</label>
      <input type='text' class='form-control' value='".$pcost."' name='upd_pcost'>
      </div>
      </div>
      <div class='col-md-6'>
      <div class='form-group label-floating'>
      <label class='control-label'>Duration(Total No of Days)</label>
      <input type='text' class='form-control' value='".$pduration."' name='upd_pduration'>
      </div>
      </div>
      </div>
      <div class='row'>
      <div class='col-md-6'>
      <div class='form-group label-floating'>
      <label class='control-label'>First image</label>
      </div>
      <input type='file' name='fileToUpload' id='fileToUpload'>

      </div>
      <div class='col-md-6'>
      <div class='form-group label-floating'>
      <label class='control-label'>Second image</label>
      </div>
      <input type='file' name='coverToUpload' id='coverToUpload'>

      </div>
      </div>
      <div class='row'>
      <div class='col-md-6'>
      <div class='form-group label-floating'>
      <label class='control-label'>Start date</label>
      <input type='text' class='form-control' value='".$pstartdate."' name='upd_pstartdate'>
      </div>
      </div>
      <div class='col-md-6'>
      <div class='form-group label-floating'>
      <label class='control-label'>End date</label>
      <input type='text' class='form-control' value='".$pexpiry."' name='upd_pexpiry'>
      </div>
      </div>
      </div>
      <div class='row'>
      <div class='col-md-12'>
      <div class='form-group'>
      <label>Description about Package</label>
      <div class='form-group label-floating'>
      <label class='control-label'>Describe about Package in brief</label>
      <textarea class='form-control' rows='3' name='upd_pdescription'>".$pdescription."</textarea>
      </div>
      </div>
      </div>
      </div>
      <div class='row'>
      <div class='col-md-12'>
      <div class='form-group'>
      <label>Itinerary</label>
      <div class='form-group label-floating'>

      <textarea class='form-control' rows='3' name='upd_pitinerary'>".$pitinerary."</textarea>
      </div>
      </div>
      </div>
      </div>
      <div class='row'>
      <div class='col-md-6'>
      <div class='form-group label-floating'>
      <label class='control-label'>Map</label>
      <input type='text' class='form-control' value='".$pmap."' name='upd_pmap'>
      </div>
      </div>
      </div>
      <div class='row'>
      <div class='col-md-6'>
      <div class='form-group label-floating'>
      <label for='exampleFormControlSelect1'>Category</label>
      <select class='form-control' id='exampleFormControlSelect1' name='upd_pcategory' >
      <option value='$pcategory'>$pcategory</option>
      <option value='Hiking'>Hiking</option>
      <option value='Trekking'>Trekking</option>
      <option value='Religious'>Religious Tour</option>
      <option value='Site'>Site Seeing</option>
      <option value='Tour'>Tour</option>

      </select>
      </div>
      </div>
      <div class='form-group col-md-6'>
      <label for='exampleFormControlSelect1'>Status</label>
      <select class='form-control' id='exampleFormControlSelect1' name='upd_pstatus' disabled>
      <option value='$pstatus'>$pstatus_name</option>
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
      <img class='img' src='../$pimage' style='height:150px;'>
      </a>
      </div>
      <div class='content'>
      <h6 class='category text-gray'>".$paddress."</h6>
      <h4 class='card-title'>".$pname."</h4>
      <p class='card-content'>
      ".$pdescription."
      </p>
      <a href='#pablo' class='btn btn-default btn-round' disabled>".$pcost."</a>
      </div>

      </div>
      </div>
      </div>
      </div>
      ";
    }
  }
  public function updatePackage($pid,$upd_pname,$upd_paddress,$upd_plocation,$upd_pdescription,$upd_pcost,$upd_pduration,$upd_pstartdate,$upd_pexpiry,$upd_pcategory,$upd_pitinerary,$upd_pmap)
  {
    dbConnect::dbConnection();
    // echo "hello";
    // $sql4="UPDATE package SET pname='$upd_pname',paddress='$upd_paddress',plocation='$upd_plocation',pdescription='$upd_pdescription',pcost='$upd_pcost',pduration='$upd_pduration',pstartdate='$upd_pstartdate',pexpiry='$upd_pexpiry',pcategory='$upd_pcategory',pmap='$upd_pmap',pstatus='$upd_pstatus' WHERE pid=$pid";
    // $update=mysqli_query($this->db,$sql4);
    // if($update)
    // {
    //   @header('location: package.php?mes=updated&sidebar=package');
    // }
    // else {
    //       echo "Package Update Failed!";
    //     }


    if(!isset($_FILES['fileToUpload']) || $_FILES['fileToUpload']['error'] == UPLOAD_ERR_NO_FILE) {
      if(!isset($_FILES['coverToUpload']) || $_FILES['coverToUpload']['error'] == UPLOAD_ERR_NO_FILE) {
        $sql1="UPDATE package SET pname='$upd_pname',paddress='$upd_paddress',plocation='$upd_plocation',pdescription='$upd_pdescription',pcost='$upd_pcost',pduration='$upd_pduration',pstartdate='$upd_pstartdate',pexpiry='$upd_pexpiry',pcategory='$upd_pcategory',pitinerary='$upd_pitinerary',pmap='$upd_pmap' WHERE pid=$pid";
        $result1=mysqli_query($this->db,$sql1);
        if($result1)
        {
          @header('location: package.php?mes=updated&sidebar=package');

          //echo"fudge";
        }
        else
        {
          echo "Update Failed!";
        }
      }
      else {
        echo"entererd";
        $target_dir = "../images/package/";
        $target_file = $target_dir . date("d-m-Y")."-".time() . basename($_FILES["coverToUpload"]["name"]);
        $uploadOk1 = 1;
        $imageName=basename($_FILES["coverToUpload"]["name"]);
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        $db_dir="images/package/";
        $deleteFile=$target_file;
        $db=$db_dir . date("d-m-Y")."-".time() . basename($_FILES["coverToUpload"]["name"]);

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
            $sqldeletedb="SELECT * FROM package where pid=$pid";
            $data=mysqli_query($this->db,$sqldeletedb);
            while($row=mysqli_fetch_array($data))
            {
              $low="../";
              $con=$low . $row["pimg2"];
              unlink($con);
            }
            $sql1="UPDATE package SET pname='$upd_pname',paddress='$upd_paddress',plocation='$upd_plocation',pdescription='$upd_pdescription',pcost='$upd_pcost',pduration='$upd_pduration',pstartdate='$upd_pstartdate',pexpiry='$upd_pexpiry',pcategory='$upd_pcategory',pitinerary='$upd_pitinerary',pimg2='$db',pmap='$upd_pmap' WHERE pid=$pid";
            $result1=mysqli_query($this->db,$sql1);
            if($result1)
            {
              @header('location: package.php?mes=updated&sidebar=package');

              //echo"fudge";
            }
            else
            {
              echo "Update Failed!";
            }
            //  unlink($deleteFile);
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
        $target_dir = "../images/package/";
        $db_dir="images/package/";
        $target_file = $target_dir . date("d-m-Y")."-".time(). basename($_FILES["fileToUpload"]["name"]);
        $deleteFile=$target_file;
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
            $sqldeletedb="SELECT * FROM package where pid=$pid";
            $data=mysqli_query($this->db,$sqldeletedb);
            while($row=mysqli_fetch_array($data))
            {
              $low="../";
              $con=$low . $row["pimg1"];
              unlink($con);

            }

            $sql1="UPDATE package SET pname='$upd_pname',paddress='$upd_paddress',plocation='$upd_plocation',pdescription='$upd_pdescription',pcost='$upd_pcost',pduration='$upd_pduration',pstartdate='$upd_pstartdate',pexpiry='$upd_pexpiry',pcategory='$upd_pcategory',pitinerary='$upd_pitinerary',pimg1='$db',pmap='$upd_pmap' WHERE pid=$pid";
            $result1=mysqli_query($this->db,$sql1);
             if($result1)
            {
              @header('location: package.php?mes=updated&sidebar=package');

              //echo"fudge";
            }
            //  unlink($deleteFile);
          }
        }
      }
      else {
        $target_dir = "../images/package/";
        $db_dir="images/package/";
        $target_dir1 = "../images/package/";
        $db_dir1="images/package/";
        $target_file = $target_dir .date("d-m-Y")."-".time(). basename($_FILES["coverToUpload"]["name"]);
        $deleteFile=$target_file;
        $db=$db_dir .date("d-m-Y")."-".time(). basename($_FILES["coverToUpload"]["name"]);
        $target_file1 = $target_dir1 .date("d-m-Y")."-".time(). basename($_FILES["fileToUpload"]["name"]);
        $deleteFile1=$target_file1;
        $db1=$db_dir1 .date("d-m-Y")."-".time(). basename($_FILES["fileToUpload"]["name"]);
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
              $sqldeletedb="SELECT * FROM package where pid=$pid";
              $data=mysqli_query($this->db,$sqldeletedb);
              while($row=mysqli_fetch_array($data))
              {
                $low="../";
                $con=$low . $row["pimg2"];
                $img=$low . $row["pimg1"];
                unlink($con);
                 unlink($img);
              }
              $sql1="UPDATE package SET pname='$upd_pname',paddress='$upd_paddress',plocation='$upd_plocation',pdescription='$upd_pdescription',pcost='$upd_pcost',pduration='$upd_pduration',pstartdate='$upd_pstartdate',pexpiry='$upd_pexpiry',pcategory='$upd_pcategory',pitinerary='$upd_pitinerary',pimg1='$db1',pimg2='$db',pmap='$upd_pmap' WHERE pid=$pid";
              $result1=mysqli_query($this->db,$sql1);
              if($result1)
              {
                // unlink($deleteFile1);
                // unlink($deleteFile);
                header('location:package.php?sidebar=package');
              }
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
  public function getAllPackageProvider()
  {
    dbConnect::dbConnection();
    $sql2="SELECT * FROM admin ORDER BY aid DESC";
    $result2=mysqli_query($this->db,$sql2);
    return $result2;
}
public function getAllPackageInfo()
{
  dbConnect::dbConnection();
  $sql5="SELECT * FROM package ";
  $result5=mysqli_query($this->db,$sql5);
  return $result5;
}
public function getAllVendorInfo($vendorid)
{
  dbConnect::dbConnection();
  // if($admintype=='1')
  // {
  // $sql="SELECT * FROM book_package ORDER BY pbid DESC";
  // }
  // else {

      $sql="SELECT * FROM admin WHERE id='$vendorid'";
  $result=mysqli_query($this->db,$sql);
  return $result;
}

  public function publishpackage($pid,$pstatus)
    {

      dbConnect::dbConnection();
      if($pstatus=='1')
      {
        $sql4="UPDATE package SET pstatus='0' WHERE pid=$pid";
      }
      else {
        $sql4="UPDATE package SET pstatus='1' WHERE pid=$pid";
      }
      $result1=mysqli_query($this->db,$sql4);
      if($result1)
      {
        header('Location: '.$_SERVER['PHP_SELF'].'?sidebar=package');

      }

    }

}

?>
