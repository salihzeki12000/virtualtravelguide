<?php
include_once('session.php');
include('include/inc_adminheader.php');
include_once('class/classvendorinfo.php');
 $vendorinfoo=new vendorinfo();

if($_SERVER['REQUEST_METHOD']=='POST')
{
  extract($_POST);
 
  $vendorinfoo->createVendorinfo($cname,$caddress,$cemail,$cphone,$ctype,$cdescription,$cphoto,$cremark);
}
?>

<div class="wrapper">

        <?php include('include/inc_leftsidebar.php'); ?>

    <div class="main-panel">
      <?php include('include/inc_adminnavbar.php'); ?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                  <div class="card col-md-12">
                    <!-- Button trigger modal -->

                       <div class="fresh-table">
                         <div class="toolbar">
                           <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                           vendor information 
                           </button>
                  </div>
                      <table id="fresh-table" class="table table-bordered" >
                          <thead>
                            <tr>
                              <th data-field="vid" data-sortable="true">id</th>
                              <th data-field="vname" data-sortable="true">name</th>
                              <th data-field="caddress" data-sortable="true">address</th>
                              <th data-field="vemail" data-sortable="true">Email</th>
                              <th data-field="vphone" data-sortable="true">Phone</th>
                               <th data-field="vtype" data-sortable="true">type</th>
                               <th data-field="vdescription" data-sortable="true">Description</th>
							   <th data-field="vpanno" data-sortable="true">panno/reg no</th>
                             <th data-field="vphoto" data-sortable="true">Image</th>
                                
                               <th data-field="id" data-sortable="true">Remark </th>
                              

                                <th data-field="action">Action</th>
                            </tr>
                          </thead>
                          <tbody>

                <?php
             $vendorv=$vendorinfoo->getAllvendor();
			 foreach($vendorv as $key=> $vendorvalue)
			 {
					$cid=$vendorvalue['id'];
				 ?>
				 <tr>
				 <td> <?php echo $vendorvalue['id']; ?> </td>
				 <td> <?php echo $vendorvalue['cname']; ?> </td>
				 <td> <?php echo $vendorvalue['caddress']; ?> </td>
				 <td> <?php echo $vendorvalue['cemail']; ?> </td>
				 <td> <?php echo $vendorvalue['cphone']; ?> </td>
				 <td> <?php echo $vendorvalue['ctype']; ?> </td>
				  <td> <?php echo $vendorvalue['cdescription']; ?> </td>
				  <td> <?php echo $vendorvalue['panno']; ?> </td>
				  <td><img src="../<?php echo $vendorvalue['dpic']?>" style='height:80px;width:120px;' alt='First image'></td>
				
					<td> <?php echo $vendorvalue['cremark']; ?> </td>
					<td> <a href='delete.php?action=delete&id=<?php echo $cid; ?>&of=vendorinfo'><button type='button' rel='tooltip' title='Delete venderinfo' class='btn btn-danger btn-simple btn-xs' id='delbutton'>
      <i class='fa fa-times'></i>
      </button></a> </td>
					   
					   
				 
				 <?php
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
</div>



<!-- Modal -->

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
