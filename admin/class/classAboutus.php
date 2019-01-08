<?php
@include_once('session.php');
include_once('dbconfig.php');
Class Aboutus extends dbConnect
{
	public function createAboutus($adescription)
	{
		dbConnect::dbconnection();
		$date=date("Y/m/d");

		$sql1="INSERT INTO aboutus SET adescription='$adescription',adate='$date',astatus='1'";
		$result=mysqli_query($this->db,$sql1)or die(mysqli_connect_errno()."data cannot be inserted");
		if($result)
		{
			echo"data inserted";
			header('location:');
		}
	}


   public function getAllaboutus()
  {
    dbConnect::dbConnection();
    $sql2="SELECT * FROM aboutus ORDER BY Aid DESC";
    $result2=mysqli_query($this->db,$sql2);
    while($row=mysqli_fetch_array($result2))
    {  
    	$astatus=$row['astatus'];

      
      echo"
      <tr>
      <td>".$row['Aid']."</td>

      <td>".substr($row['adescription'],0,50).".............</td>
        
         <td>".$row['adate']." </td>
         <td>";
          switch($astatus)
      {
        case '0':
        {
          echo "<kbd class='btn btn-xs btn-danger'>Disabled</kbd>";
          break;
        }
        case '1':
        {
          echo "<kbd class='btn btn-xs btn-success'>Enabled</kbd>";
          break;
        }

      }
   
     

      echo"</td>

      <td>
      <a href='edit.php?action=edit&Abid=".$row['Aid']."&of=aboutus&sidebar=aboutus'> <button type='button' rel='tooltip' title='Edit aboutus' class='btn btn-success btn-simple btn-xs'><i class='fa fa-edit'></i></button></a>
      <a href='delete.php?action=delete&Abid=".$row['Aid']."&of=aboutus'><button type='button' rel='tooltip' title='Delete aboutus' class='btn btn-danger btn-simple btn-xs' id='delbutton'>
      <i class='fa fa-times'></i>
      </button></a></td>

      ";

    }
  }
 public function deleteAboutus($Abid)
  {
    dbConnect::dbConnection();
   
    $sql4="DELETE from aboutus where Aid=$Abid";
    $delete=mysqli_query($this->db,$sql4);
    if($delete)
    {
      header('location: aboutus.php?mes=deleted&sidebar=aboutus');
    }
    else {
      echo "Error in about us deletion";
    }
  }





 public function editAboutus($Aid)
  {
    dbConnect::dbConnection();
    $sql5="SELECT * FROM aboutus where Aid=$Aid";
    $result5=mysqli_query($this->db,$sql5);
    while($row=mysqli_fetch_array($result5))
    {

              
              $adescription=$row['adescription'];
             
             
             
             

              echo "
              <div class='container-fluid'>
                  <div class='row'>
                      <div class='col-md-8'>
                          <div class='card'>
                              <div class='card-header' data-background-color='red'>
                                  <h4 class='title'>Edit Profile</h4>
                                  <p class='category'>Complete your profile</p>
                              </div>
                              <div class='card-content'>
                  <form method='POST' enctype='multipart/form-data' action='edit.php?action=edit&Abid=".$row['Aid']."&of=aboutus '>
                      <div class='row'>
                          <div class='col-md-11'>
                              <div class='form-group label-floating'>
                                  <label class='control-label'>Id (disabled)</label>
                                  <input type='text' class='form-control' value='".$Aid."' name='Abid' disabled>
                              </div>
                        <div class='row'>
                          <div class='col-md-12'>
                              <div class='form-group label-floating'>
                                  <label class='control-label'>Information description</label>
                                   <textarea class='form-control' rows='3' name='upd_adescription'>".$adescription."</textarea>
                              </div>
                          </div>


               
         

                      <button type='submit' class='btn btn-danger pull-right'>Update Information</button>
                      <div class='clearfix'></div>
                  </form>";

    }
  }


 public function updateAboutus($Aid,$upd_adescription)
  {
    dbConnect::dbConnection();

      $sql6="UPDATE aboutus SET adescription='$upd_adescription' WHERE Aid=$Aid";
      $update=mysqli_query($this->db,$sql6);
      if($update)
      {
       @header('location: aboutus.php?mes=updated&sidebar=aboutus');

   
      }
      else
      {
      echo "Update Failed!";
      }
    }



}