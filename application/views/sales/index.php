
<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0">
  <div class="row">
      <div class="col-sm-12">
        <?=
        showBreadCumbs([
          ['label'=>'Home','url' => 'dashboard'],
          ['label'=>'Sales']
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

               <div class="row">

                 <div class="col-sm-12">

                   <span>
                     <?php if (isUserAllow(48)): ?>

                       <a href="<?= site_url('add_sale') ?>" class="btn btn-sm btn-primary">Add Sale</a>

                       <a href="<?= site_url('sale_call_order') ?>" class="btn btn-sm btn-warning">Add Call Order Sale</a>

                   <?php endif; ?>


                 </div>
               </div>

            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table id="myDataTable" class="table">
                     <thead>
                        <tr>
                           <th>#</th>
                           <th>Invoice #</th>
                           <th>Customer</th>
                           <th>Driver</th>
                           <th>Category</th>
                           <th>Salesperson</th>
                           <th>Total Product</th>
                           <th>Total Qty</th>
                           <th>Total Price</th>
                           <th>Status</th>
                           <th class="dnr">Action</th>
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
include(APPPATH.'views/sales/status_modal.php');
include(APPPATH.'views/modals/delete-modal.php');
?>
