<?php
include_once('session.php');
include('include/inc_adminheader.php');
include_once('class/classvehiclerental.php');
$vehicle=new vehicle();
include_once('class/classlocation.php');
$location=new Location;

if($_SERVER['REQUEST_METHOD']=='POST')
{
  extract($_POST);
  $id=$_SESSION['id'];

  $vehicle->createVehicle($vtitle,$vtype,$vdescription,$vtotalseat,$vcost,$vkeyword,$id);
}
if($_SERVER['REQUEST_METHOD']=='GET')
{
  extract($_GET);
@$vehicle->publishvehicle($vid,$vstatus);
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
                    <?php
                    if(($_SESSION['admintype']=='4' && $_SESSION['vendor']=='rental') || $_SESSION['admintype']=='1')
                     {
                       ?>
                       <div class="fresh-table">
                         <div class="toolbar">
                           <?php
                           if(($_SESSION['admintype']=='4' && $_SESSION['vendor']=='rental') )
                            {?>
                           <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                           Add New Vehicle for Rent
                           </button>
                           <?php
                         }
                         else {
                           echo " ";
                         }
                            ?>
                  </div>
                      <table id="fresh-table" class="table table-bordered" >
                          <thead>
                            <tr>
                              <th data-field="vid" data-sortable="true">Vid</th>
                               <th data-field="id" data-sortable="true">Added By </th>
                              <th data-field="vtitle" data-sortable="true">Vehicle title</th>
                              <th data-field="vtype" data-sortable="true">Vehicle type</th>
                              <th data-field="vdescription" data-sortable="true">Vehicle description</th>
                              <th data-field="vtotalseat" data-sortable="true">total no of seat</th>
                               <th data-field="vcost" data-sortable="true">total cost</th>
                               <th data-field="vadded_date" data-sortable="true">added date</th>
                               <th data-field="vstatus" data-sortable="true">status</th>
                                 <th data-field="vkeyword" data-sortable="true">keyword</th>

                              <th data-field="image1" data-sortable="true">Image1</th>
                               <th data-field="image2" data-sortable="true">Image2</th>



                                <th data-field="action">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                                   <?php
                                                   $sesid=$_SESSION['id'];
                                                   $admintype=$_SESSION['admintype'];
                                                   $vehiclev=$vehicle->getAllvehicle($sesid,$admintype);
                                                   foreach($vehiclev as $key => $vehiclevalue)
                                                   {
                                                      $vid=$vehiclevalue['vid'];
                                                       $vstatus=$vehiclevalue['vstatus'];

                                                     ?>
                                                     <td><?php echo $vid; ?></td>
                                                          <td><?php echo $vehiclevalue['id']; ?></td>
                                                      <td><?php echo $vehiclevalue['vtitle']; ?></td>
                                                       <td><?php echo $vehiclevalue['vtype']; ?></td>
                                                     <td><?php echo substr($vehiclevalue['vdescription'],0,45); ?>......</td> </td>
                                                       <td><?php echo $vehiclevalue['vtotalseat']; ?></td>
                                                       <td><?php echo $vehiclevalue['vcost']; ?></td>
                                                       <td><?php echo $vehiclevalue['vadded_date']; ?></td>


                                                     <td>
                                                       <form action=" " method="GET">
                                                       <input type="hidden" name="vid" value="<?php echo $vid;?>">
                                                       
                                                       <input type="hidden" name="vstatus" value="<?php echo $vstatus;?>">

                                                        <?php

                                                       if($vstatus=='1')
                                                       {
                                                         echo "  <input type='submit' class='btn btn-success btn-xs' value='Published'>";
                                                       }
                                                       else
                                                       {echo " <input type='submit' class='btn btn-danger btn-xs' value='Not Published'>";}
                                                      ?>

                                                     </td>
                                                      <td><?php echo $vehiclevalue['vkeyword']; ?></td>

                                                        <td><img src="../<?php echo $vehiclevalue['vimg1']; ?>" alt="vehicle image1" style="height:40px;width:40px;"></td>
                                                         <td><img src="../<?php echo $vehiclevalue['vimg2']; ?>" alt="vehicle image2" style="height:40px;width:40px;"></td>




                                                         <?php
                                                           if(($_SESSION['admintype']=='4' && $_SESSION['vendor']=='rental'))
                                                           {
                                                             ?>
                                                          <td>
                                                       <a href='edit.php?action=edit&vid=<?php echo $vid;?>&of=vehicle&sidebar=vehicle'> <button type='button' rel='tooltip' title='Edit vehicle' class='btn btn-success btn-simple btn-xs'><i class='fa fa-edit'></i></button></a>
                                                       <a href='delete.php?action=delete&vid=<?php echo $vid;?>&of=vehicle'><button type='button' rel='tooltip' title='Delete vehicle' class='btn btn-danger btn-simple btn-xs' id='delbutton'>
                                                         <i class='fa fa-times'></i>
                                                       </button></a>
                                                     </td>
                                                   <?php }
                                                   else {

                                                   } ?>
                                                       </form>
                                                     </tr>
                                                   <?php } ?>



                          </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>
<?php
}
else {
  echo "You dont have the privilage to view this";
}
 ?>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Add new vehicle for rent</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="" enctype='multipart/form-data'>

             <input type="hidden"  name="vid" id="vid">

          <div class="form-group">
             <label for="exampleInput1" class="bmd-label-floating">Vehicle title</label>
             <input type="text" class="form-control"  name="vtitle" id="vtitle" required>
          </div>

          <div class="form-group">
             <label for="exampleInput1" class="bmd-label-floating">Vehicle type</label>
             <select class="form-control"  name="vtype">
               <option value="bike">Bike</option>
               <option value="motorcycle">MotorCycle</option>
               <option value="car">Car</option>
               <option value="micro">MicroBus</option>
               <option value="4wd">4WD</option>
             </select>

          </div>

                    <div class="form-group">
                      <label class='control-label'>Description</label>
                      <textarea class='form-control' rows='5' name='vdescription'></textarea>
                    </div>


              <div class="form-group">
             <label for="exampleInput1" class="bmd-label-floating">Total no.of seat </label>
             <input type="text" class="form-control"  name="vtotalseat" id="vtotalseat" required>

          </div>


              <div class="form-group">
             <label for="exampleInput1" class="bmd-label-floating">Total cost </label>
             <input type="text" class="form-control"  name="vcost" id="vcost" required>

          </div>



                 </div>
                <div class="form-group">
             <label for="exampleInput1" class="bmd-label-floating">Keyword </label>
             <input type="text" class="form-control"  name="vkeyword" id="vkeyword">

          </div>


          <div class="form-group">
            <label for="exampleInput1" class="bmd-label-floating">Click to upload image</label>
            <input type='file' name='fileToUpload' id='fileToUpload' required>

          </div>
          <div class="form-group">
            <label for="exampleInput1" class="bmd-label-floating">Click to upload image</label>
            <input type='file' name='coverToUpload' id='coverToUpload'>

          </div>




      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

          <input type="submit" value="Add" class="btn btn-success">
          </form>
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
