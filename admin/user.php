<?php include_once('session.php'); ?>
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

include_once('class/classuser.php');
$user=new user();
if($_SERVER['REQUEST_METHOD']=='POST')
{
  extract($_POST);
  $user->createUser($cusername,$cfirst_name,$clast_name,$caddress,$ccontact,$cemail,$cdob,$cgender,$cpassword,$cabout);
}
if($_SERVER['REQUEST_METHOD']=='GET')
{
  extract($_GET);
@$user->publishuser($cid,$cstatus);
}

?>
<div class="wrapper">

        <?php include('include/inc_leftsidebar.php'); ?>

    <div class="main-panel">
      <?php include('include/inc_adminnavbar.php'); ?>
        <div class="content">
            <div class="container-fluid">
              <!-- CONTENT HERE -->
 <div class="row">

      <div class="card col-md-12" >
                <!-- Button trigger modal -->
                <div class="fresh-table">
                  <?php
                    if($_SESSION['admintype']=='1')
                   { ?>
                  <div class="toolbar">
                    <!-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                    Add New Customer/User
                    </button> -->
           </div>
      <table  id="fresh-table" class="table table-bordered" >
          <thead>
            <tr>
              <th data-field="id" data-sortable="true">Id</th>
              <th data-field="Username" data-sortable="true">Username</th>
              <th data-field="first Name" data-sortable="true">First name</th>
              <th data-field="last name" data-sortable="true">Last name</th>
              <th data-field="address" data-sortable="true">Address</th>
              <th data-field="contact" data-sortable="true">Contact</th>
              <th data-field="email" data-sortable="true">Email</th>
              <th data-field="date of birth" data-sortable="true">Date of birth</th>
              <th data-field="gender" data-sortable="true">Gender</th>

              <th data-field="about" data-sortable="true">About</th>
              <th data-field="joined date" data-sortable="true">Joined date</th>
              <th data-field="profile picture" data-sortable="true">Profile Picture</th>
              <th data-field="status" data-sortable="true">Status</th>
               <th data-field="action" >Action</th>
            </tr>
          </thead>
          <tbody>

          <tr>
                        <?php
                        $userv=$user->getAlluser();
                        foreach($userv as $key => $uservalue)
                        {
                          $cid=$uservalue['cid'];
                            $cstatus=$uservalue['cstatus'];

                          ?>
                          <td><?php echo $cid; ?></td>
                           <td><?php echo $uservalue['cusername']; ?></td>
                            <td><?php echo $uservalue['cfirst_name']; ?></td>
                            <td><?php echo $uservalue['clast_name']; ?></td>
                            <td><?php echo $uservalue['caddress']; ?></td>
                            <td><?php echo $uservalue['ccontact']; ?></td>
                            <td><?php echo $uservalue['cemail']; ?></td>
                            <td><?php echo $uservalue['cdob']; ?></td>
                              <td><?php echo $uservalue['cgender']; ?></td>

                               <td><?php echo substr($uservalue['cabout'],0,30);?>........</td>
                                <td><?php echo $uservalue['cjoindate']; ?></td>

                              <td><img src="../<?php echo $uservalue['cimage']; ?>" alt="Profile Image missing" style="height:60px;width:60px;"></td>


                          <td>
                            <form action=" " method="GET">
                            <input type="hidden" name="cid" value="<?php echo $cid;?>">
                            <input type="hidden" name="cstatus" value="<?php echo $cstatus;?>">

                             <?php

                            if($cstatus=='1')
                            {
                              echo "  <input type='submit' class='btn btn-success btn-xs' value='Published'>";
                            }
                            else
                            {echo " <input type='submit' class='btn btn-danger btn-xs' value='Not Published'>";}
                           ?>
                          </td>
                               <td>
                            <!-- <a href='edit.php?action=edit&cid=<?php echo $cid;?>&of=user&sidebar=user'> <button type='button' rel='tooltip' title='Edit user' class='btn btn-success btn-simple btn-xs'><i class='fa fa-edit'></i></button></a> -->
                            <a href='delete.php?action=delete&cid=<?php echo $cid;?>&of=user'><button type='button' rel='tooltip' title='Delete user' class='btn btn-danger btn-simple btn-xs' id='delbutton'>
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
<?php }
else {
  echo "You dont have Admin priviliage to view this";
}
?>

</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Add new customer</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" enctype='multipart/form-data' action="">
          <div class="form-group">
             <label for="exampleInput1" class="bmd-label-floating">Username</label>
             <input type="text" class="form-control" name="cusername" id="cusername">

          </div>
          <div class="form-group">
             <label for="exampleInput1" class="bmd-label-floating">Firstname</label>
             <input type="text" class="form-control" name="cfirst_name" id="cfirst_name">

          </div>
          <div class="form-group">
             <label for="exampleInput1" class="bmd-label-floating">Lastname</label>
             <input type="text" class="form-control" name="clast_name" id="clast_name">

          </div>
          <div class="form-group">
             <label for="exampleInput1" class="bmd-label-floating">address</label>
             <input type="text" class="form-control" name="caddress" id="caddress">

          </div>
          <div class="form-group">
             <label for="exampleInput1" class="bmd-label-floating">Contact</label>
             <input type="text" class="form-control" name="ccontact" id="ccontact">
              <span class="bmd-help">We'll never share your contact with anyone else.</span>
          </div>
          <div class="form-group">
            <label for="exampleInput1" class="bmd-label-floating">Click to upload image</label>
            <input type='file' name='fileToUpload' id='fileToUpload'>

          </div>

            <div class="form-group">
             <label for="exampleInput1" class="bmd-label-floating">email</label>
             <input type="text" class="form-control" name="cemail" id="cemail">
              <span class="bmd-help">We'll never share your email with anyone else.</span>
          </div>

              <div class="form-group">
             <label for="exampleInput1" class="bmd-label-floating">date of birth</label>
             <input type="date" class="form-control" name="cdob" id="cdob">
          </div>


             <div class="form-group">
             <label for="exampleFormControlSelect1">gender</label>
             <select class="form-control" name="cgender" id="cgender">
               <option value="male">male</option>
               <option value="female">female</option>
               <option value="other">other</option>
             </select>
           </div>

          <div class="form-group">
             <label for="exampleInput1" class="bmd-label-floating">Password</label>
             <input type="password" class="form-control" name="cpassword" id="cpassword">
              <span class="bmd-help">We'll never share your password with anyone else.</span>
          </div>
          <div class="form-group">
             <label for="exampleInput1" class="bmd-label-floating">About</label>
             <input type="text" class="form-control" name="cabout" id="cabout">

          </div>




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

          <input type="submit" value="Add" class="btn btn-success">
          </form>
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
 <!-- SEE OTHER PAGES TO SEE HOW THE MODAL HAS BEEN USED AND USE ACCORDINGLY -->
