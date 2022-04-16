
<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0">
  <div class="row">
      <div class="col-sm-12">
        <?=
        showBreadCumbs([
          ['label'=>'Home','url' => 'dashboard'],
          ['label'=>'Categories']
        ])
        ?>
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
                           <th>Price</th>
                           <th>Actions</th>
                        </tr>
                     </thead>
                     <tbody>
                       <tr>
                          <td>1</td>
                          <td>Category</td>
                          <td>100</td>
                          <td>
                            <span class="actions-icons">
                              <a href="<?= site_url('edit_category/1') ?>" class="action-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                                <i class="fa fa-pencil"></i>
                              </a>
                              <a href="javascript:void(0)" class="action-icons delete_record_" data-type-msg="Category" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                <i class="fa-solid fa-trash"></i>
                              </a>
                            </span>
                          </td>
                       </tr>
                       <tr>
                          <td>1</td>
                          <td>Category</td>
                          <td>100</td>
                          <td>
                            <span class="actions-icons">
                              <a href="<?= site_url('edit_category/1') ?>" class="action-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                                <i class="fa fa-pencil"></i>
                              </a>
                              <a href="javascript:void(0)" class="action-icons delete_record_" data-type-msg="Category" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                <i class="fa-solid fa-trash"></i>
                              </a>
                            </span>
                          </td>
                       </tr>
                       <tr>
                          <td>1</td>
                          <td>Category</td>
                          <td>100</td>
                          <td>
                            <span class="actions-icons">
                              <a href="<?= site_url('edit_category/1') ?>" class="action-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                                <i class="fa fa-pencil"></i>
                              </a>
                              <a href="javascript:void(0)" class="action-icons delete_record_" data-type-msg="Category" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                <i class="fa-solid fa-trash"></i>
                              </a>
                            </span>
                          </td>
                       </tr>
                       <tr>
                          <td>1</td>
                          <td>Category</td>
                          <td>100</td>
                          <td>
                            <span class="actions-icons">
                              <a href="<?= site_url('edit_category/1') ?>" class="action-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                                <i class="fa fa-pencil"></i>
                              </a>
                              <a href="javascript:void(0)" class="action-icons delete_record_" data-type-msg="Category" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                <i class="fa-solid fa-trash"></i>
                              </a>
                            </span>
                          </td>
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
