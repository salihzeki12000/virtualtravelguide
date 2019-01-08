<?php
  include_once('admin/class/dbconfig.php');

class fvehicle extends dbConnect
{
  /*FUNCTION TO GET ALL THE HOTELS IN THE FRONT END WHICH HAS STATUS 1*/
  public function fgetAllvehicle()
  {
      dbConnect::dbConnection();
      $sql="SELECT * FROM vehicle where vstatus='1'";
      $result=mysqli_query($this->db,$sql);
      return $result;
      }
  public function fvehicleDetail()
  {
    dbConnect::dbConnection();

    $sql2="SELECT * FROM vehicle";
    $result2=mysqli_query($this->db,$sql2);
    while($row=mysqli_fetch_array($result2))
    {

      $image1=$row['vimg1'];
  echo "

  ";
    }
  }
  public function searchvehicle($category)
  {
    dbConnect::dbConnection();
    $sql6="SELECT * FROM vehicle where vtype='$category'";
    $result6=mysqli_query($this->db,$sql6);
    return $result6;
  }
  public function vendordetail($vendorid)
  {
    dbConnect::dbConnection();
    $sql12="SELECT *  FROM admin where id='$vendorid'";
    $result12=mysqli_query($this->db,$sql12);
    return $result12;

  }
  public function fgetKeywordVehicle($vid)
  {
    dbConnect::dbConnection();
    $sql6="SELECT * FROM vehicle WHERE vid='$vid' ";
    $result6=mysqli_query($this->db,$sql6);
    while($row=mysqli_fetch_array($result6))
    {


      $string=$row['vkeyword'];


    }

    $separator=",";
    $elements = explode($separator, $string);
    foreach($elements as $element){
      echo  " <li><a href='../virtualtravelguide?query=$element'> ".$element."</a></li>";
    }}
}
