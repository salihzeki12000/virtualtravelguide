<?php
  include_once('admin/class/dbconfig.php');

class fIndex extends dbConnect
{
  public function displayPackage()
  {
    dbConnect::dbConnection();
    $sql="SELECT * FROM package where pstatus='1' ORDER BY pcounter DESC LIMIT 0,8";
    $result=mysqli_query($this->db,$sql);
    return $result;
  }
  public function displayVehicle()
  {
    dbConnect::dbConnection();
    $sql12="SELECT * FROM vehicle where vstatus='1' ORDER BY vcounter DESC LIMIT 0,8";
    $result12=mysqli_query($this->db,$sql12);
    return $result12;
  }
  public function fgetPopularHotel()
  {
    dbConnect::dbConnection();
    $sql="SELECT * FROM admin WHERE vtype='hotel' ORDER BY id LIMIT 0,8";

    $result=mysqli_query($this->db,$sql);
    return $result;
  }

  public function fgetminroom($hotelid)
  {
    dbConnect::dbConnection();
    $min="SELECT MIN(rhotelcost) as minimum FROM room WHERE hid='$hotelid'";
    $res=mysqli_query($this->db,$min);
    return $res;
  }
  public function searchPackageIndex($query)
  {
    dbConnect::dbConnection();
    $sql6="SELECT * FROM package Where pname LIKE '%".$query."%' || plocation LIKE '%".$query."%' || pcost LIKE '%".$query."%' || pkeyword LIKE '%".$query."%'  ORDER BY pcounter DESC LIMIT 0,4";
    //$sql6="SELECT * FROM package INNER JOIN HOTEL WHERE package.pname LIKE '%".$query."%' || package.plocation LIKE '%".$query."%' ";
    $result6=mysqli_query($this->db,$sql6);
    return $result6;
  }
  public function searchHotelIndex($query)
  {
    dbConnect::dbConnection();
    $sql8="SELECT * FROM admin WHERE (vtype='hotel' && company_name LIKE '%".$query."%') || (vtype='hotel' && location LIKE '%".$query."%') ORDER BY id LIMIT 0,4";
    //$sql6="SELECT * FROM package INNER JOIN HOTEL WHERE package.pname LIKE '%".$query."%' || package.plocation LIKE '%".$query."%' ";
    $result8=mysqli_query($this->db,$sql8);
    return $result8;
  }
  public function searchTodoIndex($query)
  {
    dbConnect::dbConnection();
    $sql9="SELECT * FROM todo WHERE ttitle LIKE '%".$query."%' || tlocation LIKE '%".$query."%' || tkeyword LIKE '%".$query."%' ORDER BY tcounter LIMIT 0,4";
    //$sql6="SELECT * FROM package INNER JOIN HOTEL WHERE package.pname LIKE '%".$query."%' || package.plocation LIKE '%".$query."%' ";
    $result9=mysqli_query($this->db,$sql9);
    return $result9;
  }
  public function searchBlogIndex($query)
  {
    dbConnect::dbConnection();
    $sql8="SELECT * FROM blog WHERE btitle LIKE '%".$query."%' || blocation LIKE '%".$query."%' || bkeyword LIKE '%".$query."%' ORDER BY bcounter LIMIT 0,4";
    //$sql6="SELECT * FROM package INNER JOIN HOTEL WHERE package.pname LIKE '%".$query."%' || package.plocation LIKE '%".$query."%' ";
    $result8=mysqli_query($this->db,$sql8);
    return $result8;
  }
  public function searchVehicleIndex($query)
  {
    dbConnect::dbConnection();
    $sql11="SELECT * FROM vehicle WHERE vtitle LIKE '%".$query."%' || vkeyword LIKE '%".$query."%' ORDER BY vcounter LIMIT 0,4";
    //$sql6="SELECT * FROM package INNER JOIN HOTEL WHERE package.pname LIKE '%".$query."%' || package.plocation LIKE '%".$query."%' ";
    $result11=mysqli_query($this->db,$sql11);
    return $result11;
  }
  public function fgetPopularVehicle()
  {
    dbConnect::dbConnection();
    $sql="SELECT * FROM vehicle WHERE vtype='rental' ORDER BY vid LIMIT 0,8";

    $result=mysqli_query($this->db,$sql);
    return $result;
  }
  public function fgetAllVehicle()
  {
    dbConnect::dbConnection();
    $sql="SELECT * FROM vehicle WHERE vstatus='1'";

    $result=mysqli_query($this->db,$sql);
    return $result;
  }
}
