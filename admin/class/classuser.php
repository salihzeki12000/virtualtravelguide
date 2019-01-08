<?php
@include_once('session.php');
include_once('dbconfig.php');


class User extends dbconnect
{

	//FUNCTION TO ADD NEW USERS
	public function createUser($cusername,$cfirst_name,$clast_name,$caddress,$ccontact,$cemail,$cdob,$cgender,$cpassword,$cabout)
	{


		dbConnect::dbConnection();
		$sql="SELECT * from user WHERE cusername='$cusername' OR cemail='$cemail'";
		$result=mysqli_query($this->db,$sql);
		$userdata=mysqli_fetch_array($result);
		$count_row=$result->num_rows;
		if($count_row==0)
		{
	$date=date("Y/m/d");

		if(!isset($_FILES['fileToUpload']) || $_FILES['fileToUpload']['error'] == UPLOAD_ERR_NO_FILE) {
			$mdpassword=md5($cpassword);
			$sql1="INSERT INTO user SET cusername='$cusername', cfirst_name='$cfirst_name',clast_name='$clast_name',caddress='$caddress',ccontact='$ccontact',cemail='$cemail',cdob='$cdob',cgender='$cgender',cpassword='$mdpassword',cabout='$cabout',cjoindate='$date',cstatus='0'";
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
			$target_dir = "../images/user/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$db_dir="images/user/";
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
					echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
					$sql1="INSERT INTO user SET cusername='$cusername', cfirst_name='$cfirst_name',clast_name='$clast_name',caddress='$caddress',ccontact='$ccontact',cemail='$cemail',cdob='$cdob',cgender='$cgender',cpassword='$cpassword',cimage='$db',cabout='$cabout',cjoindate='$date',cstatus='0'";

					$update=mysqli_query($this->db,$sql1);


				} else {
					echo "Sorry, there was an error uploading your file.";
				}
			}
		}
}
else {
  echo "<script>alert('Username/Email already exists!Try again with a different username');</script>";
}
	}


	//FUNCTIONS FOR DISPLAYING THE USERS

	public function getAlluser()
	{
		dbconnect::dbconnection();


		$sql="SELECT *FROM user ORDER BY cid";
		$result=mysqli_query($this->db,$sql);
		return $result;


	}



	//Function to delete user
	public function deleteUser($cid)
	{
		dbConnect::dbConnection();
		$sqlSel="SELECT * FROM user where cid=$cid";
		$data=mysqli_query($this->db,$sqlSel);
		while($row=mysqli_fetch_array($data))
		{
			$a="../";
			$remove=$a.$row["cimage"];
			@unlink($remove);

		}

		$sql2="DELETE from user where cid=$cid";
		$delete=mysqli_query($this->db,$sql2);

		if($delete)
		{
			header('location: user.php?mes=deleted&sidebar=user');

		}
		else {
			echo "Error in user deletion";
		}
	}



	public function editUser($cid)
	{
		dbConnect::dbConnection();
		$sql3="SELECT * FROM user where cid=$cid";
		$result3=mysqli_query($this->db,$sql3);
		while($row=mysqli_fetch_array($result3))
		{

			$cid=$row['cid'];
			$cusername=$row['cusername'];
			$cfirstname=$row['cfirst_name'];
			$clastname=$row['clast_name'];
			$caddress=$row['caddress'];
			$ccontact=$row['ccontact'];
			$cemail=$row['cemail'];
			$cdob=$row['cdob'];
			$cgender=$row['cgender'];
			$cpassword=$row['cpassword'];
			$cabout=$row['cabout'];
			$cjoindate=$row['cjoindate'];

			$cstatus=$row['cstatus'];
			switch($cstatus)
			{
				case '0':
				{
					$cstatus_name='Disabled';
					break;
				}
				case '1':
				{
					$cstatus_name='Enabled';
					break;
				}

			}

			echo "
			<div class='container-fluid'>
			<div class='row'>
			<div class='col-md-8'>
			<div class='card'>
			<div class='card-header' data-background-color='red'>
			<h4 class='title'>Edit Profile</h4>
			<p class='category'>Complete your profile</p>
			</div>
			<div class='card-content'>
			<form method='POST'  enctype='multipart/form-data' action='edit.php?action=edit&cid=".$row['cid']."&of=user'>
			<div class='row'>
			<div class='col-md-5'>
			<div class='form-group label-floating'>
			<label class='control-label'>Id (disabled)</label>
			<input type='text' class='form-control' value='".$cid."' name='cid' disabled>
			</div>
			</div>
			<div class='col-md-7'>
			<div class='form-group label-floating'>
			<label class='control-label'>Username</label>
			<input type='text' class='form-control' value='".$cusername."' name='upd_cusername'>
			</div>
			</div>
			</div>


			<div class='row'>
			<div class='col-md-6'>
			<div class='form-group label-floating'>
			<label class='control-label'>Fist Name</label>
			<input type='text' class='form-control' value='".$cfirstname."' name='upd_cfirstname'>
			</div>
			</div>
			<div class='col-md-6'>
			<div class='form-group label-floating'>
			<label class='control-label'>Last Name</label>
			<input type='text' class='form-control' value='".$clastname."' name='upd_clastname'>
			</div>
			</div>
			</div>
			<Div class='row'>
			<div class='col-md-5'>
			<div class='form-group label-floating'>
			<label class='control-label'>Contact</label>
			<input type='text' class='form-control' value='".$ccontact."' name='upd_ccontact'>
			</div>
			</div>
			<div class='col-md-7'>
			<div class='form-group label-floating'>
			<label class='control-label'>Email address</label>
			<input type='text' class='form-control' value='".$cemail."' name='upd_cemail'>
			</div>
			</div>

			</div>

			<div class='row'>
			<div class='col-md-12'>
			<div class='form-group label-floating'>
			<label class='control-label'>Address</label>
			<input type='text' class='form-control' value='".$caddress."' name='upd_caddress'>
			</div>
			</div>
			</div>
			<div class='row'>
			<div class='col-md-12'>
			<label class='control-label'>Click to upload file</label>
			<input type='file' name='fileToUpload' id='fileToUpload'>
		<!--	<div class='form-group label-floating'>

			</div> -->
			</div>
			</div>

			<div class='row'>
			<div class='col-md-6'>
			<div class='form-group label-floating'>
			<label class='control-label'>DOB</label>
			<input type='text' class='form-control' value='".$cdob."' name='upd_cdob'>
			</div>
			</div>
			<div class='col-md-6'>
			<div class='form-group label-floating'>
			<label class='control-label'>Gender</label>
			<input type='text' class='form-control' value='".$cgender."' name='upd_cgender'>
			</div>
			</div>
			</div>
			<div class='row'>
			<div class='col-md-12'>
			<div class='form-group'>
			<label>About me</label>
			<div class='form-group label-floating'>
			<label class='control-label'>Describe yourself or about your experience in brief</label>
			<textarea class='form-control' rows='3' name='upd_cabout'>".$cabout."</textarea>
			</div>
			</div>
			</div>
			</div>
			<div class='row'>


			<div class='form-group col-md-6'>
			<label for='exampleFormControlSelect1'>Status</label>
			<select class='form-control' id='exampleFormControlSelect1' name='upd_cstatus'>
				<option value='".$cstatus."'>".$cstatus_name."</option>
			<option value='1'>Enabled</option>
			<option value='0'>Disabled</option>

			</select>
			</div>
			</div>
			</div>


			<button type='submit' class='btn btn-danger pull-right'>Update Profile</button>
			<div class='clearfix'></div>
			</form>
			</div>

			</div>
			<div class='col-md-4'>
			<div class='card card-profile'>
			<div class='card-avatar'>
			<a href='#pablo'>
			<img class='img' src='../images/dev.png' />
			</a>
			</div>
			<div class='content'>
			<h6 class='category text-gray'>".$cusername."</h6>
			<h4 class='card-title'>".$cfirstname." " .$clastname."</h4>
			<p class='card-content'>
			".$cabout."
			</p>
			<a href='#pablo' class='btn btn-default btn-round' disabled>".$cusername."</a>
			</div>
			</div>
			</div>
			</div>
			</div>


			";

		}
	}

	public function updateUser($cid,$upd_cusername,$upd_cfirstname,$upd_clastname,$upd_caddress,$upd_ccontact,$upd_cemail,$upd_cdob,$upd_cgender,$upd_cabout,$upd_cstatus)
	{
		dbConnect::dbConnection();
		if(!isset($_FILES['fileToUpload']) || $_FILES['fileToUpload']['error'] == UPLOAD_ERR_NO_FILE) {

			$sql4="UPDATE user SET cusername='$upd_cusername', cfirst_name='$upd_cfirstname',clast_name='$upd_clastname',caddress='$upd_caddress',ccontact='$upd_ccontact',cemail='$upd_cemail',cdob='$upd_cdob',cgender='$upd_cgender',cabout='$upd_cabout',cstatus='$upd_cstatus' WHERE cid=$cid";
			$update=mysqli_query($this->db,$sql4);
			if($update)
			{
				@header('location: user.php?mes=updated&sidebar=user');
			}
			else {
				echo "Update Failed!";
			}
		}

		else {
			$target_dir = "../images/user/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$db_dir="images/user/";
      $db=$db_dir .basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
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
					$sqldel="SELECT * FROM user where cid=$cid";
					$result=  mysqli_query($this->db,$sqldel);
					while($row=mysqli_fetch_array($result))
					{
						$a="../";
						$remove=$a.$row["cimage"];
						@unlink($remove);
					}
					$sql4="UPDATE user SET cusername='$upd_cusername', cfirst_name='$upd_cfirstname',clast_name='$upd_clastname',caddress='$upd_caddress',ccontact='$upd_ccontact',cemail='$upd_cemail',cdob='$upd_cdob',cgender='$upd_cgender',cimage='$db',cabout='$upd_cabout',cstatus='$upd_cstatus' WHERE cid=$cid";
					$update=mysqli_query($this->db,$sql4);
						@header('location: user.php?mes=updated&sidebar=user');

				} else {
					echo "Sorry, there was an error uploading your file.";
				}
			}
		}

	}

	// USER REGISTER FROM FRONT END
public function fcreateUser($cusername,$cfirst_name,$clast_name,$caddress,$ccontact,$cemail,$cdob,$cgender,$cpassword)
{
	$date=date("Y/m/d");
	dbConnect::dbConnection();
	$sql="SELECT * from user WHERE cusername='$cusername' OR cemail='$cemail'";
	$result=mysqli_query($this->db,$sql);
	$userdata=mysqli_fetch_array($result);
	$count_row=$result->num_rows;
	if($count_row==0)
	{
	$mdpassword=md5($cpassword);
	$sql5="INSERT INTO user SET cusername='$cusername', cfirst_name='$cfirst_name',clast_name='$clast_name',caddress='$caddress',ccontact='$ccontact',cemail='$cemail',cdob='$cdob',cgender='$cgender',cpassword='$mdpassword',cjoindate='$date',cstatus='1',cimage='images/default-avatar.png'";
	$result5=mysqli_query($this->db,$sql5);
	if($result5)
	{
		$this->emailConfirmation($cfirst_name,$cemail);
		header('location:index.php?mes=registered');
	}
}
else {
  echo "<script>alert('Username/Email already exists!Try again with a different username');</script>";
}


}

public function emailConfirmation($name,$email)
{
	define('EMAIL','vtgnepal@gmail.com');
	define('PASS','g@it0nd3');
	require 'mail/PHPMailerAutoload.php';
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
	$mail->setFrom(EMAIL, 'Virtual Travel Guide');
	$mail->addAddress($email, $name);     // Add a recipient
	// $mail->addAddress('ellen@example.com');               // Name is optional
	//$mail->addReplyTo(EMAIL, 'Information');
	// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = 'Thank You for registering to Virtual Travel Guide';
	$firstName=$_SESSION['cus_fname'];
	//$lastName=$_SESSION['cus_lname'];
	$mail->Body    = 'Namaste Mr.'.$name.' <br>  Thank you for using Virtual Travel Guide.';
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	if(!$mail->send()) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
			echo 'Message has been sent';
	}
}
public function publishuser($cid,$cstatus)
    {

      dbConnect::dbConnection();
      if($cstatus=='1')
      {
        $sql4="UPDATE user SET cstatus='0' WHERE cid=$cid";
      }
      else {
        $sql4="UPDATE user SET cstatus='1' WHERE cid=$cid";
      }
      $result1=mysqli_query($this->db,$sql4);
      if($result1)
      {
        header('Location: '.$_SERVER['PHP_SELF'].'?sidebar=user');

      }

    }



}



?>
