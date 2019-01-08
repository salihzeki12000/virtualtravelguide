<?php
// include_once('include/dbconfig.php');
@include_once('session.php');
include_once('dbconfig.php');

Class Admin extends dbConnect
{
  // FUNCTION FOR DISPLAYING THE ADMINS
  public function getAllAdmin()
  {
    dbConnect::dbConnection();

    // $this->db=new mysqli("localhost","root","","vtg");
    $sql="SELECT * FROM admin WHERE type='1' ORDER BY id DESC";
    $result=mysqli_query($this->db,$sql);
    // echo'heloo";

    while($row=mysqli_fetch_array($result))
    {
      $type= $row['type'];
      switch($type)
      {

        case 1:
        {
          $type='Admin';
          break;
        }
        case 2:
        {
          $type='Moderator';
          break;
        }
        case 3:
        {
          $type='Editor';
          break;
        }
        case 4:
        {
          $type='Vendor';
          break;
        }
      }
      echo"
      <tr>
        <td>".$row['id']."</td>
        <td>".$row['username']."</td>
        <td>".$row['first_name']."</td>
        <td>".$row['last_name']."</td>
        <td>".$row['email']."</td>
        <td>".$row['contact']."</td>
        <td>".$row['address']."</td>
        <td>".substr($row['description'],0,30)."........</td>
        <td>".$row['title']."</td>
        <td>".$type." (".$row['vtype'].")</td>
        <td><img src='../".$row['image']."' style='height:115px;width:100px;'></td>
        <td>".$row['joindate']."</td>
        <td>
                    <a href='edit.php?action=edit&aid=".$row['id']."&of=admin&sidebar=admin&type=admin'> <button type='button' rel='tooltip' title='Edit Profile' class='btn btn-success btn-simple btn-xs'><i class='fa fa-edit'></i></button></a>
                    <a href='delete.php?action=delete&aid=".$row['id']."&of=admin'><button type='button' rel='tooltip' title='Remove' class='btn btn-danger btn-simple btn-xs' id='delbutton'>
                        <i class='fa fa-times'></i>
                    </button></a></td>
        </tr>
      ";

    }
  }
  public function getAllVendor()
  {
    dbConnect::dbConnection();

    // $this->db=new mysqli("localhost","root","","vtg");
    $sql5="SELECT * FROM admin WHERE type='4' ORDER BY id DESC";
    $result5=mysqli_query($this->db,$sql5);
    // echo'heloo";
    return $result5;
    // while($row=mysqli_fetch_array($result))
    // {
    //   $type= $row['type'];
    //   switch($type)
    //   {
    //
    //     case 1:
    //     {
    //       $type='Admin';
    //       break;
    //     }
    //     case 2:
    //     {
    //       $type='Moderator';
    //       break;
    //     }
    //     case 3:
    //     {
    //       $type='Editor';
    //       break;
    //     }
    //     case 4:
    //     {
    //       $type='Vendor';
    //       break;
    //     }
    //   }
    //   echo"
    // //   <tr>
    //     <td>".$row['id']."</td>
    //     <td>".$row['username']."</td>
    //
    //     <td>".$row['company_name']."</td>
    //     <td>".$row['email']."</td>
    //     <td>".$row['contact']."</td>
    //     <td>".$row['address']."</td>
    //     <td>".substr($row['description'],0,30)."........</td>
    //     <td>".$row['vtype']."</td>
    //     <td><img src='../".$row['image']."' style='height:115px;width:100px;'></td>
    //     <td>".$row['joindate']."</td>
    //     <td>".$row['latitude']."</td>
    //     <td>".$row['longitude']."</td>
    //     <td>
    //                 <a href='edit.php?action=edit&aid=".$row['id']."&of=admin&sidebar=vendor'> <button type='button' rel='tooltip' title='Edit Profile' class='btn btn-success btn-simple btn-xs'><i class='fa fa-edit'></i></button></a>
    //                 <a href='delete.php?action=delete&aid=".$row['id']."&of=admin'><button type='button' rel='tooltip' title='Remove' class='btn btn-danger btn-simple btn-xs' id='delbutton'>
    //                     <i class='fa fa-times'></i>
    //                 </button></a></td>
    //     </tr>
    //   ";

    // }
  }

  //FUNCTION TO ADD new ADMIN Member

  public function createAdmin($ausername,$afirstname,$alastname,$aemail,$acontact,$apassword,$aaddress,$adescription,$atitle)
  {


      dbConnect::dbConnection();
      $sql="SELECT * from admin WHERE username='$ausername' OR email='$aemail'";
      $result=mysqli_query($this->db,$sql);
      $userdata=mysqli_fetch_array($result);
      $count_row=$result->num_rows;
      if($count_row==0)
      {
$date=date("Y/m/d");
      if(!isset($_FILES['fileToUpload']) || $_FILES['fileToUpload']['error'] == UPLOAD_ERR_NO_FILE) {

        echo"File not  found";
      }

      else {
        $target_dir = "../images/admin/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $db_dir="images/admin/";
        $db=$db_dir . basename($_FILES["fileToUpload"]["name"]);
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

            $mdpassword=md5($apassword);

            $sql1="INSERT INTO admin SET username='$ausername',first_name='$afirstname',last_name='$alastname',email='$aemail',contact='$acontact',password='$mdpassword',address='$aaddress',description='$adescription',title='$atitle',image='$db',type='1',joindate='$date',status='1'";

            $update=mysqli_query($this->db,$sql1);


            //@header('location: admin.php?mes=updated&sidebar=admin');

          } else {
            echo "Sorry, there was an error uploading your file";
          }
        }
      }
}
else {
  echo "<script>alert('Username/Email already exists!Try again with a different username');</script>";
}
  }

  public function createVendor($vusername,$vemail,$vcontact,$vpassword,$vaddress,$vdescription,$vtype,$company_name,$longitude,$latitude)
  {


      dbConnect::dbConnection();
      $sql="SELECT * from admin WHERE username='$vusername' OR email='$vemail'";
      $result=mysqli_query($this->db,$sql);
      $userdata=mysqli_fetch_array($result);
      $count_row=$result->num_rows;
      if($count_row==0)
      {
  $date=date("Y/m/d");
      if(!isset($_FILES['fileToUpload']) || $_FILES['fileToUpload']['error'] == UPLOAD_ERR_NO_FILE) {

        echo"File not  found";
      }

      else {
        $target_dir = "../images/admin/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $db_dir="images/admin/";
        $db=$db_dir . basename($_FILES["fileToUpload"]["name"]);
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
            $mdpassword=md5($vpassword);
            $sql1="INSERT INTO admin SET username='$vusername',email='$vemail',contact='$vcontact',password='$mdpassword',address='$vaddress',description='$vdescription',image='$db',type='4',vtype='$vtype',joindate='$date',status='1',company_name='$company_name',latitude='$latitude',longitude='$longitude'";

            $update=mysqli_query($this->db,$sql1);
            //@header('location: admin.php?mes=updated&sidebar=admin');

          } else {
            echo "Sorry, there was an error uploading your file";
          }
        }
      }
    }
    else {
      echo "<script>alert('Username/Email already exists!Try again with a different username');</script>";
    }

  }

  //Function to delete admin Member
  public function deleteAdmin($aid)
  {
    dbConnect::dbConnection();
    $sqlSel="SELECT * FROM admin where id=$aid";
    $data=mysqli_query($this->db,$sqlSel);

    while($row=mysqli_fetch_array($data))
    {
      $a="../";
      $remove=$a.$row["image"];
      @unlink($remove);

    }
    $sql2="DELETE from admin where id=$aid";
    $delete=mysqli_query($this->db,$sql2);

    if($delete)
    {
      header('location: admin.php?mes=deleted&sidebar=admin');

    }
    else {
      echo "Error in deletion";
    }
  }

  public function editAdmin($aid,$admintype)
  {
    dbConnect::dbConnection();
    $sql3="SELECT * FROM admin where id=$aid";
    $result3=mysqli_query($this->db,$sql3);
    while($row=mysqli_fetch_array($result3))
    {

              $adminid=$row['id'];
                $username=$row['username'];
              $firstname=$row['first_name'];
              $lastname=$row['last_name'];
              $email=$row['email'];
              $contact=$row['contact'];
              $address=$row['address'];
              $description=$row['description'];
              $title=$row['title'];
              $status=$row['status'];
              $type=$row['type'];
              $image=$row['image'];
              $company=$row['company_name'];
              $latitude=$row['latitude'];
              $longitude=$row['longitude'];
              $vendor=$row['vtype'];
              switch($type)
              {
                case 1:
                {
                  $type_name='Admin';
                  break;
                }
                case 2:
                {
                  $type_name='Moderator';
                  break;
                }
                case 3:
                {
                  $type_name='Editor';
                  break;
                }
                case 4:
                {
                  $type_name='Vendor';
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
                  <form method='POST' enctype='multipart/form-data' action='edit.php?action=edit&aid=".$row['id']."&of=admin '>
                      <div class='row'>
                          <div class='col-md-5'>
                              <div class='form-group label-floating'>
                                  <label class='control-label'>Id (disabled)</label>
                                  <input type='text' class='form-control' value='".$adminid."' name='aid' disabled>
                              </div>
                          </div>
                          <div class='col-md-7'>
                              <div class='form-group label-floating'>
                                  <label class='control-label'>Company Username</label>
                                  <input type='text' class='form-control' value='".$username."' name='upd_username'>
                              </div>
                          </div>
                        </div>

";
if($type=='1')
{
  echo "
                      <div class='row'>
                          <div class='col-md-6'>
                              <div class='form-group label-floating'>
                                  <label class='control-label'>Fist Name</label>
                                  <input type='text' class='form-control' value='".$firstname."' name='upd_firstname'>
                              </div>
                          </div>
                          <div class='col-md-6'>
                              <div class='form-group label-floating'>
                                  <label class='control-label'>Last Name</label>
                                  <input type='text' class='form-control' value='".$lastname."' name='upd_lastname'>
                              </div>
                          </div>
                      </div>
                      ";
                    }
                    else { echo "";}

                      if($admintype=='admin')
                      {
                        echo " ";
                      }
                      else {
                        echo "
                        <div class='row'>
                            <div class='col-md-12'>
                                <div class='form-group label-floating'>
                                    <label class='control-label'>Company Name</label>
                                    <input type='text' class='form-control' value='".$company."' name='upd_companyname'>
                                </div>

                        </div>
                        </div>
                        ";
                      }


                    echo "

                    <Div class='row'>
                      <div class='col-md-7'>
                          <div class='form-group label-floating'>
                              <label class='control-label'>Email address</label>
                              <input type='email' class='form-control' value='".$email."' name='upd_email'>
                          </div>
                      </div>
                      <div class='col-md-5'>
                          <div class='form-group label-floating'>
                              <label class='control-label'>Contact</label>
                              <input type='text' class='form-control' value='".$contact."' name='upd_contact'>
                          </div>
                      </div>
                    </div>

                    <div class='row'>
                        <div class='col-md-12'>
                            <div class='form-group label-floating'>
                                <label class='control-label'>Address</label>
                                <input type='text' class='form-control' value='".$address."' name='upd_address'>
                            </div>
                        </div>
                    </div>
                    ";
                    if($admintype=='admin')
                    {
                      echo " ";
                    }
                    else {
                      echo "
                      <div class='row'>
                          <div class='col-md-6'>
                          <fieldset class='gllpLatlonPicker'>
                          <!-- <input type='text' class='gllpSearchField'>
                          <input type='button' class='gllpSearchButton' value='search'> -->
                          <br/><br/>
                          <div class='gllpMap'>Google Maps</div>
                          <div class='row'>
                          <div class='col-md-2 '>
                              <div class='form-group'>

                                <label class='control-label'>Lat/Lon</label>
                              </div>
                          </div>
                          <div class='col-md-5 '>

                              <input type='text' class='gllpLatitude form-control' name='upd_latitude' value='$latitude'/>
                          </div>
                          <div class='col-md-5 '>
                              <input type='text' class='gllpLongitude form-control' name='upd_longitude' value='$longitude'/>
                          </div>

                          <div class='col-sm-3'>
                                <div class='form-group'>
                                    <label class='control-label'>Zoom</label>
                                      <input type='text' class='gllpZoom form-control' value='12'/>
                                </div>
                          </div>
                          <div class='col-sm-5'>
                              <div class='form-group'>

                                <input type='button' class='btn btn-xs btn-warning gllpUpdateButton' value='update map'>
                                </div>
                          </div>

                          </fieldset>
                          </div>
                      </div>
                      ";
                    };
                    echo"
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
                                      <textarea class='form-control' rows='3' name='upd_description'>".$description."</textarea>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class='row'>
                          <div class='col-md-6'>
                              <div class='form-group label-floating'>
                                  <label class='control-label'>Title</label>
                                  <input type='text' class='form-control' value='".$title."' name='upd_title'>
                              </div>
                          </div>
                          </div>
                          ";
                          if($type=='1')
                          {
                            echo "
                          <div class='row'>
                          <div class='col-md-6'>
                              <div class='form-group label-floating'>
                              <label for='exampleFormControlSelect1'>Type</label>
                              <select class='form-control' id='exampleFormControlSelect1' name='upd_type' value='".$type_name."' disabled>

                                <option value='{$type}'>{$type_name}</option>

                                <option value='1'>Admin</option>
                                <option value='2'>Moderator</option>
                                <option value='3'>Editor</option>
                                <option value='4'>Vendor</option>

                              </select>
                              </div>
                          </div>

                          <div class='form-group col-md-6'>
                             <label for='exampleFormControlSelect1'>Status</label>
                             <select class='form-control' id='exampleFormControlSelect1' name='upd_status'>
                               <option value='1'>Enabled</option>
                               <option value='2'>Disabled</option>

                             </select>
                           </div>
                           </div>";
                         }
                           else {
                             echo "";
                           }
                           echo "


                      <button type='submit' class='btn btn-danger pull-right'>Update Profile</button>
                      <div class='clearfix'></div>
                  </form>
                            </div>
                        </div>
                    </div>
                    <div class='col-md-4'>
                        <div class='card card-profile'>
                            <div class='card-avatar'>
                                <a href='#pablo'>
                                    <img class='img' src='../$image' />
                                </a>
                            </div>
                            <div class='content'>
                                <h6 class='category text-gray'>".$title."</h6>
                                <h4 class='card-title'>".$firstname." " .$lastname."</h4>
                                @".$username."<br>
                                <span class='card-title' style='font-size:20px;font-weight:600;'>".$company."</span>

                                <p class='card-content'>
                                    ".$address."
                                </p>
                                <a href='#pablo' class='btn btn-default btn-round' disabled>".$username."</a>
                            </div>
                        </div>
                    </div>
                </div>
              </div>

              ";

    }
  }

  // public function updateAdmin($aid,$upd_username,$upd_firstname,$upd_lastname,$upd_email,$upd_contact,$upd_address,$upd_description,$upd_title,$upd_type,$upd_status)
  // {
  //   dbConnect::dbConnection();
  //   // echo "hello";
  //     $sql4="UPDATE admin SET username='$upd_username',first_name='$upd_firstname',last_name='$upd_lastname',email='$upd_email',contact='$upd_contact',address='$upd_address',description='$upd_description',title='$upd_title',type='$upd_type',status='$upd_status' WHERE id=$aid";
  //     $update=mysqli_query($this->db,$sql4);
  //     if($update)
  //     {
  //       @header('location: admin.php?mes=updated&sidebar=admin');
  //     }
  //     else {
  //           echo "Update Failed!";
  //         }
  // }

  public function updateAdmin($aid,$upd_username,$upd_firstname,$upd_lastname,$upd_companyname,$upd_email,$upd_contact,$upd_address,$upd_description,$upd_title,$upd_type,$upd_status,$upd_latitude,$upd_longitude)
  {
    dbConnect::dbConnection();
    if(!isset($_FILES['fileToUpload']) || $_FILES['fileToUpload']['error'] == UPLOAD_ERR_NO_FILE) {

      $sql4="UPDATE admin SET username='$upd_username',first_name='$upd_firstname',last_name='$upd_lastname',company_name='$upd_companyname',email='$upd_email',contact='$upd_contact',address='$upd_address',description='$upd_description',title='$upd_title',latitude='$upd_latitude',longitude='$upd_longitude' WHERE id=$aid";
      $update=mysqli_query($this->db,$sql4);
      if($update)
      {
       @header('location: index.php?mes=updated&sidebar=dashboard');

      //echo"fudge";
      }
      else
      {
      echo "Update Failed!";
      }
    }

    else {
      $target_dir = "../images/admin/";
      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
      $db_dir="images/admin/";
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
          $sqldel="SELECT * FROM admin where id=$aid";
          $result=  mysqli_query($this->db,$sqldel);
          while($row=mysqli_fetch_array($result))
          {
            $a="../";
            $remove=$a.$row["image"];
            @unlink($remove);

          }

          // $a=basename( $_FILES["fileToUpload"]["name"]);

          $sql6="UPDATE admin SET username='$upd_username',first_name='$upd_firstname',last_name='$upd_lastname',company_name='$upd_companyname',email='$upd_email',contact='$upd_contact',address='$upd_address',description='$upd_description',title='$upd_title',image='$db',latitude='$upd_latitude',longitude='$upd_longitude' WHERE id=$aid";
          $update=mysqli_query($this->db,$sql6);
          @header('location: index.php?mes=updated&sidebar=dashboard');

        } else {
          echo "Sorry, there was an error uploading your file.";
        }
      }
    }

  }

  public function adminLogin($name,$password)
  {
    dbConnect::dbConnection();

    $mdpassword=md5($password);
    // $this->db=new mysqli("localhost","root","","vtg");
    $sql5="SELECT * FROM admin WHERE (username='$name' or email='$name' or contact='$name') AND password='$mdpassword'";
    $result=mysqli_query($this->db,$sql5);

    while($row=mysqli_fetch_array($result))
    {
      $_SESSION['id']=$row['id'];
      $_SESSION['username']=$row['username'];
      $_SESSION['fname']=$row['first_name'];
      $_SESSION['lname']=$row['last_name'];
      $_SESSION['image']=$row['image'];
      $_SESSION['admintype']=$row['type'];
      $admintype=$row['type'];
      $_SESSION['vendor']=$row['vtype'];
      $_SESSION['company']=$row['company_name'];
      header('location: index.php?sidebar=dashboard');

    }
  }
  public function getAllProduct($sesid)
    {
      dbConnect::dbConnection();
      $sql="SELECT * FROM product WHERE aid='$sesid' ORDER BY prid DESC";
      $result=mysqli_query($this->db,$sql);
      while($row=mysqli_fetch_array($result))
      {
        if($row['prstatus']=1)
        {
          $status="Enabled";
        }
        else {
          $status="Disabled";
        }
       //$hid=$row['hid'];
        echo"
        <tr>
          <td>".$row['prid']."</td>
          <td>".$row['prname']."</td>
         <td>".$row['prcategory']."</td>
          <td>".$row['prbrand']."</td>
           <td>".$row['prcost']."</td>
          <td><img src='../".$row['primg1']."' style='height:80px;width:120px;' alt='image'></td>
            <td><img src='../".$row['primg2']."' style='height:80px;width:120px;' alt='image'></td>
            <td>".$status."</td>
              <td>".$row['prdescription']."</td>
          <td></td>
          <td>
                        <a href='edit.php?action=edit&rid=".$row['prid']."&of=room&sidebar=room'> <button type='button' rel='tooltip' title='Edit Room' class='btn btn-success btn-simple btn-xs'><i class='fa fa-edit'></i></button></a>
                      <a href='delete.php?action=delete&rid=".$row['prid']."&of=room'><button type='button' rel='tooltip' title='Delete Room' class='btn btn-danger btn-simple btn-xs' id='delbutton'>
                          <i class='fa fa-times'></i>
                      </button></a>
                      </td>
                      </tr>
          ";
      }
    }

    public function createProduct($prname,$prcategory,$prbrand,$prcost,$prdescription,$prstatus,$psize)
    {
      $aid=$_SESSION['id'];
      dbConnect::dbConnection();
      if(!isset($_FILES['fileToUpload']) || $_FILES['fileToUpload']['error'] == UPLOAD_ERR_NO_FILE) {
        if(!isset($_FILES['coverToUpload']) || $_FILES['coverToUpload']['error'] == UPLOAD_ERR_NO_FILE) {
          $sql1="INSERT INTO product SET  prname='$prname', prcategory='$prcategory',prbrand='$prbrand',prcost='$prcost',prdescription='$prdescription',prstatus='$prstatus',psize='$psize',aid='$aid'";
          $result1=mysqli_query($this->db,$sql1);
        }
        else {
          $target_dir = "../images/hotels/cover/";
          $db_dir="images/hotels/cover/";
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
              $sql2="INSERT INTO hotel SET  hname='$hname', husername='$husername',haddress='$haddress',hlocation='$hlocation',hcontact='$hcontact',hemail='$hemail',hdescription='$hdescription',hcoverimage='$db',hmap='$hmap',htype='$htype',hstatus='1',hkeyword='$hkeyword',aid='$aid',ausername='$sesname'";
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
          $target_dir = "../images/hotels/hotel/";
          $db_dir="images/hotels/hotel/";
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

              $sql1="INSERT INTO hotel SET  hname='$hname', husername='$husername',haddress='$haddress',hlocation='$hlocation',hcontact='$hcontact',hemail='$hemail',hdescription='$hdescription',himage='$db',hmap='$hmap',htype='$htype',hstatus='1',hkeyword='$hkeyword',aid='$aid',ausername='$sesname'";
              $result1=mysqli_query($this->db,$sql1);
            }
          }
        }
        else {
          $target_dir = "../images/hotels/cover/";
          $db_dir="images/hotels/cover/";
            $target_dir1 = "../images/hotels/hotel/";
            $db_dir1="images/hotels/hotel/";
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
                        $sql1="INSERT INTO hotel SET  hname='$hname', husername='$husername',haddress='$haddress',hlocation='$hlocation',hcontact='$hcontact',hemail='$hemail',hdescription='$hdescription',himage='$db1',hcoverimage='$db',hmap='$hmap',htype='$htype',hstatus='1',hkeyword='$hkeyword',aid='$aid',ausername='$sesname'";
                      $result1=mysqli_query($this->db,$sql1);
                }
            }
            else {
              echo "Sorry, there was an error uploading your file.";
            }
          }
        }
      }
    }

    public function publishvendor($id,$status)
  {

    dbConnect::dbConnection();
    if($status=='1')
    {
      $sql4="UPDATE admin SET status='0' WHERE id=$id";
    }
    else {
      $sql4="UPDATE admin SET status='1' WHERE id=$id";
    }
    $result1=mysqli_query($this->db,$sql4);
    if($result1)
    {
      header('Location: '.$_SERVER['PHP_SELF'].'?sidebar=vendor');

    }

  }


}
?>
