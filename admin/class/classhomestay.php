<?php
@include_once('session.php');
include_once('dbconfig.php');
class homestay extends dbconnect
{
	public function createHomestay($sesid,$hstitle,$hslocation,$hslatitude,$hslongitude,$hsdescription,$hscost)
	{
			dbConnect::dbconnection();
			$date=date("Y/m/d");

    if(!isset($_FILES['fileToUpload']) || $_FILES['fileToUpload']['error'] == UPLOAD_ERR_NO_FILE) {
      if(!isset($_FILES['coverToUpload']) || $_FILES['coverToUpload']['error'] == UPLOAD_ERR_NO_FILE)
      {
     		$sql1="INSERT INTO homestay SET aid='$sesid',hstitle='$hstitle',hslocation='$hslocation',hslatitude='$hslatitude',hslongitude='$hslongitude',hsdescription='$hsdescription',hscost='$hscost',hsadded_date='$date',hsstatus='0'";
				$result=mysqli_query($this->db,$sql1);
      }
      else {
        $target_dir = "../images/homestay/";
        $db_dir="images/homestay/";
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

           		$sql1="INSERT INTO homestay SET aid='$sesid',hstitle='$hstitle',hslocation='$hslocation',hslatitude='$hslatitude',hslongitude='$hslongitude',hsdescription='$hsdescription',hscost='$hscost',hsadded_date='$date',hsstatus='0',hsimg2='$db'";
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
        $target_dir = "../images/homestay/";
        $db_dir="images/homestay/";
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
		$sql1="INSERT INTO homestay SET aid='$sesid',hstitle='$hstitle',hslocation='$hslocation',hslatitude='$hslatitude',hslongitude='$hslongitude',hsdescription='$hsdescription',hscost='$hscost',hsadded_date='$date',hsstatus='0',hsimg1='$db'";
				$result=mysqli_query($this->db,$sql1);
          }
        }
      }
      else {
        $target_dir = "../images/homestay/";
        $db_dir="images/homestay/";
        $target_dir1 = "../images/homestay/";
        $db_dir1="images/homestay/";
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
           		$sql1="INSERT INTO homestay SET aid='$sesid',hstitle='$hstitle',hslocation='$hslocation',hslatitude='$hslatitude',hslongitude='$hslongitude',hsdescription='$hsdescription',hscost='$hscost',hsadded_date='$date',hsstatus='0',hsimg1='$db1',hsimg2='$db'";
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

   public function getAllhomestay()
  {
    dbConnect::dbConnection();
    $sql2="SELECT * FROM homestay ORDER BY hsid DESC";
    $result2=mysqli_query($this->db,$sql2);
		return $result2;

  }



 //Function to delete homestay
  public function deletehomestay($hsid)
  {
    dbConnect::dbConnection();
    $sqlSel="SELECT * FROM homestay where hsid=$hsid";
    $data=mysqli_query($this->db,$sqlSel);
    while($row=mysqli_fetch_array($data))
    {
      $low="../";
      $hsimg1=$low . $row["hsimg1"];
      $hsimg2=$low . $row["hsimg2"];


      unlink($hsimg1);
      unlink($hsimg2);
    }
    $sql3="DELETE from homestay where hsid=$hsid";
    $data=mysqli_query($this->db,$sql3);
    if($data)
    {
      header('location: homestay.php?mes=deleted&sidebar=homestay');

    }
    else {
      echo "Error in deletion";
    }
  }



public function edithomestay($hsid)
  {
    dbConnect::dbConnection();
    $sql3="SELECT * FROM homestay where hsid=$hsid";
    $result3=mysqli_query($this->db,$sql3);
    while($row=mysqli_fetch_array($result3))
    {
      $hsid=$row['hsid'];
      $hstitle=$row['hstitle'];

      $hslocation=$row['hslocation'];
      $hsdescription=$row['hsdescription'];
      $hscost=$row['hscost'];

      $hsadded_date=$row['hsadded_date'];
      $hsimg1=$row['hsimg1'];
      $hsimg2=$row['hsimg2'];
       $hsstatus=$row['hsstatus'];


      switch($hsstatus)
      {
        case 0:
        {
          $hsstatus_name='Disabled';
          break;
        }
        case 1:
        {
          $hsstatus_name='Enabled';
          break;
        }
      }
      echo "
      <div class='container-fluid'>
      <div class='row'>
      <div class='col-md-8'>
      <div class='card'>
      <div class='card-header' data-background-color='red'>
      <h4 class='title'>Edit Homestay</h4>
      <p class='category'>Complete the homestay Details</p>
      </div>
      <div class='card-content'>
      <form method='POST' action='edit.php?action=edit&hsid=".$row['hsid']."&of=homestay' enctype='multipart/form-data'>
      <div class='row'>
      <div class='col-md-5'>
      <div class='form-group label-floating'>
      <label class='control-label'>Homestay Id (disabled)</label>
      <input type='text' class='form-control' value='".$hsid."' name='hsid' disabled>
      </div>
      </div>
      <div class='col-md-7'>
      <div class='form-group label-floating'>
      <label class='control-label'>Homestay title</label>
      <input type='text' class='form-control' value='".$hstitle."' name='upd_hstitle'>
      </div>
      </div>
      </div>
      <div class='row'>
      <div class='col-md-12'>
      <div class='form-group label-floating'>
      <label class='control-label'>location of homestay</label>
      <input type='text' class='form-control' value='".$hslocation."' name='upd_hslocation'>
      </div>
      </div>
      </div>
      <Div class='row'>
      <div class='col-md-7'>
      <div class='form-group label-floating'>
      <label class='control-label'>Home description</label>
        <textarea class='form-control' rows='5' name='upd_hsdescription'>".$hsdescription."</textarea>
      </div>
      </div>
         <div class='col-md-6'>
      <div class='form-group label-floating'>
      <label class='control-label'>Total cost</label>
      <input type='text' class='form-control' value='".$hscost."' name='upd_hscost'>
      </div>
      </div>
      </div>

      <div class='col-md-6'>
      <div class='form-group label-floating'>
      <label class='control-label'>Added Date</label>
      <input type='text' class='form-control' value='".$hsadded_date."' name='upd_vtotalseat'>
      </div>
      </div>


          <div class='form-group col-md-6'>
      <label for='exampleFormControlSelect1'>Status</label>
      <select class='form-control' id='exampleFormControlSelect1' name='upd_hsstatus'>
      <option value='$hsstatus'>$hsstatus_name</option>
      <option value='1'>Enabled</option>
      <option value='0'>Disabled</option>
      </select>



     <div class='row'>

      <div class='col-md-6'>
      <div class='form-group label-floating'>
      <label class='control-label'>First image</label>
      </div>
      <input type='file' name='coverToUpload' id='coverToUpload'>

      </div>
			<div class='col-md-6'>
			<div class='form-group label-floating'>
			<label class='control-label'>Second image</label>
			</div>
			<input type='file' name='fileToUpload' id='fileToUpload'>

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
  public function updatehomestay($hsid,$upd_hstitle,$upd_hslocation,$upd_hsdescription,$upd_hscost,$upd_hsstatus)
  {
    dbConnect::dbConnection();



    if(!isset($_FILES['fileToUpload']) || $_FILES['fileToUpload']['error'] == UPLOAD_ERR_NO_FILE) {
      if(!isset($_FILES['coverToUpload']) || $_FILES['coverToUpload']['error'] == UPLOAD_ERR_NO_FILE) {
        $sql1="UPDATE homestay SET hstitle='$upd_hstitle',hslocation='$upd_hslocation',hsdescription='$upd_hsdescription',hscost='$upd_hscost',hsstatus='$upd_hsstatus' WHERE hsid=$hsid";
        $result1=mysqli_query($this->db,$sql1);
        if($result1)
        {
          @header('location: homestay.php?mes=updated&sidebar=homestay');

          //echo"fudge";
        }
        else
        {
          echo "Update Failed!";
        }
      }
      else {
        echo"entererd";
        $target_dir = "../images/homestay/";
        $target_file = $target_dir . date("d-m-Y")."-".time() . basename($_FILES["coverToUpload"]["name"]);
        $uploadOk1 = 1;
        $imageName=basename($_FILES["coverToUpload"]["name"]);
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        $db_dir="images/homestay/";
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
            $sqldeletedb="SELECT * FROM homestay where vid=$vid";
            $data=mysqli_query($this->db,$sqldeletedb);
            while($row=mysqli_fetch_array($data))
            {
              $low="../";
              $con=$low . $row["vimg2"];
              unlink($con);
            }
          $sql1="UPDATE homestay SET hstitle='$upd_hstitle',hslocation='$upd_hslocation',hsdescription='$upd_hsdescription',hscost='$upd_hscost',hsstatus='$upd_hsstatus',hsimg1='$db' WHERE hsid=$hsid";
            $result1=mysqli_query($this->db,$sql1);
            if($result1)
            {
              @header('location: homestay.php?mes=updated&sidebar=homestay');

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
        $target_dir = "../images/homestay/";
        $db_dir="images/homestay/";
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
            $sqldeletedb="SELECT * FROM homestay where hsid=$hsid";
            $data=mysqli_query($this->db,$sqldeletedb);
            while($row=mysqli_fetch_array($data))
            {
              $low="../";
              $con=$low . $row["hsimg1"];
              unlink($con);
            }
     $sql1="UPDATE homestay SET hstitle='$upd_hstitle',hslocation='$upd_hslocation',hsdescription='$upd_hsdescription',hscost='$upd_hscost',hsstatus='$upd_hsstatus',hsimg1='$db' WHERE hsid=$hsid";
            $result1=mysqli_query($this->db,$sql1);
            //  unlink($deleteFile);
          }
        }
      }
      else {
        $target_dir = "../images/homestay/";
        $db_dir="images/homestay/";
        $target_dir1 = "../images/homestay/";
        $db_dir1="images/homestay/";
        $target_file = $target_dir .date("d-m-Y")."-".time(). basename($_FILES["coverToUpload"]["name"]);
        $deleteFile=$target_file;
        $db=$db_dir .date("d-m-Y")."-".time(). basename($_FILES["coverToUpload"]["name"]);
        $target_file1 = $target_dir1 .date("d-m-Y")."-".time(). basename($_FILES["fileToUpload"]["name"]);
        $deleteFile1=$target_file1;
        $db1=$db_dir1 . date("d-m-Y")."-".time(). basename($_FILES["fileToUpload"]["name"]);
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
              $sqldeletedb="SELECT * FROM homestay where hsid=$hsid";
              $data=mysqli_query($this->db,$sqldeletedb);
              while($row=mysqli_fetch_array($data))
              {
                $low="../";
                $con=$low . $row["hsimg2"];
                $img=$low . $row["hsimg1"];
                unlink($con);
              }
               $sql1="UPDATE homestay SET hstitle='$upd_hstitle',hslocation='$upd_hslocation',hsdescription='$upd_hsdescription',hscost='$upd_hscost',hsstatus='$hsstatus',hsimg1='$db',hsimg2='$db1' WHERE hsid=$hsid";
              $result1=mysqli_query($this->db,$sql1);
              if($result1)
              {
                // unlink($deleteFile1);
                // unlink($deleteFile);
                header('location: homestay.php?mes=updated&sidebar=homestay');
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

	public function publishhomestay($hsid,$hsstatus)
	  {

	    dbConnect::dbConnection();
	    if($hsstatus=='1')
	    {
	      $sql4="UPDATE homestay SET hsstatus='0' WHERE hsid=$hsid";
	    }
	    else {
	      $sql4="UPDATE homestay SET hsstatus='1' WHERE hsid=$hsid";
	    }
	    $result1=mysqli_query($this->db,$sql4);
	    if($result1)
	    {
	      header('Location: '.$_SERVER['PHP_SELF'].'?sidebar=homestay');

	    }

	  }



}
?>
