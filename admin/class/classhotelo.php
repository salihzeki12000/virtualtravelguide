<?php
@include_once('session.php');
// include_once('include/dbconfig.php');
include_once('dbconfig.php');
Class Hotel extends dbConnect
{
  // FUNCTION FOR DISPLAYING THE All the Hotels
  public function getAllHotel()
  {
    dbConnect::dbConnection();
    $sql="SELECT * FROM hotel ORDER BY hid DESC";
    $result=mysqli_query($this->db,$sql);
    while($row=mysqli_fetch_array($result))
    {
      $hid=$row['hid'];
      $hname=$row['hname'];
      $hstatus=$row['hstatus'];
      $htype=$row['htype'];

    switch($htype)
    {
      case '1':
      {
        $htype_name='Hotel';
        break;
      }
      case '2':
      {
        $htype_name='Homestay';
        break;
      }

    }
      echo"
      <tr>
        <td>".$row['hid']."</td>
        <td><a href='single.php?of=hotel&id=".$hid."&sidebar=hotel&name=".$hname."''>".$row['hname']."</a></td>
          <td>".$row['husername']."</td>
          <td>".$row['aid']."</td>
          <td><kbd>".$row['ausername']."</kbd></td>
        <td>".$row['haddress']."</td>
        <td>".$row['hlocation']."</td>
        <td>".$row['hcontact']."</td>
        <td>".$row['hemail']."</td>
        <td>".substr($row['hdescription'],0,50).".............</td>
        <td>".$row['hrating']."</td>


        <td>".$row['added_date']."</td>
<td>".$row['hlatitude']."</td>
        <td>".$row['hlongitude']."</td>
        <td>";
        switch($hstatus)
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
        <td>$htype_name</td>
          <td><img src='../".$row['hcoverimage']."'  style='height:80px;width:120px;'></td>
        <td><img src='../".$row['himage']."' style='height:80px;width:120px;'></td>
        <td>".$row['hkeyword']."</td>
        <td>
                    <a href='edit.php?action=edit&hid=".$row['hid']."&of=hotel&sidebar=hotel'> <button type='button' rel='tooltip' title='Edit Hotel' class='btn btn-success btn-simple btn-xs'><i class='fa fa-edit'></i></button></a>
                    <a href='delete.php?action=delete&hid=".$row['hid']."&of=hotel'><button type='button' rel='tooltip' title='Delete Hotel' class='btn btn-danger btn-simple btn-xs' id='delbutton'>
                        <i class='fa fa-times'></i>
                    </button></a></td>
        </tr>
      ";
    }
  }
  //FUNCTION TO ADD new Hotel
  public function createHotel($hname,$husername,$haddress,$hlocation,$hcontact,$hemail,$hdescription,$hlatitude,$hlongitude,$htype,$hkeyword,$vendorid,$sesname)
  {
    dbConnect::dbConnection();
    date_default_timezone_set('Asia/Kathmandu');
   $date= date("Y-m-d h:i:sa");
    if(!isset($_FILES['fileToUpload']) || $_FILES['fileToUpload']['error'] == UPLOAD_ERR_NO_FILE) {
      if(!isset($_FILES['coverToUpload']) || $_FILES['coverToUpload']['error'] == UPLOAD_ERR_NO_FILE) {
        $sql1="INSERT INTO hotel SET  hname='$hname', husername='$husername',haddress='$haddress',hlocation='$hlocation',hcontact='$hcontact',hemail='$hemail',hdescription='$hdescription',added_date='$date',hlatitude='$hlatitude',hlongitude='$hlongitude',htype='$htype',hstatus='1',hkeyword='$hkeyword',aid='$vendorid',ausername='$sesname'";
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
            $sql2="INSERT INTO hotel SET  hname='$hname', husername='$husername',haddress='$haddress',hlocation='$hlocation',hcontact='$hcontact',hemail='$hemail',hdescription='$hdescription',hcoverimage='$db',added_date='$date',hlatitude='$hlatitude',hlongitude='$hlongitude',htype='$htype',hstatus='1',hkeyword='$hkeyword',aid='$vendorid',ausername='$sesname'";
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

            $sql1="INSERT INTO hotel SET  hname='$hname', husername='$husername',haddress='$haddress',hlocation='$hlocation',hcontact='$hcontact',hemail='$hemail',hdescription='$hdescription',himage='$db',added_date='$date',hlatitude='$hlatitude',hlongitude='$hlongitude',htype='$htype',hstatus='1',hkeyword='$hkeyword',aid='$vendorid',ausername='$sesname'";
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
                      $sql1="INSERT INTO hotel SET  hname='$hname', husername='$husername',haddress='$haddress',hlocation='$hlocation',hcontact='$hcontact',hemail='$hemail',hdescription='$hdescription',himage='$db1',added_date='$date',hcoverimage='$db',hlatitude='$hlatitude',hlongitude='$hlongitude',htype='$htype',hstatus='1',hkeyword='$hkeyword',aid='$vendorid',ausername='$sesname'";
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
  //Function to delete hotel
  public function deleteHotel($hid)
  {
    dbConnect::dbConnection();
    $sqlSel="SELECT * FROM hotel where hid=$hid";
		$data=mysqli_query($this->db,$sqlSel);
		while($row=mysqli_fetch_array($data))
		{
      $low="../";
      $img=$low . $row["himage"];
      $cimg=$low . $row["hcoverimage"];


			unlink($cimg);
      unlink($img);
		}
    $sql2="DELETE from hotel where hid=$hid";
    $delete=mysqli_query($this->db,$sql2);
    if($delete)
    {
      header('location: hotel.php?mes=deleted&sidebar=hotel');
    }
    else {
      echo "Error in Hotel deletion";
    }
  }


  public function editHotel($hid)
  {
    dbConnect::dbConnection();
    $sql3="SELECT * FROM hotel WHERE hid=$hid ";
    $result3=mysqli_query($this->db,$sql3);
    echo $hid;
    while($row=mysqli_fetch_array($result3))
    {
              $hid=$row['hid'];
                $hname=$row['hname'];
                  $husername=$row['husername'];
              $haddress=$row['haddress'];
              $hlocation=$row['hlocation'];
              $hemail=$row['hemail'];
              $hcontact=$row['hcontact'];

              $hdescription=$row['hdescription'];
              $himage=$row['himage'];
              $hstatus=$row['hstatus'];
              $htype=$row['htype'];

              switch($htype)
                            {
                              case 1:
                              {
                                $htype_name='Hotel';
                                break;
                              }
                              case 2:
                              {
                                $htype_name='Homestay';
                                break;
                              }

                            }
                            switch($hstatus)
                            {
                              case 0:
                              {
                                $hstatus_name='Disabled';
                                break;
                              }
                              case 1:
                              {
                                $hstatus_name='Enabled';
                                break;
                              }
                            }
              echo "
              <div class='container-fluid'>
                  <div class='row'>
                      <div class='col-md-8'>
                          <div class='card'>
                              <div class='card-header' data-background-color='red'>
                                  <h4 class='title'>Edit Hotel</h4>
                                  <p class='category'>Complete the Hotel profile</p>
                              </div>
                              <div class='card-content'>
                  <form method='POST' action='edit.php?action=edit&hid=".$row['hid']."&of=hotel' enctype='multipart/form-data' >
                      <div class='row'>
                          <div class='col-md-5'>
                              <div class='form-group label-floating'>
                                  <label class='control-label'>Id (disabled)</label>
                                  <input type='text' class='form-control' value='".$hid."' name='hid' disabled>
                              </div>
                          </div>
                          <div class='col-md-7'>
                              <div class='form-group label-floating'>
                                  <label class='control-label'>Hotel Username</label>
                                  <input type='text' class='form-control' value='".$husername."' name='upd_husername'>
                              </div>
                          </div>
                        </div>
                      <div class='row'>
                          <div class='col-md-12'>
                              <div class='form-group label-floating'>
                                  <label class='control-label'>Hotel Name</label>
                                  <input type='text' class='form-control' value='".$hname."' name='upd_hname'>
                              </div>
                          </div>
                      </div>
                      <Div class='row'>
                        <div class='col-md-7'>
                            <div class='form-group label-floating'>
                                <label class='control-label'>Email address</label>
                                <input type='email' class='form-control' value='".$hemail."' name='upd_hemail'>
                            </div>
                        </div>
                        <div class='col-md-5'>
                            <div class='form-group label-floating'>
                                <label class='control-label'>Contact</label>
                                <input type='text' class='form-control' value='".$hcontact."' name='upd_hcontact'>
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
                          <div class='col-md-12'>
                              <div class='form-group label-floating'>
                                  <label class='control-label'>Address</label>
                                  <input type='text' class='form-control' value='".$haddress."' name='upd_haddress'>
                              </div>
                          </div>
                      </div>
                      <div class='row'>
                          <div class='col-md-12'>
                              <div class='form-group'>
                                  <label>Description about Hotel</label>
                                  <div class='form-group label-floating'>

                                      <textarea class='form-control' rows='3' name='upd_hdescription'>".$hdescription."</textarea>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class='row'>
                          <div class='col-md-12'>
                              <div class='form-group label-floating'>
                                  <label class='control-label'>Map</label>
                                  <input type='text' class='form-control' name='latitude' value='".$row['hlatitude']."'>
                                  <input type='text' class='form-control' name='longitude' value='".$row['hlongitude']."'>

<p class='btn btn-warning' onclick='getLocation()'>Get New Location</p>

<p id='demo'></p>

                              </div>
                          </div>
                          </div>
                          <div class='row'>
                          <!--<div class='col-md-6'>
                              <div class='form-group label-floating'>
                              <label for='exampleFormControlSelect1'>Type</label>
                              <select class='form-control' id='exampleFormControlSelect1' name='upd_htype' value='".$htype."'>
                                <option value='{$htype}'>{$htype_name}</option>
                                <option value='1'>Hotel</option>
                                <option value='2'>Homestay</option>

                              </select>
                              </div>
                          </div>
                          <div class='form-group col-md-6'>
                             <label for='exampleFormControlSelect1'>Status</label>
                             <select class='form-control' id='exampleFormControlSelect1' name='upd_hstatus'>
                              <option value='$hstatus'>$hstatus_name</option>
                               <option value='1'>Enabled</option>
                               <option value='0'>Disabled</option>
                             </select>
                           </div>-->
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
                                    <img class='img' src='../$himage' style='height:150px;'>
                                </a>
                            </div>
                            <div class='content'>
                              <h6 class='category text-gray'>".$haddress."</h6>
                              <h4 class='card-title'>".$hname."</h4>
                              <p class='card-content'>
                                  ".$hdescription."
                              </p>
                              <a href='#pablo' class='btn btn-default btn-round' disabled>".$htype_name."</a>
                          </div>

                        </div>

                    </div>
                </div>
              </div>
              ";
    }
  }
  public function updateHotel($hid,$hname,$upd_husername,$upd_hemail,$upd_hcontact,$upd_haddress,$upd_hdescription,$latitude,$longitude,$upd_htype,$upd_hstatus)
  {
    dbConnect::dbConnection();

          if(!isset($_FILES['fileToUpload']) || $_FILES['fileToUpload']['error'] == UPLOAD_ERR_NO_FILE) {
            if(!isset($_FILES['coverToUpload']) || $_FILES['coverToUpload']['error'] == UPLOAD_ERR_NO_FILE) {
              $sql1="UPDATE hotel SET hname='$hname',husername='$upd_husername',hemail='$upd_hemail',hcontact='$upd_hcontact',haddress='$upd_haddress',hdescription='$upd_hdescription',hlatitude='$latitude',hlongitude='$longitude' WHERE hid=$hid";
              $result1=mysqli_query($this->db,$sql1);
              if($result1)
              {
               @header('location: index.php?sidebar=dashboard');

              //echo"fudge";
              }
              else
              {
              echo "Update Failed!";
              }
            }
            else {
            //  echo"entererd";
              $target_dir = "../images/hotels/cover/";
              $target_file = $target_dir . date("d-m-Y")."-".time() . basename($_FILES["coverToUpload"]["name"]);
              $uploadOk1 = 1;
              $imageName=basename($_FILES["coverToUpload"]["name"]);
              $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
              $db_dir="images/hotels/cover/";
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
                  $sqldeletedb="SELECT * FROM hotel where hid=$hid";
                  $data=mysqli_query($this->db,$sqldeletedb);
                  while($row=mysqli_fetch_array($data))
              		{
                    $low="../";
                    $con=$low . $row["hcoverimage"];
              			unlink($con);
              		}
                  $sql2="UPDATE hotel SET hname='$hname',husername='$upd_husername',hemail='$upd_hemail',hcontact='$upd_hcontact',hcoverimage='$db',haddress='$upd_haddress',hdescription='$upd_hdescription',hlatitude='$latitude',hlongitude='$longitude' WHERE hid=$hid";
                  $result2=mysqli_query($this->db,$sql2);
                  if($result2)
                  {
                   @header('location: index.php?sidebar=dashboard');

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
              $target_dir = "../images/hotels/hotel/";
              $db_dir="images/hotels/hotel/";
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
                  $sqldeletedb="SELECT * FROM hotel where hid=$hid";
                  $data=mysqli_query($this->db,$sqldeletedb);
                  while($row=mysqli_fetch_array($data))
              		{
                    $low="../";
                    $con=$low . $row["himage"];
              			unlink($con);
              		}
                  $sql1="UPDATE hotel SET hname='$hname',husername='$upd_husername',hemail='$upd_hemail',himage='$db',hcontact='$upd_hcontact',haddress='$upd_haddress',hdescription='$upd_hdescription',hlatitude='$latitude',hlongitude='$longitude' WHERE hid=$hid";
                  $result1=mysqli_query($this->db,$sql1);
                  if($result1)
                  {
                   @header('location: index.php?sidebar=dashboard');

                  //echo"fudge";
                  }
                  else
                  {
                  echo "Update Failed!";
                  }
                //  unlink($deleteFile);
                }
              }
            }
            else {
              $target_dir = "../images/hotels/cover/";
              $db_dir="images/hotels/cover/";
                $target_dir1 = "../images/hotels/hotel/";
                $db_dir1="images/hotels/hotel/";
              $target_file = $target_dir .date("d-m-Y")."-".time(). basename($_FILES["coverToUpload"]["name"]);
              $deleteFile=$target_file;
              $db=$db_dir .date("d-m-Y")."-".time(). basename($_FILES["coverToUpload"]["name"]);
              $target_file1 = $target_dir1 .date("d-m-Y")."-".time(). basename($_FILES["fileToUpload"]["name"]);
              $deleteFile1=$target_file1;
              $db1=$db_dir1 . basename($_FILES["fileToUpload"]["name"]);
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
                          $sqldeletedb="SELECT * FROM hotel where hid=$hid";
                          $data=mysqli_query($this->db,$sqldeletedb);
                          while($row=mysqli_fetch_array($data))
                      		{
                            $low="../";
                            $img=$low . $row["himage"];
                            $con=$low . $row["hcoverimage"];
                      			unlink($con);
                      		}
                          $sql4="UPDATE hotel SET hname='$hname',husername='$upd_husername',himage='$db1',hcoverimage='$db',hemail='$upd_hemail',hcontact='$upd_hcontact',haddress='$upd_haddress',hdescription='$upd_hdescription',hlatitude='$latitude',hlongitude='$longitude' WHERE hid=$hid";
                          $result1=mysqli_query($this->db,$sql4);
                          if($result1)
                          {
                           @header('location: hotel.php?mes=updated&sidebar=hotel');

                          //echo"fudge";
                          }
                          else
                          {
                          echo "Update Failed!";
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
  public function getAllAdminName()
  {
    dbConnect::dbConnection();
    $sql4="SELECT * FROM admin where vtype='hotel' ORDER BY username ";
    $result4=mysqli_query($this->db,$sql4);
    return $result4;
  }

}
