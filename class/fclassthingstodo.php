<?php
include_once('admin/class/dbconfig.php');

class fTodo extends dbConnect
{
  /*FUNCTION TO GET ALL THE Thingstodo  IN THE FRONT END WHICH HAS STATUS 1*/
  public function fgetAllTodo()
  {
    dbConnect::dbConnection();
    $sql="SELECT * FROM todo where tstatus='1' ORDER BY tid DESC";
    $result=mysqli_query($this->db,$sql);
    return $result;

  }
  // public function fgetPopularTodo()
  // {
  //     dbConnect::dbConnection();
  //     $sql1="SELECT * FROM todo where tstatus='1' ORDER BY tid DESC LIMIT 0, 2";
  //     $result1=mysqli_query($this->db,$sql1);
  //     return $result1;
  //
  //   }

  public function fgetTodo($tid)
  {
    dbConnect::dbConnection();
    $sql1="SELECT * FROM todo where tstatus='1' && tid='$tid'";
    $result1=mysqli_query($this->db,$sql1);
    return $result1;

  }

  public function fgetSimilarTodo($similar)
  {
    dbConnect::dbConnection();
    $sql1="SELECT * FROM todo where tstatus='1' && tlocation='$similar'";
    $result1=mysqli_query($this->db,$sql1);
    return $result1;

  }
  function add_counter($tid)
  {

    $sql="UPDATE `todo` set `tcounter`= tcounter+1 WHERE tid=$tid";
    mysqli_query($this->db,$sql);
  }
  public function fgetTopTodo()
  {
    dbConnect::dbConnection();
    $sql7="SELECT * FROM todo where tstatus='1' ORDER BY tcounter DESC LIMIT 0,1";
    $result7=mysqli_query($this->db,$sql7);
    return $result7;

  }
  public function fgetPopularTodo()
  {
    dbConnect::dbConnection();
    $sql7="SELECT * FROM todo where tstatus='1' ORDER BY tcounter DESC LIMIT 1,2";
    $result7=mysqli_query($this->db,$sql7);
    return $result7;

  }
  public function getAllLocation()
  {
    dbConnect::dbConnection();
    $sql="SELECT * FROM location ORDER BY lid";
    $result=mysqli_query($this->db,$sql);
    return $result;
    // while($row=mysqli_fetch_array($result))
    // {
    //   $location=$row['lname'];
    //   echo "
    //   <option value='$location'>$location</option>
    //
    //   ";
    // }
  }
  public function searchtodo($query)
  {
    dbConnect::dbConnection();
    $sql6="SELECT * FROM todo WHERE tlocation='$query' ";
    $result6=mysqli_query($this->db,$sql6);
    return $result6;
  }
  public function fgetKeywordTodo($tid)
  {
    dbConnect::dbConnection();
    $sql6="SELECT * FROM todo WHERE tid='$tid' ";
    $result6=mysqli_query($this->db,$sql6);
    while($row=mysqli_fetch_array($result6))
    {


      $string=$row['tkeyword'];


    }

    $separator=",";
    $elements = explode($separator, $string);
    foreach($elements as $element){
      echo  " <li><a href='../virtualtravelguide?query=$element'> ".$element."</a></li>";
    }}
  }
