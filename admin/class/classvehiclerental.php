<?php
@include_once('session.php');
include_once('dbconfig.php');
class vehicle extends dbconnect
{
	public function createVehicle($vtitle,$vtype,$vdescription,$vtotalseat,$vcost,$vkeyword,$id)
	{
			dbConnect::dbconnection();
			$date=date("Y/m/d");

    if(!isset($_FILES['fileToUpload']) || $_FILES['fileToUpload']['error'] == UPLOAD_ERR_NO_FILE) {
      if(!isset($_FILES['coverToUpload']) || $_FILES['coverToUpload']['error'] == UPLOAD_ERR_NO_FILE)
      {
     		$sql1="INSERT INTO vehicle SET vtitle='$vtitle',vtype='$vtype',vdescription='$vdescription',vtotalseat='$vtotalseat',vcost='$vcost',vadded_date='$date',vstatus='1',vkeyword='$vkeyword',id='$id'";
				$result=mysqli_query($this->db,$sql1);
      }
      else {
        $target_dir = "../images/vehicle/";
        $db_dir="images/vehicle/";
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

           		$sql1="INSERT INTO vehicle SET vtitle='$vtitle',vtype='$vtype',vdescription='$vdescription',vtotalseat='$vtotalseat',vcost='$vcost',vadded_date='$date',vstatus='1',vkeyword='$vkeyword',vimg2='$db',id='$id'";
				$result=mysqli_query($this->db,$sql1);
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
        $target_dir = "../images/vehicle/";
        $db_dir="images/vehicle/";
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
		$sql1="INSERT INTO vehicle SET vtitle='$vtitle',vtype='$vtype',vdescription='$vdescription',vtotalseat='$vtotalseat',vcost='$vcost',vadded_date='$date',vstatus='1',vkeyword='$vkeyword',vimg1='$db',id='$id'";
				$result=mysqli_query($this->db,$sql1);
          }
        }
      }
      else {
        $target_dir = "../images/vehicle/";
        $db_dir="images/vehicle/";
        $target_dir1 = "../images/vehicle/";
        $db_dir1="images/vehicle/";
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
           		$sql1="INSERT INTO vehicle SET vtitle='$vtitle',vtype='$vtype',vdescription='$vdescription',vtotalseat='$vtotalseat',vcost='$vcost',vadded_date='$date',vstatus='1',vkeyword='$vkeyword',vimg1='$db1',vimg2='$db',id='$id'";
				$result=mysqli_query($this->db,$sql1);
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

   public function getAllvehicle($sesid,$admintype)
  {
    dbConnect::dbConnection();
		if($admintype=='1')
		{
    $sql2="SELECT * FROM vehicle ORDER BY vid DESC";
	}
	else {
  $sql2="SELECT * FROM vehicle WHERE id='$sesid' ORDER BY vid DESC";
	}
		$result2=mysqli_query($this->db,$sql2);
		return $result2;

  }



 //Function to delete vehicle
  public function deletevehicle($vid)
  {
    dbConnect::dbConnection();
    $sqlSel="SELECT * FROM vehicle where vid=$vid";
    $data=mysqli_query($this->db,$sqlSel);
    while($row=mysqli_fetch_array($data))
    {
      $low="../";
      $vimg1=$low . $row["vimg1"];
      $vimg2=$low . $row["vimg2"];


      unlink($vimg1);
      unlink($vimg2);
    }
    $sql3="DELETE from vehicle where vid=$vid";
    $data=mysqli_query($this->db,$sql3);
    if($data)
    {
      header('location: vehiclerental.php?mes=deleted&sidebar=vehicle');

    }
    else {
      echo "Error in deletion";
    }
  }



public function editvehicle($vid)
  {
    dbConnect::dbConnection();
    $sql3="SELECT * FROM vehicle where vid=$vid";
    $result3=mysqli_query($this->db,$sql3);
    while($row=mysqli_fetch_array($result3))
    {
      $vid=$row['vid'];
      $vtitle=$row['vtitle'];

      $vtype=$row['vtype'];
      $vdescription=$row['vdescription'];
      $vtotalseat=$row['vtotalseat'];
      $vcost=$row['vcost'];
      $vstatus=$row['vstatus'];
      $vkeyword=$row['vkeyword'];
      $vimg1=$row['vimg1'];
      $vimg2=$row['vimg2'];


      switch($vstatus)
      {
        case 0:
        {
          $vstatus_name='Disabled';
          break;
        }
        case 1:
        {
          $vstatus_name='Enabled';
          break;
        }
      }
      echo "
      <div class='container-fluid'>
      <div class='row'>
      <div class='col-md-8'>
      <div class='card'>
      <div class='card-header' data-background-color='red'>
      <h4 class='title'>Edit Vehicle</h4>
      <p class='category'>Complete the vehicle Details</p>
      </div>
      <div class='card-content'>
      <form method='POST' action='edit.php?action=edit&vid=".$row['vid']."&of=vehicle' enctype='multipart/form-data'>
      <div class='row'>
      <div class='col-md-5'>
      <div class='form-group label-floating'>
      <label class='control-label'>vehicle Id (disabled)</label>
      <input type='text' class='form-control' value='".$vid."' name='vid' disabled>
      </div>
      </div>
      <div class='col-md-7'>
      <div class='form-group label-floating'>
      <label class='control-label'>Vehicle title</label>
      <input type='text' class='form-control' value='".$vtitle."' name='upd_vtitle'>
      </div>
      </div>
      </div>
      <div class='row'>
      <div class='col-md-12'>
      <div class='form-group label-floating'>
      <label class='control-label'>Vehicle Type</label>
      <input type='text' class='form-control' value='".$vtype."' name='upd_vtype'>
      </div>
      </div>
      </div>
      <Div class='row'>
      <div class='col-md-7'>
      <div class='form-group label-floating'>
      <label class='control-label'>Vehicle description</label>
        <textarea class='form-control' rows='5' name='upd_vdescription'>".$vdescription."</textarea>
      </div>
      </div>
      <div class='col-md-6'>
      <div class='form-group label-floating'>
      <label class='control-label'>Total seat</label>
      <input type='text' class='form-control' value='".$vtotalseat."' name='upd_vtotalseat'>
      </div>
      </div>
      <div class='col-md-6'>
      <div class='form-group label-floating'>
      <label class='control-label'>Total cost</label>
      <input type='text' class='form-control' value='".$vcost."' name='upd_vcost'>
      </div>
      </div>
      </div>

          <div class='form-group col-md-6'>
      <label for='exampleFormControlSelect1'>Status</label>
      <select class='form-control' id='exampleFormControlSelect1' name='upd_vstatus' disabled>
      <option value='$vstatus'>$vstatus_name</option>
      <option value='1'>Enabled</option>
      <option value='0'>Disabled</option>
      </select>

         <div class='col-md-6'>
      <div class='form-group label-floating'>
      <label class='control-label'>Keyword</label>
      <input type='text' class='form-control' value='".$vkeyword."' name='upd_vkeyword'>
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


      <button type='submit' class='btn btn-danger pull-right'>Update </button>
      <div class='clearfix'></div>
      </form>
      </div>
      </div>
      </div>


      ";
    }
  }
  public function updatevehicle($vid,$upd_vtitle,$upd_vtype,$upd_vdescription,$upd_vtotalseat,$upd_vcost,$upd_vstatus,$upd_vkeyword)
  {
    dbConnect::dbConnection();



    if(!isset($_FILES['fileToUpload']) || $_FILES['fileToUpload']['error'] == UPLOAD_ERR_NO_FILE) {
      if(!isset($_FILES['coverToUpload']) || $_FILES['coverToUpload']['error'] == UPLOAD_ERR_NO_FILE) {
        $sql1="UPDATE vehicle SET vtitle='$upd_vtitle',vtype='$upd_vtype',vdescription='$upd_vdescription',vtotalseat='$upd_vtotalseat',vcost='$upd_vcost',vstatus='$upd_vstatus',vkeyword='$upd_vkeyword' WHERE vid=$vid";
        $result1=mysqli_query($this->db,$sql1);
        if($result1)
        {
          @header('location: vehiclerental.php?mes=updated&sidebar=vehicle');

          //echo"fudge";
        }
        else
        {
          echo "Update Failed!";
        }
      }
      else {
        echo"entererd";
        $target_dir = "../images/vehicle/";
        $target_file = $target_dir . date("d-m-Y")."-".time() . basename($_FILES["coverToUpload"]["name"]);
        $uploadOk1 = 1;
        $imageName=basename($_FILES["coverToUpload"]["name"]);
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        $db_dir="images/vehicle/";
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
            $sqldeletedb="SELECT * FROM vehicle where vid=$vid";
            $data=mysqli_query($this->db,$sqldeletedb);
            while($row=mysqli_fetch_array($data))
            {
              $low="../";
              $con=$low . $row["vimg2"];
              unlink($con);
            }
          $sql1="UPDATE vehicle SET vtitle='$upd_vtitle',vtype='$upd_vtype',vdescription='$upd_vdescription',vtotalseat='$upd_vtotalseat',vstatus='$vstatus',vcost='$upd_vcost',vkeyword='$upd_vkeyword',vimg2='$db' WHERE vid=$vid";
            $result1=mysqli_query($this->db,$sql1);
            if($result1)
            {
              @header('location: vehiclerental.php?mes=updated&sidebar=vehicle');

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
        $target_dir = "../images/vehicle/";
        $db_dir="images/vehicle/";
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
            $sqldeletedb="SELECT * FROM vehicle where vid=$vid";
            $data=mysqli_query($this->db,$sqldeletedb);
            while($row=mysqli_fetch_array($data))
            {
              $low="../";
              $con=$low . $row["vimg1"];
              unlink($con);
            }
     $sql1="UPDATE vehicle SET vtitle='$upd_vtitle',vtype='$upd_vtype',vdescription='$upd_vdescription',vtotalseat='$upd_vtotalseat',vstatus='$vstatus',vcost='$upd_vcost',vkeyword='$upd_vkeyword',vimg1='$db' WHERE vid=$vid";
            $result1=mysqli_query($this->db,$sql1);
                     if($result1)
              {
               // unlink($deleteFile);
                header('location:vehiclerental.php?sidebar=vehiclerental');
              }
            //  unlink($deleteFile);
          }
        }
      }
      else {
        $target_dir = "../images/vehicle/";
        $db_dir="images/vehicle/";
        $target_dir1 = "../images/vehicle/";
        $db_dir1="images/vehicle/";
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
              $sqldeletedb="SELECT * FROM vehicle where vid=$vid";
              $data=mysqli_query($this->db,$sqldeletedb);
              while($row=mysqli_fetch_array($data))
              {
                $low="../";
                $con=$low . $row["vimg2"];
                $img=$low . $row["vimg1"];
                unlink($con);
              }
               $sql1="UPDATE vehicle SET vtitle='$upd_vtitle',vtype='$upd_vtype',vdescription='$upd_vdescription',vtotalseat='$upd_vtotalseat',vstatus='$vstatus',vcost='$upd_vcost',vkeyword='$upd_vkeyword',vimg1='$db1',vimg2='$db' WHERE vid=$vid";
              $result1=mysqli_query($this->db,$sql1);
              if($result1)
              {
                // unlink($deleteFile1);
                // unlink($deleteFile);
                header('location:vehiclerental.php?sidebar=vehiclerental');
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

	public function publishvehicle($vid,$vstatus)
	  {

	    dbConnect::dbConnection();
	    if($vstatus=='1')
	    {
	      $sql4="UPDATE vehicle SET vstatus='0' WHERE vid=$vid";
	    }
	    else {
	      $sql4="UPDATE vehicle SET vstatus='1' WHERE vid=$vid";
	    }
	    $result1=mysqli_query($this->db,$sql4);
	    if($result1)
	    {
	      header('Location: '.$_SERVER['PHP_SELF'].'?sidebar=vehicle');

	    }

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

}
?>
