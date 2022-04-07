<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0" style="margin-top:20px!important;">
  <div class="row">
      <div class="col-sm-12 col-lg-12">
        <?=
        showBreadCumbs([
          ['label'=>'Home','url' => 'dashboard'],
          ['label'=>'Inventory','url' => 'assign_to_driver'],
          ['label'=>'Assign Stock To Driver']
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
                      <div class="row mb-3">

                        <?php

                          $pro_arr = [

                            ['id' => 1,'name' => 'Driver1'],
                            ['id' => 2,'name' => 'Driver2'],
                            ['id' => 3,'name' => 'Driver3']

                          ];

                          echo getSelectField([
                            'label' => 'Driver',
                            'name' => 'driver_id',
                            'column' => 'sm-5',
                            'data' => $pro_arr
                          ]);
                          ?>
                      </div>
                      <div id="assign_products_to_driver">

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
                              'column' => 'sm-5',
                              'data' => $pro_arr
                            ]);

                            echo getInputField([
                              'label' => 'Qty',
                              'type' => 'number',
                              'name' => 'qty',
                              'column' => 'sm-2'
                            ]);

                          ?>

                        </div>

                      </div>
                      <div class="row mb-5">
                        <div class="col-sm-12">
                          <a href="javascript:void(0)" class="add_assign_products_to_driver">
                            + Add Row
                          </a>
                        </div>
                      </div>
                      <div class="row">
                        <?php

                          echo getSubmitBtn('Assign To Driver');

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
        'column' => 'sm-5',
        'data' => $pro_arr
      ]);

      echo getInputField([
        'label' => 'Qty',
        'type' => 'number',
        'name' => 'qty',
        'column' => 'sm-2'
      ]);

    ?>

    <div class="col-sm-1" style="padding:0px!important;">
      <a href="javascript:void(0)" class="remove_assign_products_to_driver">
        <i class="fa-solid fa-x" style="font-size: 20px;margin-top: 38px;margin-left:8px;;color:#fd6262!important;"></i>
      </a>
    </div>
  </div>
</div>
