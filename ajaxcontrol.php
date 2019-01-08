<?php if(isset($_POST['action']))
{

if($_POST['action']=="lowhigh")
{
include_once('class/fproduct.php');
$fpro =new  fproduct();
$prname="";
$prprice="";
$fpro->sortLow();



}
if($_POST['action']=="highlow")
{

include_once('class/fproduct.php');
$fpro =new  fproduct();
$prname="";
$prprice="";
$fpro->sortHigh();



}


}
