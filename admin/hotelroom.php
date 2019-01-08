<?php
include_once('session.php');
include('include/inc_adminheader.php');

include_once('class/classhotelroom.php');
$room=new Room();
$sesid=$_SESSION['id'];
$sesname=$_SESSION['username'];
$admintype=$_SESSION['admintype'];

if($_SERVER['REQUEST_METHOD']=='POST')
{
  extract($_POST);

  $room->createHotelroom($hid,$rno,$rtitle,$rhotelcost,$totalroom,$refrigerator,$wifi,$hotwater,$aircondition,$tv,$private_bathroom,$noofbed,$restaurant,$roomservice,$laundry,$sesid,$sesname);
}
if($_SERVER['REQUEST_METHOD']=='GET')
{
  extract($_GET);
@$room->publishroom($rid,$rstatus);
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
                    <!-- Button trigger modal -->
                    <?php
                      if(($_SESSION['admintype']=='4' && $_SESSION['vendor']=='hotel') || $_SESSION['admintype']=='1')
                     { ?>
                    <div class="fresh-table">
                      <div class="toolbar">
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                        Add New Room
                        </button>
                      </div>

                      <table  id="fresh-table" class="table table-bordered" style="text-align:center;" >
                          <thead>
                            <tr>
                              <th data-field="room id" data-sortable="true">Room id</th>
                              <th data-field="room no." data-sortable="true">Room No.</th>
                              <th data-field="hotel id" data-sortable="true">Hotel Id</th>

                                <th data-field="room title" data-sortable="true">Room Title</th>

                              <!-- <th data-field="room cost(homestay)" data-sortable="true">Room Cost(Homestay)</th> -->
                              <th data-field="room cost(hotel)" data-sortable="true">Room Cost(Hotel)</th>
                              <th data-field="total number of rooms" data-sortable="true">Total Number of rooms</th>
                              <th data-field="amneties" data-sortable="true">Amneties</th>
                              <th data-field="total number of beds" data-sortable="true">Total Number of beds</th>
                              <th data-field="image1" data-sortable="true">Image1</th>
                               <th data-field="image2" data-sortable="true">Image2</th>
                              <th data-field="status" data-sortable="true">status</th>
                              <th data-field="action" data-sortable="true">Action</th>

                            </tr>
                          </thead>

                          <tbody>

                            <?php
                            if($admintype=='1')
                            {
                              $room->getAllHotelroomforadmin();
                            }
                            elseif($admintype=='4') {

                    $roomr=$room->getAllHotelroomforven($sesid);
                    foreach($roomr as $key => $roomvalue)
                        {
                          $rid=$roomvalue['rid'];
                            $rstatus=$roomvalue['rstatus'];
                          ?>
                    <tr>
                       <td><?php echo $rid; ?></td>
                         <td><?php echo $roomvalue['rno']; ?></td>
                         <td><?php echo $roomvalue['hid']; ?></td>

                           <td><?php echo $roomvalue['rtitle']; ?></td>

                            <td><?php echo $roomvalue['rhotelcost']; ?></td>
                             <td><?php echo $roomvalue['totalroom']; ?></td>

                              <td>
                                <?php
       if($roomvalue['refrigerator']==1)
      {
        echo "Refrigerator";
      }
      else {
        echo "";
      };
      if($roomvalue['wifi']==1)
      {
        echo ",Wifi";
      }
      else {
        echo "";
      }
      if($roomvalue['hotwater']==1)
      {
        echo ",Hotwater";
      }
      else {
        echo "";
      }
      if($roomvalue['aircondition']==1)
      {
        echo ",Airconditioning";
      }
      else {
        echo "";
      }
      if($roomvalue['tv']==1)
      {
        echo ",Tv";
      }
      else {
        echo "";
      }
      if($roomvalue['private_bathroom']==1)
      {
        echo ",Private Bathroom";
      }
      else {
        echo "";
      }
      if($roomvalue['restaurant']==1)
      {
        echo ",Restaurant";
      }
      else {
        echo "";
      }
      if($roomvalue['laundry']==1)
      {
        echo ",Laundry";
      }
      else {
        echo "";
      }

      echo "</td>";; ?>

      <td><?php echo $roomvalue['noofbed']; ?></td>

      </td>

                 <td><img src="../<?php echo $roomvalue['rimage1']; ?>" alt="room image" style="height:60px;width:60px;"></td>
                <td><img src="../<?php echo $roomvalue['rimage2']; ?>" alt="room image" style="height:60px;width:60px;"></td>
                          <td>
                            <form action="" method="GET">
                            <input type="hidden" name="rid" value="<?php echo $rid;?>">
                    
                            <input type="hidden" name="rstatus" value="<?php echo $rstatus;?>">

                             <?php

                            if($rstatus=='1')
                            {
                              echo "  <input type='submit' class='btn btn-success btn-xs' value='Enabled'>";
                            }
                            else
                            {
                              echo " <input type='submit' class='btn btn-danger btn-xs' value='Disabled'>";
                            }
                           ?>
                           <?php


                            ?>
                          </td>
                                <td>

                            <a href='delete.php?action=delete&rid=<?php echo $rid;?>&of=room'><button type='button' rel='tooltip' title='Delete room' class='btn btn-danger btn-simple btn-xs' id='delbutton'>
                              <i class='fa fa-times'></i>
                            </button></a>
                                   <a href='edit.php?action=edit&rid=<?php echo $rid;?>&of=room&sidebar=room'> <button type='button' rel='tooltip' title='Edit room' class='btn btn-success btn-simple btn-xs'><i class='fa fa-edit'></i></button></a></td>
                         </form>

                          </tr>

                 <?php

                          }
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
<?php }
else {
  echo "You dont have privilage to view this";
} ?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Add new Room</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--      Wizard container        -->
            <div class="wizard-container" >
                <div class="card1 wizard-card" data-color="red" id="wizard">
             <form method="POST" action="" enctype='multipart/form-data'>
                <!--        You can switch ' data-color="green" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

                      <div class="wizard-header">
                          <h3>
                             <b>LIST</b> YOUR ROOMS <br>
                             <small>This information will let us know more about your place.</small>
                          </h3>
                      </div>
            <div class="wizard-navigation">
              <ul>
                              <li><a href="#location" data-toggle="tab">Basics</a></li>
                              <li><a href="#amneties" data-toggle="tab">Amneties</a></li>
                              <li><a href="#image" data-toggle="tab">Images</a></li>
                          </ul>
            </div>

                        <div class="tab-content">
                            <div class="tab-pane" id="location">
                              <div class="row"><input type="hidden" class="form-control"  name="rid" id="rid">
                                  <div class="col-sm-12">
                                    <h4 class="info-text"> Let's start with the basic details</h4>
                                  </div>
                                  <!-- <input type="text" class="form-control"  name="hid" value="<?php echo $hid?>"> -->

                                        <input type="hidden"
<?php

                                          // $room->getAllHotelName();
                                            ?>
                                        <input type="hidden" name="hid" value ="<?php echo $sesid ?>">


                                  <div class="col-sm-5 col-sm-offset-1">
                                      <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">Room No.</label>
                                        <input type="text" class="form-control"  name="rno" id="rno">

                                      </div>
                                  </div>
                                  <div class="col-sm-5">
                                       <div class="form-group">
                                         <label for="exampleInput1" class="bmd-label-floating">Room Title</label>
                                         <input type="text" class="form-control" name="rtitle" id="rtitle">


                                          </div>
                                  </div>
                                  <!-- <div class="col-sm-5 col-sm-offset-1">
                                      <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">Homestay Cost</label>
                                        <input type="text" class="form-control" name="rhomestaycost" id="rhomestaycost">

                                      </div>
                                  </div> -->
                                  <div class="col-sm-5 col-sm-offset-1">
                                       <div class="form-group">
                                         <label for="exampleInput1" class="bmd-label-floating">Hotel Room Cost</label>

                                         <input type="text" class="form-control" name="rhotelcost" id="rhotelcost">


                                          </div>
                                  </div>



                                  <div class="col-sm-5 col-sm-offset-1">
                                      <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">Total  number of Room available</label>
                                        <select class="form-control" name="totalroom" id="totalroom">
                                          <option value="1">1 </option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                        </select>
                                      </div>
                                  </div>

                              </div>
                            </div>
                            <div class="tab-pane" id="amneties">
                                <h4 class="info-text">What type of facilities do you have? </h4>
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                      <label for="exampleInput1" class="bmd-label-floating">Amneties</label>
                                      <table class="table table-bordered">
                                      <thead>
                                        <tr>
                                          <td>Refrigerator</td>
                                          <td>
                                            <div class="form-check form-check-radio">
                                                  <label class="form-check-label">
                                                      <input class="form-check-input" type="radio" name="refrigerator" id="exampleRadios1" value="1" >
                                                      Available

                                                  </label>
                                              </div>
                                              <div class="form-check form-check-radio">
                                                  <label class="form-check-label">
                                                      <input class="form-check-input" type="radio" name="refrigerator" id="exampleRadios2" value="0" checked>
                                                    Not available

                                                  </label>
                                              </div>
                                           </td>
                                        </tr>
                                        <tr>
                                          <td>Wifi</td>
                                          <td>
                                            <div class="form-check form-check-radio">
                                                  <label class="form-check-label">
                                                      <input class="form-check-input" type="radio" name="wifi" id="exampleRadios1" value="1" >
                                                      Available

                                                  </label>
                                              </div>
                                              <div class="form-check form-check-radio">
                                                  <label class="form-check-label">
                                                      <input class="form-check-input" type="radio" name="wifi" id="exampleRadios2" value="0" checked>
                                                    Not available

                                                  </label>
                                              </div>
                                           </td>
                                        </tr>
                                        <tr>
                                          <td>Hot Water</td>
                                          <td>
                                            <div class="form-check form-check-radio">
                                                  <label class="form-check-label">
                                                      <input class="form-check-input" type="radio" name="hotwater" id="exampleRadios1" value="1" >
                                                      Available

                                                  </label>
                                              </div>
                                              <div class="form-check form-check-radio">
                                                  <label class="form-check-label">
                                                      <input class="form-check-input" type="radio" name="hotwater" id="exampleRadios2" value="0" checked>
                                                    Not available

                                                  </label>
                                              </div>
                                           </td>
                                        </tr>
                                        <tr>
                                          <td>Air Conditioning</td>
                                          <td>
                                            <div class="form-check form-check-radio">
                                                  <label class="form-check-label">
                                                      <input class="form-check-input" type="radio" name="aircondition" id="exampleRadios1" value="1" >
                                                      Available

                                                  </label>
                                              </div>
                                              <div class="form-check form-check-radio">
                                                  <label class="form-check-label">
                                                      <input class="form-check-input" type="radio" name="aircondition" id="exampleRadios2" value="0" checked>
                                                    Not available

                                                  </label>
                                              </div>
                                           </td>
                                        </tr>
                                        <tr>
                                          <td>TV</td>
                                          <td>
                                            <div class="form-check form-check-radio">
                                                  <label class="form-check-label">
                                                      <input class="form-check-input" type="radio" name="tv" id="exampleRadios1" value="1" >
                                                      Available

                                                  </label>
                                              </div>
                                              <div class="form-check form-check-radio">
                                                  <label class="form-check-label">
                                                      <input class="form-check-input" type="radio" name="tv" id="exampleRadios2" value="0" checked>
                                                    Not available

                                                  </label>
                                              </div>
                                           </td>
                                        </tr>
                                        <tr>
                                          <td>Private Bathroom</td>
                                          <td>
                                            <div class="form-check form-check-radio">
                                                  <label class="form-check-label">
                                                      <input class="form-check-input" type="radio" name="private_bathroom" id="exampleRadios1" value="1" >
                                                      Available

                                                  </label>
                                              </div>
                                              <div class="form-check form-check-radio">
                                                  <label class="form-check-label">
                                                      <input class="form-check-input" type="radio" name="private_bathroom" id="exampleRadios2" value="0" checked>
                                                    Not available

                                                  </label>
                                              </div>
                                           </td>
                                        </tr>

                                        <tr>
                                          <td>Restaurant</td>
                                          <td>
                                            <div class="form-check form-check-radio">
                                                  <label class="form-check-label">
                                                      <input class="form-check-input" type="radio" name="restaurant" id="exampleRadios1" value="1" >
                                                      Available

                                                  </label>
                                              </div>
                                              <div class="form-check form-check-radio">
                                                  <label class="form-check-label">
                                                      <input class="form-check-input" type="radio" name="restaurant" id="exampleRadios2" value="0" checked>
                                                    Not available

                                                  </label>
                                              </div>
                                           </td>
                                        </tr>
                                        <tr>
                                          <td>Room Service</td>
                                          <td>
                                            <div class="form-check form-check-radio">
                                                  <label class="form-check-label">
                                                      <input class="form-check-input" type="radio" name="roomservice" id="exampleRadios1" value="1" >
                                                      Available

                                                  </label>
                                              </div>
                                              <div class="form-check form-check-radio">
                                                  <label class="form-check-label">
                                                      <input class="form-check-input" type="radio" name="roomservice" id="exampleRadios2" value="0" checked>
                                                    Not available

                                                  </label>
                                              </div>
                                           </td>
                                        </tr>
                                        <tr>
                                          <td>Laundry</td>
                                          <td>
                                            <div class="form-check form-check-radio">
                                                  <label class="form-check-label">
                                                      <input class="form-check-input" type="radio" name="laundry" id="exampleRadios1" value="1" >
                                                      Available

                                                  </label>
                                              </div>
                                              <div class="form-check form-check-radio">
                                                  <label class="form-check-label">
                                                      <input class="form-check-input" type="radio" name="laundry" id="exampleRadios2" value="0" checked>
                                                    Not available

                                                  </label>
                                              </div>
                                           </td>
                                        </tr>
                                        <tr>
                                          <td>No. of Beds</td>
                                          <td>

                                            <select class="form-control" name="noofbed" id="noofbed">
                                              <option value="1">1 </option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                            </select>
                                           </td>
                                        </tr>
                                      </thead>
                                      <tbody>
                                      </tbody>
                                    </table>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="image">
                                <h4 class="info-text">Upload images here</h4>
                                <div class="row">
                                    <div class="col-sm-5 col-sm-offset-1">
                                      <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">Click to upload image1</label>


                                      </div>
                                          <input type='file' name='fileToUpload' id='fileToUpload'>
                                    </div>
                                    <div class="col-sm-5">
                                      <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">Click to upload image2</label>

                                      </div>
                                      <input type='file' name='coverToUpload' id='coverToUpload'>

                                     </div>

                                </div>
                            </div>

                        </div>
                        <div class="wizard-footer">
                              <div class="pull-right">
                                    <input type='button' class='btn btn-next btn-fill btn-success btn-wd btn-sm' name='next' value='Next' />
                                    <input type='submit' class='btn btn-finish btn-fill btn-success btn-wd btn-sm' name='finish' value='Finish' />

                                </div>
                                <div class="pull-left">
                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                                </div>
                              </form>
                                <div class="clearfix"></div>
                        </div>

                    </form>
                </div>
            </div> <!-- wizard container -->

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
