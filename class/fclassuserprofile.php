

<script src="jquery-2.1.4.min.js"> </script>
<script type="text/javascript">
function validate()
{
$('errpwm').html("");

 if ($('#pw1').val() != $('#pw2').val())
	 {
    $('#errpwm').html('password doesnt match');
	return false;
	}
	return true;
	}
</script>
<?php
  include_once('admin/class/dbconfig.php');

class fProfile extends dbConnect
{
  public function editUserProfile($custid)
  {
    dbConnect::dbConnection();
    $sql3="SELECT * FROM user where cid=$custid";
    $result3=mysqli_query($this->db,$sql3);
    while($row=mysqli_fetch_array($result3))
    {

              $cid=$row['cid'];
                $cusername=$row['cusername'];
              $cfirstname=$row['cfirst_name'];
              $clastname=$row['clast_name'];
              $cemail=$row['cemail'];
              $ccontact=$row['ccontact'];
              $caddress=$row['caddress'];
              $cdob=$row['cdob'];
              $cgender=$row['cgender'];
              $cabout=$row['cabout'];
              $cpassword=$row['cpassword'];
              $cimage=$row['cimage'];
              $cjoindate=$row['cjoindate'];


              echo "
              <div class='container-fluid'>
                  <div class='row'>
                      <div class='col-md-8' >
                          <div class='card'>
                              <div class='card-header' data-background-color='red'>
                                  <h4 class='title'>Edit Profile</h4>
                                  <p class='category'>Complete your profile</p>
                              </div>
                              <div class='card-content' style='padding:30px;'>
                  <form method='POST' enctype='multipart/form-data' action='userprofile.php?cid=".$row['cid']."'>
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
                        <div class='col-md-7'>
                            <div class='form-group label-floating'>
                                <label class='control-label'>Email address</label>
                                <input type='email' class='form-control' value='".$cemail."' name='upd_cemail'>
                            </div>
                        </div>
                        <div class='col-md-5'>
                            <div class='form-group label-floating'>
                                <label class='control-label'>Contact</label>
                                <input type='text' class='form-control' value='".$ccontact."' name='upd_ccontact'>
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
                          <div class='col-md-6'>
                              <div class='form-group label-floating'>
                                  <label class='control-label'>Date Of Birth</label>
                                  <input type='text' class='form-control' value='".$cdob."' name='upd_cdob'>
                              </div>
                          </div>
                          <div class='col-md-6'>
                          <div class='form-group label-floating'>
                          <label for='exampleFormControlSelect1'>Type</label>
                          <select class='form-control' id='exampleFormControlSelect1' name='upd_cgender' value='".$cgender."' style='text-transform:capitalize;'>

                            <option value='$cgender' style='text-transform:capitalize;'>$cgender</option>

                            <option value='male'>Male</option>
                            <option value='female'>Female</option>


                          </select>
                          </div>
                          </div>
                      </div>
                      <div class='row'>
                          <div class='col-md-12'>
                            <div class='form-group label-floating'>
                                  <label class='control-label'>Click To Upload Image</label>
                          </div>
                          <input type='file' name='fileToUpload' id='fileToUpload'>

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
                          <div class='col-md-6'>
                              <div class='form-group label-floating'>
                                  <label class='control-label'>Joined Date</label>
                                  <input type='text' class='form-control' value='".$cjoindate."'  disabled>
                              </div>
                          </div>
                          </div>




                      <button type='submit' class='btn btn-danger pull-right'>Update Profile</button>
                      <div class='clearfix'></div>
                  </form>
                            </div>
                        </div>
                    </div>
                    <div class='col-md-4' >
                        <div class='card card-profile' style='padding:30px;'>
                            <div class='card-avatar'   >
                                <a href='#pablo'>
                                <div class='row justify-content-md-center' >

                                    <img src='".$cimage."' class='img col-md-5' style='border:1px solid #007BFF;height:120px;margin:10px;border-radius:10px;'  />
                                    </div>

                                </a>
                            </div>
                            <div class='content'>
                                <h6 class='category text-gray'>".$cfirstname." ".$clastname. "</h6><br>
                                @".$cusername."<br>
                                <span class='card-title' style='font-size:20px;font-weight:600;'>".$cemail."</span>

                                <p class='card-content'>
                                    ".$caddress."
                                </p>

                            </div>

                        </div>
                        <div class='col-md-12 mt-10' >
                       <div class='card card-profile' style='padding:30px;'>
<form action='' method='POST' onSubmit='return validate();'>
                      <div  class='row'>
                            <div class='form-group label-floating'>

                                <label class='control-label'>New Password:</label>
                          <input type='Password' class='form-control' name='pw' id='pw1' required>

                          </div>
                        </div>
 <div  class='row'>
                            <div class='form-group label-floating'>

                                <label class='control-label'>Retype New Password:</label>
                          <input type='Password' class='form-control' name='pw2' id='pw2' required>
                          <label id='errpwm' style='color:red;'> </label>

                          </div>
                            <input type='submit' class='btn btn-danger ' value='Change Password'>

                        </div>
                         </form></div>
                      </div>
                    </div>

                </div>
              </div>

              ";


  }
}
public function updateProfile($cid,$upd_cusername,$upd_cfirstname,$upd_clastname,$upd_cemail,$upd_ccontact,$upd_caddress,$upd_cdob,$upd_cgender,$upd_cabout)
{
  dbConnect::dbConnection();
  if(!isset($_FILES['fileToUpload']) || $_FILES['fileToUpload']['error'] == UPLOAD_ERR_NO_FILE) {

    $sql4="UPDATE user SET cusername='$upd_cusername',cfirst_name='$upd_cfirstname',clast_name='$upd_clastname',cemail='$upd_cemail',ccontact='$upd_ccontact',caddress='$upd_caddress',cdob='$upd_cdob',cgender='$upd_cgender',cabout='$upd_cabout' WHERE cid=$cid";
    $update=mysqli_query($this->db,$sql4);
    if($update)
    {
     @header('location: userprofile.php?mes=updated');

    //echo"fudge";
    }
    else
    {
    echo "Update Failed!";
    }
  }

  else {
    $target_dir = "images/user/";
    $target_file = $target_dir .basename($_FILES["fileToUpload"]["name"]);
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
          $remove=$a.$row["image"];
          @unlink($remove);

        }

        // $a=basename( $_FILES["fileToUpload"]["name"]);

        $sql6="UPDATE user SET cusername='$upd_cusername',cfirst_name='$upd_cfirstname',clast_name='$upd_clastname',cemail='$upd_cemail',ccontact='$upd_ccontact',caddress='$upd_caddress',cdob='$upd_cdob',cgender='$upd_cgender',cabout='$upd_cabout',cimage='$db' WHERE cid=$cid";
        $update=mysqli_query($this->db,$sql6);
        @header('location: userprofile.php?mes=updated');

      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }
  }

}
  public function changeUserPassword($pw)
  {
   $id= $_SESSION['cus_id'];
   $pass=md5($pw);
   $sql="UPDATE user SET cpassword='$pass' WHERE cid=$id";
   $result= mysqli_query($this->db,$sql);
   if($result)
   {
    header("Location: userprofile.php?");
   }
   else
   {

   }

  }
}
?>
