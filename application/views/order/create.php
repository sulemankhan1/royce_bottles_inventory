<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0">
  <div class="row">
      <div class="col-sm-12 col-lg-12">
        <?=
        showBreadCumbs([
          ['label'=>'Home','url' => 'dashboard'],
          ['label'=>'Call Order','url' => 'call_order'],
          ['label'=>'Add Call Order']
        ])
        ?>
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h3 class="card-title"><?= $page_head ?></h3>
               </div>
            </div>
            <div class="card-body">
              <form class="row g-3 needs-validation" novalidate>
                <div class="row mt-4">

                    <div class="col-sm-12">
                      <div class="row">

                        <div class="col-sm-12 mb-2">
                            <h5>Customer Details</h5>
                        </div>
                        <?php

                        echo getInputField([
                          'label' => 'Customer Name',
                          'name' => 'customer_name'
                        ]);

                        echo getInputField([
                          'label' => 'Contact #',
                          'name' => 'contact_no'
                        ]);

                        echo getInputField([
                          'label' => 'Email',
                          'name' => 'customer_email',
                          'type' => 'email'
                        ]);

                        echo getInputField([
                          'label' => 'Address',
                          'name' => 'customer_address',
                        ]);

                        ?>

                        <div class="col-sm-12 mb-2">
                            <h5>Assign to Driver</h5>
                        </div>
                        <?php
                        echo getSelectField([
                          'label' => 'Day',
                          'name' => 'day',
                          'column' => 'sm-6'
                        ]);

                        $pro_arr = [

                          ['id' => 1,'name' => 'Driver1'],
                          ['id' => 2,'name' => 'Driver2'],
                          ['id' => 3,'name' => 'Driver3']

                        ];

                        echo getSelectField([
                          'label' => 'Driver',
                          'name' => 'driver_id',
                          'data' => $pro_arr,
                          'column' => 'sm-6'
                        ]);

                          ?>

                      </div>
                      <div id="assign_products_to_driver">

                        <div class="row">

                          <div class="col-sm-12 mb-2">
                              <h5>Stock Details</h5>
                          </div>
                          <?php
                            $pro_arr = [

                              ['id' => 1,'name' => 'Product1'],
                              ['id' => 2,'name' => 'Product2'],
                              ['id' => 3,'name' => 'Product3']

                            ];

                            echo getSelectField([
                              'label' => 'Product',
                              'name' => 'product_id',
                              'data' => $pro_arr
                            ]);

                            echo getInputField([
                              'label' => 'Qty',
                              'type' => 'number',
                              'name' => 'qty',
                              'column' => 'sm-3'
                            ]);

                          ?>

                        </div>

                      </div>

                      <div class="row">
                        <div class="col-sm-12">
                          <a href="javascript:void(0)" class="add_assign_products_to_driver">
                            + Add Row
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="row mt-3">

                      <?php

                      echo getSubmitBtn('Add Call Order');

                      ?>

                    </div>

                </div>

               </form>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="getProductRowToAssign" style="display:none!important">
  <div class="row">
    <?php
      $pro_arr = [

        ['id' => 1,'name' => 'Product1'],
        ['id' => 2,'name' => 'Product2'],
        ['id' => 3,'name' => 'Product3']

      ];

      echo getSelectField([
        'label' => 'Product',
        'name' => 'product_id',
        'data' => $pro_arr
      ]);

      echo getInputField([
        'label' => 'Qty',
        'type' => 'number',
        'name' => 'qty',
        'column' => 'sm-3'
      ]);

    ?>

    <div class="col-sm-1" style="padding:0px!important;">
      <a href="javascript:void(0)" class="remove_assign_products_to_driver">
        <i class="fa-solid fa-x" style="font-size: 20px;margin-top: 38px;margin-left:8px;;color:#fd6262!important;"></i>
      </a>
    </div>
  </div>
</div>
