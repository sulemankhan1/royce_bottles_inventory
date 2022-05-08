
<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0">
  <div class="row">
      <div class="col-sm-12">
        <?=
        showBreadCumbs([
          ['label'=>'Home','url' => 'dashboard'],
          ['label'=>'Call Orders']
        ])
        ?>
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">

                 <h4 class="card-title"><?= $page_head ?></h4>
               </div>
               <?=
               getHiddenField('ajax_url',$ajax_url);
               ?>
               <a href="<?= site_url('add_call_order') ?>" class="btn btn-sm btn-primary">Add Call Order</a>

            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table id="myDataTable" class="table">
                     <thead>
                        <tr>
                           <th>#</th>
                           <th>Customer</th>
                           <th>Day</th>
                           <th>Total Products</th>
                           <th>Total Qty</th>
                           <th>Total Price</th>
                           <th>Status</th>
                           <th class="dnr">Actions</th>
                        </tr>
                     </thead>
                     <tbody></tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<?php
include(APPPATH.'views/inventory/modals/status_modal.php');
include(APPPATH.'views/modals/delete-modal.php');
include(APPPATH.'views/modals/view-details-modal.php');
?>
