<?php @$sidebar=$_GET['sidebar'];
include_once('session.php');
$admintype=$_SESSION['admintype'];
$vendortype=$_SESSION['vendor'];
?>
<div class="sidebar" data-color="red" data-image="../images/logo.png">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="logo">
        <a href="../" class="simple-text" target="_blank">
            Virtual Travel Guide
        </a>
    </div>
<div class="sidebar-wrapper">
    <ul class="nav">

        <li class="<?php if($sidebar=='dashboard')
                          {
                            echo 'active';
                          }
                          else {
                            echo 'nonactive';
                          }?>">
            <a href="index.php?sidebar=dashboard">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
            </a>
        </li>
        <?php


        if($_SESSION['admintype']=='1')
        {

        ?>


        <li class="<?php if($sidebar=='admin')
                          {
                            echo 'active';
                          }
                          else {
                            echo 'nonactive';
                          }?>">
            <a href="admin.php?sidebar=admin">
                <i class="material-icons">person</i>

                <p>Admins<sup style="color:red;">A</sup></p>
            </a>
        </li>
        <li class="<?php if($sidebar=='vendor')
                          {
                            echo 'active';
                          }
                          else {
                            echo 'nonactive';
                          }?>">
            <a href="vendor.php?sidebar=vendor">
                <i class="material-icons">store_mall_directory</i>

                <p>Vendors<sup style="color:red;">A</sup></p>
            </a>
        </li>
        <li class="<?php if($sidebar=='user')
                          {
                            echo 'active';
                          }
                          else {
                            echo 'nonactive';
                          }?>">
            <a href="user.php?sidebar=user">
                <i class="material-icons">people</i>
                <p>Users(Customers)<sup style="color:red;">A</sup></p>
            </a>
        </li>
        <li class="<?php if($sidebar=='location')
                          {
                            echo 'active';
                          }
                          else {
                            echo 'nonactive';
                          }?>">
            <a href="location.php?sidebar=location">
                <i class="material-icons">place</i>
                <p>Location<sup style="color:red;">A</sup></p>
            </a>
        </li>
        <li class="<?php if($sidebar=='todo')
                          {
                            echo 'active';
                          }
                          else {
                            echo 'nonactive';
                          }?>">
            <a href="todo.php?sidebar=todo">
                <i class="material-icons">where_to_vote</i>
                <p>Things to do<sup style="color:red;">A</sup></p>
            </a>
        </li>
        <li class="<?php if($sidebar=='hotel')
                          {
                            echo 'active';
                          }
                          else {
                            echo 'nonactive';
                          }?>">


            <a href="hotel.php?sidebar=hotel">

                <i class="material-icons">domain</i>
                <p>Hotel<sup style="color:red;">A</sup></p>
            </a>
        </li>
        <!-- <li class="<?php if($sidebar=='homestay')
                          {
                            echo 'active';
                          }
                          else {
                            echo 'nonactive';
                          }?>">
            <a href="homestay.php?sidebar=homestay">
                <i class="material-icons">local_hotel</i>
                <p>Homestay</p>
            </a>
        </li> -->
        <?php
        }
        ?>

        <?php
        if($_SESSION['vendor']=='hotel' )
        {
          ?>


        <li class="<?php if($sidebar=='room')
                          {
                            echo 'active';
                          }
                          else {
                            echo 'nonactive';
                          }?>">
            <a href="hotelroom.php?sidebar=room">
                <i class="material-icons">local_hotel</i>
                <p>Hotel Rooms</p>
            </a>
        </li>
        <?php
      }
      if($_SESSION['vendor']=='package' || $_SESSION['admintype']=='1')
      {


     ?>
        <li class="<?php if($sidebar=='package')
                          {
                            echo 'active';
                          }
                          else {
                            echo 'nonactive';
                          }?>">
            <a href="package.php?sidebar=package">
                <i class="material-icons">loyalty</i>
                <p>Package</p>
            </a>
        </li>
      <?php }
if($_SESSION['vendor']=='rental' || $_SESSION['admintype']=='1')
{
     ?>

        <li class="<?php if($sidebar=='rental')
                          {
                            echo 'active';
                          }
                          else {
                            echo 'nonactive';
                          }?>">
            <a href="vehiclerental.php?sidebar=rental">
                <i class="material-icons">motorcycle</i>
                <p>Vehicle Rental</p>
            </a>
        </li>
<?php }
if(($admintype=='4' && $vendortype=='hotel') || ($admintype=='4' && $vendortype=='package') ||($admintype=='4' && $vendortype=='rental') )
{
?>
<li class="<?php if($sidebar=='booking')
                  {
                    echo 'active';
                  }
                  else {
                    echo 'nonactive';
                  }?>">
    <a href="booking.php?sidebar=booking">
        <i class="material-icons">gavel</i>
        <p>Booking</p>
    </a>
</li>
<?php
}
if($_SESSION['admintype']=='1')
{

?>
<li class="<?php if($sidebar=='blog')
                  {
                    echo 'active';
                  }
                  else {
                    echo 'nonactive';
                  }?>">
    <a href="blog.php?sidebar=blog">
        <i class="material-icons">forum</i>
        <p>Blog</p>
    </a>
</li>
<?php }  ?>
<?php
if($_SESSION['admintype']=='1' || $_SESSION['vendor']=='ecommerce' )
{
?>
<li class="<?php if($sidebar=='shop')
                  {
                    echo 'active';
                  }
                  else {
                    echo 'nonactive';
                  }?>">
    <a href="shop.php?sidebar=shop">
        <i class="material-icons">shopping_cart</i>
        <p>Shop</p>
    </a>
</li>
<?php } ?>
<?php
if( $_SESSION['vendor']=='ecommerce' )
{
?>
<li class="<?php if($sidebar=='product')
                  {
                    echo 'active';
                  }
                  else {
                    echo 'nonactive';
                  }?>">
    <a href="uservendor.php?sidebar=product">
        <i class="material-icons">style</i>
        <p>My Product</p>
    </a>
</li>
<?php } ?>
         <!-- <li>
            <a href="./user.html">
                <i class="material-icons">person</i>
                <p></p>
            </a>
        </li> -->
        <!-- <li>
            <a href="./table.html">
                <i class="material-icons">content_paste</i>
                <p>Table List</p>
            </a>
        </li>
        <li>
            <a href="./typography.html">
                <i class="material-icons">library_books</i>
                <p>Typography</p>
            </a>
        </li>
        <li>
            <a href="./icons.html">
                <i class="material-icons">bubble_chart</i>
                <p>Icons</p>
            </a>
        </li>
        <li>
            <a href="./maps.html">
                <i class="material-icons">location_on</i>
                <p>Maps</p>
            </a>
        </li>
      -->

    </ul>
</div>
    </div>
