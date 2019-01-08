<?php
@include_once('session.php');
include_once('dbconfig.php');
Class faq extends dbConnect
{
	public function createfaq($fques,$fans)
	{
		dbConnect::dbconnection();
		$date=date("Y/m/d");

		$sql1="INSERT INTO faq SET fques='$fques',fans='$fans',fdate='$date',fstatus='1'";
		$result=mysqli_query($this->db,$sql1)or die(mysqli_connect_errno()."data cannot be inserted");
		if($result)
		{
			echo"data inserted";
			header('location:');
		}
	}


   public function getAllfaq()
  {
    dbConnect::dbConnection();
    $sql2="SELECT * FROM faq ORDER BY fid DESC";
    $result2=mysqli_query($this->db,$sql2);
    return $result2;
    // while($row=mysqli_fetch_array($result2))
    // {
    // 	$fstatus=$row['fstatus'];


    //   echo"
    //   <tr>
    //   <td>".$row['fid']."</td>
    //    <td>".substr($row['fques'],0,50).".............</td>

    //   <td>".substr($row['fans'],0,50).".............</td>

    //      <td>".$row['fdate']." </td>
    //      <td>";
    //       switch($fstatus)
    //   {
    //     case '0':
    //     {
    //       echo "<kbd class='btn btn-xs btn-danger'>Disabled</kbd>";
    //       break;
    //     }
    //     case '1':
    //     {
    //       echo "<kbd class='btn btn-xs btn-success'>Enabled</kbd>";
    //       break;
    //     }

    //   }



    //   echo"</td>

    //   <td>
    //   <a href='edit.php?action=edit&fid=".$row['fid']."&of=faq&sidebar=faq'> <button type='button' rel='tooltip' title='Edit faq' class='btn btn-success btn-simple btn-xs'><i class='fa fa-edit'></i></button></a>
    //   <a href='delete.php?action=delete&fid=".$row['fid']."&of=faq'><button type='button' rel='tooltip' title='Delete faq' class='btn btn-danger btn-simple btn-xs' id='delbutton'>
    //   <i class='fa fa-times'></i>
    //   </button></a></td>

    //   ";

    // }
  }
 public function deletefaq($fid)
  {
    dbConnect::dbConnection();

    $sql4="DELETE from faq where fid=$fid";
    $delete=mysqli_query($this->db,$sql4);
    if($delete)
    {
      header('location: faq.php?mes=deleted&sidebar=faq');
    }
    else {
      echo "Error in about us deletion";
    }
  }





 public function editAboutus($fid)
  {
    dbConnect::dbConnection();
    $sql5="SELECT * FROM faq where fid=$fid";
    $result5=mysqli_query($this->db,$sql5);
    while($row=mysqli_fetch_array($result5))
    {


              $fques=$row['fques'];

              $fans=$row['fans'];





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
                  <form method='POST' enctype='multipart/form-data' action='edit.php?action=edit&fid=".$row['fid']."&of=faq '>
                      <div class='row'>
                          <div class='col-md-11'>
                              <div class='form-group label-floating'>
                                  <label class='control-label'>Id (disabled)</label>
                                  <input type='text' class='form-control' value='".$fid."' name='fid' disabled>
                              </div>
                        <div class='row'>
                          <div class='col-md-12'>
                              <div class='form-group label-floating'>
                                  <label class='control-label'>Information description</label>
                                   <textarea class='form-control' rows='3' name='upd_fques'>".$fques."</textarea>
                              </div>
                          </div>

                                 <div class='row'>
                          <div class='col-md-12'>
                              <div class='form-group label-floating'>
                                  <label class='control-label'>Information description</label>
                                   <textarea class='form-control' rows='3' name='upd_fans'>".$fans."</textarea>
                              </div>
                          </div>





                      <button type='submit' class='btn btn-danger pull-right'>Update Information</button>
                      <div class='clearfix'></div>
                  </form>";

    }
  }


 public function updatefaq($fid,$upd_fques,$upd_fans)
  {
    dbConnect::dbConnection();

      $sql6="UPDATE faq SET fques='$upd_fques',fans='$upd_fans' WHERE fid=$fid";
      $update=mysqli_query($this->db,$sql6);
      if($update)
      {
       @header('location: faq.php?mes=updated&sidebar=faq');


      }
      else
      {
      echo "Update Failed!";
      }
    }
public function publishfaq($fid,$fstatus)
    {

      dbConnect::dbConnection();
      if($fstatus=='1')
      {
        $sql4="UPDATE faq SET fstatus='0' WHERE fid=$fid";
      }
      else {
        $sql4="UPDATE faq SET fstatus='1' WHERE fid=$fid";
      }
      $result1=mysqli_query($this->db,$sql4);
      if($result1)
      {
        header('Location: '.$_SERVER['PHP_SELF'].'?sidebar=package');

      }

    }


}
