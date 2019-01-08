<?php
include_once('session.php');
include('include/inc_adminheader.php');

include_once('class/classlocation.php');
$location=new Location;

if($_SERVER['REQUEST_METHOD']=='POST')
{
  extract($_POST);
  //$aid=$_SESSION['id'];
  // $ausername=$_SESSION['username'];
 $location->createLocation($lid,$lname);
}

if($_SERVER['REQUEST_METHOD']=='GET')
{
  extract($_GET);
@$location->publishLocation($lid,$lstatus);
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
              if($_SESSION['admintype']=='1')
             { ?>
            <div class="fresh-table">
              <div class="toolbar">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                  Add New Location
                </button>
              </div>
              <table id="fresh-table" class="table table-bordered">
                <thead>
                  <tr>
                    <th data-field="lid" data-sortable="true">Lid</th>
                    <th data-field="location" data-sortable="true">Location </th>
                    <th data-field="image" data-sortable="true">Image</th>
                    <th data-field="cover image" data-sortable="true">Cover Image</th>
                    <th data-field="status" data-sortable="true">Status</th>
                    <th class="text-center" data-field="action">Action</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                    $locationv=$location->getAllLocationA();
                    foreach($locationv as $key => $locationvalue)
                        {
                          $lid=$locationvalue['lid'];
                            $lname=$locationvalue['lname'];
                            $lstatus=$locationvalue['lstatus'];
                          ?>
                    <tr>
                       <td><?php echo $lid; ?></td>
                         <td><?php echo $lname; ?></td>

                           <td><img src="../<?php echo $locationvalue['limage']; ?>" alt="location image" style="height:60px;width:60px;"></td>

                          <td><img src="../<?php echo $locationvalue['limage2']; ?>" alt="Second image" style="height:60px;width:60px;"></td>
                          <td>
                            <form action="" method="GET">
                            <input type="hidden" name="lid" value="<?php echo $lid;?>">
                            <input type="hidden" name="lstatus" value="<?php echo $lstatus;?>">

                             <?php

                            if($lstatus=='1')
                            {
                              echo "  <input type='submit' class='btn btn-success btn-xs' value='Enabled'>";
                            }
                            else
                            {
                              echo " <input type='submit' class='btn btn-danger btn-xs' value='Disabled'>";
                            }
                           ?>

                          </td>
                                <td>
                            
                            <a href='delete.php?action=delete&lid=<?php echo $lid;?>&of=location'><button type='button' rel='tooltip' title='Delete location' class='btn btn-danger btn-simple btn-xs' id='delbutton'>
                              <i class='fa fa-times'></i>
                            </button></a></td>
                         </form>

                          </tr>
  <?php
                  }  ?>

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
  echo "You dont have Admin privilage to view this";
}

 ?>




  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><b>Add new Location</b></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="" enctype='multipart/form-data'>

            <input type="hidden"  name="lid" id="lid">


            <div class="form-group">
              <label for="exampleInput1" class="bmd-label-floating"></label>location Name
              <input type="text" class="form-control"  name="lname" id="lname" required>

            </div>





            <div class="form-group">
              <label for="exampleInput1" class="bmd-label-floating">Click to upload image</label>
              <input type='file' name='fileToUpload' id='fileToUpload' required>

            </div>
            <div class="form-group">
              <label for="exampleInput1" class="bmd-label-floating">Click to upload cover image</label>
              <input type='file' name='coverToUpload' id='coverToUpload'>

            </div>

       
              <input type="hidden" class="form-control"  name="status" id="status" value="1">

           





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
