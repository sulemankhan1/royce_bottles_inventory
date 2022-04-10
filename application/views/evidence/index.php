
<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0">
  <div class="row">
      <div class="col-sm-12">
        <?=
        showBreadCumbs([
          ['label'=>'Home','url' => 'dashboard'],
          ['label'=>'Evidence']
        ])
        ?>
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">

                 <h4 class="card-title"><?= $page_head ?></h4>
               </div>

               <a href="<?= site_url('add_evidence') ?>" class="btn btn-sm btn-primary">Add Evidence</a>

            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table id="myDataTable" class="table">
                     <thead>
                        <tr>
                           <th>#</th>
                           <th>Shop Name</th>
                           <th>Image</th>
                           <th>Comment</th>
                           <th>Added By </th>
                           <th>Added At </th>
                           <th>Actions</th>
                        </tr>
                     </thead>
                     <tbody>
                       <tr>
                          <td>1</td>
                          <td>shopname</td>
                          <td>
                            <img src="<?= base_url('assets/images/avatars/01.png') ?>" class="table-img-design" alt="">
                          </td>
                          <td>Lorem ipsum dolor sit amet, consectetur adipisicing aliqua.</td>
                          <td>Driver1</td>
                          <td>03-03-2022,04:02 PM</td>
                          <td>
                            <span class="actions-icons">
                              <a href="<?= site_url('edit_evidence/1') ?>" class="action-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                                <i class="fa fa-pencil"></i>
                              </a>
                              <a href="javascript:void(0)" class="action-icons delete_record_" data-type-msg="Evidence" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                <i class="fa-solid fa-trash"></i>
                              </a>
                              <a href="javascript:void(0)" class="action-icons view_details_" data-url="<?= site_url('AjaxController/getEvidenceDetails/1') ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Details">
                                <i class="fa fa-eye"></i>
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
include(APPPATH.'views/modals/view-details-modal.php');
 ?>
