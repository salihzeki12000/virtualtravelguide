<?php
include_once('dbconfig.php');
Class vendorinfo extends dbConnect
{
	public function createVendorinfo($cname,$caddress,$cemail,$cphone,$ctype,$cdescription,$panno,$cremark)
	{
		dbConnect::dbconnection();


		if(!isset($_FILES['fileToUpload']) || $_FILES['fileToUpload']['error'] == UPLOAD_ERR_NO_FILE) {

			$sql1="INSERT INTO vendorinfo SET cname='$cname', caddress='$caddress',cemail='$cemail',cphone='$cphone',ctype='$ctype',cdescription='$cdescription',panno='$panno',cremark='$cremark'";
			$update=mysqli_query($this->db,$sql1);
			// if($update)
			// {
			// 	@header('location: admin.php?mes=updated&sidebar=admin');
			//
			// 	echo"fudge";
			// }
			// else
			// {
			// 	echo "Update Failed!";
			// }

		}

		else {
			$target_dir = "images/certificate/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$db_dir="images/certificate/";
      $db=$db_dir .basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$imageName=basename($_FILES["fileToUpload"]["name"]);
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

			// $sqlCheck="SELECT * FROM admin where image=$imageName";
			// $checking=  mysqli_query($this->db,$sqlCheck);
			// $fetch=mysqli_fetch_array($checking);
			// //checks if same file name exists
			// if(mysqli_num_rows($fetch) >= 1)
			// {
			//   echo"please select a differnt file";
			//     $uploadOk = 0;
			// }

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
					//echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
					$sql1="INSERT INTO vendorinfo SET cname='$cname', caddress='$caddress',cemail='$cemail',cphone='$cphone',ctype='$ctype',cdescription='$cdescription',panno='$panno',dpic='$db',cremark='$cremark'";

					$update=mysqli_query($this->db,$sql1);
					if($update)
					{
						echo "<Script>alert('Successfully submitted');</script>";
					}
					else {
						echo "Submission failed";
					}

				} else {
					echo "Sorry, there was an error uploading your file.";
				}
			}
		}

	}

   public function getAllvendor()
  {
    dbConnect::dbConnection();
    $sql2="SELECT * FROM vendorinfo ORDER BY id DESC";
    $result2=mysqli_query($this->db,$sql2);
		return $result2;
	}

  public function deletevendor($id)
  {
    dbConnect::dbConnection();
    $sqlSel="SELECT * FROM vendorinfo where id=$id";
    $data=mysqli_query($this->db,$sqlSel);
    while($row=mysqli_fetch_array($data))
    {
      $low="../";
      $cphoto=$low . $row["cphoto"];
      unlink($cphoto);

    }
    $sql3="DELETE from vendorinfo where id=$id";
    $data=mysqli_query($this->db,$sql3);
    if($data)
    {
      header('location: vendorinfo.php?mes=deleted&sidebar=vendorinfo');

    }
    else {
      echo "Error in deletion";
    }
  }



}
