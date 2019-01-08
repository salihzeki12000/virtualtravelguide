<?php
$connect=new myqli('localhost','root','','vtg');

$input=filter_input_array(INPUT_POST);
$hname=mysqli_real_escape_string($connect, $input['hname']);
$husername=mysqli_real_escape_string($connect, $input['husername']);
$haddress=mysqli_real_escape_string($connect, $input['haddress']);
$hlocation=mysqli_real_escape_string($connect, $input['hlocation']);
$hcontact=mysqli_real_escape_string($connect, $input['hcontact']);
$hemail=mysqli_real_escape_string($connect, $input['hemail']);
$hdescription=mysqli_real_escape_string($connect, $input['hdescription']);
$hmap=mysqli_real_escape_string($connect, $input['hmap']);
$hstatus=mysqli_real_escape_string($connect, $input['hstatus']);
$htype=mysqli_real_escape_string($connect, $input['htype']);
$hkeyword=mysqli_real_escape_string($connect, $input['hkeyword']);

if($input["action"] === 'edit')
{
  $query ="UPDATE hotel SET hname='".$hname."',
      husername='".$husername."',
      haddress='".$haddress."',
      hlocation='"$hlocation.."',
      hcontact='".$hcontact."',
      hemail='".$hemail."',
      hdescription='".$hdescription."',
      hmap='".$hmap."',
      hstatus='".$hstatus."',
      htype='".$htype."',
      hkeyword='".$hkeyword."'
      WHERE hid = '".$input["$hid"]."'
      ";
      mysqli_query($connect, $query);
}
if($input["action"] === 'delete')
{
  $query=" DELETE FROM hotel"
    WHERE hid='".$input["id"]."' ";
    mysqli_query($connect, $query);
}
echo json_encode($input);
 ?>
