<?php include('include/inc_adminheader.php');
@$mes=$_GET['mes'];
switch($mes)
{
  case 'deleted':
  {
    echo "<script>alert('Successfully deleted!');</script>";
    break;
  }
}
  include_once('class/classadmin.php');
  $admin=new Admin();


  if($_SERVER['REQUEST_METHOD']=='POST')
{
  extract($_POST);

  $admin->createVendor($vusername,$vemail,$vcontact,$vpassword,$vaddress,$vdescription,$vtype,$company_name,$longitude,$latitude);
}
if($_SERVER['REQUEST_METHOD']=='GET')
{
  extract($_GET);
@$admin->publishvendor($id,$status);
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
          //if($_SESSION['admintype']=='1')
         //{ ?>
                <!-- Button trigger modal -->
          <div class="fresh-table">
            <div class="toolbar">

                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#addvendor"> Add New Vendor
                          </button>

           </div>


   <table  id="fresh-table" class="table table-bordered" >
   <thead>
     <tr>
       <th data-field="id" data-sortable="true">Id</th>
       <th data-field="username" data-sortable="true">Username</th>
       <th data-field="companyname" data-sortable="true">Companyname</th>

       <th data-field="email" data-sortable="true">Email</th>
        <th data-field="contact" data-sortable="true">Contact</th>
      <th data-field="address" data-sortable="true">Address</th>
        <th data-field="location" data-sortable="true">Location</th>
       <th data-field="description" data-sortable="true">Description</th>
       <th data-field="type" data-sortable="true">Type</th>
       <th data-field="profile picture" data-sortable="true">Profile Picture</th>
       <th data-field="join date" data-sortable="true">Join date</th>
        <th data-field="latitude" data-sortable="true">Latitude</th>
         <th data-field="longitude" data-sortable="true">Longitude</th>
          <th data-field="status" data-sortable="true">Status</th>
       <th data-field="action" data-sortable="true">Action</th>
     </tr>
   </thead>
   <tbody>

     <?php
       $vendorvar=$admin->getAllVendor();
      foreach($vendorvar as $key => $vendorvalue)
      {
        $status=$vendorvalue['status'];
         $id=$vendorvalue['id']; ?>
        <tr>
            <td><?php echo $vendorvalue['id'];?></td>
            <td><?php echo $vendorvalue['username']?></td>
            <td><?php echo $vendorvalue['company_name']?></td>
            <td><?php echo $vendorvalue['email']?></td>
            <td><?php echo $vendorvalue['contact']?></td>
            <td><?php echo $vendorvalue['address']?></td>
            <td><?php echo $vendorvalue['location']?></td>
            <td><?php echo $vendorvalue['description'];?>........</td>
            <td><?php echo $vendorvalue['vtype']?></td>
            <td><img src="../<?php echo $vendorvalue['image']?>" style="height:50px;width:50px;"></td>
            <td><?php echo $vendorvalue['joindate']?></td>
            <td><?php echo $vendorvalue['latitude']?></td>
            <td><?php echo $vendorvalue['longitude']?></td>



                    <td>
                            <form action="" method="GET">
                            <input type="hidden" name="id" value="<?php echo $id;?>">
                            <input type="hidden" name="status" value="<?php echo $status;?>">

                             <?php
                             $status=$vendorvalue['status']  ;                          if($status=='1')
                            {
                              echo "  <input type='submit' class='btn btn-success btn-xs' value='Active'>";
                            }
                            else
                            {
                              echo " <input type='submit' class='btn btn-danger btn-xs' value='Deactive'>";
                            }
                           ?>
                         </form>
                          </td>
            <td>


            <a href="edit.php?action=edit&aid=<?php echo $vendorvalue['id'];?>&of=admin&sidebar=vendor&type=vendor"> <button type='button' rel='tooltip' title='Edit Profile' class='btn btn-success btn-simple btn-xs'><i class='fa fa-edit'></i></button></a>
           <a href="delete.php?action=delete&aid=<?php echo $vendorvalue['id']?>&of=admin"><button type='button' rel='tooltip' title='Remove' class='btn btn-danger btn-simple btn-xs' id='delbutton'>
           <i class='fa fa-times'></i>
           </button></a></td>
           </tr>
      <?php }
      ?>


   </tbody>
 </table>
  </div>
  </div>
</div>
</div>
<?php
//   }
// else {
//   echo "You dont have Admin privilage to view this";
//} ?>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="addvendor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Add new Vendor</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!--      Wizard container        -->
            <div class="wizard-container">

                <div class="card wizard-card" data-color="red" id="wizardProfile">
                      <form method="POST" action="" enctype='multipart/form-data'>
                <!--        You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

                    	<div class="wizard-header">
                        	<h3>
                        	   <b>BUILD</b> YOUR PROFILE <br>
                        	   <small>This information will let us know more about you.</small>
                        	</h3>
                    	</div>

						<div class="wizard-navigation">
							<ul>
	                            <li><a href="#aboutvendor" data-toggle="tab">About</a></li>
	                            <li><a href="#accountvendor" data-toggle="tab">Account</a></li>
	                            <li><a href="#addressvendor" data-toggle="tab">Address</a></li>
                               <li><a href="#descriptionvendor" data-toggle="tab">Description</a></li>
	                        </ul>

						</div>

                        <div class="tab-content">
                            <div class="tab-pane" id="aboutvendor">
                              <div class="row">
                                  <h4 class="info-text"> Let's start with the basic information (with validation)</h4>
                                  <div class="col-sm-4 col-sm-offset-1">
                                     <div class="picture-container">
                                          <div class="picture">
                                              <img src="assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                                <input type='file' name='fileToUpload' id="wizard-picture" required>
                                          </div>
                                          <h6>Vendor Logo/Picture</h6>
                                      </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="form-group">
                                      <label for="exampleInput1" class="bmd-label-floating">Username<small>(required)</small></label>
                                      <input type="text" class="form-control"  name="vusername" id="username" required>

                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInput1" class="bmd-label-floating">Password<small>(required)</small></label>
                                      <input type="password" class="form-control" name="vpassword" id="password" required>
                                       <span class="bmd-help">We'll never share your password with anyone else.</span>

                                    </div>

                                  </div>
                                  <div class="col-sm-10 col-sm-offset-1">
                                      <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">Company Name</label>
                                        <input type="text" class="form-control" name="company_name" id="" required>
                                      </div>
                                  </div>
                                  <div class="col-sm-6 col-sm-offset-1">
                                      <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">Email<small>(required)</small></label>
                                        <input type="text" class="form-control" name="vemail" id="email" required>
                                      </div>
                                  </div>
                                  <div class="col-sm-4">
                                      <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">Contact</label>
                                        <input type="text" class="form-control" name="vcontact" id="contact" required>
                                         <span class="bmd-help">We'll never share your contact with anyone else.</span>
                                      </div>
                                  </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="accountvendor">
                                <h4 class="info-text">Type of Vendor??</h4>
                                <div class="row">

                                    <div class="col-sm-10 col-sm-offset-1">
                                      <div class="col-sm-4 ">
                                          <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if the person is an admin.">
                                              <input type="radio" name="vtype" value="hotel" required>
                                              <div class="icon">
                                                    <i class="fa fa-bed"></i>
                                              </div>
                                              <h6>Hotel</h6>
                                          </div>
                                      </div>
                                      <div class="col-sm-4">
                                          <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if the person is a moderator">
                                              <input type="radio" name="vtype" value="package">
                                              <div class="icon">
                                                  <i class="fa fa-tags"></i>
                                              </div>
                                              <h6>Package</h6>
                                          </div>
                                      </div>
                                      <div class="col-sm-4">
                                          <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if the person is a editor">
                                              <input type="radio" name="vtype" value="ecommerce">
                                              <div class="icon">
                                                  <i class="fa fa-cart-plus"></i>
                                              </div>
                                              <h6>Shopping</h6>
                                          </div>
                                      </div>
                                      <div class="col-sm-4">
                                          <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if the person is a vendor">
                                              <input type="radio" name="vtype" value="rental">
                                              <div class="icon">
                                                  <i class="fa fa-car"></i>
                                              </div>
                                              <h6>Vehicle Rental</h6>
                                          </div>
                                      </div>



                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane" id="addressvendor">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="info-text"> Are you living in a nice area? </h4>
                                    </div>
                                    <div class="col-sm-10 col-sm-offset-1">
                                         <div class="form-group">
                                           <label for="exampleInput1" class="bmd-label-floating">Address</label>
                                           <input type="text" class="form-control" name="vaddress" id="address" required>
                                          </div>
                                    </div>
                                    <div class="col-sm-10 col-sm-offset-1">
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
                                              <input type="text" class="gllpLatitude form-control" name="latitude" value="27.737849299999997"/>
                                            </div>
                                          </div>
                                          <div class="col-sm-5 ">
                                            <div class="form-group">
                                              <input type="text" class="gllpLongitude form-control" name="longitude" value="85.3286484"/>
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
                            <div class="tab-pane" id="descriptionvendor">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="info-text"> Are you living in a nice area? </h4>
                                    </div>


                                    <div class="col-sm-10 col-sm-offset-1">
                                         <div class="form-group">

                                           <label class='control-label'>Description about Company</label>
                                           <textarea class='form-control' rows='5' name='vdescription'></textarea>
                                          </div>
                                    </div>
                                    <div class="col-sm-10 col-sm-offset-1">
                                         <div class="form-group">
                                           <label for="exampleInput1" class="bmd-label-floating">Title</label>
                                           <input type="text" class="form-control" name="vtitle" id="title">
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wizard-footer height-wizard">
                            <div class="pull-right">
                                <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Next' />
                                <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='Finish' />

                            </div>

                            <div class="pull-left">
                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                            </div>
                            <div class="clearfix"></div>
                        </div>
<input type="hidden" name="action" value="Vendor">
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
