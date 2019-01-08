<?php

if(isset($_POST['pcount_id'])){
	echo "Success";
		$pid=$_POST['pcount_id'];
$db=new mysqli("localhost","root","","vtg");

$sql="UPDATE `package` set `pcounter`= pcounter+1 WHERE pid=$pid";
    $result=mysqli_query($db,$sql);
}
