
<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0" style="margin-top:20px!important;">
  <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">

                 <h4 class="card-title"><?= $page_head ?></h4>
               </div>

            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table id="myDataTable" class="table">
                     <thead>
                        <tr>
                           <th>#</th>
                           <th>Name</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                       <tr>
                          <th>1</th>
                          <th>Driver</th>
                          <th>
                            <a href="<?= site_url('edit_rights') ?>" class="action-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                              <i class="fa fa-pencil"></i>
                            </a>
                            <a href="javascript:void(0)" class="action-icons view_details_" data-url="<?= site_url('AjaxController/getViewDetailsByType/Rights/1') ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Details">
                              <i class="fa fa-eye"></i>
                            </a>
                          </th>
                       </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<?php
include(APPPATH.'views/modals/view-details-modal.php');
 ?>
