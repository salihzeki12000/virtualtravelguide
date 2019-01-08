<?php
// include_once('include/dbconfig.php');
@include_once('session.php');
include_once('dbconfig.php');

Class Shop extends dbConnect
{
  public function getAllProduct($sesid)
  {
    dbConnect::dbConnection();
    $type=$_SESSION['admintype'];
    if($type == 1)
    {
      $sql="SELECT * FROM product  ORDER BY prid DESC";
    }
    else {
      $sql="SELECT * FROM product WHERE aid='$sesid' ORDER BY prid DESC";
    }

    $result=mysqli_query($this->db,$sql);
      return $result;
    // while($row=mysqli_fetch_array($result))
    // {
    //   if($row['prstatus']==1)
    //   {
    //     $status="Enabled";
    //   }
    //   else {
    //     $status="Disabled";
    //   }
    //  //$hid=$row['hid'];
    //   echo"
    //   <tr>
    //     <td>".$row['prid']."</td>
    //     <td>".$row['prname']."</td>
    //    <td>".$row['prcategory']."</td>
    //     <td>".$row['prgender']."</td>
    //     <td>".$row['prbrand']."</td>
    //      <td>".$row['prcost']."</td>
    //      <td>".$row['prquantity']."</td>
    //      <td>".$row['prdescription']."</td>
    //      <td>".$row['prcolor']."</td>
    //       <td>".$row['psize']."</td>
    //     <td><img src='../".$row['primg1']."' style='height:80px;width:120px;' alt='image'></td>
    //       <td><img src='../".$row['primg2']."' style='height:80px;width:120px;' alt='image'></td>
    //       <td>".$status."</td>
    //
    //
    //     <td>
    //                   <a href='edit.php?action=edit&prid=".$row['prid']."&of=shop&sidebar=shop'> <button type='button' rel='tooltip' title='Edit Room' class='btn btn-success btn-simple btn-xs'><i class='fa fa-edit'></i></button></a>
    //                 <a href='delete.php?action=delete&prid=".$row['prid']."&of=shop'><button type='button' rel='tooltip' title='Delete Room' class='btn btn-danger btn-simple btn-xs' id='delbutton'>
    //                     <i class='fa fa-times'></i>
    //                 </button></a>
    //                 </td>
    //                 </tr>
    //     ";
    // }
  }

  public function createProduct($prname,$prcategory,$prgender,$prbrand,$prcost,$prdescription,$prcolor,$prquantity,$psize)
  {
    $aid=$_SESSION['id'];
    dbConnect::dbConnection();
    if(!isset($_FILES['fileToUpload']) || $_FILES['fileToUpload']['error'] == UPLOAD_ERR_NO_FILE) {
      if(!isset($_FILES['coverToUpload']) || $_FILES['coverToUpload']['error'] == UPLOAD_ERR_NO_FILE) {
        $sql1="INSERT INTO product SET  prname='$prname', prcategory='$prcategory',prcolor='$prcolor',prgender='$prgender',prbrand='$prbrand',prcost='$prcost',prdescription='$prdescription',prstatus='0',psize='$psize',prquantity='$prquantity',aid='$aid'";
        $result1=mysqli_query($this->db,$sql1);
      }
      else {
        $target_dir = "../images/ecommerce/";
        $db_dir="images/ecommerce/";
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
              $sql2="INSERT INTO product SET  prname='$prname', prcategory='$prcategory',prcolor='$prcolor',prgender='$prgender',prbrand='$prbrand',prcost='$prcost',prdescription='$prdescription',prstatus='0',psize='$psize',prquantity='$prquantity',primg2='$db',aid='$aid'";
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
        $target_dir = "../images/ecommerce/";
        $db_dir="images/ecommerce/";
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

            $sql2="INSERT INTO product SET  prname='$prname', prcategory='$prcategory',prcolor='$prcolor',prgender='$prgender',prbrand='$prbrand',prcost='$prcost',prdescription='$prdescription',prstatus='0',psize='$psize',prquantity='$prquantity',primg1='$db',aid='$aid'";
            $result1=mysqli_query($this->db,$sql2);
          }
        }
      }
      else {
        $target_dir = "../images/ecommerce/";
        $db_dir="images/ecommerce/";
          $target_dir1 = "../images/ecommerce/";
          $db_dir1="images/ecommerce/";
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
                      $sql2="INSERT INTO product SET  prname='$prname', prcategory='$prcategory',prcolor='$prcolor',prgender='$prgender',prbrand='$prbrand',prcost='$prcost',prdescription='$prdescription',prstatus='0',psize='$psize',prquantity='$prquantity',primg1='$db1',primg2='$db',aid='$aid'";
                    $result1=mysqli_query($this->db,$sql2);

              }
          }
          else {
            echo "Sorry, there was an error uploading your file.";
          }
        }
      }
    }
  }

  public function deleteProduct($prid)
  {
    dbConnect::dbConnection();
    $sqlSel="SELECT * FROM product where prid=$prid";
    $data=mysqli_query($this->db,$sqlSel);
    while($row=mysqli_fetch_array($data))
    {
      $low="../";
      $img=$low . $row["primg1"];
      $cimg=$low . $row["primg2"];


      unlink($cimg);
      unlink($img);
    }
    $sql2="DELETE from product where prid=$prid";
    $delete=mysqli_query($this->db,$sql2);
    if($delete)
    {
      header('location: shop.php?mes=deleted&sidebar=shop');
    }
    else {
      echo "Error in Hotel deletion";
    }
  }


  public function editShop($prid)
  {
    $admintype=$_SESSION['admintype'];
    dbConnect::dbConnection();
    $sql3="SELECT * FROM product where prid=$prid";
    $result3=mysqli_query($this->db,$sql3);
    while($row=mysqli_fetch_array($result3))
    { //($prname,$prcategory,$prgender,$prbrand,$prcost,$prdescription,$prquantity,$psize)
              $prname=$row['prname'];
              $prcategory=$row['prcategory'];
              $prgender=$row['prgender'];
              $prbrand=$row['prbrand'];
              $prcost=$row['prcost'];
              $prdescription=$row['prdescription'];
              $prstatus=$row['prstatus'];
              $psize=$row['psize'];
              $prquantity=$row['prquantity'];
              $prcolor=$row['prcolor'];


                            switch($prstatus)
                            {
                              case 0:
                              {
                                $status='Disabled';
                                break;
                              }
                              case 1:
                              {
                                $status='Enabled';
                                break;
                              }
                            }
              echo "
              <div class='container-fluid'>
                  <div class='row'>
                      <div class='col-md-8'>
                          <div class='card'>
                              <div class='card-header' data-background-color='red'>
                                  <h4 class='title'>Edit Product</h4>
                                  <p class='category'>Complete product profile</p>
                              </div>
                              <div class='card-content'>
                  <form method='POST' action='edit.php?action=edit&prid=".$row['prid']."&of=shop' enctype='multipart/form-data'>
                      <div class='row'>
                          <div class='col-md-5'>
                              <div class='form-group label-floating'>
                                  <label class='control-label'>Product Id(disabled)</label>
                                  <input type='text' class='form-control' value='".$prid."' name='prid' disabled>
                              </div>
                          </div>
                          <div class='col-md-7'>
                              <div class='form-group label-floating'>
                                  <label class='control-label'>Name</label>
                                  <input type='text' class='form-control' value='".$prname."' name='prname'>
                              </div>
                          </div>
                        </div>
                        <div class='row'>
                        <div class='col-md-6'>
                            <div class='form-group label-floating'>
                                <label class='control-label'>Color</label>
                                <input type='text' class='form-control' value='".$prcolor."' name='prcolor'>
                            </div>
                        </div>
                            <div class='col-md-6'>
                                <div class='form-group label-floating'>
                                    <label class='control-label'>Brand</label>
                                    <input type='text' class='form-control' value='".$prbrand."' name='prbrand'>
                                </div>
                            </div>
                        </div>
                        <div class='row'>

                        <div class='col-md-4'>
                            <div class='form-group label-floating'>
                            <label for='exampleFormControlSelect1'>Category</label>
                            <select class='form-control' id='exampleFormControlSelect1' name='prcategory' value='".$prcategory."'>
                            <option value='".$prcategory."'>$prcategory</option>
                            <option value='Jacket'>Jacket</option>
                            <option value='Pant'>Pant</option>

                             <option value='Bag'>Bag</option>
                            <option value='Shoe'>Shoe</option>

                                 <option value='Equipments'>Equipments</option>

                            </select>
                            </div>
                        </div>
                        <div class='col-md-4'>
                            <div class='form-group label-floating'>
                            <label for='exampleFormControlSelect1'>Gender</label>
                            <select class='form-control' id='exampleFormControlSelect1' name='prgender' value='".$prgender."'>
                              <option value='$prgender'>$prgender</option>
                              <option value='Male'>Male</option>
                              <option value='Female'>Female</option>
                              <option value='Unisex'>Unisex</option>

                            </select>
                            </div>
                        </div>
                        <div class='col-md-4'>
                            <div class='form-group label-floating'>
                            <label for='exampleFormControlSelect1'>Size</label>
                            <select class='form-control' id='exampleFormControlSelect1' name='psize' value='".$psize."'>
                              <option value='$psize'>$psize</option>
                              <option value='-'>-</option>
                              <option value='xxl'>XXL</option>
                               <option value='xl'>XL</option>
                                <option value='l'>L</option>
                                 <option value='35'>35</option>
                                  <option value='36'>36</option>
                                   <option value='37'>37</option>
                                    <option value='38'>38</option>
                                     <option value='39'>39</option>
                                      <option value='40'>40</option>
                                       <option value='41'>41</option>
                                        <option value='42'>42</option>
                                         <option value='43'>43</option>
                                          <option value='44'>44</option>
                                           <option value='45'>45</option>
                                            <option value='46'>46</option>
                                            <option value='5'>5</option>
                                            <option value='6'>6</option>
                                            <option value='7'>7</option>
                                            <option value='8'>8</option>
                                            <option value='9'>9</option>
                                            <option value='10'>10</option>
                                            <option value='11'>11</option>
                                            <option value='12'>12</option>
                                            <option value='13'>13</option>
                                            <option value='14'>14</option>

                            </select>
                            </div>
                        </div>
                        </div>
                      <div class='row'>
                          <div class='col-md-12'>
                              <div class='form-group label-floating'>
                                  <label class='control-label'>Description</label>
                                  <input type='text' class='form-control' value='".$prdescription."' name='prdescription'>
                              </div>
                          </div>
                      </div>
                      <div class='row'>
                          <div class='col-md-6'>
                              <div class='form-group label-floating'>
                                  <label class='control-label'>Cost</label>
                                  <input type='text' class='form-control' value='".$prcost."' name='prcost'>
                              </div>
                          </div>
                          <div class='col-md-6'>
                              <div class='form-group label-floating'>
                                  <label class='control-label'>Quantity</label>
                                  <input type='text' class='form-control' value='".$prquantity."' name='prquantity'>
                              </div>
                          </div>
                      </div>
                      <div class='row'>
                      <div class='col-md-6'>
                          <div class='form-group label-floating'>
                              <label class='control-label'>Change image</label>
                          </div>
                        <input type='file' class='form-control-file' name='fileToUpload' id='fileToUpload'>
                      </div>
                      <div class='col-md-6'>
                          <div class='form-group label-floating'>
                              <label class='control-label'>Change image</label>
                          </div>
                        <input type='file' class='form-control-file' name='coverToUpload' id='coverToUpload'>
                      </div>
                      </div>



                          <div class='row'>
                          <div class='col-md-4'>
                              <div class='form-group label-floating'>
                             ";

                               if($admintype==1)
                              { echo"
                                  <label for='exampleFormControlSelect1'>Status</label>
                                <select class='form-control' id='exampleFormControlSelect1' name='prstatus' value='".$prstatus."'>
                                  <option value='$prstatus'>$status</option>
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

                    </div>
                  </div>"; }
                                  else { echo "

                                    <input type ='hidden' name='prstatus' value='".$prstatus."'>
                                    </div>
                                </div>


                            <button type='submit' class='btn btn-danger pull-right'>Update </button>
                            <div class='clearfix'></div>
                        </form>
                                  </div>
                              </div>
                          </div>

                      </div>
                    </div> ";
                                  }

    }
  }
  public function updateProduct($prid,$prname,$prcolor,$prcategory,$prgender,$prbrand,$prcost,$prdescription,$prstatus,$prquantity,$psize)
  {
    dbConnect::dbConnection();
  $aid=$_SESSION['id'];
          if(!isset($_FILES['fileToUpload']) || $_FILES['fileToUpload']['error'] == UPLOAD_ERR_NO_FILE) {
            if(!isset($_FILES['coverToUpload']) || $_FILES['coverToUpload']['error'] == UPLOAD_ERR_NO_FILE) {
              $sql1="UPDATE product SET prname='$prname',prcolor='$prcolor', prcategory='$prcategory',prgender='$prgender',prbrand='$prbrand',prcost='$prcost',prdescription='$prdescription',prstatus='$prstatus',psize='$psize',prquantity='$prquantity' WHERE prid=$prid";
              $result1=mysqli_query($this->db,$sql1);
              if($result1)
              {
               @header('location: shop.php?sidebar=shop');

              //echo"fudge";
              }
              else
              {
              echo "Update Failed!";
              }
            }
            else {
            //  echo"entererd";
              $target_dir = "../images/ecommerce/";
              $target_file = $target_dir . date("d-m-Y")."-".time() . basename($_FILES["coverToUpload"]["name"]);
              $uploadOk1 = 1;
              $imageName=basename($_FILES["coverToUpload"]["name"]);
              $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
              $db_dir="images/ecommerce/";
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
                  $sqldeletedb="SELECT * FROM product where prid=$prid";
                  $data=mysqli_query($this->db,$sqldeletedb);
                  while($row=mysqli_fetch_array($data))
                  {
                    $low="../";
                    $con=$low . $row["primg2"];
                    @unlink($con);
                  }
                  $sql2="UPDATE product SET prname='$prname',primg2='$db',prcolor='$prcolor',prcategory='$prcategory',prgender='$prgender',prbrand='$prbrand',prcost='$prcost',prdescription='$prdescription',prstatus='$prstatus',psize='$psize',prquantity='$prquantity' WHERE prid=$prid";
                  $result2=mysqli_query($this->db,$sql2);
                  if($result2)
                  {
                   @header('location: shop.php?sidebar=shop');

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
              $target_dir = "../images/ecommerce/";
              $db_dir="images/ecommerce/";
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
                  $sqldeletedb="SELECT * FROM product where prid=$prid";
                  $data=mysqli_query($this->db,$sqldeletedb);
                  while($row=mysqli_fetch_array($data))
                  {
                    $low="../";
                    $con=$low . $row["primg1"];
                    unlink($con);
                  }
                  $sql1="UPDATE product SET prname='$prname',primg1='$db',prcolor='$prcolor',prcategory='$prcategory',prgender='$prgender',prbrand='$prbrand',prcost='$prcost',prdescription='$prdescription',prstatus='$prstatus',psize='$psize',prquantity='$prquantity' WHERE prid=$prid";
                  $result1=mysqli_query($this->db,$sql1);
                  if($result1)
                  {
                  @header('location: shop.php?sidebar=shop');

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
              $target_dir = "../images/ecommerce/";
              $db_dir="images/ecommerce/";
                $target_dir1 = "../images/ecommerce/";
                $db_dir1="images/ecommerce/";
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
                          $sqldeletedb="SELECT * FROM product where prid=$prid";
                          $data=mysqli_query($this->db,$sqldeletedb);
                          while($row=mysqli_fetch_array($data))
                          {
                            $low="../";
                            $img=$low . $row["primg1"];
                            $con=$low . $row["primg2"];
                            unlink($con);
                          }
                          $sql4="UPDATE product SET prname='$prname',primg1='$db1',prcolor='$prcolor',primg2='$db',prcategory='$prcategory',prgender='$prgender',prbrand='$prbrand',prcost='$prcost',prdescription='$prdescription',prstatus='$prstatus',psize='$psize',prquantity='$prquantity' WHERE prid=$prid";
                          $result1=mysqli_query($this->db,$sql4);
                          if($result1)
                          {
                           @header('location: shop.php?sidebar=shop');

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

          }
  }

  public function getAllProductDetails()
  {
    dbConnect::dbConnection();
    $sql="SELECT * FROM product_order ORDER BY prid ASC";
    $result=mysqli_query($this->db,$sql);
    return $result;
    }
    public function productName($id)
    {
      dbConnect::dbConnection();
      $sql="SELECT * FROM product WHERE prid ='$id' ";
      $result=mysqli_query($this->db,$sql);
      while($row=mysqli_fetch_array($result))
      {
        echo $row['prname'];
      }
      }

      public function customerName($id)
      {
        dbConnect::dbConnection();
        $sql="SELECT * FROM user WHERE cid ='$id' ";
        $result=mysqli_query($this->db,$sql);
        while($row=mysqli_fetch_array($result))
        {
          echo $row['cfirst_name'].$row['clast_name'];
        }
        }

    public function getAllVendorUser()
    {
      dbConnect::dbConnection();
      $id=$_SESSION['id'];
      $sql1="SELECT * FROM product_order where product_order.prid IN (SELECT prid FROM product WHERE aid = '$id')";

      $result1=mysqli_query($this->db,$sql1);
      return $result1;
      }

      public function cname($id)
      {
        dbConnect::dbConnection();

        $sql1="SELECT * FROM user where cid='$id'";
        $result1=mysqli_query($this->db,$sql1);
        while($a=mysqli_fetch_array($result1))
        {
          echo $a['cfirst_name'];
        }
        //return $result1;
        }

        public function pname($id)
        {
          dbConnect::dbConnection();

          $sql1="SELECT * FROM product where prid='$id'";
          $result1=mysqli_query($this->db,$sql1);
          while($a=mysqli_fetch_array($result1))
          {
            echo $a['prname'];
          }
          //return $result1;
          }
          public function cdet($id)
          {
            dbConnect::dbConnection();

            $sql1="SELECT * FROM user where cid='$id'";
            $result1=mysqli_query($this->db,$sql1);
            while($a=mysqli_fetch_array($result1))
            {
              echo "<td>". $a['ccontact']. "</td>";
              echo "<td>" .$a['caddress']. "</td>";
            }
            //return $result1;
            }

            public function publishshop($prid,$prstatus)
        {

          dbConnect::dbConnection();
          if($prstatus=='1')
          {
            $sql4="UPDATE product SET prstatus='0' WHERE prid=$prid";
          }
          else {
            $sql4="UPDATE product SET prstatus='1' WHERE prid=$prid";
          }
          $result1=mysqli_query($this->db,$sql4);
          if($result1)
          {
            header('Location: '.$_SERVER['PHP_SELF'].'?sidebar=product');

          }

        }

        public function updateStatus($prid,$upd_status)
    {

      dbConnect::dbConnection();

      $sql4="UPDATE product_order SET pr_orderstatus='$upd_status' WHERE id=$prid";
      $result1=mysqli_query($this->db,$sql4);
      if($result1)
      {
        header('Location: uservendor.php?sidebar=product');

      }

    }

  }

?>
