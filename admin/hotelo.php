
<?php
include_once('session.php');
include_once('include/inc_adminheader.php');
include_once('class/classhotel.php');
$hotel=new Hotel();
include_once('class/classlocation.php');
$location=new Location;
$sesid=$_SESSION['id'];
$sesname=$_SESSION['username'];
$admintype=$_SESSION['admintype'];
if($_SERVER['REQUEST_METHOD']=='POST')
{
  extract($_POST);
  $hotel->createHotel($hname,$husername,$haddress,$hlocation,$hcontact,$hemail,$hdescription,$hlatitude,$hlongitude,$htype,$hkeyword,$vendorid,$sesname);
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
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" >
                  Add New Hotel
                </button>
              </div>
              <table  id="fresh-table" class="table table-bordered"  >
                <thead>
                  <tr>
                    <th data-field="id" data-sortable="true">Id</th>
                    <th data-field="hotel name" data-sortable="true">Hotel Name</th>
                    <th data-field="username" data-sortable="true">Username</th>
                      <th data-field="vendorid" data-sortable="true">VendorID</th>
                      <th data-field="added by" data-sortable="true">Added By</th>
                    <th data-field="address" data-sortable="true">Address</th>
                    <th data-field="location" data-sortable="true">Location</th>
                    <th data-field="contact" data-sortable="true">Contact</th>
                    <th data-field="email" data-sortable="true">Email</th>
                    <th data-field="description" data-sortable="true">Description</th>
                    <th data-field="rating" data-sortable="true">Rating</th>
                    <th data-field="added on" data-sortable="true"> Added On</th>
                    <th data-field="latitude" data-sortable="true"> Latitude</th>
                    <th data-field="longitude" data-sortable="true"> Longitude</th>
                    <th data-field="status" data-sortable="true"> Status</th>
                    <th data-field="type" data-sortable="true">Type</th>
                    <th data-field="cover image" data-sortable="true">Cover image</th>
                    <th data-field="image" data-sortable="true">Image</th>
                    <th data-field="keyword" data-sortable="true">Keyword</th>
                    <th class="text-center" data-field="action" >Action</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                $hotelvar=$hotel->getAllHotel();
                foreach($hotelvar as $key => $roomvalue)
                {
                  ?>
                  <tr>
                    <td><?php echo $roomvalue['id'];?></td>
                  <?php
                }
              ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <?php
    }
    else {
      echo "YOu dont have privalage to view this";
    } ?>
    </div>
  </div>



  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><b>Add new Hotel</b></h5>
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
                    <b>LIST</b> YOUR PLACE <br>
                    <small>This information will let us know more about your place.</small>
                  </h3>
                </div>
                <div class="wizard-navigation">
                  <ul>
                    <li><a href="#basic" data-toggle="tab">Basic</a></li>
                    <li><a href="#location" data-toggle="tab">Location</a></li>
                    <li><a href="#type" data-toggle="tab">Type</a></li>
                    <li><a href="#image" data-toggle="tab">Images</a></li>
                    <li><a href="#description" data-toggle="tab">Description</a></li>
                  </ul>
                </div>

                <div class="tab-content">
                  <div class="tab-pane" id="basic">
                    <div class="row">
                      <div class="col-sm-12">
                        <h4 class="info-text"> Let's start with the basic details</h4>
                      </div>   <input type="hidden" class="form-control"  name="hid" id="hid">
                      <div class="col-sm-10 col-sm-offset-1">
                        <div class="form-group">
                          <label for="exampleInput1" class="bmd-label-floating">Name of the Vendor</label>
                        <select name="vendorid" class="form-control" required>
                          <option>--Choose Vendor--</option>
                          <?php
                          $vendor=$hotel->getAllAdminName();
                          foreach($vendor as $key => $vendorvalue)
                          {
                          ?>
                          <option value="<?php echo $vendorvalue['id'];?>"><?php echo $vendorvalue['username']; ?></option>
<?php } ?>
                        </select>

                        </div>
                      </div>
                      <div class="col-sm-10 col-sm-offset-1">
                        <div class="form-group">
                          <label for="exampleInput1" class="bmd-label-floating">Username of Hotel</label>
                          <input type="text" class="form-control"  name="husername" id="husername" value="<?php echo $vendorvalue['username']; ?>" disabled>
                        </div>
                      </div>

                      <div class="col-sm-10 col-sm-offset-1">
                        <div class="form-group">
                          <label for="exampleInput1" class="bmd-label-floating">Name of the Hotel</label>
                          <input type="text" class="form-control"  name="hname" id="hname">

                        </div>
                      </div>

                      <div class="col-sm-10 col-sm-offset-1">
                        <div class="form-group">
                          <label for="exampleInput1" class="bmd-label-floating">Contact</label>
                          <input type="text" class="form-control" name="hcontact" id="hcontact">

                        </div>
                      </div>
                      <div class="col-sm-10 col-sm-offset-1">
                        <div class="form-group">
                          <label for="exampleInput1" class="bmd-label-floating">Email</label>
                          <input type="text" class="form-control" name="hemail" id="hemail">
                          <span class="bmd-help">We'll never share your email with anyone else.</span>
                        </div>
                      </div>



                    </div>
                  </div>
                  <div class="tab-pane" id="location">
                    <div class="row">
                      <div class="col-sm-12">
                        <h4 class="info-text"> Let's start with the basic details</h4>
                      </div>   <input type="hidden" class="form-control"  name="hid" id="hid">

                      <div class="col-sm-10 col-sm-offset-1">
                        <div class="form-group">
                          <label for="exampleInput1" class="bmd-label-floating">Address</label>
                          <input type="text" class="form-control" name="haddress" id="haddress">
                        </div>
                      </div>
                      <div class="col-sm-10 col-sm-offset-1">
                        <div class="form-group">
                          <label for="exampleInput1" class="bmd-label-floating">Location</label>
                          <select class="form-control" name="hlocation" id="hlocation">
                            <?php
                            $location->getAllLocation();

                            ?>



                          </select>
                        </div>
                      </div>
                      <div class="col-sm-5 col-sm-offset-1">
                        <div class="row justify-content-md-center">
                        <label class='control-label'>Map</label>



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
                                <input type="text" class="gllpLatitude form-control" name="hlatitude" value="27.737849299999997"/>
                              </div>
                            </div>
                            <div class="col-sm-5 ">
                              <div class="form-group">
                                <input type="text" class="gllpLongitude form-control" name="hlongitude" value="85.3286484"/>
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
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="type">
                    <h4 class="info-text">What type of location do you have? </h4>
                    <div class="row">
                      <div class="col-sm-10 col-sm-offset-1">
                        <div class="col-sm-4 col-sm-offset-2">
                          <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have a house.">
                            <input type="radio" name="htype" value="1" required>
                            <div class="icon">
                              <i class="fa fa-hotel"></i>
                            </div>
                            <h6>Hotel</h6>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have an appartment">
                            <input type="radio" name="htype" value="2">
                            <div class="icon">
                              <i class="fa fa-home"></i>
                            </div>
                            <h6>Homestay</h6>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="image">
                    <h4 class="info-text">Upload images here</h4>
                    <div class="row">
                      <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                          <label for="exampleInput1" class="bmd-label-floating">Click to upload hotel profile image</label>

                          <div class="picture" style="border-radius:5px;">

                            <img src="assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                            <input type='file' name='fileToUpload' id="wizard-picture">
                          </div>

                        </div>

                      </div>
                      <div class="col-sm-5">
                        <div class="form-group">
                          <label for="exampleInput1" class="bmd-label-floating">Click to upload hotel cover image</label>
                        </div>




                        <input type='file' name='coverToUpload' id="wizard-picture">
                      </div>


                    </div>
                  </div>

                  <div class="tab-pane" id="description">
                    <div class="row">
                      <h4 class="info-text"> Drop the description about the hotel. </h4>
                      <div class="col-sm-6 col-sm-offset-1">
                        <div class="form-group">
                          <label class='control-label'>Description about Hotel</label>
                          <textarea class='form-control' rows='3' name='hdescription'></textarea>

                        </textarea>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Example</label>
                        <p class="description">"The place is really nice. We use it every sunday when we go fishing. It is so awesome."</p>
                      </div>
                    </div>

                    <div class="col-sm-10 col-sm-offset-1 ">
                      <div class="form-group">
                        <label for="exampleInput1" class="bmd-label-floating">Keyword</label>
                        <input type="text" class="form-control" name="hkeyword" id="hkeyword">
                      </div>
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
