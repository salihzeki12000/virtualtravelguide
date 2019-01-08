
<html>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="assets/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
function validate()
{

	var cemail = $('#cemail').val();
	var check_cemail =  /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,6}$/i
	var cphone = $('#cphone').val();
	var check_cphone = /^[0-9]*$/
	var panno = $('#panno').val();
	var check_panno = /^[0-9]*$/

	$('#errcemail').html("");
	$('#errcphone').html("");
	$('#errpanno').html("");

	if(cemail=='')
	{
		$('#errcemail').html("please enter email");
		return false;
	}
	if(!check_cemail.test(cemail))
	{
	$('#errcemail').html("invalid email format");
	return false;
	}


	if(cphone=='')
	{
		$('#errcphone').html("please enter contact no");
		return false;
	}

	if(!check_cphone.test(cphone))
	{
		$('#errcphone').html("invalid contact");
		return false;
	}
	if(panno=='')
	{
		$('#errpanno').html("please enter pan no");
		return false;
	}
		if(!check_panno.test(panno))
	{
		$('#errpanno').html("invalid pan no");
		return false;
	}
	if(panno.length<9){
		$('#errpanno').html ("invalid panno lenghth");
		return false;
	}
	return true;
}


</script>
</head>
<body>
 <?php include('admin/include/inc_adminheader.php');

if($_SERVER['REQUEST_METHOD']=='POST')
{
  extract($_POST);
  include_once('admin/class/classvendorinfo.php');
  $upload= new vendorinfo();
  $upload->createVendorinfo($cname,$caddress,$cemail,$cphone,$ctype,$cdescription,$panno,$cremark);




}
 ?>
 <form method="POST" action="" enctype='multipart/form-data' onSubmit="return validate()" >
<div class="container-fluid" style="background:url('images/business.jpg');background-size:contain;">
  <div class="col-md-12 ">
    <div class="row justify-content-md-center">
      <div class="col-md-8" style="background:#F0F0F0;margin:30px;padding:50px;background:rgba(0,0,0,0.6);color:white;">
   <label for=""><h2>Information about your organization</h2></label><br>

    <div class="form-group">
    <label for="Email">Company Name</label>
    <input type="text" class="form-control" id="cname" aria-describedby="cname" placeholder="Enter company name" name="cname" required>
	<label id="errcname" style="color:red;">   </label>

  </div>
   <div class="form-group">
    <label for="address">Company Address:</label>
    <input type="text" class="form-control" id="caddress" aria-describedby="cname" placeholder="Enter company address" name="caddress" required>
	<label id="errcaddress" style="color:red;">   </label>
      <div class="form-group">
    <label for="Email">Company Email</label>
    <input type="email" class="form-control" id="cemail" aria-describedby="emailHelp" placeholder="Enter email" name="cemail" required>
	<label id="errcemail" style="color:red;">   </label>

  </div>

  </div><br>
  <div class="form-group">
    <label for="address">Company Phone no.:</label>
    <input type="text" class="form-control" id="cphone" aria-describedby="cphone" placeholder="Enter company phone no." name="cphone" required>
	<label id="errcphone" style="color:red;">  </label>

  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Company Type</label>
    <select class="form-control" id="ctype" name="ctype">
      <option value="hotel">Hotel</option>
      <option value="package">Package</option>
      <option value="Ecommerce">E-commerce</option>
      <option value="Vehiclerental">Vehicle Rental</option>

    </select>
  </div>
     <div class="form-group">
    <label for="exampleInputPassword1"> Description</label>
    <textarea input type="text" class="form-control" id="cdescription" placeholder="description" name="cdescription"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPanno">Company Pan no.</label>
     <input type="text" class="form-control" id="panno" placeholder="Pan no." name="panno" required>
	 <label id="errpanno" style="color:red;">   </label>
  </div>


  <div class="form-group">
    <label for="profilepic">Certificate Scan</label>
    <input type="file"  name="fileToUpload" class="form-control" id="dpic" placeholder="upload your picture here" required>
	<small id="dpicHelp" class="form-text text-muted">Upload scan of your Pan Registration / Company Registration certificate</small>
  </div><br>


      <div class="form-group">
    <label for="cremark"> Remarks</label>
    <textarea name="cremark" input type="text" class="form-control" id="cremark" placeholder="remark"></textarea>
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
 <div> <small id="formHelp" class="form-text text-muted">We'll never share your information with anyone else.</small> </div>


</form>
</div>
</div>
</div>
</div>

<?php include('admin/include/inc_adminfooterscripts.php');?>
</body>
</html>
