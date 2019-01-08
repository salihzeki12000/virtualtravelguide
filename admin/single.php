<?php
include('include/inc_adminheader.php');
$id=$_GET['hid'];
@$name=$_GET['name'];

include_once('class/classhotelroom.php');
$room=new Room();
if($_SERVER['REQUEST_METHOD']=='POST')
{
  extract($_POST);
  $room->createroom ($hid,$rno,$rtitle,$rhomestaycost,$rhotelcost,$totalroom,$refrigerator,$wifi,$hotwater,$aircondition,$tv,$private_bathroom,$noofbed,$restaurant,$roomservice,$laundry);
}

?>
<div class="wrapper">

        <?php include('include/inc_leftsidebar.php'); ?>

    <div class="main-panel">
      <?php include('include/inc_adminnavbar.php'); ?>

        <div class="content">
            <div class="container-fluid">
              <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="hotel.php?sidebar=hotel">Hotel</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><?php echo $name;

                  ?> </li>
                </ol>
              </nav>
                <div class="row">
                  <div class="card col-md-12" style="overflow:scroll;">
                  <!-- Button trigger modal -->
                      <!-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#addroom">
                      Add Room
                      </button> -->
                    <table class="table table-bordered" >
                        <thead>
                          <tr>
                            <th>Room id</th>
                            <th>Room No.</th>

                            <th>Room Title</th>
                            <th>Room Type</th>
                            <th>Room Cost(Homestay)</th>
                            <th>Room Cost(Hotel)</th>
                            <th>Total Number of rooms</th>
                            <th>Image</th>
                            <th>Amneties</th>
                            <th>Total Number of beds</th>
                            <th>Status</th>
                            <!-- <th>Action</th> -->
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                          <?php
                            $room->getAllRoomFromHotel($id);
                           ?>
                          </tr>
                        </tbody>
                      </table>

                  </div>
                </div>
              </div>
            </div>
          </div>

</div>

          <!-- Modal for adding room-->
          <div class="modal fade" id="addroom" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><b>Add new Room</b></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form method="POST" action="" enctype='multipart/form-data'>
                    <div class="form-group">
                        <label for="exampleInput1" class="bmd-label-floating">Room Id</label>
                       <input type="hidden" class="form-control"  name="rid" id="rid">

                    </div>
                    <div class="form-group">
                       <label for="exampleInput1" class="bmd-label-floating">Hotel </label>
                       <input type="hidden" value="<?php echo $id; ?>" name="hid">

                    </div>
                    <div class="form-group">
                       <label for="exampleInput1" class="bmd-label-floating">Room No.</label>
                       <input type="text" class="form-control"  name="rno" id="rno">

                    </div>
                    <div class="form-group">
                       <label for="exampleInput1" class="bmd-label-floating">Room Title</label>
                       <input type="text" class="form-control"  name="rtitle" id="rtitle">

                    </div>
                    <div class="form-group">
                      <label for="exampleInput1" class="bmd-label-floating">Click to upload Room image</label>
                      <input type='file' name='fileToUpload' id='fileToUpload'>

                    </div>
                    <!-- <div class="form-group">
                       <label for="exampleInput1" class="bmd-label-floating">Room type</label>
                       <select class="form-control" name="rtype" id="rtype">
                         <option value="hotel">Hotel </option>
                         <option value="homestay">Homestay</option>
                       </select>
                    </div> -->
                    <div class="form-group">
                       <label for="exampleInput1" class="bmd-label-floating">Homestay Cost</label>
                       <input type="text" class="form-control" name="rhomestaycost" id="rhomestaycost">

                    </div>
                    <div class="form-group">
                       <label for="exampleInput1" class="bmd-label-floating">Hotel Room Cost</label>

                       <input type="text" class="form-control" name="rhotelcost" id="rhotelcost">
                    </div>
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
                    <div class="form-group">
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
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    <input type="submit" value="Add" class="btn btn-success">
                    </form>
                </div>
              </div>
            </div>
          </div>

          <?php include('include/inc_adminfooterscripts.php'); ?>
