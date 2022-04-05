
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

               <a href="<?= site_url('add_category') ?>" class="btn btn-sm btn-primary">Add Category</a>

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
                          <th>Category</th>
                          <th>
                            <a href="<?= site_url('edit_category/1') ?>" class="action-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                              <i class="fa fa-pencil"></i>
                            </a>
                            <a href="javascript:void(0)" class="action-icons delete_record_" data-type-msg="Category" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                              <i class="fa-solid fa-trash"></i>
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
include(APPPATH.'views/modals/delete-modal.php');
 ?>
