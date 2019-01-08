<?php
include_once('include/inc_header-home.php');
@ $mes=$_GET['mes'];
if($mes=='registered')
{
  echo "<script>alert('Successfully registered!You can now login ')</script>";
}
 ?>
	<div class="container-fluid">

    <?php

      include_once('home.php');
     ?>

     <div class="row">
      <?php include_once('include/inc_footer.php'); ?>
    </div>

</div>


  <script type="text/javascript" src="assets/js/main.js"></script>
  <!-- dateDropper lib -->
  <script src="assets/date/datedropper.js"></script>
  <script>
$('#datep').dateDropper();
</script>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="assets/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
