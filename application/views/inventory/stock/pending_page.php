
<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0">
  <div class="row">
      <div class="col-sm-12">
        <?=
        showBreadCumbs([
          ['label'=>'Home','url' => 'dashboard'],
          ['label'=>'Inventory','url' => 'pending_page'],
          ['label'=>'Pending Page']
        ])
        ?>
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
                           <th>Driver</th>
                           <th>Total Products</th>
                           <th>Total Quantity</th>
                           <th>Status</th>
                           <th>Actions</th>
                        </tr>
                     </thead>
                     <tbody>
                       <tr>
                          <td>1</td>
                          <td>
                              Driver
                          </td>
                          <td>10</td>
                          <td>50</td>
                          <td>
                            <a href="javascript:void(0)" class="changeUser_status_" data-type-msg="" data-type-status="confirm">

                                  <span class="badge rounded-pill bg-secondary">Pending</span>
                            </a>
                          </td>
                          <td>
                            <span class="actions-icons">
                              <a href="javascript:void(0)" class="action-icons view_details_" data-url="<?= site_url('AjaxController/getPendingPageStockDetails/1') ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Details">
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
include(APPPATH.'views/modals/view-details-modal.php');
include(APPPATH.'views/users/modals/status-modal.php');
 ?>
