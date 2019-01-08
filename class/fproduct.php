<?php


//index.php
ob_start();
//include_once('fsession.php');
  include_once('admin/class/dbconfig.php');

class fProduct extends dbConnect
{
  public function confirm_productdetail($id)
  {
    dbConnect::dbConnection();
    $sql8="SELECT *  FROM product where prid='$id'";
    $result8=mysqli_query($this->db,$sql8);
    return $result8;

  }
  public function confirm_userdetail($id)
  {
    dbConnect::dbConnection();
    $sql9="SELECT *  FROM user where cid='$id'";
    $result9=mysqli_query($this->db,$sql9);
    return $result9;

  }
    public function productCheckOut($total)
    { date_default_timezone_set('Asia/kathmandu');
      $cookie_data = stripslashes($_COOKIE['shopping_cart']);
      $cart_data = json_decode($cookie_data, true);
    dbConnect::dbConnection();
      $sql4="SELECT * FROM product_order ORDER BY id DESC LIMIT 1";
      $result4=mysqli_query($this->db,$sql4);
      $row4=mysqli_fetch_array($result4);
      $transaction=1;
      $transaction= $transaction + $row4['tid'];
      foreach($cart_data as $keys => $values)
      {
        $date=date("Y/m/d");
        $time=date("H:i:s");
        $cid=$_SESSION['cus_id'];
        $prcost=$values['item_price'];
        $id=$values['item_id'];
        $quantity=$values['item_quantity'];
        $totalItemCost=$prcost * $quantity;

        $sql5="INSERT INTO product_order SET cid='$cid', prid='$id',prcosttotal='$totalItemCost', tid='$transaction',orderdate='$date', prcost='$prcost',prquantity='$quantity',ordertime='$time', prtotal ='$total',pr_orderstatus='2'";
        // , prdeliverycharge='33' , prtotal='33' , prorderstatus='1'";
        $result=mysqli_query($this->db,$sql5);
        if($result)
        {

          $sql6="SELECT * FROM product WHERE prid='$id'";
          $result6=mysqli_query($this->db,$sql6);
          while($row=mysqli_fetch_array($result6))
          {
            $p=$row['prquantity'];
            $a=$p-$quantity;
            $sql7="UPDATE product SET prquantity='$a' WHERE prid=$id";
            mysqli_query($this->db,$sql7);
            $name=$row['prname'];
            $price=$row['prcost'];
            $this->emailProduct($name,$price);
          }
          session_start();
          $_SESSION['count'] = 0;
          setcookie("shopping_cart", "", time() - 3600);
          header("location:ecommerce.php?b=shop");
        }
        else{
          echo"kkvayo";
        }
       }
      }
      public function emailProduct($name,$price)
      {
        define('EMAIL','vtgnepal@gmail.com');
        define('PASS','g@it0nd3');
        require 'PHPMailerAutoload.php';
        $mail = new PHPMailer;
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        //$mail->SMTPDebug = 1;                               // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = EMAIL;                 // SMTP username
        $mail->Password = PASS;                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
        $email=$_SESSION['cus_email'];
        $firstName=$_SESSION['cus_fname'];
        $mail->setFrom(EMAIL, 'Virtual Travel Guide');
        $mail->addAddress($email, $firstName);     // Add a recipient
        // $mail->addAddress('ellen@example.com');               // Name is optional
        //$mail->addReplyTo(EMAIL, 'Information');
        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'Purchase Information';
        $firstName=$_SESSION['cus_fname'];
        //$lastName=$_SESSION['cus_lname'];
        $mail->Body    = 'Namaste Mr.'.$firstName.' <br> Your order of '.$name.' for the price of Rs.'.$price.'has been recived successfully <br> Thank you for using Virtual Travel Guide.';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
      }
    public function productDisplay()
    {
    dbConnect::dbConnection();


      $sql5="SELECT * FROM product WHERE prstatus='1'";
      $result=mysqli_query($this->db,$sql5);
      while($row1=mysqli_fetch_array($result))
      {
        echo '
        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item '.$row1["prgender"].' '.$row1["prcategory"].'">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-pic hov-img0">
              <img src="'.$row1["primg1"].'" alt="IMG-PRODUCT">

              <button type="button" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 " data-toggle="modal" data-target="#exampleModal'.$row1["prid"].'">
              Quick View
            </button>
            </div>

            <div class="block2-txt flex-w flex-t p-t-14">
              <div class="block2-txt-child1 flex-col-l ">
                <a href="#" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                  '.$row1["prname"].'
                </a>

                <span class="stext-105 cl3">
                  Rs.'.$row1["prcost"].'
                </span>
              </div>
            </div>
          </div>
        </div>


        ';
      }


//   $sql5="SELECT * FROM product WHERE prname='$prname' and prcost='$prcost'";
//   $result=mysqli_query($this->db,$sql5);
//   while($row1=mysqli_fetch_array($result))
//   {
//     echo '
//     <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item '.$row1["prgender"].' '.$row1["prcategory"].'">
//       <!-- Block2 -->
//       <div class="block2">
//         <div class="block2-pic hov-img0">
//           <img src="'.$row1["primg1"].'" alt="IMG-PRODUCT">
//
//           <button type="button" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 " data-toggle="modal" data-target="#exampleModal'.$row1["prid"].'">
//           Quick View
//         </button>
//         </div>
//
//         <div class="block2-txt flex-w flex-t p-t-14">
//           <div class="block2-txt-child1 flex-col-l ">
//             <a href="product-detail.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
//               '.$row1["prname"].'
//             </a>
//
//             <span class="stext-105 cl3">
//               '.$row1["prcost"].'
//             </span>
//           </div>
//         </div>
//       </div>
//     </div>
//
//
//     ';
//
//
//
// }


    }


    public function productsortedDisplay($prname,$prprice)
    {
    dbConnect::dbConnection();


      $sql5="SELECT * FROM product WHERE prstatus='1' and prname='$prname' and prcost='$prprice'";
      $result=mysqli_query($this->db,$sql5);
      while($row1=mysqli_fetch_array($result))
      {
        echo '
        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item '.$row1["prgender"].' '.$row1["prcategory"].'">
          <!-- Block2 -->
          <div class="block2">
            <div class="block2-pic hov-img0">
              <img src="'.$row1["primg1"].'" alt="IMG-PRODUCT">

              <button type="button" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 " data-toggle="modal" data-target="#exampleModal'.$row1["prid"].'">
              Quick View
            </button>
            </div>

            <div class="block2-txt flex-w flex-t p-t-14">
              <div class="block2-txt-child1 flex-col-l ">
                <a href="product-detail.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                  '.$row1["prname"].'
                </a>

                <span class="stext-105 cl3">
                  Rs. '.$row1["prcost"].'
                </span>
              </div>
            </div>
          </div>
        </div>


        ';
      }
    }

    public function sortLow() //low to high
    {
      dbConnect::dbConnection();
      $sql9="SELECT prcost FROM product";
      $result9=mysqli_query($this->db,$sql9);
      $array = array();
      //$sortedarray=array();
      while($rowfetch=mysqli_fetch_array($result9)) //string to array
      {
  $array[] = $rowfetch; //array to countable array
      }

    //  $my_array=array('array'=>$result9);

$sort=$this->quick_sort($array);

foreach($sort as $sorts){
$a=$sorts[0];
$sql10="SELECT * FROM product where prcost='$a'";
$result1=mysqli_query($this->db,$sql10);
while($row=mysqli_fetch_array($result1))
{
  $this-> productsortedDisplay($row["prname"],$row["prcost"]);

}
}

      //return $result9;
//for($count= 0; $count <count($row9))
    }

    function quick_sort($my_array)
     {
    	$loe = $gt = array();
    	if(count($my_array) < 2)
    	{
    		return $my_array;
    	}
    	$pivot_key = key($my_array);
    	$pivot = array_shift($my_array);
    	foreach($my_array as $val)
    	{
    		if($val <= $pivot)
    		{
    			$loe[] = $val;
    		}elseif ($val > $pivot)
    		{
    			$gt[] = $val;
    		}
    	}
    	return array_merge($this->quick_sort($loe),array($pivot_key=>$pivot),$this->quick_sort($gt));
    }


    public function sortHigh()
    {
      dbConnect::dbConnection();
      $sql9="SELECT prcost FROM product";
      $result9=mysqli_query($this->db,$sql9);
      $array = array();
      //$sortedarray=array();
      while($rowfetch=mysqli_fetch_array($result9))
      {
    $array[] = $rowfetch;
      }
    $sort=$this->quick_sorth($array);

    foreach($sort as $sorts){
    $a=$sorts[0];
    $sql10="SELECT * FROM product where prcost='$a'";
    $result1=mysqli_query($this->db,$sql10);
    while($row=mysqli_fetch_array($result1))
    {
    $this-> productsortedDisplay($row["prname"],$row["prcost"]);

    }
    }
    }

    function quick_sorth($my_array)
     {
    	$loe = $gt = array();
    	if(count($my_array) < 2)
    	{
    		return $my_array;
    	}
    	$pivot_key = key($my_array);
    	$pivot = array_shift($my_array);
    	foreach($my_array as $val)
    	{
    		if($val >= $pivot)
    		{
    			$loe[] = $val;
    		}elseif ($val < $pivot)
    		{
    			$gt[] = $val;
    		}
    	}
    	return array_merge($this->quick_sorth($loe),array($pivot_key=>$pivot),$this->quick_sorth($gt));
    }



    public function displayView()
    {
    dbConnect::dbConnection();
      $sql5="SELECT * FROM product WHERE prstatus='1'";
      $result=mysqli_query($this->db,$sql5);
      @$user=$_SESSION['cus_id'];
      while($row=mysqli_fetch_array($result))
      {
        $a=$row['aid'];
        $sql6="SELECT * FROM admin where id = $a";
        $resul=mysqli_query($this->db,$sql6);
        while($ad=mysqli_fetch_array($resul))
        {
      echo'
      <div class="modal fade bd-example-modal-lg"  id="exampleModal'.$row["prid"].'" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content col-md-12">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">'.$row["prname"].'('.$ad["first_name"].$ad["last_name"].')</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body col-md-">
        <div class="container-fluid">
          <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
            <button class="how-pos3 hov3 trans-04 js-hide-modal1">
              <img src="images/icons/icon-close.png" alt="CLOSE">
            </button>

            <div class="row">
              <div class="col-md-6 col-lg-7 p-b-30">
                <div class="p-l-25 p-r-30 p-lr-0-lg">
                  <div class="wrap-slick3 flex-sb flex-w">
                    <div class="wrap-slick3-dots"></div>
                    <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

                    <div class="slick3 gallery-lb">
                      <div class="item-slick3" data-thumb="'.$row["primg1"].'">
                        <div class="wrap-pic-w pos-relative">
                          <img src="'.$row["primg1"].'" alt="IMG-PRODUCT">

                          <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="'.$row["primg1"].'">
                            <i class="fa fa-expand"></i>
                          </a>
                        </div>
                      </div>

                      <div class="item-slick3" data-thumb="'.$row["primg2"].'">
                        <div class="wrap-pic-w pos-relative">
                          <img src="'.$row["primg2"].'" alt="IMG-PRODUCT">

                          <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="'.$row["primg2"].'">
                            <i class="fa fa-expand"></i>
                          </a>
                        </div>
                      </div>


                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-5 p-b-30">
                <div class="p-r-50 p-t-5 p-lr-0-lg">
                  <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                    '.$row["prname"].'
                  </h4>

                  <span class="mtext-106 cl2">
                    Rs. '.$row["prcost"].'
                  </span>

                  <p class="stext-102 cl3 p-t-23">
                   '.$row["prdescription"].'
                  </p>

                  <p class="stext-102 cl3 p-t-23">
                  Remaining :
                   '.$row["prquantity"].' <br>
                   Size :
                   '.$row["psize"].' <br>
                   Gender :
                   '.$row["prgender"].' <br>
                  </p>



                  <!--  -->
                  <div class="p-t-33">


                    <div class="flex-w flex-r-m p-b-10">
                      <div class="size-203 flex-c-m respon6">
                        Quantity:
                      </div>

                      <div class="size-204 respon6-next">
                        <div class="rs1-select2 bor8 bg0">
                       <form action="" method="post">
                            <input type="text" name="quantity" value="1" class="form-control" /> <!-- text box -->
                        </div>
                      </div>
                    </div>

                    <div class="flex-w flex-r-m p-b-10">
                      <div class="size-204 flex-w flex-m respon6-next">


      <input type="hidden" name="hidden_name" value="'.$row["prname"].'" />
      <input type="hidden" name="hidden_price" value="'.$row["prcost"].'" />
      <input type="hidden" name="hidden_id" value="'.$row["prid"].'" />
      <input type="hidden" name="hidden_img" value="'.$row["primg1"].'" />
      <input type="hidden" name="hidden_user" value="'.$user.'" />
    <!--  Add to cart ko code -->
      <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail" value="Add to Cart" />

                          </form>
                        </button>
                      </div>
                    </div>
                  </div>

                  <!--  -->
                  <div class="flex-w flex-m p-l-100 col-md-12 respon7">
                    <div class="flex-m bor9 p-r-10 m-r-11">
                        <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
                         <i class="zmdi zmdi-favorite"></i>
                        </a>
                      </div>

                      *Available only inside Kathmandu Valley
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>';
    }
  }
  }
  }
