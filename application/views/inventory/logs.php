<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0">
  <div class="row">
      <div class="col-sm-12 col-lg-12">
        <?=
        showBreadCumbs([
          ['label'=>'Home','url' => 'dashboard'],
          ['label'=>'Inventory','url' => 'logs'],
          ['label'=>'Logs']
        ])
        ?>
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h3 class="card-title"><?= $page_head ?></h3>
               </div>
            </div>
            <div class="card-body">
              <?=
              getHiddenField('logs_filter_url',site_url('AjaxController/viewLogDetails'));
              ?>
              <form class="row g-3 logs_form" method="post" id="myForm" data-parsley-validate>
                <div class="row mt-4">

                    <div class="col-sm-12">
                      <div class="row">

                        <?php

                          echo getHiddenField('type_name','');

                          echo getSelectField([
                            'label' => 'Product',
                            'name' => 'product_id',
                            'data' => $products,
                            'required' => false
                          ]);
                          ?>
                      </div>
                      <div class="row">
                      <?php

                          echo getSelectField([
                            'label' => 'Customer',
                            'name' => 'customer_id',
                            'data' => $customers,
                            'required' => false
                          ]);
                          ?>
                      </div>
                      <div class="row">
                          <?php

                            echo getSelectField([
                              'label' => 'Driver',
                              'name' => 'driver_id',
                              'data' => $drivers,
                              'required' => false
                            ]);
                          ?>
                      </div>
                      <div class="row">
                          <?php

                          echo getSelectField([
                            'label' => 'Type',
                            'name' => 'type',
                            'data' => $type_arr,
                            'required' => false
                          ]);

                          ?>
                      </div>
                      <div class="row">
                          <?php
                          echo getInputField([
                            'label' => 'From',
                            'type' => 'date',
                            'name' => 'from',
                            'column' => 'sm-3'
                          ]);
                          echo getInputField([
                            'label' => 'To',
                            'type' => 'date',
                            'name' => 'to',
                            'column' => 'sm-3'
                          ]);
                          ?>
                      </div>
                      <div class="row mt-3">

                        <?php

                           echo getSubmitBtn('View Logs');

                        ?>


                      </div>
                    </div>

                </div>

               </form>
            </div>
         </div>
      </div>
   </div>
</div>
