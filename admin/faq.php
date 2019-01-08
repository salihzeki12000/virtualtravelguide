

<?php

include_once('session.php');
include('include/inc_adminheader.php');
include_once('class/classfaq.php');
$faq=new faq();


if($_SERVER['REQUEST_METHOD']=='POST')
{
  extract($_POST);
  
  
  $faq->createfaq($fques,$fans);
}
if($_SERVER['REQUEST_METHOD']=='GET')
{
  extract($_GET);
@$faq->publishfaq($fid,$fstatus);
}
?>
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
                           Add New FAQ  
                           </button>
                  </div>
                      <table id="fresh-table" class="table table-bordered" >
                          <thead>
                            <tr>
                              <th data-field="fid" data-sortable="true">fid</th>
                               <th data-field="fques" data-sortable="true">Frequently asked question</th>
                               <th data-field="fans" data-sortable="true">Answer</th>
                                <th data-field="fdate" data-sortable="true">Added date</th>
                               <th data-field="fstatus" data-sortable="true">status</th>
                                
                              

                                <th data-field="action">Action</th>
                            </tr>
                          </thead>
                          <tbody>

                         
                                                   <?php
                                                  
                                                  
                                                   $faqf=$faq->getAllfaq();
                                                   foreach($faqf as $key => $faqvalue)
                                                   {
                                                      $fid=$faqvalue['fid'];
                                                       $fstatus=$faqvalue['fstatus'];

                                                     ?>
                                                     <td><?php echo $fid; ?></td>
                                                       <td><?php echo substr($faqvalue['fques'],0,45); ?>......</td> ?>
                                                      <td><?php echo substr($faqvalue['fans'],0,45); ?>......</td> ?>
                                                        <td><?php echo $faqvalue['fdate']; ?></td>


                                                         <td>
                                                       <form action=" " method="GET">
                                                       <input type="hidden" name="fid" value="<?php echo $fid;?>">
                                                       <input type="hidden" name="fstatus" value="<?php echo $fstatus;?>">

                                                        <?php

                                                       if($fstatus=='1')
                                                       {
                                                         echo "  <input type='submit' class='btn btn-success btn-xs' value='Published'>";
                                                       }
                                                       else
                                                       {echo " <input type='submit' class='btn btn-danger btn-xs' value='Not Published'>";}
                                                      ?>
                                                     </td>
                                                      <td>
                                                           <a href='delete.php?action=delete&fid=<?php echo $fid;?>&of=faq'><button type='button' rel='tooltip' title='Delete package' class='btn btn-danger btn-simple btn-xs' id='delbutton'>
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
        <h5 class="modal-title" id="exampleModalLabel"><b>Add new frequently asked questions</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="">

             <input type="hidden"  name="fid" id="fid">

          <div class="form-group">
                      <label class='control-label'>Frequently asked questions</label>
                      <textarea class='form-control' rows='5' name='fques'></textarea>
                    </div>

                     <div class="form-group">
                      <label class='control-label'>Answers</label>
                      <textarea class='form-control' rows='5' name='fans'></textarea>
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
