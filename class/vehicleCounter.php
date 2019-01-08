<?php

if(isset($_POST['vcount_id'])){
	echo "Success";
		$vid=$_POST['vcount_id'];
$db=new mysqli("localhost","root","","vtg");

$sql="UPDATE `vehicle` set `vcounter`= vcounter+1 WHERE vid=$vid";
    $result=mysqli_query($db,$sql);
}
