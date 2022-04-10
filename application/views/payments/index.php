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

               <a href="javascript:void(0)" class="btn btn-sm btn-primary add_payment_">Add Payment</a>

            </div>
            <div class="card-body">
              <form class="row g-3 needs-validation" novalidate>
                <div class="row mt-1">

                  <div class="col-sm-6">

                      <div class="row mt-3">

                        <?php

                        echo getHiddenField('getCustomerPayments',base_url('AjaxController/getCustomerPayments'));

                        echo getSelectField([
                          'label' => 'Customer',
                          'name' => 'customer_id',
                          'column' => 'col-sm-12'
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

                      <div class="col-sm-3">

                        <a href="javascript:void(0)" class="btn btn-sm btn-primary show_payments_">Submit</a>

                      </div>

                      <?php

                        getSubmitBtn('Submit');

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
