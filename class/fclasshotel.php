<?php
  include_once('admin/class/dbconfig.php');

class fHotel extends dbConnect
{
  /*FUNCTION TO GET ALL THE HOTELS IN THE FRONT END WHICH HAS STATUS 1*/
  public function fgetAllHotel()
  {
      dbConnect::dbConnection();
      $sql="SELECT * FROM admin where status='1' && type='4' && vtype='hotel' ORDER BY id DESC";
      $result=mysqli_query($this->db,$sql);
      echo "  <div class='row row-bottom-padded-md hotellist' style='padding:0px 30px 0px 30px;'>";
      while($row=mysqli_fetch_array($result))
      {
        $hid=$row['id'];
        // $htype=$row['htype'];
        // switch($htype)
        // {
        //   case '1':
        //   {$nhtype='Hotel';
        //     break;
        //   }
        //   case '2':
        //   {
        //     $nhtype='Homestay';
        //   }
        // };
        echo "


        <a href='hotelroom.php?hid=".$hid."' style='text-decoration:none;'>
    <div class='col-md-4 fh5co-tours animate-box' data-animate-effect='fadeIn'>
      <div href='#'><img src='".$row['image']."' alt='hotel image here' class='img-responsive'>
        <!-- <div class='box'>
                         <div class='ribbon'><span>Something</span></div>
         </div> -->

        <div class='desc'>
          <span></span>
          <h3 style='text-transform:capitalize;'>".$row['company_name']."</h3>
          <span class='location'><img src='images/placeholder.png'> ".$row['location']."</span>
          <span class='price'>Starting from Rs.
          ";
          $min="SELECT MIN(rhotelcost) as minimum FROM room WHERE hid='$hid'";
          $res=mysqli_query($this->db,$min);
          while($mini=mysqli_fetch_array($res))
          {
              echo $mini['minimum'];
          }


         echo "/ night</span>

          <a class='btn btn-default btn-round btn-outline' href='#' style='text-transform:capitalize;'>".$row['vtype']."</a>
        </div>
      </div>
    </div>
  </a>
";
      }
  }

  /*FUNCTION TO GET ALL THE ROOM BELONGING TO THE CLICKED HOTEL IN THE FRONT END*/
  public function fgetAllRoom($hotelid)
  {
    dbConnect::dbConnection();

    $sql1="SELECT * FROM room WHERE hid='$hotelid' && rstatus='1'";
    $result1=mysqli_query($this->db,$sql1);
    while($row=mysqli_fetch_array($result1))
    {

      echo

      "
      <div class='room-wrap'>
        <div class='row'>
          <div class='col-md-6 col-sm-6'>
            <div class='room-img' style='background-image: url(".$row['rimage1'].");'></div>
          </div>
          <div class='col-md-6 col-sm-6'>
            <div class='desc'>
              <h2 style='font-size:30px;'>".$row['rtitle']."</h2>
              <p class='price'><span style='font-size:25px;'>Rs.".$row['rhotelcost']."</span> <small>/ night</small></p>
                            <div class='amneties ' style='color:#007BFF;font-size:25px;'>
              ";
               if($row['refrigerator']==1)
               {
                 echo "<i class='material-icons'>kitchen</i>";
               }
               else {
                 echo "";
               };
               if($row['wifi']==1)
               {
                echo "<i class='material-icons'>wifi</i>";
               }
               else {
               $wifi='No';
               }
               if($row['hotwater']==1)
               {
              echo "<i class='material-icons'>hot_tub</i>";
               }
               else {
                  echo "";
                  }
               if($row['aircondition']==1)
               {
                 echo "<i class='material-icons'>toys</i>";
               }
               else {
                 echo "";
               }
               if($row['tv']==1)
               {
              echo "<i class='material-icons'>tv</i>";
               }
               else {
                 echo "";
               }
               if($row['private_bathroom']==1)
               {
                 echo "<i class='material-icons'>local_drink</i>";
               }
               else {
                 echo "";
               }
               if($row['restaurant']==1)
               {
                 echo "  <i class='material-icons'> restaurant</i>";
               }
               else {
                 echo "";
               }
               if($row['roomservice']==1)
               {
                echo " <i class='material-icons'>room_service</i>";
               }
               else {
                 echo "";
               }
               if($row['laundry']==1)
               {
                echo "<i class='material-icons'>local_laundry_service</i>";
               }
               else {
                 echo "";
               }

               echo "

               </div>

              <!-- Button to Open the Modal -->
              <a href='#' data-toggle='modal' data-target='#myModal".$row['rid']."''>
              <button class='btn btn-primary btn-outline'>Details</button>
               <button type='button' class='btn btn-warning'>
                Book Now
               </button></a>

            </div>
          </div>
        </div>
      </div>";
    }
  }

  /*FUNCTION TO GET THE HOTEL NAME AND LOCATION FOR THE TILE PORTION IN HOTELROOM PAGE*/
  public function fgetHotelName($hotelid)
  {
    dbConnect::dbConnection();

    $sql2="SELECT * FROM admin WHERE id='$hotelid'";
    $result2=mysqli_query($this->db,$sql2);
    while($row=mysqli_fetch_array($result2))
    {
      $hname=$row['company_name'];
      // return $hname;
      echo "<h2>".$row['company_name']."</h2>
        <span class='location '><img src='images/placeholder.png'>".$row['location']."</span>";
    }
  }

    /*FUNCTION TO GET THE HOTEL NAME FOR COVER IN HOTELROOM PAGE*/
    public function fgetHotelNameCover($hotelid)
    {
      dbConnect::dbConnection();

      $sql2="SELECT * FROM admin WHERE id='$hotelid'";
      $result2=mysqli_query($this->db,$sql2);
      while($row=mysqli_fetch_array($result2))
      {$image=$row['image'];
      echo

      "
        <div class='coverhotelroom col-md-12' style='background:url(".$image.");background-attachment:fixed;  background-size:cover;'>
          <!--COVER-HOTEL NAME PORTION-->
              <div class='row justify-content-md-center ' >
                    <p class='hotels ' style='text-shadow:5px 5px black;'> ".$row['company_name']." </p>
                    <p class='sprice' style='text-shadow:1px 1px black;'><kbd>(Starting from <span>
                    Rs.";

                    $min="SELECT MIN(rhotelcost) as minimum FROM room WHERE hid='$hotelid'";
                    $res=mysqli_query($this->db,$min);
                    while($mini=mysqli_fetch_array($res))
                    {
                        echo $mini['minimum'];
                    }

            echo "<sup>*</sup>)</span></kbd></p>
              </div>

              <div class='row justify-content-md-center'>

              </div>

          </div>
";
      }
    }
public function fRoomDetail()
{
  dbConnect::dbConnection();

  $sql2="SELECT * FROM room";
  $result2=mysqli_query($this->db,$sql2);
  while($row=mysqli_fetch_array($result2))
  {
    $refrigerator=$row['refrigerator'];
    $wifi=$row['wifi'];
    $hotwater=$row['hotwater'];
    $aircondition=$row['aircondition'];
    $tv=$row['tv'];
    $bathroom=$row['private_bathroom'];
    $bed=$row['noofbed'];
    $restaurant=$row['restaurant'];
    $roomservice=$row['roomservice'];
    $laundry=$row['laundry'];
    $totalroom=$row['totalroom'];
    $rimg1=$row['rimage1'];
    $rimg2=$row['rimage2'];
    $rimg3=$row['rimage3'];

    if($row['refrigerator']==1)
    {
      $refrigerator='Yes';
    }
    else {
      $refrigerator='No';
    };
    if($row['wifi']==1)
    {
     $wifi='Yes';
    }
    else {
    $wifi='No';
    }
    if($row['hotwater']==1)
    {
    $hotwater='Yes';
    }
    else {
      $hotwater='No';
    }
    if($row['aircondition']==1)
    {
      $aircondition='Yes';
    }
    else {
      $aircondition='No';
    }
    if($row['tv']==1)
    {
      $tv='Yes';
    }
    else {
      $tv='No';
    }
    if($row['private_bathroom']==1)
    {
      $bathroom='Yes';
    }
    else {
      $bathroom='No';
    }
    if($row['restaurant']==1)
    {
      $restaurant='Yes';
    }
    else {
      $restaurant='No';
    }
    if($row['roomservice']==1)
    {
      $roomservice='Yes';
    }
    else {
      $roomservice='No';
    }
    if($row['laundry']==1)
    {
      $laundry='Yes';
    }
    else {
      $laundry='No';
    }
    $hotelcost=$row['rhotelcost'];

echo "
<div class='modal fade' id='myModal".$row['rid']."'>
  <div class='modal-dialog modal-lg'>
    <div class='modal-content'>

      <!-- Modal Header -->
      <div class='modal-header'>
        <h4 class='modal-title'>".$row['rid']."</h4>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
      </div>
      <form action='hotelbookingdetail.php?book' method='GET'>
      <input type='hidden' name='roomid' value='".$row['rid']."'>
      <input type='hidden' name='hotelid' value='".$row['hid']."'>

      <!-- Modal body -->
      <div class='modal-body'>


          <div class='container'>
            <div class='bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent'>
              <div class='row'>


                <div class='col-md-6 col-lg-7 p-b-30'>
                  <div class='p-l-25 p-r-30 p-lr-0-lg'>
                    <div class='wrap-slick3 flex-sb flex-w'>
                      <div class='wrap-slick3-dots'></div>
                      <div class='wrap-slick3-arrows flex-sb-m flex-w'></div>

                      <div class='slick3 gallery-lb'>
                        <div class='item-slick3' data-thumb='".$rimg1."'>
                          <div class='wrap-pic-w pos-relative'>
                            <img src='".$rimg1."' alt='IMG-PRODUCT' >

                            <!-- <a class='flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04' href='images/hotels/room/lhh.jpg'>
                              <i class='fa fa-expand'></i> -->
                            </a>
                          </div>
                        </div>

                        <div class='item-slick3' data-thumb='".$rimg2."'>
                          <div class='wrap-pic-w pos-relative'>
                            <img src='".$rimg2."' alt='IMG-PRODUCT'>

                            <!-- <a class='flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04' href='".$rimg2."'>
                               <i class='fa fa-expand'></i> -->
                            </a>
                          </div>
                        </div>

                      </div>
                    </div>

                    <br><Br><Br>
                    <table class='table table-hover'>
                      <thead>
                        <tr>
                          <th>Room Amneties</th>
                          <th>Present</th>

                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>Refrigerator</td>
                          <td>".$refrigerator."</td>
                        </tr>
                        <tr>
                          <td>Wifi</td>
                          <td>".$wifi."</td>
                        </tr>
                        <tr>
                          <td>Hot Water</td>
                          <td>".$hotwater."</td>
                        </tr>
                        <tr>
                          <td>Air Conditioning</td>
                          <td>".$aircondition."</td>
                        </tr>
                        <tr>
                          <td>TV</td>
                          <td>".$tv."</td>
                        </tr>
                        <tr>
                          <td>Private bathrooom</td>
                          <td>".$bathroom."</td>
                        </tr>
                        <tr>
                          <td>No. of beds </td>
                          <td>".$bed."</td>
                        </tr>
                        <tr>
                          <td>Restaurant</td>
                          <td>".$restaurant."</td>
                        </tr>
                        <tr>
                          <td>Room Service</td>
                          <td>".$roomservice."</td>
                        </tr>
                        <tr>
                          <td>Laundary Service</td>
                          <td>".$laundry."</td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>

                <div class='col-md-6 col-lg-5 p-b-30'>
                  <div class='col-md-12'>
                    <h4 class='mtext-105 cl2 js-name-detail p-b-14' style='font-weight:bolder;text-transform:capitalize'>
                     ".$row['rtitle']."
                    </h4>

                    <span class='mtext-106 cl2' style='color:red;'>
                   ".$row['rhotelcost']." per night
                    </span>

                    <p class='stext-102 cl3 p-t-23'>
                     Conveniently located on Pokhara’s prominent place “Lakeside”, Hotel Barahi boasts some stunning views of the Annapurna & Machapuchare Himalayans, Phewa Lake as well as easy access to the thriving lake street. We are 3 KMS away from Pokhara domestic airport. We offer 85 deluxe and suite rooms, fusion fine dining restaurant with every evening authentic live cultural dance show, cake shop, swimming pool, public bar, meeting rooms, and SPA decorated with comfort and elegance in mind.
                   </p>

                    <!--  -->
                    <div class='p-t-33'>
                      <div class='flex-w flex-r-m p-b-10'>
                        <div class='size-203 flex-c-m respon6'>
                         No. of Room
                        </div>

                        <div class='size-204 respon6-next'>
                          <div class='rs1-select2 bor8 bg0'>
                            <select class='js-select2' name='totalroom' required>
                              ";
                              if($totalroom=='0')
                              {
                                echo "Not Available";
                              }
                              else
                              {
                                echo
                                "<option value=$totalroom>".$totalroom."</option>
                                  <option value='1'>1</option>
                                  <option value='2'>2</option";
                              }






                            echo   ">

                            </select>
                            <div class='dropDownSelect2'></div>
                          </div>
                        </div>
                      </div>
                      <div class='flex-w flex-r-m p-b-10'>
                        <div class='size-203 flex-c-m respon6'>
                       CheckIn Date
                        </div>

                        <div class='size-204 respon6-next'>
                        <div class='form-group'>
                           <div class='input-group date'>

                               <input type='date' class='form-control' placeholder='Checkin date' name='checkin' required>

                           </div>
                         </div>

                          </div>
                        </div>
                        <div class='flex-w flex-r-m p-b-10'>
                          <div class='size-203 flex-c-m respon6'>
                         CheckOut Date
                          </div>

                          <div class='size-204 respon6-next'>
                          <div class='form-group'>
                             <div class='input-group date'>

                                 <input type='date' class='form-control' placeholder='CheckOut date' name='checkout' required>
                                 <input type='hidden' name='rhotelcost' value='$hotelcost'>
                             </div>
                           </div>

                            </div>
                          </div>
                      </div>

                      <div class='flex-w flex-r-m p-b-10'>
                        <div class='size-204 flex-w flex-m respon6-next'>
                          <button class='flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail' value='#ad'>
                            Book
                          </button>
                        </div>
                      </div>
                    </div>

                    <!--  -->
                    <div class='flex-w flex-m p-l-100 p-t-40 respon7'>
                      <div class='flex-m bor9 p-r-10 m-r-11'>
                        <a href='#' class='fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100' data-tooltip='Add to Wishlist'>
                          <i class='zmdi zmdi-favorite'></i>
                        </a>
                      </div>

                      <a href='#' class='fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100' data-tooltip='Facebook'>
                        <i class='fa fa-facebook'></i>
                      </a>

                      <a href='#' class='fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100' data-tooltip='Twitter'>
                        <i class='fa fa-twitter'></i>
                      </a>

                      <a href='#' class='fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100' data-tooltip='Google Plus'>
                        <i class='fa fa-google-plus'></i>
                      </a>
                    </div>
                  </div>
                </div>


               </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal footer -->
      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
      </div>

    </div>
  </div>
</form>


";
  }
}
public function getMap($hotelid)
{
  dbConnect::dbConnection();
  $sql5="SELECT * FROM admin where id='$hotelid'";
  $result5=mysqli_query($this->db,$sql5);
  return $result5;
}
public function searchhotel($slocation)
{
  dbConnect::dbConnection();
  $sql6="SELECT * FROM admin where vtype='hotel' && location='$slocation'";
  $result6=mysqli_query($this->db,$sql6);
  return $result6;
}
public function fgetminroom($hotelid)
{
  dbConnect::dbConnection();
  $min="SELECT MIN(rhotelcost) as minimum FROM room WHERE hid='$hotelid'";
  $res=mysqli_query($this->db,$min);
  return $res;
}
public function getAllLocation()
{
    dbConnect::dbConnection();
  $sql="SELECT * FROM location ORDER BY lid";
  $result=mysqli_query($this->db,$sql);
  dbConnect::dbConnection();
$sql="SELECT * FROM location ORDER BY lid";
$result=mysqli_query($this->db,$sql);

while($row=mysqli_fetch_array($result))
{
  $location=$row['lname'];
  echo "
  <option value='$location'>$location</option>

  ";
}
}
}
 ?>
