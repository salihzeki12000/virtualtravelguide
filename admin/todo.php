<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="assets/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
function validate()
{

	var ttitle = $('#ttitle').val();

	var taddress = $('#taddress').val();

	var img = $('#fileToUpload').val();


	$('#errttitle').html("");
	$('#errtaddress').html("");
	$('#errimg').html("");

	if(ttitle=='')
	{
		$('#errttitle').html("please enter title ");
		return false;
	}


	if(taddress=='')
	{
		$('#errtaddress').html("please enter address");
		return false;
	}

	if(img=='')
	{
		$('#errimg').html("please upload an image");
		return false;
	}
	return true;


}
</script>








<?php
include_once('session.php');
include('include/inc_adminheader.php');
include_once('class/classtodo.php');
$todo=new Todo();
include_once('class/classlocation.php');
$location=new Location;

if($_SERVER['REQUEST_METHOD']=='POST')
{
  extract($_POST);
  $aid=$_SESSION['id'];
  $ausername=$_SESSION['username'];
  $todo->createTodo($aid,$ausername,$tlocation,$ttitle,$taddress,$tdescription,$tkeyword,$tlatitude,$tlongitude);
}
if($_SERVER['REQUEST_METHOD']=='GET')
{
  extract($_GET);
@$todo->publishtodo($tid,$tstatus);
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
                  Add New Things to do
                </button>
              </div>
              <table id="fresh-table" class="table table-bordered" >
                <thead>
                  <tr>
                    <th data-field="tid" data-sortable="true">TId</th>
                    <th data-field="addedby" data-sortable="true">AddedBy</th>
                    <th data-field="location" data-sortable="true">Location</th>
                    <th data-field="title" data-sortable="true">Title</th>
                    <th data-field="description" data-sortable="true">Description</th>
                    <th data-field="image1" data-sortable="true">Image</th>
										<th data-field="image" data-sortable="true">Second Image</th>
                    <th data-field="added date" data-sortable="true">Added Date</th>
                    <th data-field="keyword" data-sortable="true">Keyword</th>
                    <th data-field="latitude" data-sortable="true">Latitude</th>
                    <th data-field="longitude" data-sortable="true">Longitude</th>

                    <th data-field="status" data-sortable="true">Status</th>
                    <th data-field="views" data-sortable="true">Views</th>

                    <th data-field="action">Action</th>
                  </tr>
                </thead>
                <tbody>

                  <tr>
                        <?php
                        $todov=$todo->getAlltodo();
                        foreach($todov as $key => $todovalue)
                        {
                          $tid=$todovalue['tid'];
                            $tstatus=$todovalue['tstatus'];

                          ?>
                          <td><?php echo $tid; ?></td>
                           <td><?php echo $todovalue['ausername']; ?></td>
                            <td><?php echo $todovalue['tlocation']; ?></td>
                            <td><?php echo $todovalue['ttitle']; ?></td>
                             <td><?php echo substr($todovalue['tdescription'],0,45); ?>......</td>
                              <td><img src="../<?php echo $todovalue['timage1']; ?>" alt="todo image1" style="height:60px;width:60px;"></td>
															<td><img src="../<?php echo $todovalue['timage2']; ?>" alt="todo image1" style="height:60px;width:60px;"></td>

                              <td><?php echo $todovalue['tadded_date']; ?></td>
                                <td><?php echo $todovalue['tkeyword']; ?></td>

                          <td><?php echo $todovalue['tlatitude']; ?></td>

                          <td><?php echo $todovalue['tlongitude']; ?></td>


                          <td>
                            <form action=" " method="GET">
                            <input type="hidden" name="tid" value="<?php echo $tid;?>">
                            <input type="hidden" name="tstatus" value="<?php echo $tstatus;?>">

                             <?php

                            if($tstatus=='1')
                            {
                              echo "  <input type='submit' class='btn btn-success btn-xs' value='Published'>";
                            }
                            else
                            {echo " <input type='submit' class='btn btn-danger btn-xs' value='Not Published'>";}
                           ?>
                          </td>

                          <td><?php echo $todovalue['tcounter']; ?></td>

                               <td>
                            <a href='edit.php?action=edit&tid=<?php echo $tid;?>&of=todo&sidebar=todo'> <button type='button' rel='tooltip' title='Edit todo' class='btn btn-success btn-simple btn-xs'><i class='fa fa-edit'></i></button></a>
                            <a href='delete.php?action=delete&tid=<?php echo $tid;?>&of=todo'><button type='button' rel='tooltip' title='Delete todo' class='btn btn-danger btn-simple btn-xs' id='delbutton'>
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
        <h5 class="modal-title" id="exampleModalLabel"><b>Add new Thinds to do</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="" enctype='multipart/form-data' onSubmit="return validate()">



          <!--      Wizard container        -->
          <div class="wizard-container" >
            <div class="card1 wizard-card" data-color="red" id="wizard">
              <form method="POST" action="" enctype='multipart/form-data'>
                <!--        You can switch ' data-color="green" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

                <div class="wizard-header">
                  <h3>
                    <b>THINGS TO DO</b>  <br>
                  </h3>
                </div>
                <div class="wizard-navigation">
                  <ul>
                    <li><a href="#location" data-toggle="tab">Basics</a></li>
                    <li><a href="#description" data-toggle="tab">Description</a></li>
                    <li><a href="#map" data-toggle="tab">Map</a></li>
                    <li><a href="#image" data-toggle="tab">Images</a></li>
                  </ul>
                </div>

                <div class="tab-content">
                  <div class="tab-pane" id="location">
                    <div class="row"><input type="hidden" class="form-control"  name="rid" id="rid">
                      <div class="col-sm-12">
                        <h4 class="info-text"> Let's start with the basic details</h4>
                      </div>             <input type="hidden"  name="tid" id="tid">


                      <div class="col-sm-10 col-sm-offset-1">
                        <div class="form-group">
                          <label for="exampleInput1" class="bmd-label-floating">Location</label>
                          <select class="form-control" name="tlocation" id="tlocation">
                            <?php
                            $location->getAllLocation();

                            ?>



                          </select>
                        </div>
                      </div>
                      <div class="col-sm-10 col-sm-offset-1">
                        <div class="form-group">
                          <label for="exampleInput1" class="bmd-label-floating">Things to do Title</label>
                          <input type="text" class="form-control"  name="ttitle" id="ttitle">


                        </div>
                      </div>
                      <div class="col-sm-10 col-sm-offset-1">
                        <div class="form-group">
                          <label for="exampleInput1" class="bmd-label-floating">Destination Address</label>
                          <input type="text" class="form-control"  name="taddress" id="taddress">

                        </div>
                      </div>





                    </div>
                  </div>
                  <div class="tab-pane" id="description">
                    <h4 class="info-text">What the place has to offer? </h4>
                    <div class="row">
                      <div class="col-sm-10 col-sm-offset-1">

                        <div class="form-group">
                          <label class='control-label'>Description</label>
                          <textarea class='form-control' rows='5' name='tdescription'></textarea>
                        </div>

                      </div>
                      <div class="col-sm-10 col-sm-offset-1">
                        <div class="form-group">
                          <label for="exampleInput1" class="bmd-label-floating">Keywords</label>
                          <input type="text" class="form-control"  name="tkeyword" id="tkeyword">

                        </div>
                      </div>

                    </div>
                  </div>
                  <div class="tab-pane" id="map">
                    <h4 class="info-text">    Move the marker, double click on the map or set new values to interact.
                     </h4>
                    <div class="row">
                      <div class="col-sm-10 col-sm-offset-1">

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
                                  <input type="text" class="gllpLatitude form-control" name="tlatitude" value="27.737849299999997"/>
                                </div>
                              </div>
                              <div class="col-sm-5 ">
                                <div class="form-group">
                                  <input type="text" class="gllpLongitude form-control" name="tlongitude" value="85.3286484"/>
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
                          <label for="exampleInput1" class="bmd-label-floating">Click to upload Cover Image</label>

                        </div>
                        <input type='file' name='coverToUpload' id='coverToUpload'>


                      </div>
					  	 <label id="errimg" style="color:red;">   </label>
					   <label id="errttitle" style="color:red;">   </label>
					    <label id="errtaddress" style="color:red;">   </label>
                    </div>
                  </div>

                </div>
                <div class="wizard-footer">
                  <!-- <div class="pull-right">
                    <input type='button' class='btn btn-next btn-fill btn-success btn-wd btn-sm' name='next' value='Next' />
                  --><input type='submit' class='btn btn-finish btn-fill btn-success btn-wd btn-sm' name='finish' value='Finish' />

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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

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
