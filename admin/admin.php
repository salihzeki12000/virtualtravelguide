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
  if(isset($_POST["action"]))
  {
  if($_POST["action"] == "Admin")
  {
    extract($_POST);
    echo $ausername;
    $admin->createAdmin($ausername,$afirstname,$alastname,$aemail,$acontact,$apassword,$aaddress,$adescription,$atitle);
  }

if($_POST["action"] == "Vendor")
{
  extract($_POST);
echo $vtype;
  $admin->createVendor($vusername,$vemail,$vcontact,$vpassword,$vaddress,$vdescription,$vtype,$company_name,$cmap);
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
          if($_SESSION['admintype']=='1')
         { ?>
                <!-- Button trigger modal -->
          <div class="fresh-table">
            <div class="toolbar">
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"> Add New Admin
                    </button>

           </div>

          <table  id="fresh-table" class="table table-bordered" >
          <thead>
            <tr>
              <th data-field="id" data-sortable="true">Id</th>
              <th data-field="username" data-sortable="true">Username</th>
              <th data-field="firstname" data-sortable="true">Firstname</th>
              <th data-field="lastname" data-sortable="true">Lastname</th>
              <th data-field="email" data-sortable="true">Email</th>
              <th data-field="contact" data-sortable="true">Contact</th>
              <th data-field="address" data-sortable="true">Address</th>
              <th data-field="description" data-sortable="true">Description</th>
              <th data-field="title" data-sortable="true">Title</th>
              <th data-field="role" data-sortable="true">Role</th>
              <th data-field="profile picture" data-sortable="true">Profile Picture</th>
              <th data-field="join date" data-sortable="true">Join date</th>
              <th data-field="action" data-sortable="true">Action</th>
            </tr>
          </thead>
          <tbody>

            <?php
              $admin->getAllAdmin();
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
  echo "You dont have Admin privilage to view this";
} ?>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Add new Admin Member</b></h5>
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
	                            <li><a href="#about" data-toggle="tab">About</a></li>
                              <!-- <li><a href="#account" data-toggle="tab">Account</a></li> -->
	                            <li><a href="#address" data-toggle="tab">Address</a></li>
	                        </ul>

						</div>

                        <div class="tab-content">
                            <div class="tab-pane" id="about">
                              <div class="row">
                                  <h4 class="info-text"> Let's start with the basic information (with validation)</h4>
                                  <div class="col-sm-4 col-sm-offset-1">
                                     <div class="picture-container">
                                          <div class="picture">
                                              <img src="assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                                <input type='file' name='fileToUpload' id="wizard-picture" required>
                                          </div>
                                          <h6>Choose Picture</h6>
                                      </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="form-group">
                                      <label for="exampleInput1" class="bmd-label-floating">Username<small>(required)</small></label>
                                      <input type="text" class="form-control"  name="ausername" id="username" required>

                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInput1" class="bmd-label-floating">Password<small>(required)</small></label>
                                      <input type="password" class="form-control" name="apassword" id="password" required>
                                       <span class="bmd-help">We'll never share your password with anyone else.</span>

                                    </div>
                                  </div> 
                                      <div class="col-sm-5 col-sm-offset-1">
                                      <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">Firstname<small>(required)</small></label>
                                        <input type="text" class="form-control" name="afirstname" id="firstname" required>
                                      </div>
                                    </div>
                                      <div class="col-sm-5">
                                      <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">Lastname<small>(required)</small></label>
                                        <input type="text" class="form-control" name="alastname" id="lastname" required>

                                      </div>
                                  </div>
                                  <div class="col-sm-6 col-sm-offset-1">
                                      <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">Email<small>(required)</small></label>
                                        <input type="text" class="form-control" name="aemail" id="email" required>
                                      </div>
                                  </div>
                                  <div class="col-sm-4">
                                      <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">Contact</label>
                                        <input type="text" class="form-control" name="acontact" id="contact" required>
                                         <span class="bmd-help">We'll never share your contact with anyone else.</span>
                                      </div>
                                  </div>
                              </div>
                            </div>
                            <!-- <div class="tab-pane" id="account">
                                                            <h4 class="info-text">Type of Admin??</h4>
                                                            <div class="row">

                                                                <div class="col-sm-10 col-sm-offset-1">
                                                                  <div class="col-sm-4 ">
                                                                      <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if the person is an admin.">
                                                                          <input type="radio" name="type" value="1" required>
                                                                          <div class="icon">
                                                                              <i class="fa fa-universal-access"></i>
                                                                          </div>
                                                                          <h6>Admin</h6>
                                                                      </div>
                                                                  </div> -->


                                                                  <!-- <div class="col-sm-4">
                                                                      <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if the person is a vendor">
                                                                          <input type="radio" name="type" value="4">
                                                                          <div class="icon">
                                                                              <i class="fa fa-group"></i>
                                                                          </div>
                                                                          <h6>Vendor</h6>
                                                                      </div>
                                                                  </div> -->
                                                                  <!-- <div class="col-sm-4">
                                                                      <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if the person is a vendor">
                                                                  <Span style="color:red;"><small>Select one only if the admin is a vendor</small></span>
                                                                  <select class="form-control" name="vtype">
                                                                      <option value="hotel">Hotel</option>


                                                                  </select>
                                                                </div>
                                                            </div> -->


                                                                <!-- </div>

                                                            </div>
                                                        </div> -->
                            <div class="tab-pane" id="address">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="info-text"> Are you living in a nice area? </h4>
                                    </div>
                                    <div class="col-sm-10 col-sm-offset-1">
                                         <div class="form-group">
                                           <label for="exampleInput1" class="bmd-label-floating">Address</label>
                                           <input type="text" class="form-control" name="aaddress" id="address">
                                          </div>
                                    </div>

                                    <div class="col-sm-10 col-sm-offset-1">
                                         <div class="form-group">

                                           <label class='control-label'>Description about Hotel</label>
                                           <textarea class='form-control' rows='3' name='adescription' required></textarea>
                                          </div>
                                    </div>
                                    <div class="col-sm-10 col-sm-offset-1">
                                         <div class="form-group">
                                           <label for="exampleInput1" class="bmd-label-floating">Title</label>
                                           <input type="text" class="form-control" name="atitle" id="title" required>
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
<input type="hidden" name="action" value="Admin">
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
