<?php
include_once('session.php');
include('include/inc_adminheader.php');
include_once('class/classbooking.php');
include_once('class/classhotelroom.php');
include_once('class/classpackage.php');
$package=new Package();
$room=new Room();

$admintype=$_SESSION['admintype'];
$vendortype=$_SESSION['vendor'];
$sesid=$_SESSION['id'];
$booking=new Booking();
if(isset($_GET["action"]))
{
if($_GET["action"] == "vehicle")
{
if($_SERVER['REQUEST_METHOD']=='GET')
{
    extract($_GET);
@$booking->changeVehicleBookingStatus($upd_status,$vbid);
}
}
if($_GET["action"] == "hotel")
{
if($_SERVER['REQUEST_METHOD']=='GET')
{
    extract($_GET);
@$booking->changeHotelBookingStatus($upd_status,$hbid);
}
}
if($_GET["action"] == "package")
{
if($_SERVER['REQUEST_METHOD']=='GET')
{
    extract($_GET);
@$booking->changePackageBookingStatus($upd_status,$pbid);
}
}
}
?>
<div class="wrapper">

        <?php include('include/inc_leftsidebar.php'); ?>

    <div class="main-panel">
      <?php include('include/inc_adminnavbar.php'); ?>
        <div class="content">
<div class="container-fluid">
    <div class="row">
      <div class="card col-md-12" >
        <?php
        if($vendortype=='hotel')
        {
        ?>
        <div class="fresh-table">
          <div class="toolbar">

         </div>

        <table  id="fresh-table" class="table table-bordered" style="text-align:center;">
        <thead>
          <tr>
            <th data-field="BookingID" data-sortable="true">BookingID</th>
            <th data-field="customerid" data-sortable="true">CustomerID</th>
            <th data-field="customerusername" data-sortable="true">CustomerUserName</th>
            <th data-field="hotelusername" data-sortable="true">HotelUsername</th>
            <th data-field="roomid" data-sortable="true">RoomID</th>
            <th data-field="room cost" data-sortable="true">Room Cost</th>
            <th data-field="room booked" data-sortable="true">Rooms Booked</th>
            <th data-field="bookedon" data-sortable="true">BookedOn</th>
            <th data-field="check-in date" data-sortable="true">Check-in Date</th>
            <th data-field="check-out date" data-sortable="true">Check-out Date</th>
            <th data-field="duration" data-sortable="true">Duration</th>
            <th data-field="cost" data-sortable="true">Total Cost</th>
            <th data-field="status" data-sortable="true">Status</th>
            <th data-field="action" data-sortable="true">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $hotelid=$room->getHotelId($sesid);
            foreach($hotelid as $key => $hotelvalue)
            {
              $hotelid=$hotelvalue['id'];

           ?>
          <?php
          $bookingdetail=$booking->getAllBooking($admintype,$vendortype,$sesid,$hotelid);
          foreach ($bookingdetail as $key => $bookingvalue)
          {
            ?>
            <tr>
              <td><?php echo $bookingvalue['bid'];?></td>
              <td><?php
              $cid=$bookingvalue['cid'];
              echo $cid;?></td>
              <td><?php
              $customerdetail=$booking->getBookingCustomerDetail($cid);
              foreach($customerdetail as $key => $cusdetail)
              {
                echo  $cusdetail['cusername'];
              }
              ?>
              (
              <?php echo $bookingvalue['cid'];?>
              )

              </td>
              <td>
                <?php
                $hid=$bookingvalue['bid'];
                $hoteldetail=$booking->getBookingHotelDetail($hid);
                foreach($hoteldetail as $key => $hotdetail)
                {
                  echo  $hotdetail['company_name'];
                }

                ?>
              </td>
              <td><?php echo $bookingvalue['rid'];?></td>
              <td>Rs. <?php
              $rid=$bookingvalue['rid'];
              $roomdetail=$booking->getBookingRoomDetail($rid);
              foreach($roomdetail as $key => $roomvalue)
              {
                echo $roomvalue['rhotelcost'];
              }
               ?></td>
              <td><?php echo $bookingvalue['rno'];?></td>
              <td><?php echo $bookingvalue['hbook_date'];?></td>
              <td><?php echo $bookingvalue['checkin'];?></td>
              <td><?php echo $bookingvalue['checkout'];?></td>
              <td><?php echo $bookingvalue['bduration'];?> days</td>
              <td>Rs. <?php echo $bookingvalue['b_h_cost'];?></td>
              <td><?php
              $status=$bookingvalue['b_h_status'];
              switch($status)
              {
                case '0':
                {
                  echo "<kbd class='btn btn-xs btn-danger'>Customer Cancelled</kbd>";
                  break;
                }
                case '1':
                {
                  echo "<kbd class='btn btn-xs btn-success'>Transaction Complete</kbd>";
                  break;
                }
                case '2':
                {
                  echo "<kbd class='btn btn-xs btn-warning'>Confirmation Pending</kbd>";
                  break;
                }
                case '3':
                {
                  echo "<kbd class='btn btn-xs btn-info'>Booking Confirm</kbd>";
                  break;
                }
                case '4':
                {
                  echo "<kbd class='btn btn-xs btn-danger'>Vendor Cancelled</kbd>";
                  break;
                }


              }
              ?></td>
              <td>
                    <div class="form-group">
                <form action=" " method="GET">
                  <input type="hidden" value="<?php echo $hid; ?>" name="hbid">
                  <input type="hidden" name="action" value="hotel">

                  <select class="form-control" name="upd_status">
                    <option value="2">Booking Pending</option>
                    <option value="1">Transaction Complete</option>
                    <option value="3">Booking Confirmed</option>
                    <option value="4">Vendor Cancelation</option>


                  </select>
                  <input type="submit" value="Change" class="btn btn-info btn-xs">

                </form>
              </div>
              </td>


         <?php } }?>
        </tbody>
      </table>
    </div>
  </div>

    <?php }
    ?>
    <?php
    if($vendortype=='package')
    {
      ?>
      <div class="fresh-table">
        <div class="toolbar">

       </div>
      <table  id="fresh-table" class="table table-bordered" style="text-align:center;">
      <thead>
        <tr>
          <th data-field="Package BookingID" data-sortable="true">Package BookingID</th>
          <th data-field="customerid" data-sortable="true">CustomerID</th>
          <th data-field="package id" data-sortable="true">Package ID</th>
          <th data-field="no of person" data-sortable="true">No. of Person</th>
          <th data-field="tour start date" data-sortable="true">Tour Start Date</th>
          <th data-field="duration" data-sortable="true">Duration</th>
          <th data-field="total cost" data-sortable="true">Total Cost</th>
          <th data-field="bookedon" data-sortable="true">BookedOn</th>
          <th data-field="status" data-sortable="true">Status</th>
          <th data-field="action" data-sortable="true">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $adminid=$_SESSION['id'];
        $packagevariable=$booking->getPackageDetail($adminid);
        foreach($packagevariable as $key => $packagevalu)
        {
          $packageid=$packagevalu['pid'];
          $packagebvar=$booking->getAllPackageBooking($packageid);
          foreach($packagebvar as $key => $packagebookvalue)
          {
              $packageid=$packagebookvalue['pbid'];
              $cid=$packagebookvalue['cid'];
         ?>
        <tr>
            <td><?php echo $packagebookvalue['pbid'];?></td>
            <td><?php
            $customerdetail=$booking->getBookingCustomerDetail($cid);
              foreach($customerdetail as $key => $cusdetail)
              {
                echo  $cusdetail['cusername'];
                  echo " (".$cusdetail['cid'].")";
              }?></td>
            <td><?php echo $packagebookvalue['pid'];?></td>
            <td><?php echo $packagebookvalue['totalno'];?></td>
            <td><?php echo $packagebookvalue['startdate'];?></td>
            <td><?php echo $packagebookvalue['pduration'];?></td>
            <td><?php echo $packagebookvalue['pcost'];?></td>
            <td><?php echo $packagebookvalue['booked_date'];?></td>
            <td><?php
            $status=$packagebookvalue['status'];
            switch($status)
            {
              case '0':
              {
                echo "<kbd class='btn btn-xs btn-danger'>Customer Cancelled</kbd>";
                break;
              }
              case '1':
              {
                echo "<kbd class='btn btn-xs btn-success'>Transaction Complete</kbd>";
                break;
              }
              case '2':
              {
                echo "<kbd class='btn btn-xs btn-warning'>Confirmation Pending</kbd>";
                break;
              }
              case '3':
              {
                echo "<kbd class='btn btn-xs btn-info'>Booking Confirm</kbd>";
                break;
              }
              case '4':
              {
                echo "<kbd class='btn btn-xs btn-danger'>Vendor Cancelled</kbd>";
                break;
              }

            }

            ?></td>
            <td>
                  <div class="form-group">
              <form action=" " method="GET">
                <input type="hidden" value="<?php echo $packageid; ?>" name="pbid">
                <input type="hidden" name="action" value="package">

                <select class="form-control" name="upd_status" >
                  <option value="2">Booking Pending</option>
                  <option value="1">Transaction Complete</option>
                  <option value="3">Booking Confirmed</option>
                  <option value="4">Vendor Cancelation</option>


                </select>
                <input type="submit" value="Change" class="btn btn-info btn-xs">

              </form>
            </div>
            </td>
        </tr>
      <?php }
            }
     ?>
      </tbody>
    </table>

    <?php  }

    ?>

  <?php
  ?>
  <?php
  if($vendortype=='rental')
  {
    ?>
    <div class="fresh-table">
      <div class="toolbar">

     </div>
    <table  id="fresh-table" class="table table-bordered" style="text-align:center;">
    <thead>
      <tr>
        <th data-field="Package BookingID" data-sortable="true">BookingID</th>
        <th data-field="customerid" data-sortable="true">CustomerID</th>
        <th data-field="package id" data-sortable="true">Vehicle ID</th>
        <th data-field="tour start date" data-sortable="true">Booking for</th>
        <th data-field="duration" data-sortable="true">Duration</th>
        <th data-field="total cost" data-sortable="true">Total Cost</th>
        <th data-field="bookedon" data-sortable="true">Booked On</th>
        <th data-field="status" data-sortable="true">Status</th>
        <th data-field="action" data-sortable="true">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $adminid=$_SESSION['id'];
      $vehiclevariable=$booking->getvehicleDetail($adminid);
      foreach($vehiclevariable as $key => $vehiclevalu)
      {
        $vehicleid=$vehiclevalu['vid'];
        $vehiclebvar=$booking->getAllvehicleBooking($vehicleid);
        foreach($vehiclebvar as $key => $vehiclebookvalue)
        {
            $vehicleid=$vehiclebookvalue['vbid'];
            $cid=$vehiclebookvalue['cid'];
            $bookid=$vehiclebookvalue['vbid'];
       ?>
      <tr>
          <td><?php echo $vehiclebookvalue['vbid'];?></td>
          <td><?php
          $customerdetail=$booking->getBookingCustomerDetail($cid);
            foreach($customerdetail as $key => $cusdetail)
            {
              echo  $cusdetail['cusername'];
              echo " (".$cusdetail['cid'].")";
            }
          ?></td>
          <td><?php echo $vehiclebookvalue['vid'];?></td>
          <td><?php echo $vehiclebookvalue['vbstart_date'];?></td>
          <td><?php echo $vehiclebookvalue['vbduration'];?></td>
          <td><?php echo $vehiclebookvalue['vbtotal_cost'];?></td>
          <td><?php echo $vehiclebookvalue['vbbook_date'];?></td>
          <td><?php
          $status=$vehiclebookvalue['vbstatus'];
          switch($status)
          {
            case '0':
            {
              echo "<kbd class='btn btn-xs btn-danger'>Customer Cancelled</kbd>";
              break;
            }
            case '1':
            {
              echo "<kbd class='btn btn-xs btn-success'>Transaction Complete</kbd>";
              break;
            }
            case '2':
            {
              echo "<kbd class='btn btn-xs btn-warning'>Confirmation Pending</kbd>";
              break;
            }
            case '3':
            {
              echo "<kbd class='btn btn-xs btn-info'>Booking Confirm</kbd>";
              break;
            }
            case '4':
            {
              echo "<kbd class='btn btn-xs btn-danger'>Vendor Cancelled</kbd>";
              break;
            }

          }

          ?></td>
          <td>
                <div class="form-group">
            <form action=" " method="GET">
              <input type="hidden" value="<?php echo $bookid; ?>" name="vbid">
              <input type="hidden" name="action" value="vehicle">

              <select class="form-control" name="upd_status" >
                <option value="2">Booking Pending</option>
                <option value="1">Transaction Complete</option>
                <option value="3">Booking Confirmed</option>
                <option value="4">Vendor Cancelation</option>


              </select>
              <input type="submit" value="Change" class="btn btn-info btn-xs">

            </form>
          </div>
          </td>
      </tr>
    <?php }
          }
   ?>
    </tbody>
  </table>

  <?php  }

  ?>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>

<script type="text/javascript" src="assets/js/jquery-1.11.2.min.js"></script>

<script type="text/javascript" src="assets/js/bootstrap-table.js"></script>
<script type="text/javascript">
       var $table = $('#fresh-table'),
           $alertBtn = $('#alertBtn'),
           full_screen = false;

       $().ready(function(){
           $table.bootstrapTable({
               toolbar: ".toolbar",

               showRefresh: true,
               search: true,
               showToggle: true,
               showColumns: true,
               pagination: true,
               striped: true,
               pageSize: 8,
               pageList: [8,10,25,50,100],

               formatShowingRows: function(pageFrom, pageTo, totalRows){
                   //do nothing here, we don't want to show the text "showing x of y from..."
               },
               formatRecordsPerPage: function(pageNumber){
                   return pageNumber + " rows visible";
               },
               icons: {
                   refresh: 'fa fa-refresh',
                   toggle: 'fa fa-th-list',
                   columns: 'fa fa-columns',
                   detailOpen: 'fa fa-plus-circle',
                   detailClose: 'fa fa-minus-circle'
               }
           });



           $(window).resize(function () {
               $table.bootstrapTable('resetView');
           });


           window.operateEvents = {
               'click .like': function (e, value, row, index) {
                   alert('You click like icon, row: ' + JSON.stringify(row));
                   console.log(value, row, index);
               },
               'click .edit': function (e, value, row, index) {
                   alert('You click edit icon, row: ' + JSON.stringify(row));
                   console.log(value, row, index);
               },
               'click .remove': function (e, value, row, index) {
                   $table.bootstrapTable('remove', {
                       field: 'id',
                       values: [row.id]
                   });

               }
           };

           $alertBtn.click(function () {
               alert("You pressed on Alert");
           });

       });


       function operateFormatter(value, row, index) {
           return [
               '<a rel="tooltip" title="Like" class="table-action like" href="javascript:void(0)" title="Like">',
                   '<i class="fa fa-heart"></i>',
               '</a>',
               '<a rel="tooltip" title="Edit" class="table-action edit" href="javascript:void(0)" title="Edit">',
                   '<i class="fa fa-edit"></i>',
               '</a>',
               '<a rel="tooltip" title="Remove" class="table-action remove" href="javascript:void(0)" title="Remove">',
                   '<i class="fa fa-remove"></i>',
               '</a>'
           ].join('');
       }


   </script>
   <?php include('include/inc_adminfooterscripts.php'); ?>
