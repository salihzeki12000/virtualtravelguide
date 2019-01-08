<script src="https://khalti.com/static/khalti-checkout.js"></script>

<?php include('include/inc_header-home.php'); ?>
<?php include('include/inc_navigation.php'); ?>
<?php
@include_once('fsession.php');
$cusid=$_SESSION['cus_id'];
// echo $sescusid."=Session id(USer id)<br> ";
$totalroom=$_GET['totalroom'];
$roomid=$_GET['roomid'];
$checkin=$_GET['checkin'];
$checkout=$_GET['checkout'];
$hotelid=$_GET['hotelid'];
$rhotelcost=$_GET['rhotelcost'];

// echo $roomid ."=Room id <br>";
// echo $totalroom."=Total room<br>";
// echo $checkin."=Checkin<br>";
// echo $checkout."=Checkout<br>";
include_once('class/fclasshotel.php');
include_once('class/fclassbooking.php');
$booking=new fBooking();
$booking->confirmbooking_roomdetail($roomid);
$booking->confirmbooking_hoteldetail($hotelid);
$booking->confirmbooking_customerdetail($cusid);
if(isset($_POST["action"]))
{
if($_POST["action"] == "Pay")
{
extract($_POST);

  $booking->final_hotelbooking($cusid,$hotelid,$roomid,$totalroom,$checkin,$checkout,$rhotelcost);
}
}

?>
<div class="container-fluid" style="background:#F6F5F5;">

  <div class="row">
    <div class="" style="padding:50px;">
      <?php
      $hoteld=$booking->confirmbooking_hoteldetail($hotelid);
      $roomd=$booking->confirmbooking_roomdetail($roomid);
      $customerd=$booking->confirmbooking_customerdetail($cusid);
      foreach ($hoteld as $key => $hotelvalue) {
        // echo "Title is" .$value['rtitle'];
        // echo "<img src='$value[rimage1]'>";

        foreach ($roomd as $key => $roomvalue) {
          foreach ($customerd as $key => $customervalue) {
            $hotelname=$hotelvalue['company_name'];
            $url=$_SERVER['REQUEST_URI'];
            $date1=date_create("$checkin");
            $date2=date_create("$checkout");
            $diff=date_diff($date1,$date2);

            $calculate=$roomvalue['rhotelcost']*$diff->format("%a");

            //echo $roomid;
            //echo $hotelname;
          ?>
          <div class="row justify-content-md-center">
          <div class="customerdetail col-md-7 card " >
            <form action=" " method="POST" value="hotelbooking" >
              <input type="hidden" name="cusid" value="<?php echo $cusid; ?>">
                <input type="hidden" name="hotelid" value="<?php echo $hotelid; ?>">
                <input type="hidden" name="roomid" value="<?php echo $roomid; ?>">
                  <input type="hidden" name="totalroom" value="<?php echo $totalroom; ?>">
                  <input type="hidden" name="checkin" value="<?php echo $checkin; ?>">
                    <input type="hidden" name="checkout" value="<?php echo $checkout; ?>">

                            <input type="hidden" name="rhotelcost" value="<?php echo $rhotelcost; ?>">
                    <!-- <input type="hidden" name="totalamount" value="<?php //echo $totalamount; ?>"> -->

                  <div class="row card-body">
                    <h4 class="card-title">Guest Detail</h4>
                  <div class="row">
                <div class="col-sm-6">
                     <div class="form-group">
                       <label for="exampleInput1" class="bmd-label-floating">First Name</label>
                       <input type="text" class="form-control" value="<?php echo $customervalue['cfirst_name']; ?>"  disabled>
                      </div>
                </div>

                <div class="col-sm-6">
                     <div class="form-group">

                       <label class='control-label'>Last Name</label>
                       <input type="text" class="form-control"  value="<?php echo $customervalue['clast_name'];?>" disabled>
                      </div>
                </div>
                <div class="col-sm-6">
                     <div class="form-group">
                       <label for="exampleInput1" class="bmd-label-floating">Contact</label>
                       <input type="text" class="form-control"  value="<?php echo $customervalue['ccontact'];?>" disabled>
                      </div>
                </div>
                <div class="col-sm-6">
                     <div class="form-group">
                       <label for="exampleInput1" class="bmd-label-floating">Address</label>
                       <input type="text" class="form-control"  value="<?php echo $customervalue['caddress'];?>" disabled>
                      </div>
                </div>
                <div class="col-sm-12">
                     <div class="form-group">
                       <label for="exampleInput1" class="bmd-label-floating">Email</label>
                       <input type="text" class="form-control" value="<?php echo $customervalue['cemail'];?>" disabled>
                      </div>
                </div>
                <div class="col-sm-12">
                     <div class="form-group">
                       <span style="font-size:12px;color:#666666;">By confirming to complete this booking I acknowledge that I have read and accept the Rules & Restrictions.</span>
                       <input type="hidden" name="action" value="Pay">

                       <input type="submit" class="btn btn-lg col-md-12 btn-success" value="Pay At Hotel">
                      </form>

                       <a href="#" class="btn btn-lg col-md-12 mt-3" style="background:#4C276D;color:white;" id="payment-button"> Pay With Khalti</a>
                      </div>
                </div>

              </div>
              <script>
                      var config = {
                          // replace the publicKey with yours
                          "publicKey": "test_public_key_8bc8a8161bca499190f1bbdd5ccca7fb",
                          "productIdentity": "<?php echo $roomid; ?>",
                              "CustomerIdentity": "<?php echo $roomid; ?>",
                          "productName": "<?php echo $hotelname;?>",
                          "productUrl": "<?php echo "http://localhost".$url;?>",
                          "eventHandler": {
                              onSuccess (payload) {
                                  // hit merchant api for initiating verfication
                                  console.log(payload);
                              },
                              onError (error) {
                                  console.log(error);
                              },
                              onClose () {
                                  console.log('widget is closing');
                              }
                          }
                      };

                      var checkout = new KhaltiCheckout(config);
                      var btn = document.getElementById("payment-button");
                      btn.onclick = function () {
                          checkout.show({amount: 1000});
                      }
                  </script>

                </div>

              </div>



          <div class="col-md-4 bookedroomdetail card  ">
            <div class="card-body">
          <div class="row ">
              <h4 class="card-title">Booking Details(<span style="color:#666666;"> <?php echo $roomvalue['rtitle']?></span> )</h4>
            </div>

        <div class="row">
          <img src="<?php echo $roomvalue['rimage1'] ?>" style="height:70px;width:70px;border-radius:100%;" >
          <div class="ml-4">
          <h5 style="text-transform:uppercase;"><?php echo $hotelvalue['company_name']; ?></h5>
          <span style="font-size:15px;font-weight:lighter;color:#14231B;"><i class="material-icons">place</i><?php echo $hotelvalue['address'];?></span>
        </div>
      </div><hr>
        <div class="">
        Check in date:  <span style="color:#666666;"><?php echo $checkin;?></span><br>
        Check out date:  <span style="color:#666666;"><?php echo $checkout; ?></span><br>
          <i class="material-icons" style="color:green;">date_range</i>  Total Duration:<span style="color:#666666;"> <?php
echo $diff->format("%a days");
           ?></span>

        </div>
        <hr>
        <div class="">
            <h5>Payment Details of <span style="color:#666666;"><?php echo $roomvalue['rtitle']?></span> for <span style="color:#666666;"><?php echo $diff->format("%a days");?></h5></span>

            <span style="color:#666666;">Rs <?php echo $roomvalue['rhotelcost']?> X <?php echo $diff->format("%a days");?> = Rs.
            <?php
            echo $calculate;?><br></span>
            No. of Room:<span style="color:#666666;"> <?php echo $totalroom;?></span><br>
            <span style="font-size:20px;">Total Payable Amount :</span><span style="color:#666666;">Rs.  <?php echo $calculate ." X ". $totalroom?> rooms = </span><span style="color:red;font-size:30px;">Rs. <?php  $totalamount=$calculate*$totalroom;
            echo $totalamount; ?></span>
        </div>
        </div>
          </div>
          <!-- <div class="card col-md-7">
            *Free Cancellation till 24 Hours prior to check-in date
          </div> -->

      </div>
    </div>
      <?php
    }
  }
}
    ?>
  </div>

</div>

</div>
<script>
       var config = {
           // replace the publicKey with yours
           "publicKey": "test_public_key_dc74e0fd57cb46cd93832aee0a390234",
           "productIdentity": "1234567890",
           "productName": "Dragon",
           "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
           "eventHandler": {
               onSuccess (payload) {
                   // hit merchant api for initiating verfication
                   console.log(payload);
               },
               onError (error) {
                   console.log(error);
               },
               onClose () {
                   console.log('widget is closing');
               }
           }
       };

       var checkout = new KhaltiCheckout(config);
       var btn = document.getElementById("payment-button");
       btn.onclick = function () {
           checkout.show({amount: 1000});
       }
   </script>

<!-- import KhaltiCheckout from "khalti-web";

// for dynamic loading
// import * as KhaltiCheckout from "khalti-web"; TypeScript
// var KhaltiCheckout = require("khalti-web"); CommonJs

let config = {
    // replace this key with yours
    "publicKey": "test_public_key_dc74e0fd57cb46cd93832aee0a390234",
    "productIdentity": "1234567890",
    "productName": "Drogon",
    "productUrl": "http://gameofthrones.com/buy/Dragons",
    "eventHandler": {
        onSuccess (payload) {
            // hit merchant api for initiating verfication
            console.log(payload);
        },
        // onError handler is optional
        onError (error) {
            // handle errors
            console.log(error);
        },
        onClose () {
            console.log('widget is closing');
        }
    }
};

let checkout = new KhaltiCheckout(config);
let btn = document.getElementById("payment-button");
btn.onclick = function () {
    checkout.show({amount: 1000});
} -->
<?php include('include/inc_footer.php');?>
