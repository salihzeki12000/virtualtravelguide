<?php
include_once('admin/class/dbconfig.php');

class fPackage extends dbConnect
{
  /*FUNCTION TO GET ALL THE HOTELS IN THE FRONT END WHICH HAS STATUS 1*/
  public function fgetAllPackage()
  {
    dbConnect::dbConnection();
    $sql="SELECT * FROM package where pstatus='1' ";

    $result=mysqli_query($this->db,$sql);
    return $result;
  }
  public function fgetAllVendor($vendorid)
  {
    dbConnect::dbConnection();
    $sql1="SELECT * FROM admin where id='$vendorid' ";
    $result1=mysqli_query($this->db,$sql1);
    return $result1;
  }

  public function add_counter($pid)
  {

    $sql="UPDATE `package` set `pcounter`= pcounter + 1 WHERE pid=='$pid'";
    $result=mysqli_query($this->db,$sql);
  }
  public function updateCounter($pid)
  {

    $sql="UPDATE `package` set `pcounter`= `pcounter + 1` WHERE pid=='$pid'";
    $result=mysqli_query($this->db,$sql);

  }
  public function searchpackage($pcategory)
  {
    dbConnect::dbConnection();
    $sql6="SELECT * FROM package where pcategory='$pcategory'";
    $result6=mysqli_query($this->db,$sql6);
    return $result6;
  }
  public function fgetKeywordPackage($pid)
  {
    dbConnect::dbConnection();
    $sql6="SELECT * FROM package WHERE pid='$pid' ";
    $result6=mysqli_query($this->db,$sql6);
    while($row=mysqli_fetch_array($result6))
    {


      $string=$row['pkeyword'];


    }

    $separator=",";
    $elements = explode($separator, $string);
    foreach($elements as $element){
      echo  " <li><a href='../virtualtravelguide?query=$element'> ".$element."</a></li>";
    }}
}
