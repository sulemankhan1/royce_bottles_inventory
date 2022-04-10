
<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0">
  <div class="row">
      <div class="col-sm-12">
        <?=
        showBreadCumbs([
          ['label'=>'Home','url' => 'dashboard'],
          ['label'=>'Users','url' => 'other_users'],
          ['label'=>'Other Users']
        ])
        ?>
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">

                 <h4 class="card-title"><?= $page_head ?></h4>
               </div>

               <a href="<?= site_url('add_other_user') ?>" class="btn btn-sm btn-primary">Add Other User</a>

            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table id="myDataTable" class="table">
                     <thead>
                        <tr>
                           <th>#</th>
                           <th>Name</th>
                           <th>Username</th>
                           <th>Email</th>
                           <th>Contact #</th>
                           <th>Status</th>
                           <th>Actions</th>
                        </tr>
                     </thead>
                     <tbody>
                       <tr>
                          <td>1</td>
                          <td>
                            <img src="<?= base_url('assets/images/avatars/01.png') ?>" class="table-img-design" alt="">
                            <span class="table-img-txt-design">
                              Name
                            </span>
                          </td>
                          <td>Username</td>
                          <td>Email</td>
                          <td>1111</td>
                          <td>
                            <a href="javascript:void(0)" class="changeUser_status_" data-type-msg="Other User" data-type-status="deactive">
                                  <span class="badge rounded-pill bg-success">Active</span>
                            </a>
                          </td>
                          <td>
                            <span class="actions-icons">
                              <a href="<?= site_url('edit_other_user/1')?>" class="action-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                                <i class="fa fa-pencil"></i>
                              </a>
                              <a href="javascript:void(0)" class="action-icons delete_record_" data-type-msg="Other User" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                <i class="fa-solid fa-trash"></i>
                              </a>
                              <a href="javascript:void(0)" class="action-icons view_details_" data-url="<?= site_url('AjaxController/getViewDetailsByType/Other_user/1') ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Details">
                                <i class="fa fa-eye"></i>
                              </a>
                            </span>
                          </td>
                       </tr>
                       <tr>
                          <td>1</td>
                          <td>
                            <img src="<?= base_url('assets/images/avatars/01.png') ?>" class="table-img-design" alt="">
                            <span class="table-img-txt-design">
                              Name
                            </span>
                          </td>
                          <td>Username</td>
                          <td>Email</td>
                          <td>1111</td>
                          <td>
                            <a href="javascript:void(0)" class="changeUser_status_" data-type-msg="Other User" data-type-status="deactive">
                                  <span class="badge rounded-pill bg-success">Active</span>
                            </a>
                          </td>
                          <td>
                            <span class="actions-icons">
                              <a href="<?= site_url('edit_other_user/1')?>" class="action-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                                <i class="fa fa-pencil"></i>
                              </a>
                              <a href="javascript:void(0)" class="action-icons delete_record_" data-type-msg="Other User" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                <i class="fa-solid fa-trash"></i>
                              </a>
                              <a href="javascript:void(0)" class="action-icons view_details_" data-url="<?= site_url('AjaxController/getViewDetailsByType/Other_user/1') ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Details">
                                <i class="fa fa-eye"></i>
                              </a>
                            </span>
                          </td>
                       </tr>
                       <tr>
                          <td>1</td>
                          <td>
                            <img src="<?= base_url('assets/images/avatars/01.png') ?>" class="table-img-design" alt="">
                            <span class="table-img-txt-design">
                              Name
                            </span>
                          </td>
                          <td>Username</td>
                          <td>Email</td>
                          <td>1111</td>
                          <td>
                            <a href="javascript:void(0)" class="changeUser_status_" data-type-msg="Other User" data-type-status="active">
                                  <span class="badge rounded-pill bg-secondary">Deactive</span>
                            </a>
                          </td>
                          <td>
                            <span class="actions-icons">
                              <a href="<?= site_url('edit_other_user/1')?>" class="action-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                                <i class="fa fa-pencil"></i>
                              </a>
                              <a href="javascript:void(0)" class="action-icons delete_record_" data-type-msg="Other User" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                <i class="fa-solid fa-trash"></i>
                              </a>
                              <a href="javascript:void(0)" class="action-icons view_details_" data-url="<?= site_url('AjaxController/getViewDetailsByType/Other_user/1') ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Details">
                                <i class="fa fa-eye"></i>
                              </a>
                            </span>
                          </td>
                       </tr>
                       <tr>
                          <td>1</td>
                          <td>
                            <img src="<?= base_url('assets/images/avatars/01.png') ?>" class="table-img-design" alt="">
                            <span class="table-img-txt-design">
                              Name
                            </span>
                          </td>
                          <td>Username</td>
                          <td>Email</td>
                          <td>1111</td>
                          <td>
                            <a href="javascript:void(0)" class="changeUser_status_" data-type-msg="Other User" data-type-status="deactive">
                                  <span class="badge rounded-pill bg-success">Active</span>
                            </a>
                          </td>
                          <td>
                            <span class="actions-icons">
                              <a href="<?= site_url('edit_other_user/1')?>" class="action-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                                <i class="fa fa-pencil"></i>
                              </a>
                              <a href="javascript:void(0)" class="action-icons delete_record_" data-type-msg="Other User" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                <i class="fa-solid fa-trash"></i>
                              </a>
                              <a href="javascript:void(0)" class="action-icons view_details_" data-url="<?= site_url('AjaxController/getViewDetailsByType/Other_user/1') ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Details">
                                <i class="fa fa-eye"></i>
                              </a>
                            </span>
                          </td>
                       </tr>
                       <tr>
                          <td>1</td>
                          <td>
                            <img src="<?= base_url('assets/images/avatars/01.png') ?>" class="table-img-design" alt="">
                            <span class="table-img-txt-design">
                              Name
                            </span>
                          </td>
                          <td>Username</td>
                          <td>Email</td>
                          <td>1111</td>
                          <td>
                            <a href="javascript:void(0)" class="changeUser_status_" data-type-msg="Other User" data-type-status="deactive">
                                  <span class="badge rounded-pill bg-success">Active</span>
                            </a>
                          </td>
                          <td>
                            <span class="actions-icons">
                              <a href="<?= site_url('edit_other_user/1')?>" class="action-icons" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                                <i class="fa fa-pencil"></i>
                              </a>
                              <a href="javascript:void(0)" class="action-icons delete_record_" data-type-msg="Other User" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                <i class="fa-solid fa-trash"></i>
                              </a>
                              <a href="javascript:void(0)" class="action-icons view_details_" data-url="<?= site_url('AjaxController/getViewDetailsByType/Other_user/1') ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Details">
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
include(APPPATH.'views/users/modals/status-modal.php');
include(APPPATH.'views/modals/delete-modal.php');
include(APPPATH.'views/modals/view-details-modal.php');
 ?>
