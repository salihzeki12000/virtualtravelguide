<?php  include('include/inc_header-home.php'); ?>
<?php  include('include/inc_navigation.php'); ?>
  <div class="container">
    <div class="row justify-content-md-center">
    <div class="col-md-8" style="margin-top:55px;">
      <div class="row justify-content-md-center">
        <Center>
    <form action="mail/email.php" method="POST">
          <div class="form-group">
      <label for="">Enter Email Address (For resetting password)</label><br>

      <input type="email" class="form-control col-md-12" name="email" placeholder="Email address">
      <label for="" style="color:#B2B2B2;">*Email Address that was used during registration</label><br>

    </div>
      <input type="Submit" name="Submit" value="Submit" class="btn btn-primary btn-lg">
    </form>
</div>
</div>
</div>
</div>
