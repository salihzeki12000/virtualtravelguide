<?php
include_once('session.php');
include('include/inc_adminheader.php');
include_once('class/classbooking.php');
include_once('class/classpackage.php');
$package=new Package();

$admintype=$_SESSION['admintype'];
$vendortype=$_SESSION['vendor'];
$sesid=$_SESSION['id'];
$booking=new Booking();
?>
<div class="wrapper">

        <?php include('include/inc_leftsidebar.php'); ?>

    <div class="main-panel">
      <?php include('include/inc_adminnavbar.php'); ?>
        <div class="content">
<div class="container-fluid">
    <div class="row">
      <div class="card col-md-12" >

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
         ?>
        <tr>
            <td><?php echo $packagebookvalue['pbid'];?></td>
            <td><?php echo $packagebookvalue['cid'];?></td>
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
                echo "<kbd class='btn btn-xs btn-danger'>Canceled</kbd>";
                break;
              }
              case '1':
              {
                echo "<kbd class='btn btn-xs btn-success'>Enabled</kbd>";
                break;
              }
              case '2':
              {
                echo "<kbd class='btn btn-xs btn-warning'>Confirmation Pending</kbd>";
                break;
              }
              case '3':
              {
                echo "<kbd class='btn btn-xs btn-success'>Successfully Booked</kbd>";
                break;
              }

            }

            ?></td>
        </tr>
      <?php }
            }
     ?>
      </tbody>
    </table>

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
