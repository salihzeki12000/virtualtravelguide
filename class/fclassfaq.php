<?php
  include_once('admin/class/dbconfig.php');

class faq extends dbConnect
{
  /*FUNCTION TO GET ALL THE FAQ IN THE FRONT END WHICH HAS STATUS 1*/
  public function fgetAllfaq()
  {
      dbConnect::dbConnection();
      $sql="SELECT * FROM faq where fstatus='1' ORDER BY fid DESC";
      $result=mysqli_query($this->db,$sql);
      return $result;

    }
    public function fgetfaq($fid)
    {
        dbConnect::dbConnection();
        $sql1="SELECT * FROM faq where fstatus='1' && fid='$fid'";
        $result1=mysqli_query($this->db,$sql1);
        return $result1;
      }





          }
          ?>
