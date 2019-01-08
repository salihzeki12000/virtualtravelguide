<?php include('include/inc_header-home.php'); ?>
<?php include('include/inc_navigation.php'); ?>
<?php ?>
<?php
include('fsession.php');
include('class/fproduct.php');
$shop = new fProduct();

// Yo k ho tha vayena////////////////////////
// if(isset($_POST["action"]))
// {
// if($_POST["action"] == "Pay")
// {
// extract($_POST);
//
//   $booking->final_hotelbooking($cusid,$hotelid,$roomid,$totalroom,$checkin,$checkout,$rhotelcost);
// }
// }

//@$sescusid=$_SESSION['cus_id'];
if($_SERVER['REQUEST_METHOD']=='POST')
{
  extract($_POST);
  $shop->productCheckOut($total);
}
// if(@$_SESSION['cus_id']=="")
// {
//   echo "<script>alert('Login inorder to access this feature');</script>";
// //header("location: ecommerce.php?b=shop");
//
// }
// else{



// else{
//   echo'somthing error';
// }
//}
?>
<div class="container">
<h2>Your Cart</h2>
<table class="table table-hover">
<thead>
  <tr>
    <th>Name</th>
    <th>Image</th>
    <th>Quantity</th>
    <th>Price</th>
  </tr>
</thead>
<tbody>
<?php
      $cusid=$_SESSION['cus_id'];
      $customer=$shop->confirm_userdetail($cusid);
      if(isset($_COOKIE["shopping_cart"]))
      {
       $cookie_data = stripslashes($_COOKIE['shopping_cart']);
       $cart_data = json_decode($cookie_data, true);

       $total=0;
       foreach($cart_data as $keys => $values)
       {
          $prid=$values['item_id'];
          $product=$shop->confirm_productdetail($prid);
         $price=$values['item_quantity'] * $values['item_price'];
         $total = $total + ($values["item_quantity"] * $values["item_price"]);
        ?>
      <tr>
        <td><?php echo $values['item_name']; ?></td>
        <td><?php echo $values['item_image']; ?></td>
      <td><?php echo $values['item_quantity']; ?></td>
      <td><?php echo $price; ?></td>
      </tr>

<?php

?>

<tr>
  <td>Total: </td>
  <td><?php echo $total; ?></td>
</tr>

<?php
}
?>

</tbody>
</table>
</div>
<div class="container-fluid" style="background:#F6F5F5;">

  <div class="row">
    <div class="" style="padding:50px;">
<?php
          foreach ($customer as $key => $customervalue) {

          ?>
          <div class="row justify-content-md-center">
          <div class="customerdetail col-md-7 card " >
                  <div class="row card-body">
                    <h4 class="card-title">User Detail</h4>
                  <div class="row">
                <div class="col-sm-6">
                     <div class="form-group">
                       <label for="exampleInput1" class="bmd-label-floating">First Name</label>
                       <input type="text" class="form-control" name="address" value="<?php echo $customervalue['cfirst_name']; ?>"  disabled>
                      </div>
                </div>

                <div class="col-sm-6">
                     <div class="form-group">

                       <label class='control-label'>Last Name</label>
                       <input type="text" class="form-control" name="address" value="<?php echo $customervalue['clast_name'];?>" disabled>
                      </div>
                </div>
                <div class="col-sm-6">
                     <div class="form-group">
                       <label for="exampleInput1" class="bmd-label-floating">Contact</label>
                       <input type="text" class="form-control" name="email" value="<?php echo $customervalue['ccontact'];?>" disabled>
                      </div>
                </div>
                <div class="col-sm-6">
                     <div class="form-group">
                       <label for="exampleInput1" class="bmd-label-floating">Address</label>
                       <input type="text" class="form-control" name="address" value="<?php echo $customervalue['caddress'];?>" disabled>
                      </div>
                </div>
                <div class="col-sm-12">
                     <div class="form-group">
                       <label for="exampleInput1" class="bmd-label-floating">Email</label>
                       <input type="text" class="form-control" name="email" value="<?php echo $customervalue['cemail'];?>" disabled>
                      </div>
                </div>
                <div class="col-sm-12">
                     <div class="form-group">
                       <span style="font-size:12px;color:#666666;">By confirming to complete this booking I acknowledge that I have read and accept the Rules & Restrictions.</span>
                       <input type="hidden" name="action" value="Pay">
               <form action=" " method="POST">
                 <input type="hidden" name="total" value="<?php echo $total;?>">
                       <input type="submit" class="btn btn-lg col-md-12 btn-success" value="Pay Upon Delivery">
                         <a href="#" class="btn btn-lg col-md-12 mt-3" style="background:#4C276D;color:white;" id="payment-button"> Pay With Khalti</a>
                      </div>
                </div>
              </form>
              </div>
              <script>
                      var config = {
                          // replace the publicKey with yours
                          "publicKey": "test_public_key_8bc8a8161bca499190f1bbdd5ccca7fb",
                            "productIdentity": "<?php echo $values['item_price']; ?>",
                            "productName": "<?php //echo $vehiclename; ?>",

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




    </div>
      <?php
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
<?php include('include/inc_footer.php');?>
