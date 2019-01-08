<?php
@include_once('session.php');
include_once('dbconfig.php');
Class Todo extends dbConnect
{
  //FUNCTION TO ADD new Things to do
  public function createTodo($aid,$ausername,$tlocation,$ttitle,$taddress,$tdescription,$tkeyword,$tlatitude,$tlongitude)
  {
    dbConnect::dbConnection();
    date_default_timezone_set('Asia/Kathmandu');
    $date= date("Y-m-d h:i:sa");
    //$result1=mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Things to do data cannot be inserted");;
    if(!isset($_FILES['fileToUpload']) || $_FILES['fileToUpload']['error'] == UPLOAD_ERR_NO_FILE) {
      if(!isset($_FILES['coverToUpload']) || $_FILES['coverToUpload']['error'] == UPLOAD_ERR_NO_FILE) {
        $sql1="INSERT INTO todo SET aid='$aid',ausername='$ausername',ttitle='$ttitle',taddress='$taddress',tlocation='$tlocation',tdescription='$tdescription',tadded_date='$date',tkeyword='$tkeyword',tlatitude='$tlatitude',tlongitude='$tlongitude',tstatus='1'";
        $result1=mysqli_query($this->db,$sql1);
      }
      else {
        $target_dir = "../images/todo/";
        $db_dir="images/todo/";
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
            $sql1="INSERT INTO todo SET aid='$aid',ausername='$ausername',ttitle='$ttitle',timage2='$db',taddress='$taddress',tlocation='$tlocation',tdescription='$tdescription',tadded_date='$date',tkeyword='$tkeyword',tlatitude='$tlatitude',tlongitude='$tlongitude',tstatus='1'";
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
        $target_dir = "../images/todo/";
        $db_dir="images/todo/";
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

            $sql1="INSERT INTO todo SET aid='$aid',ausername='$ausername',ttitle='$ttitle',timage1='$db',taddress='$taddress',tlocation='$tlocation',tdescription='$tdescription',tadded_date='$date',tkeyword='$tkeyword',tlatitude='$tlatitude',tlongitude='$tlongitude',tstatus='1'";
            $result1=mysqli_query($this->db,$sql1);
          }
        }
      }
      else {
        $target_dir = "../images/todo/";
        $db_dir="images/todo/";
        $target_dir1 = "../images/todo/";
        $db_dir1="images/todo/";
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
              $sql1="INSERT INTO todo SET aid='$aid',ausername='$ausername',timage1='$db1',timage2='$db',ttitle='$ttitle',taddress='$taddress',tlocation='$tlocation',tdescription='$tdescription',tadded_date='$date',tkeyword='$tkeyword',tlatitude='$tlatitude',tlongitude='$tlongitude',tstatus='1'";
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

  //FUNCTION TO EXTRACT ALL THE THINGS TO DO
  public function getAllTodo()
  {
    dbConnect::dbConnection();
    $sql2="SELECT * FROM todo ORDER BY tid DESC";
    $result2=mysqli_query($this->db,$sql2);
     return $result2;
    // while($row=mysqli_fetch_array($result2))
    // {  $tstatus=$row['tstatus'];
    //
    //   $timage1=$row['timage1'];
    //   $timage2=$row['timage2'];
    //   echo"
    //   <tr>
    //   <td>".$row['tid']."</td>
    //
    //   <td><kbd>".$row['ausername']."</kbd></td>
    //   <td>".$row['tlocation']."</td>
    //   <td style='font-weight:bolder;text-transform:uppercase;'>".$row['ttitle']."</td>
    //
    //   <td>".substr($row['tdescription'],0,50).".............</td>
    //   <td><img src='../$timage1' style='height:80px;width:110px;' alt='First image'></td>
    //   <td>".$row['tadded_date']." </td>
    //   <td>".$row['tkeyword']."</td>
    //   <td>".$row['tlatitude']."</td>
    //   <td>".$row['tlongitude']."</td>
    //   <td>";
    //   switch($tstatus)
    //   {
    //     case '0':
    //     {
    //       echo "<kbd class='btn btn-xs btn-danger'>Disabled</kbd>";
    //       break;
    //     }
    //     case '1':
    //     {
    //       echo "<kbd class='btn btn-xs btn-success'>Enabled</kbd>";
    //       break;
    //     }
    //
    //   }
    //
    //   echo"</td>
    //
    //   <td>
    //   <a href='edit.php?action=edit&tid=".$row['tid']."&of=todo&sidebar=todo'> <button type='button' rel='tooltip' title='Edit Todo' class='btn btn-success btn-simple btn-xs'><i class='fa fa-edit'></i></button></a>
    //   <a href='delete.php?action=delete&tid=".$row['tid']."&of=todo'><button type='button' rel='tooltip' title='Delete Todo' class='btn btn-danger btn-simple btn-xs' id='delbutton'>
    //   <i class='fa fa-times'></i>
    //   </button></a></td>
    //
    //   ";
    //
    // }
  }

  //Function to delete todo
  public function deleteTodo($tid)
  {
    dbConnect::dbConnection();
    $sqlSel="SELECT * FROM todo where tid=$tid";
    $data=mysqli_query($this->db,$sqlSel);
    while($row=mysqli_fetch_array($data))
    {
      $low="../";
      $img=$low . $row["timage1"];
      $cimg=$low . $row["timage2"];
      unlink($cimg);
      unlink($img);
    }
    $sql3="DELETE from todo where tid=$tid";
    $data=mysqli_query($this->db,$sql3);
    if($data)
    {
      header('location: todo.php?mes=deleted&sidebar=todo');

    }
    else {
      echo "Error in deletion";
    }
  }



  public function editTodo($tid)
  {
    dbConnect::dbConnection();
    $sql3="SELECT * FROM todo where tid=$tid";
    $result3=mysqli_query($this->db,$sql3);
    while($row=mysqli_fetch_array($result3))
    {
      $tid=$row['tid'];
      $tlocation=$row['tlocation'];
      $ttitle=$row['ttitle'];
      $taddress=$row['taddress'];
      $tdescription=$row['tdescription'];
      $tstatus=$row['tstatus'];
      $tlatitude=$row['tlatitude'];
      $tlongitude=$row['tlongitude'];
      $tkeyword=$row['tkeyword'];
      $ausername=$row['ausername'];
      $timage1=$row['timage1'];
      switch($tstatus)
      {
        case '0':
        {
          $tstatus_name='Disabled';
          break;
        }
        case '1':
        {
          $tstatus_name='Enabled';
          break;
        }

      }
      echo "
      <div class='container-fluid'>
      <div class='row'>
      <div class='col-md-8'>
      <div class='card'>
      <div class='card-header' data-background-color='red'>
      <h4 class='title'>Edit Things to do</h4>
      <p class='category'>Complete the Things to do Details</p>
      </div>
      <div class='card-content'>
      <form method='POST' action='edit.php?action=edit&tid=".$row['tid']."&of=todo' enctype='multipart/form-data'>
      <div class='row'>
      <div class='col-md-5'>
      <div class='form-group label-floating'>
      <label class='control-label'>Todo Id (disabled)</label>
      <input type='text' class='form-control' value='".$tid."' name='tid' disabled>
      </div>
      </div>
      <div class='col-md-7'>
      <div class='form-group label-floating'>
      <label class='control-label'>Things to do(Title)</label>
      <input type='text' class='form-control' value='".$ttitle."' name='upd_ttitle'>
      </div>
      </div>
      </div>
      <div class='row'>
      <div class='col-md-6'>
      <div class='form-group label-floating'>
      <label class='control-label'>Address</label>
      <input type='text' class='form-control' value='".$taddress."' name='upd_taddress'>
      </div>
      </div>
      <div class='col-md-6'>
      <div class='form-group label-floating'>
      <label for='exampleFormControlSelect1'>Location</label>
      <select class='form-control' id='exampleFormControlSelect1' name='upd_tlocation' >
      <option value='$tlocation'>$tlocation</option>
      <option value='Kathmandu'>Kathmandu</option>
      <option value='Lalitpur'>Lalitpur</option>
      <option value='Bhaktapur'>Bhaktapur</option>
      <option value='Chitlang'>Chitlang</option>
      <option value='Pokhara'>Pokhara</option>
      <option value='Lumbini'>Lumbini</option>
      <option value='Ghandruk'>Ghandruk</option>

      </select>
      </div>
      </div>
      </div>



      <div class='row'>
      <div class='col-md-12'>
      <div class='form-group'>

      <div class='form-group label-floating'>
      <label class='control-label'>Describe about Place in brief</label>
      <textarea class='form-control' rows='3' name='upd_tdescription'>".$tdescription."</textarea>
      </div>
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

          <input type='text' class='gllpLatitude form-control' name='upd_tlatitude' value='$tlatitude'/>
      </div>
      <div class='col-md-5 '>
          <input type='text' class='gllpLongitude form-control' name='upd_tlongitude' value='$tlongitude'/>
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

      <div class='form-group col-md-6'>
      <label for='exampleFormControlSelect1'>Status</label>
      <select class='form-control' id='exampleFormControlSelect1' name='upd_tstatus'>
      <option value='$tstatus'>$tstatus_name</option>
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
      <img class='img' src='../$timage1' style='height:150px;'>
      </a>
      </div>
      <div class='content'>
      <h6 class='category text-gray'>".$taddress."</h6>
      <h4 class='card-title'>".$ttitle."</h4>
      <p class='card-content'>
      ".$tdescription."
      </p>
      <a href='' class='btn btn-default btn-round' disabled> By ".$ausername."</a>
      </div>

      </div>
      </div>
      </div>
      </div>
      ";
    }
  }
  public function updateTodo($tid,$upd_ttitle,$upd_taddress,$upd_tlocation,$upd_tdescription,$upd_tlatitude,$upd_tlongitude,$upd_tstatus)
  {
    dbConnect::dbConnection();
    // echo "hello";
    $sql4="UPDATE todo SET ttitle='$upd_ttitle',taddress='$upd_taddress',tlocation='$upd_tlocation',tdescription='$upd_tdescription',tlatitude='$upd_tlatitude',tlongitude='$upd_tlongitude',tstatus='$upd_tstatus' WHERE tid=$tid";
    $update=mysqli_query($this->db,$sql4);
    if($update)
    {
      @header('location: todo.php?mes=updated&sidebar=todo');

      //echo"fudge";
    }
    else
    {
      echo "Update Failed!";
    }
    if(!isset($_FILES['fileToUpload']) || $_FILES['fileToUpload']['error'] == UPLOAD_ERR_NO_FILE) {
      if(!isset($_FILES['coverToUpload']) || $_FILES['coverToUpload']['error'] == UPLOAD_ERR_NO_FILE) {
        $sql4="UPDATE todo SET ttitle='$upd_ttitle',taddress='$upd_taddress',tlocation='$upd_tlocation',tdescription='$upd_tdescription',tlatitude='$upd_tlatitude',tlongitude='$upd_tlongitude',tstatus='$upd_tstatus' WHERE tid=$tid";
        $update=mysqli_query($this->db,$sql4);
      }
      else {
        //  echo"entererd";
        $target_dir = "../images/todo/";
        $target_file = $target_dir . date("d-m-Y")."-".time() . basename($_FILES["coverToUpload"]["name"]);
        $uploadOk1 = 1;
        $imageName=basename($_FILES["coverToUpload"]["name"]);
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        $db_dir="images/todo/";
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
            $sqldeletedb="SELECT * FROM todo where tid=$tid";
            $data=mysqli_query($this->db,$sqldeletedb);
            while($row=mysqli_fetch_array($data))
            {
              $low="../";
              $con=$low . $row["timage2"];
              unlink($con);
            }
            $sql4="UPDATE todo SET ttitle='$upd_ttitle',taddress='$upd_taddress',tlocation='$upd_tlocation',timage2='$db',tdescription='$upd_tdescription',tlatitude='$upd_tlatitude',tlongitude='$upd_tlongitude',tstatus='$upd_tstatus' WHERE tid=$tid";
            $update=mysqli_query($this->db,$sql4);
            if($update)
            {
              @header('location: todo.php?mes=updated&sidebar=todo');

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
        $target_dir = "../images/todo/";
        $db_dir="images/todo/";
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
            $sqldeletedb="SELECT * FROM todo where tid=$tid";
            $data=mysqli_query($this->db,$sqldeletedb);
            while($row=mysqli_fetch_array($data))
            {
              $low="../";
              $con=$low . $row["timage1"];
              unlink($con);
            }

            $sql4="UPDATE todo SET ttitle='$upd_ttitle',taddress='$upd_taddress',tlocation='$upd_tlocation',timage1='$db',tdescription='$upd_tdescription',tlatitude='$upd_tlatitude',tlongitude='$upd_tlongitude',tstatus='$upd_tstatus' WHERE tid=$tid";
            $update=mysqli_query($this->db,$sql4);
      if($update)
    {
      @header('location: todo.php?mes=updated&sidebar=todo');

      //echo"fudge";
    }
            //  unlink($deleteFile);
          }
        }
      }
      else {
        $target_dir = "../images/todo/";
        $db_dir="images/todo/";
        $target_dir1 = "../images/todo/";
        $db_dir1="images/todo/";
        $target_file = $target_dir .date("d-m-Y")."-".time(). basename($_FILES["coverToUpload"]["name"]);
        $deleteFile=$target_file;
        $db=$db_dir .date("d-m-Y")."-".time(). basename($_FILES["coverToUpload"]["name"]);
        $target_file1 = $target_dir1 .date("d-m-Y")."-".time(). basename($_FILES["fileToUpload"]["name"]);
        $deleteFile1=$target_file1;
        $db1=$db_dir1.date("d-m-Y")."-".time().  basename($_FILES["fileToUpload"]["name"]);
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
              $sqldeletedb="SELECT * FROM todo where tid=$tid";
              $data=mysqli_query($this->db,$sqldeletedb);
              while($row=mysqli_fetch_array($data))
              {
                $low="../";
                $img=$low . $row["timage1"];
                $con=$low . $row["timage2"];
                unlink($con);
              }
              $sql4="UPDATE todo SET ttitle='$upd_ttitle',timage1='$db',timage2='$db1',taddress='$upd_taddress',tlocation='$upd_tlocation',tdescription='$upd_tdescription',tlatitude='$upd_tlatitude',tlongitude='$upd_tlongitude',tstatus='$upd_tstatus' WHERE tid=$tid";
              $update=mysqli_query($this->db,$sql4);
              if(update)
              {
                // unlink($deleteFile1);
                // unlink($deleteFile);
                @header('location: todo.php?mes=updated&sidebar=todo');
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
  public function publishtodo($tid,$tstatus)
    {

      dbConnect::dbConnection();
      if($tstatus=='1')
      {
        $sql4="UPDATE todo SET tstatus='0' WHERE tid=$tid";
      }
      else {
        $sql4="UPDATE todo SET tstatus='1' WHERE tid=$tid";
      }
      $result1=mysqli_query($this->db,$sql4);
      if($result1)
      {
        header('Location: '.$_SERVER['PHP_SELF'].'?sidebar=todo');

      }

    }

}
