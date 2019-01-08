<?php
include_once('session.php');
include('include/inc_adminheader.php');
include_once('class/classhomestay.php');
$homestay=new homestay();
include_once('class/classlocation.php');
$location=new Location;
$sesid=$_SESSION['id'];

if($_SERVER['REQUEST_METHOD']=='POST')
{
  extract($_POST);
  $id=$_SESSION['id'];

  $homestay->createHomestay($sesid,$hstitle,$hslocation,$hslatitude,$hslongitude,$hsdescription,$hscost);
}
if($_SERVER['REQUEST_METHOD']=='GET')
{
  extract($_GET);
@$homestay->publishhomestay($hsid,$hsstatus);
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
                           Add New Homestay
                           </button>
                  </div>
                      <table id="fresh-table" class="table table-bordered" >
                          <thead>
                            <tr>
                              <th data-field="id" data-sortable="true">id</th>
                                <th data-field="Admin Id" data-sortable="true">Admin Id</th>
                              <th data-field="Homestay title" data-sortable="true">Homestay title</th>
                              <th data-field="vtype" data-sortable="true">Location of homestay</th>
                              <th data-field="latitude" data-sortable="true">Latitude</th>
                              <th data-field="longitude" data-sortable="true">Longitude</th>
                              <th data-field="vdescription" data-sortable="true">Homestay description</th>
                              <th data-field="hstotalcost" data-sortable="true">total cost</th>
                               <th data-field="hsadded_date" data-sortable="true">added date</th>



                              <th data-field="image1" data-sortable="true">Image1</th>
                               <th data-field="image2" data-sortable="true">Image2</th>
                                 <th data-field="hsstatus" data-sortable="true">status</th>


                                <th data-field="action">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                                   <?php
                                                   $homestayh=$homestay->getAllhomestay();
                                                   foreach($homestayh as $key => $homestayvalue)
                                                   {
                                                      $hsid=$homestayvalue['hsid'];
                                                       $hsstatus=$homestayvalue['hsstatus'];

                                                     ?>
                                                     <td><?php echo $hsid; ?></td>
                                                        <td><?php echo $homestayvalue['aid']; ?></td>
                                                      <td><?php echo $homestayvalue['hstitle']; ?></td>
                                                       <td><?php echo $homestayvalue['hslocation']; ?></td>
                                                        <td><?php echo $homestayvalue['hslatitude']; ?></td>
                                                         <td><?php echo $homestayvalue['hslongitude']; ?></td>
                                                     <td><?php echo substr($homestayvalue['hsdescription'],0,45); ?>......</td> ?></td>

                                                       <td>Rs. <?php echo $homestayvalue['hscost']; ?></td>
                                                       <td><?php echo $homestayvalue['hsadded_date']; ?></td>

                                                            <td><img src="../<?php echo $homestayvalue['hsimg1']; ?>" alt="homestay image1" style="height:60px;width:60px;"></td>
                                                         <td><img src="../<?php echo $homestayvalue['hsimg2']; ?>" alt="homestay image2" style="height:60px;width:60px;"></td>


                                                     <td>
                                                       <form action=" " method="GET">
                                                       <input type="hidden" name="hsid" value="<?php echo $hsid;?>">
                                                       <input type="hidden" name="hsstatus" value="<?php echo $hsstatus;?>">


                                                        <?php

                                                       if($hsstatus=='1')
                                                       {
                                                         echo "  <input type='submit' class='btn btn-success btn-xs' value='Published'>";
                                                       }
                                                       else
                                                       {echo " <input type='submit' class='btn btn-danger btn-xs' value='Not Published'>";}
                                                      ?>
                                                     </td>



                                                          <td>
                                                       <a href='edit.php?action=edit&hsid=<?php echo $hsid;?>&of=homestay&sidebar=homestay'> <button type='button' rel='tooltip' title='Edit homestay' class='btn btn-success btn-simple btn-xs'><i class='fa fa-edit'></i></button></a>
                                                       <a href='delete.php?action=delete&hsid=<?php echo $hsid;?>&of=homestay'><button type='button' rel='tooltip' title='Delete homestay' class='btn btn-danger btn-simple btn-xs' id='delbutton'>
                                                         <i class='fa fa-times'></i>
                                                       </button></a>
                                                     </td>
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



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Add new Home for stay</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="" enctype='multipart/form-data'>

             <input type="hidden"  name="hsid" id="hsid">
          <div class="form-group">
             <label for="exampleInput1" class="bmd-label-floating">homestay title</label>
             <input type="text" class="form-control"  name="hstitle" id="hstitle">
          </div>


          <div class="form-group">
             <label for="exampleInput1" class="bmd-label-floating">homestay location</label>
             <select class="form-control" name="hslocation">
            <?php   $location->getAllLocation();?>


             </select>

          </div>
          <div class="form-group">
             <label for="exampleInput1" class="bmd-label-floating">Map</label>
             <fieldset class="gllpLatlonPicker">
               <!-- <input type="text" class="gllpSearchField">
               <input type="button" class="gllpSearchButton" value="search"> -->
               <div class="gllpMap">Google Maps</div>
               <br/>
               <div class="col-sm-2 ">
                 <div class="form-group">

                   <label class='control-label'>Lat/Lon</label>
                 </div>
               </div>
               <div class="col-sm-5 ">
                 <div class="form-group">
                   <input type="text" class="gllpLatitude form-control" name="hslatitude" value="27.737849299999997"/>
                 </div>
               </div>
               <div class="col-sm-5 ">
                 <div class="form-group">
                   <input type="text" class="gllpLongitude form-control" name="hslongitude" value="85.3286484"/>
                 </div>
               </div>
               <div class="col-sm-3 ">
                 <div class="form-group">
                   <label class='control-label'>Zoom</label>
                   <input type="text" class="gllpZoom form-control" value="12"/>
                 </div>
               </div>
               <div class="col-sm-5">
                 <div class="form-group">

                   <input type="button" class="btn btn-xs btn-warning gllpUpdateButton" value="update map">
                 </div>
               </div>
             </fieldset>

          </div>

                    <div class="form-group">
                      <label class='control-label'>Description</label>
                      <textarea class='form-control' rows='5' name='hsdescription'></textarea>
                    </div>

               <div class="form-group">
             <label for="exampleInput1" class="bmd-label-floating">cost per night</label>
             <input type="text" class="form-control"  name="hscost" id="hscost">
          </div>


          <div class="form-group">
            <label for="exampleInput1" class="bmd-label-floating">Click to upload image</label>
            <input type='file' name='fileToUpload' id='fileToUpload'>

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
