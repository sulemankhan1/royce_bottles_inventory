<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0">
  <div class="row">
      <div class="col-sm-12 col-lg-12">
        <?=
        showBreadCumbs([
          ['label'=>'Home','url' => 'dashboard'],
          ['label'=>'Payments ']
        ])
        ?>
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h3 class="card-title"><?= $page_head ?></h3>
               </div>
               <?=
                getHiddenField('getCustomerPayments',base_url('AjaxController/getCustomerPayments'));
               ?>

               <?php if (isUserAllow(60)): ?>

               <a href="javascript:void(0)" class="btn btn-sm btn-primary add_payment_">Add Payment</a>
             <?php endif; ?>

            </div>
            <div class="card-body">
              <form class="row g-3" method="post" id="filter_payments" data-parsley-validate>
                <div class="row mt-1">

                  <div class="col-sm-6">

                      <div class="row mt-3">

                        <?php


                        echo getSelectField([
                          'label' => 'Customer',
                          'name' => 'customer_id',
                          'column' => 'col-sm-12',
                          'data' => $customers
                        ]);

                        echo getInputField([
                            'label' => 'From',
                            'name' => 'from',
                            'type' => 'date'
                          ]);

                        echo getInputField([
                            'label' => 'To',
                            'name' => 'to',
                            'type' => 'date'
                          ]);

                        ?>



                      </div>

                  </div>

                </div>
                  <div class="row mt-1">

                      <?php

                        echo  getSubmitBtn('Submit');

                      ?>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>

<?php
include(APPPATH.'views/payments/add_payment_modal.php');
 ?>
