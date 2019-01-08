<?php
include_once('session.php');
include('include/inc_adminheader.php');
include_once('class/classpackage.php');
$package=new Package();
include_once('class/classlocation.php');
$location=new Location;

if($_SERVER['REQUEST_METHOD']=='POST')
{
  extract($_POST);

  $id=$_SESSION['id'];

  $username=$_SESSION['username'];
  $package->createPackage($pname,$paddress,$plocation,$pdescription,$pcost,$pduration,$pstartdate,$pexpiry,$pcategory,$pitinerary,$id,$username,$pmap,$pkeyword);
}
if($_SERVER['REQUEST_METHOD']=='GET')
{
  extract($_GET);
@$package->publishpackage($pid,$pstatus);
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
            <?php
            if(($_SESSION['admintype']=='4' && $_SESSION['vendor']=='package') || $_SESSION['admintype']=='1')
             {
               ?>
            <div class="fresh-table">
              <div class="toolbar">
                <?php
                if(($_SESSION['admintype']=='4' && $_SESSION['vendor']=='package') )
                 {?>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                  Add New Pacakge
                </button>
              <?php }
              else {
                echo " ";
              } ?>
              </div>
              <table id="fresh-table" class="table table-bordered" style="text-align:center">
                <thead>
                  <tr>
                    <th data-field="pid" data-sortable="true">pId</th>
                    <th data-field="package name" data-sortable="true">Package Name</th>
                    <th data-field="added by" data-sortable="true">Added By</th>
                    <th data-field="destination address" data-sortable="true">Destination Address</th>
                    <th data-field="location" data-sortable="true">Location</th>
                    <th data-field="category" data-sortable="true">Category</th>
                    <th data-field="description" data-sortable="true">Description</th>
                    <th data-field="itinerary" data-sortable="true">Itinerary</th>
                      <th data-field="cost" data-sortable="true">Cost</th>
                      <th data-field="duration" data-sortable="true">Duration</th>
                      <th data-field="start date" data-sortable="true">Start Date</th>
                      <th data-field="expiry date" data-sortable="true">Expiry Date</th>
                      <th data-field="image1" data-sortable="true">Image1</th>
                      <th data-field="image2" data-sortable="true">Image2</th>
                      <th data-field="status" data-sortable="true">Status</th>
                      <th data-field="keyword" data-sortable="true">Keyword</th>
                        <th data-field="counter" data-sortable="true">Counter</th>
                      <th class="text-center" data-field="action">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                   <tr>
                                                   <?php
                                                   $sesid=$_SESSION['id'];
                                                   $admintype=$_SESSION['admintype'];
                                                   $packagep=$package->getAllPackage($sesid,$admintype);
                                                   foreach($packagep as $key => $packagevalue)
                                                   {
                                                      $pid=$packagevalue['pid'];
                                                       $pstatus=$packagevalue['pstatus'];
                                                       $vendorid=$packagevalue['id'];
                                                     ?>
                                                     <td><?php echo $pid; ?></td>
                                                      <td><?php echo $packagevalue['pname']; ?></td>
                                                       <td style="text-transform:uppercase;"><?php
                                                     $vendorvar=$package->getAllVendorInfo($vendorid);
                                                     foreach($vendorvar as $key =>$vendorvalue)
                                                     {
                                                       echo $vendorvalue['company_name'];
                                                     }
                                                       ?></td>
                                                        <td><?php echo $packagevalue['paddress']; ?></td>
                                                          <td><?php echo $packagevalue['plocation']; ?></td>
                                                          <td><?php echo $packagevalue['pcategory']; ?></td>
                                                           <td><?php echo substr($packagevalue['pdescription'],0,45); ?>......</td>
                                                                <td><?php echo substr($packagevalue['pitinerary'],0,45); ?>......</td>
                                                                 <td>Rs. <?php echo $packagevalue['pcost']; ?></td>
                                                                    <td><?php echo $packagevalue['pduration']; ?></td>
                                                                       <td><?php echo $packagevalue['pstartdate']; ?></td>
                                                                        <td><?php echo $packagevalue['pexpiry']; ?></td>
                                                                          <td><img src="../<?php echo $packagevalue['pimg1']; ?>" alt="package image" style="height:50px;width:50px;"></td>
                                                                               <td><img src="../<?php echo $packagevalue['pimg2']; ?>" alt="package image" style="height:50px;width:50px;"></td>


                                                     <td>
                                                       <form action=" " method="GET">
                                                       <input type="hidden" name="pid" value="<?php echo $pid;?>">

                                                        <input type="hidden" name="pstatus" value="<?php echo $pstatus;?>">

                                                        <?php

                                                       if($pstatus=='1')
                                                       {
                                                         echo "  <input type='submit' class='btn btn-success btn-xs' value='Published'>";
                                                       }
                                                       else
                                                       {echo " <input type='submit' class='btn btn-danger btn-xs' value='Not Published'>";}
                                                      ?>

                                                     </td>
                                                      <td><?php echo $packagevalue['pkeyword']; ?></td>

                                                        <td><?php echo $packagevalue['pcounter']; ?></td>
                                                        <?php
                                                          if(($_SESSION['admintype']=='4' && $_SESSION['vendor']=='package'))
                                                          {
                                                            ?>
                                                          <td>
                                                       <a href='edit.php?action=edit&pid=<?php echo $pid;?>&of=package&sidebar=package'> <button type='button' rel='tooltip' title='Edit package' class='btn btn-success btn-simple btn-xs'><i class='fa fa-edit'></i></button></a>
                                                       <a href='delete.php?action=delete&pid=<?php echo $pid;?>&of=package'><button type='button' rel='tooltip' title='Delete package' class='btn btn-danger btn-simple btn-xs' id='delbutton'>
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
  <?php
}
else {
  echo "You dont have Privilage to view this";
}
   ?>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><b>Add new Package</b></h5>
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
                      <b>LIST</b> YOUR PACKAGES <br>

                    </div>
                    <div class="wizard-navigation">
                      <ul>
                        <li><a href="#location" data-toggle="tab">Location</a></li>
                        <li><a href="#type" data-toggle="tab">Type</a></li>
                        <li><a href="#image" data-toggle="tab">Images</a></li>
                        <li><a href="#detail" data-toggle="tab">Details</a></li>

                        <li><a href="#description" data-toggle="tab">Description</a></li>
                        <li><a href="#itinerary" data-toggle="tab">Itinerary</a></li>
                      </ul>
                    </div>

                    <div class="tab-content">
                      <div class="tab-pane" id="location">
                        <div class="row">
                          <div class="col-sm-12">
                            <h4 class="info-text"> Let's start with the basic details</h4>
                          </div>    <input type="hidden" class="form-control" name="pid" id="pid">
                          <!-- <div class="col-sm-10 col-sm-offset-1">
                            <div class="form-group">
                              <label for="exampleInput1" class="bmd-label-floating">Package Provider</label>
                              <select name="aid" class="form-control" required>
                                <option>--Choose Vendor--</option>
                                <?php
                                // $vendor=$package->getAllPackageProvider();
                                // foreach($vendor as $key => $vendorvalue)
                                // {
                                // ?>
                                <option value="<?php echo $vendorvalue['id'];?>"><?php echo $vendorvalue['company_name']; ?></option>
                                <?php// } ?>
                              </select>

                            </div>
                          </div> -->

                          <div class="col-sm-10 col-sm-offset-1">
                            <div class="form-group">
                              <label for="exampleInput1" class="bmd-label-floating">Name of the Package</label>
                              <input type="text" class="form-control" name="pname" id="pname" required>

                            </div>
                          </div>

                          <div class="col-sm-10 col-sm-offset-1">
                            <div class="form-group">
                              <label for="exampleInput1" class="bmd-label-floating">Destination Address</label>
                              <input type="text" class="form-control"  name="paddress" id="paddress" required>


                            </div>
                          </div>
                          <div class="col-sm-10 col-sm-offset-1">
                            <label for="exampleInput1" class="bmd-label-floating">Location</label>
                            <select class="form-control" name="plocation" id="plocation">
                              <?php
                              $location->getAllLocation();

                              ?>


                            </select>
                          </div>
                          <div class="col-sm-10 col-sm-offset-1">
                            <div class="form-group">
                              <label for="exampleInput1" class="bmd-label-floating">Map</label>
                              <input type="text" class="form-control" name="pmap" id="pmap">
                            </div>
                          </div>


                        </div>
                      </div>
                      <div class="tab-pane" id="type">
                        <h4 class="info-text">What type of location do you have? </h4>
                        <div class="row">
                          <div class="col-sm-10 col-sm-offset-1">
                            <div class="col-sm-4 col-sm-offset-2">
                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if the package is a hiking package.">
                                <input type="radio" name="pcategory" value="hiking" required>
                                <div class="icon" style="overflow:hidden;">
                                  <img src="../images/t2.jpg" alt="Hiking image" style="height:100px;">
                                </div>
                                <h6>Hiking</h6>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if the package is a trekking package">
                                <input type="radio" name="pcategory" value="trekking">
                                <div class="icon" style="overflow:hidden;">
                                  <img src="../images/t1.jpg" alt="Trekking image" style="height:100px;">
                                </div>
                                <h6>Trekking</h6>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if the package is a religious tour package">
                                <input type="radio" name="pcategory" value="religious">
                                <div class="icon" style="overflow:hidden;">
                                  <img src="../images/t3.jpg" alt="Religious Tour image" style="height:100px;">
                                </div>
                                <h6>Religious Tour</h6>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if the pacakage is a siteseeing package">
                                <input type="radio" name="pcategory" value="site">
                                <div class="icon" style="overflow:hidden;">
                                  <img src="../images/t4.jpg" alt="Site Seeing image" style="height:100px;">
                                </div>
                                <h6>Site Seeing</h6>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if the package is a tour">
                                <input type="radio" name="pcategory" value="tour">
                                <div class="icon" style="overflow:hidden;">
                                  <img src="../images/t5.jpg" alt="Tour image" style="height:100px;">
                                </div>
                                <h6>Tour</h6>
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
                              <label for="exampleInput1" class="bmd-label-floating">Click to upload package display picture</label>

                              <div class="picture" style="border-radius:5px;">

                                <img src="assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                <input type='file' name='fileToUpload' id="wizard-picture" required>
                              </div>

                            </div>

                          </div>
                          <div class="col-sm-5">
                            <div class="form-group">
                              <label for="exampleInput1" class="bmd-label-floating">Click to upload package secondary image</label>
                            </div>




                            <input type='file' name='coverToUpload' id="wizard-picture">
                          </div>


                        </div>
                      </div>
                      <div class="tab-pane" id="detail">
                        <h4 class="info-text">Details about the package</h4>
                        <div class="row">
                          <div class="col-sm-5 col-sm-offset-1">
                            <div class="form-group">
                              <label for="exampleInput1" class="bmd-label-floating">Price</label>
                              <input type="text" class="form-control" name="pcost" id="pcost" required>
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-group">
                              <label for="exampleInput1" class="bmd-label-floating">Duration</label>
                              <input type="text" class="form-control" name="pduration" id="pduration" required>

                            </div>
                          </div>
                          <div class="col-sm-5 col-sm-offset-1">
                            <div class="form-group">
                              <label for="exampleInput1" class="bmd-label-floating">StartDate</label>
                              <input type="date" class="form-control" name="pstartdate" id="pstartdate">
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-group">
                              <label for="exampleInput1" class="bmd-label-floating">EndDate</label>
                              <input type="date" class="form-control" name="pexpiry" id="pexpiry">
                            </div>
                          </div>
                          <div class="col-sm-5 col-sm-offset-1">
                            <div class="form-group">
                              <label for="exampleInput1" class="bmd-label-floating">Keyword</label>
                              <input type="text" class="form-control" name="pkeyword" id="pkeyword">
                            </div>
                          </div>

                        </div>
                      </div>

                      <div class="tab-pane" id="description">
                        <div class="row">
                          <h4 class="info-text"> Drop the description about the package. </h4>
                          <div class="col-sm-10 col-sm-offset-1">
                            <div class="form-group">
                              <label class='control-label'>Description</label>
                              <textarea class='form-control' rows='9' name='pdescription'></textarea>

                            </textarea>
                          </div>
                        </div>
                        <div class="col-sm-6 col-sm-offset-3">
                          <div class="form-group">
                            <label>Example</label>
                            <p class="description">"The place is really nice. We use it every sunday when we go fishing. It is so awesome."</p>
                          </div>
                        </div>

                                              </div>
                    </div>
                    <div class="tab-pane" id="itinerary">
                      <div class="row">
                        <h4 class="info-text"> Itinerary for the package. </h4>
                        <div class="col-sm-10 col-sm-offset-1">
                          <div class="form-group">
                            <label class='control-label'>Itinerary Here  </label>
                            <textarea class='form-control' rows='13 ' name='pitinerary'></textarea>

                          </textarea>
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
