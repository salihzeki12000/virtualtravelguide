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
    $sql="SELECT * FROM admin WHERE type='4' && vtype='hotel' ORDER BY id DESC";
    $result=mysqli_query($this->db,$sql);
    return $result;

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
    $sqlSel="SELECT * FROM admin where id=$hid";
		$data=mysqli_query($this->db,$sqlSel);
		while($row=mysqli_fetch_array($data))
		{
      $low="../";
      $img=$low . $row["himage"];
      $cimg=$low . $row["hcoverimage"];


			unlink($cimg);
      unlink($img);
		}
    $sql2="DELETE from admin where id=$hid";
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
    $sql3="SELECT * FROM admin WHERE id=$hid ";
    $result3=mysqli_query($this->db,$sql3);
    echo $hid;
    while($row=mysqli_fetch_array($result3))
    {
              $hid=$row['id'];
                $hname=$row['company_name'];
                  $husername=$row['username'];
              $haddress=$row['address'];
              $hlocation=$row['location'];
              $hemail=$row['email'];
              $hcontact=$row['contact'];

              $hdescription=$row['description'];
              $himage=$row['image'];
              $hstatus=$row['status'];
              $htype=$row['type'];
              $latitude=$row['latitude'];
              $longitude=$row['longitude'];
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
                  <form method='POST' action='edit.php?action=edit&hid=".$row['id']."&of=hotel' enctype='multipart/form-data' >
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

                      </div>



                      <div class='row'>
                          <div class='col-md-6'>
                              <div class='form-group label-floating'>
                                  <label class='control-label'>Address</label>
                                  <input type='text' class='form-control' value='".$haddress."' name='upd_haddress'>
                              </div>
                          </div>
                          ";

                          echo"
                          <div class='col-md-6'>
                          <div class='form-group label-floating'>
                          <label for='exampleFormControlSelect1'>Location</label>


                          <select class='form-control' id='exampleFormControlSelect1' name='upd_hlocation' >


                          ";


                            $this->getAllLocation();


                            echo"
                          </select>
                      </div>
                          </div>

                      </div>
                      <div class='row'>


                      <div class='col-md-12'>
                      <div class='form-group label-floating'>
                      <label class='control-label'>Map</label>

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

                          <input type='text' class='gllpLatitude form-control' name='upd_hlatitude' value='$latitude'/>
                      </div>
                      <div class='col-md-5 '>
                          <input type='text' class='gllpLongitude form-control' name='upd_hlongitude' value='$longitude'/>
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

                          </div>

                        </div>

                    </div>
                </div>
              </div>
              ";
    }
  }
  public function updateHotel($hid,$upd_hname,$upd_husername,$upd_hemail,$upd_hcontact,$upd_haddress,$upd_hlocation,$upd_hdescription,$upd_hlatitude,$upd_hlongitude)
  {


    dbConnect::dbConnection();
    if(!isset($_FILES['fileToUpload']) || $_FILES['fileToUpload']['error'] == UPLOAD_ERR_NO_FILE) {

      $sql4="UPDATE admin SET company_name='$upd_hname',username='$upd_husername',email='$upd_hemail',contact='$upd_hcontact',address='$upd_haddress',location='$upd_hlocation',description='$upd_hdescription',latitude='$upd_hlatitude',longitude='$upd_hlongitude' WHERE id=$hid";
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

          $sql6="UPDATE admin SET company_name='$upd_hname',username='$upd_husername',email='$upd_hemail',contact='$upd_hcontact',address='$upd_haddress',location='$upd_hlocation',description='$upd_hdescription',image='$db',latitude='$upd_hlatitude',longitude='$upd_hlongitude' WHERE id=$hid";
          $update=mysqli_query($this->db,$sql6);
          @header('location: index.php?mes=updated&sidebar=dashboard');

        } else {
          echo "Sorry, there was an error uploading your file.";
        }
      }
    }

  }
  public function getAllAdminName()
  {
    dbConnect::dbConnection();
    $sql4="SELECT * FROM admin where vtype='hotel' ORDER BY username ";
    $result4=mysqli_query($this->db,$sql4);
    return $result4;
  }
  public function getAllLocation()
  {
    dbConnect::dbConnection();
    $sql04="SELECT * FROM location ";
    $result04=mysqli_query($this->db,$sql04);
    // return $result04;
    while($row=mysqli_fetch_array($result04))
    {  $location=$row['lname'];
    echo "
    <option value='$location'>$location</option>

    ";
  }

  }

  public function publishhotel($hid,$hstatus)
    {

      dbConnect::dbConnection();
      if($hstatus=='1')
      {
        $sql4="UPDATE admin SET status='0' WHERE id=$hid";
      }
      else {
        $sql4="UPDATE admin SET status='1' WHERE id=$hid";
      }
      $result1=mysqli_query($this->db,$sql4);
      if($result1)
      {
        header('Location: '.$_SERVER['PHP_SELF'].'?sidebar=hotel');

      }

    }
}
