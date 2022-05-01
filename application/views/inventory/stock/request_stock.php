<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0">
  <div class="row">
      <div class="col-sm-12 col-lg-12">
        <?=
        showBreadCumbs([
          ['label'=>'Home','url' => 'dashboard'],
          ['label'=>'Inventory','url' => 'request_stock'],
          ['label'=>'Request Stock']
        ])
        ?>
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h3 class="card-title"><?= $page_head ?></h3>
               </div>
            </div>
            <div class="card-body">
              <form class="row g-3 needs-validation" novalidate method="post" action="<?= site_url('save_driver_request') ?>">
                <div class="row mt-4">

                    <div class="col-sm-12">
                      <div class="row">

                        <?php

                          echo getHiddenField('driver_id',$driver_id);

                          echo getInputField([
                            'label' => 'Driver',
                            'attr' => 'readonly',
                            'value' => loginUserDetails($driver_id)->name

                          ]);
                          ?>

                      </div>
                      <div id="assign_products_to_driver">

                        <?php if (!empty($driver_request_products)): ?>

                          <?php foreach ($driver_request_products as $key => $v): ?>

                          <div class="row">
                            <?php

                              echo getSelectField([
                                'label' => 'Product',
                                'name' => 'product_id[]',
                                'data' => $products,
                                'selected' => $v->product_id
                              ]);

                              echo getInputField([
                                'label' => 'Qty',
                                'type' => 'number',
                                'name' => 'qty[]',
                                'column' => 'sm-3',
                                'value' => $v->qty
                              ]);

                            ?>

                          </div>

                          <?php endforeach; ?>
                          <?php else: ?>

                            <div class="row">
                              <?php

                                echo getSelectField([
                                  'label' => 'Product',
                                  'name' => 'product_id[]',
                                  'data' => $products
                                ]);

                                echo getInputField([
                                  'label' => 'Qty',
                                  'type' => 'number',
                                  'name' => 'qty[]',
                                  'column' => 'sm-3'
                                ]);

                              ?>

                            </div>

                        <?php endif; ?>

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

                      echo getSubmitBtn('Request Stock');

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

      echo getSelectField([
        'label' => 'Product',
        'name' => 'product_id[]',
        'select2_class' => 'select22',
        'data' => $products
      ]);

      echo getInputField([
        'label' => 'Qty',
        'type' => 'number',
        'name' => 'qty[]',
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
