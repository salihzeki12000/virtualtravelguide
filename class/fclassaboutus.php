<?php
  include_once('admin/class/dbconfig.php');

class faboutus extends dbConnect
{
  /*FUNCTION TO GET ALL THE BLOG IN THE FRONT END WHICH HAS STATUS 1*/
  public function fgetAllaboutus()
  {
      dbConnect::dbConnection();
      $sql="SELECT * FROM aboutus where astatus='1' ORDER BY aid DESC";
      $result=mysqli_query($this->db,$sql);
      return $result;

    }
    public function fgetaboutus($Aid)
    {
        dbConnect::dbConnection();
        $sql1="SELECT * FROM aboutus where astatus='1' && Aid='$Aid'";
        $result1=mysqli_query($this->db,$sql1);
        return $result1;
      }





                  }




                
          
    
