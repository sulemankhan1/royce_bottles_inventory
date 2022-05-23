
<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0" style=" padding-top: 80px !important; background: #e9ecef !important">
  <div class="row">
      <div class="col-sm-12">
        <?=
        showBreadCumbs([
          ['label'=>'Home','url' => 'dashboard'],
          ['label'=>'Products']
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

               <?php if (isUserAllow(26)): ?>

               <a href="<?= site_url('add_product') ?>" class="btn btn-sm btn-primary">Add Product</a>
             <?php endif; ?>

            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table id="myDataTable" class="table">
                     <thead>
                        <tr>
                           <th>#</th>
                           <th style="width:60%!important">Product</th>
                           <th style="width:60%!important">Product Category</th>
                           <th>Product Code</th>
                           <th>SKU</th>
                           <th>Price</th>
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
 ?>
