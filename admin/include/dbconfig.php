<?php
define('DB_SERVER','localhost');
define('DB_USERNAME0','root');
define('DB_PASSWORD','');
define('DB_DATABASE','vtg');

Class dbConnect
{
  // public $db;
  public function dbConnection()
  {
  // $this->db=new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    $this->db=new mysqli("localhost","root","","vtg");
    // if(mysqli_connect_errno())
    //   {
    //     echo "Error:Could not connect to database.";
    //     exit;
    //   }
  }
}


?>
