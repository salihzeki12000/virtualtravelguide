<?php
 include_once('include/inc_header-home.php');
include_once('class/fclassfaq.php');
$faq=new faq();
?>
<div class="container-fluid">
  <div class="row justify-content-md-center " >

    <div class="row justify-content-md-center blognav">
      <?php include_once('include/inc_navigation.php'); ?>
    </div>
  </div>
  <div class="row ">
    <div class="coverblog col-md-12" style="background:url('images/4e.jpg');background-attachment:fixed;">
      <!--SEARCH PORTION-->
           <div class="row justify-content-md-center" >
        <div style="text-align:center;color:white;font-size:55px;" class="">
       Frequently Asked question
      </div>
    </div>

      <div class="row col-md-12 justify-content-md-center mt-5 ">

      </div>
    </div>
      <!--END OF SEARCH PORTION -->

    </div>
  </div>

<div class="row justify-content-center" >
  <div class="blogresult col-md-11" >
    <Div class="row justify-content-md-center" >
      <?php
      $faqs=$faq->fgetAllfaq();
      foreach($faqs as $key => $faqvalue)
      {

        ?>


        <Div class="blogcontent col-md-9  card">

          <section class="description" style="color:black;">Question: <?php echo $faqvalue['fques']; ?> </section><br>
          <section class="description">Answer:<?php echo $faqvalue['fans'];?> </section><br>

        </div>  <?php } ?>
      </div>


    </div>
  </div>

</div>
</div>
<?php include_once('include/inc_footer.php'); ?>
