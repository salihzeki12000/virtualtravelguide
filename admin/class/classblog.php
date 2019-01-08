<?php
@include_once('session.php');
include_once('dbconfig.php');
Class blog extends dbConnect
{
	public function createBlog($btitle,$bdescription,$bkeyword,$cid)
	{
		dbConnect::dbconnection();
		$date=date("Y/m/d");

		$sql1="INSERT INTO blog SET btitle='$btitle',bdescription='$bdescription',bdate='$date',bkeyword='$bkeyword',bstatus='0',cid='$cid'";
		$result=mysqli_query($this->db,$sql1)or die(mysqli_connect_errno()."data cannot be inserted");
		if($result)
		{
			echo"data inserted";
			header('location:');
		}
	}





	public function getAllblog()
	{
		dbConnect::dbConnection();

		$sql2="SELECT * FROM blog ORDER BY bid";
		$result2=mysqli_query($this->db,$sql2);
		return $result2;
		// while($row=mysqli_fetch_array($result2))
		// {
		//   $bstatus=$row['bstatus'];
		//   switch($bstatus)
		//   {
		//     case '0':
		//     {
		//       $bstatus_name='Disabled';
		//       break;
		//     }
		//     case '1':
		//     {
		//       $bstatus_name='Enabled';
		//       break;
		//     }
		//
		//   }
		//
		// echo"
		//   <tr>
		//   <td>".$row['bid']."</td>
		//   <td>".$row['btitle']."</td>
		//   <td>".substr($row['bdescription'],0,50)."</td>
		//      <td>".$row['bdate']."</td>
		//   <td><img src='../".$row['bimg']."' style='height:80px;width:120px;' alt='blog image'></td>
		//    <td>".$row['bkeyword']."</td>
		//      <td>".$row['bstatus']."</td>
		// <td>".$row['cid']."</td>
		// <td>
		//   <a href='edit.php?action=edit&bid=".$row['bid']."&of=blog&sidebar=blog'> <button type='button' rel='tooltip' title='Edit blog' class='btn btn-success btn-simple btn-xs'><i class='fa fa-edit'></i></button></a>
		//   <a href='delete.php?action=delete&bid=".$row['bid']."&of=blog'><button type='button' rel='tooltip' title='Delete blog' class='btn btn-danger btn-simple btn-xs' id='delbutton'>
		//   <i class='fa fa-times'></i>
		//   </button></a></td>
		//   </tr>
		//
		//   ";

	}




	//Function to delete blog
	public function deleteblog($bid)
	{
		dbConnect::dbConnection();
		$sqlSel="SELECT * FROM blog where bid=$bid";
		$data=mysqli_query($this->db,$sqlSel);
		while($row=mysqli_fetch_array($data))
		{
			$a="../";
			$remove=$a.$row["bimg"];
			@unlink($remove);

		}
		$sql4="DELETE from blog where bid=$bid";
		$delete=mysqli_query($this->db,$sql4);
		if($delete)
		{
			header('location: blog.php?mes=deleted&sidebar=blog');
		}
		else {
			echo "Error in blog deletion";
		}
	}

	public function publishBlog($bid,$bstat)
	{

		dbConnect::dbConnection();
		if($bstat=='1')
		{
			$sql4="UPDATE blog SET bstatus='0' WHERE bid=$bid";
		}
		else {
			$sql4="UPDATE blog SET bstatus='1' WHERE bid=$bid";
		}
		$result1=mysqli_query($this->db,$sql4);
		if($result1)
		{
			header('Location: '.$_SERVER['PHP_SELF'].'?sidebar=blog');

		}

	}
	public function getUserName($userid)
	{
	  dbConnect::dbConnection();
	$sql11="SELECT * FROM user WHERE cid='$userid'";
	$result11=mysqli_query($this->db,$sql11);
	return $result11;
	}
}
