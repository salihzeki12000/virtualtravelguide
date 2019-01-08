<?php
include_once('session.php');
include('include/inc_adminheader.php');

include_once('class/classshop.php');
$shop=new Shop();
$sesid=$_SESSION['id'];
$sesname=$_SESSION['username'];
$admintype=$_SESSION['admintype'];

if($_SERVER['REQUEST_METHOD']=='POST')
{
  extract($_POST);

  $shop->createProduct($prname,$prcategory,$prgender,$prbrand,$prcost,$prdescription,$prcolor,$prquantity,$psize);
}
if($_SERVER['REQUEST_METHOD']=='GET')
{
  extract($_GET);
  @$shop->publishshop($prid,$prstatus);
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
            //  if(($_SESSION['admintype']=='4' && $_SESSION['vendor']=='hotel') || $_SESSION['admintype']=='1')
            // { ?>
            <div class="fresh-table">
              <div class="toolbar">
                <?php if($_SESSION['admintype'] =='4' )
                { ?>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                  Add New Item
                </button>
              <?php } ?>

              <?php if($_SESSION['admintype'] =='1' )
              { ?>
                <a href="shop.php"><button class="btn btn-success">Shop</button></a>
                <?php } ?>
                <?php if($_SESSION['admintype'] =='4' )
                { ?>
                <a href="uservendor.php"><button class="btn btn-success">My Products</button></a> <?php } ?>

              </button>
              <?php
              if($_SESSION['admintype'] =='1' )
              {
                ?>
                <a href="userproductdetails.php"><button class="btn btn-warning">All Products</button></a>
              <?php } ?>

            </div>
            <table  id="fresh-table" class="table table-bordered" style="text-align:center;" >
              <thead>
                <tr>
                  <th data-field="id" data-sortable="true">Id</th>
                  <th data-field="name" data-sortable="true"> Name</th>
                  <th data-field="category" data-sortable="true">Category</th>
                  <th data-field="gender" data-sortable="true">Gender</th>
                  <th data-field="brand" data-sortable="true">Brand</th>
                  <th data-field="cost" data-sortable="true">Cost</th>
                  <th data-field="quantity" data-sortable="true">Quantity</th>
                  <th data-field="deescription" data-sortable="true"> Description</th>
                  <th data-field="color" data-sortable="true"> Color</th>
                  <th data-field="size" data-sortable="true">size</th>
                  <!-- <th data-field="room cost(homestay)" data-sortable="true">Room Cost(Homestay)</th> -->
                  <th data-field="first image" data-sortable="true"> First Image</th>
                  <th data-field="seond image" data-sortable="true">Second Image</th>
                  <th data-field="status" data-sortable="true"> Status</th>

                  <?php if($_SESSION['admintype'] =='4' ) { ?>
                  <th data-field="action" data-sortable="true">Action</th>
                <?php } ?>
                </tr>
              </thead>

              <tbody>


                <?php
                $shops=$shop->getAllProduct($sesid);
                foreach($shops as $key => $shopvalue)
                {
                  $prid=$shopvalue['prid'];
                  $prstatus=$shopvalue['prstatus'];

                  ?>
                  <td><?php echo $prid; ?></td>
                  <td><?php echo $shopvalue['prname']; ?></td>
                  <td><?php echo $shopvalue['prcategory']; ?></td>
                  <td><?php echo $shopvalue['prgender']; ?></td>
                  <td><?php echo $shopvalue['prbrand']; ?></td>
                  <td>Rs.<?php echo $shopvalue['prcost']; ?></td>
                  <td><?php echo $shopvalue['prquantity']; ?></td>
                  <td><?php echo substr($shopvalue['prdescription'],0,45); ?>......</td>
                  <td><?php echo $shopvalue['prcolor']; ?></td>

                  <td> <?php echo $shopvalue['psize']; ?></td>


                  <td><img src="../<?php echo $shopvalue['primg1']; ?>" alt="Products image1" style="height:60px;width:60px;"></td>
                  <td><img src="../<?php echo $shopvalue['primg2']; ?>" alt="Products image2" style="height:60px;width:60px;"></td>


                  <td>
                    <form action=" " method="GET">
                      <input type="hidden" name="prid" value="<?php echo $prid;?>">
                      <input type="hidden" name="prstatus" value="<?php echo $prstatus;?>">


                      <?php

                      if($prstatus=='1')
                      {
                        if($_SESSION['admintype'] =='4' ) {
                          echo "  <input type='submit' class='btn btn-success btn-xs' value='Published'>";
                        }
                          else {
                              echo "  <input  class='btn btn-success btn-xs' value='Published'>";
                          }
                      //  echo "  <input type='submit' class='btn btn-success btn-xs' value='Published'>";
                      //  echo "  <input  class='btn btn-success btn-xs' value='Published'>";
                      }
                      else
                      {
                        if($_SESSION['admintype'] =='4' ) {
                               echo " <input type='submit' class='btn btn-danger btn-xs' value=' unPublished'>";
                             }
                          else {
                              echo " <input  class='btn btn-danger btn-xs' value=' unPublished'>";
                          }
                      //  echo " <input type='submit' class='btn btn-danger btn-xs' value=' unPublished'>";
                    //  echo " <input  class='btn btn-danger btn-xs' value=' unPublished'>";
                  }
                      ?>
                    </td>


                    <?php if($_SESSION['admintype'] =='4' ) { ?>
                    <td>
                      <a href='edit.php?action=edit&prid=<?php echo $prid;?>&of=product&sidebar=product'> <button type='button' rel='tooltip' title='Edit product' class='btn btn-success btn-simple btn-xs'><i class='fa fa-edit'></i></button></a>
                      <a href='delete.php?action=delete&prid=<?php echo $prid;?>&of=product'><button type='button' rel='tooltip' title='Delete product' class='btn btn-danger btn-simple btn-xs' id='delbutton'>
                        <i class='fa fa-times'></i>
                      </button></a>
                    </td>
                  <?php } ?>
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

// }
// else {
//   echo "You dont have privilage to view this";
// } ?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Add new item</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="" enctype='multipart/form-data'>

          <input type="hidden"  name="tid" id="tid">

          <div class="form-group">
            <label for="exampleInput1" class="bmd-label-floating">Name</label>
            <input type="text" class="form-control"  name="prname" id="prname">

          </div>
          <div class="form-group">
            <label for="exampleInput1" class="bmd-label-floating">Category</label>
            <select name="prcategory" class="form-control">
              <option value="Jacket">Jacket</option>
              <option value="Pant">Pant</option>

              <option value="Bag">Bag</option>
              <option value="Shoe">Shoe</option>

              <option value="Equipments">Equipments</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInput1" class="bmd-label-floating">Gender</label>
            <select name="prgender" class="form-control">
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Unisex">Unisex</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInput1" class="bmd-label-floating">Brand</label>
            <input type="text" class="form-control"  name="prbrand" id="prbrand">

          </div>
          <div class="form-group">
            <label for="exampleInput1" class="bmd-label-floating">Price</label>
            <input type="text" class="form-control"  name="prcost" id="prcost">

          </div>
          <div class="form-group">
            <label for="exampleInput1" class="bmd-label-floating">Color</label>
            <input type="text" class="form-control" name="prcolor" id="prcolor">

          </div>
          <div class="form-group">
            <label class='control-label'>Description</label>
            <textarea class='form-control' rows='3' name='prdescription'></textarea>
          </div>



          <div class="form-group">
            <label for="exampleInput1" class="bmd-label-floating">Click to upload main image</label>
            <input type='file' name='fileToUpload' id='fileToUpload'>

          </div>
          <div class="form-group">
            <label for="exampleInput1" class="bmd-label-floating">Click to upload secondary image</label>
            <input type='file' name='coverToUpload' id='coverToUpload'>

          </div>



          <div class="form-group">
            <label for="exampleInput1" class="bmd-label-floating">Size</label>
            <select name="psize" class="form-control">
              <option value="-">-</option>
              <option value="xxl">XXL</option>
              <option value="xl">XL</option>
              <option value="l">L</option>
              <option value="35">35</option>
              <option value="36">36</option>
              <option value="37">37</option>
              <option value="38">38</option>
              <option value="39">39</option>
              <option value="40">40</option>
              <option value="41">41</option>
              <option value="42">42</option>
              <option value="43">43</option>
              <option value="44">44</option>
              <option value="45">45</option>
              <option value="46">46</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>

            </select>
          </div>
          <div class="form-group">
            <label for="exampleInput1" class="bmd-label-floating">Quantity</label>
            <input type="text" class="form-control" name="prquantity" id="prquantity">

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
