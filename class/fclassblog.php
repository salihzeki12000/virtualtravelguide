<?php
include_once('admin/class/dbconfig.php');

class fBlog extends dbConnect
{
  /*FUNCTION TO GET ALL THE BLOG IN THE FRONT END WHICH HAS STATUS 1*/
  public function fgetAllBlog()
  {
    dbConnect::dbConnection();
    $sql="SELECT * FROM blog where bstatus='1' ORDER BY bid DESC";
    $result=mysqli_query($this->db,$sql);
    return $result;

  }
  public function fgetBlog($bid)
  {
    dbConnect::dbConnection();
    $sql1="SELECT * FROM blog where bstatus='1' && bid='$bid'";
    $result1=mysqli_query($this->db,$sql1);
    return $result1;

  }

  public function getLocation()
  {
    dbConnect::dbConnection();
    $sql="SELECT * FROM location ORDER BY lid";
    $result=mysqli_query($this->db,$sql);
    return $result;
  }

  public function createBlog($custid,$btitle,$blocation,$bdescription,$bkeyword)
  {
    dbConnect::dbconnection();
    date_default_timezone_set('Asia/Kathmandu');
    $date= date("Y-m-d h:i:sa");
    if(!isset($_FILES['fileToUpload']) || $_FILES['fileToUpload']['error'] == UPLOAD_ERR_NO_FILE) {


      echo"File not  found";
    }

    else {
      $target_dir = "images/blog/";
      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
      $db_dir="images/blog/";
      $db=$db_dir . basename($_FILES["fileToUpload"]["name"]);
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
          // $sqldel="SELECT * FROM admin where id=$aid";
          // $result=  mysqli_query($this->db,$sqldel);
          // while($row=mysqli_fetch_array($result))
          // {
          //   unlink($row["image"]);
          // }

          // $a=basename( $_FILES["fileToUpload"]["name"]);

          $sql1="INSERT INTO blog SET btitle='$btitle',bdescription='$bdescription',blocation='$blocation',bdate='$date',bimg='$db',bkeyword='$bkeyword',bstatus='1',cid='$custid'";
          $result=mysqli_query($this->db,$sql1)or die(mysqli_connect_errno()."data cannot be inserted");
          if($result)
          {
            echo "<script> alert('Blog successfully Posted!');</script>";
          }
        } else {
          echo "Sorry, there was an error uploading your file";
        }
      }
    }
  }
  public function fgetrecentBlog()
  {
    dbConnect::dbConnection();
    $sql6="SELECT * FROM blog where bstatus='1' ORDER BY bid DESC LIMIT 0,3";
    $result6=mysqli_query($this->db,$sql6);
    return $result6;

  }
  public function add_counter($bid)
  {

    $sql="UPDATE `blog` set `bcounter`= bcounter+1 WHERE bid=$bid";
    mysqli_query($this->db,$sql);
  }
  public function fgetPopularBlog()
  {
    dbConnect::dbConnection();
    $sql7="SELECT * FROM blog where bstatus='1' ORDER BY bcounter DESC LIMIT 0,3";
    $result7=mysqli_query($this->db,$sql7);
    return $result7;

  }
  public function searchblog($query)
  {
    dbConnect::dbConnection();
    $sql6="SELECT * FROM blog WHERE btitle LIKE '%".$query."%'   ";
    $result6=mysqli_query($this->db,$sql6);
    return $result6;
  }
  public function fgetUserDetail($userid)
  {
    dbConnect::dbConnection();
    $sql10="SELECT *  FROM user where cid='$userid'";
    $result10=mysqli_query($this->db,$sql10);
    return $result10;

  }
  public function fgetKeywordBlog($bid)
  {
    dbConnect::dbConnection();
    $sql6="SELECT * FROM blog WHERE bid='$bid' ";
    $result6=mysqli_query($this->db,$sql6);
    while($row=mysqli_fetch_array($result6))
    {


      $string=$row['bkeyword'];


    }

    $separator=",";
    $elements = explode($separator, $string);
    foreach($elements as $element){
      echo  " <li><a href='../virtualtravelguide?query=$element'> ".$element."</a></li>";
    }}
}
