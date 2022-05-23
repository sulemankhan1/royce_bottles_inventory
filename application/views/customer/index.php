
<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0">
  <div class="row">
      <div class="col-sm-12">
        <?=
        showBreadCumbs([
          ['label'=>'Home','url' => 'dashboard'],
          ['label'=>'Customers']
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

               <?php if (isUserAllow(31)): ?>

               <a href="<?= site_url('add_customer') ?>" class="btn btn-sm btn-primary">Add Customer</a>
             <?php endif; ?>

            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table id="myDataTable" class="table">
                     <thead>
                        <tr>
                           <th>#</th>
                           <th>Name</th>
                           <th>Shop Name</th>
                           <th>Shop ID</th>
                           <th>Primary Contact </th>
                           <th>Secondary Contact </th>
                           <th>Email For E-receipt </th>
                           <th>Payment Type</th>
                           <th>Salesperson </th>
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
include(APPPATH.'views/modals/delete-modal.php');
include(APPPATH.'views/modals/view-details-modal.php');
include(APPPATH.'views/customer/customer_products.php');
 ?>
