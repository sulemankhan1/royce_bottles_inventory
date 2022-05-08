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
                            'column' => 'sm-5',
                            'value' => loginUserDetails($driver_id)->name

                          ]);
                          ?>

                      </div>
                      <div id="assign_products_to_driver">

                        <?php if (!empty($driver_request_products)): ?>

                          <?php foreach ($driver_request_products as $key => $v): ?>

                          <div class="row">
                            <?php

                              $p_stock = getProductAvailableStock($v->product_id);

                              $available_stock = $p_stock['available_qty'] > 0?',max="'.$p_stock['available_qty'].'"':'';

                              echo getSelectField([
                                'label' => 'Product',
                                'name' => 'product_id[]',
                                'column' => 'sm-5',
                                'data' => $products,
                                'selected' => $v->product_id,
                                'classes' => 'product_id_'
                              ]);

                              echo getInputField([
                                'label' => 'Qty',
                                'type' => 'number',
                                'name' => 'qty[]',
                                'column' => 'sm-2',
                                'value' => $v->qty,
                                'classes' => 'qty_',
                                'attr' => 'min="1"'.$available_stock
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
                                  'column' => 'sm-5',
                                  'classes' => 'product_id_',
                                  'data' => $products
                                ]);

                                echo getInputField([
                                  'label' => 'Qty',
                                  'type' => 'number',
                                  'name' => 'qty[]',
                                  'column' => 'sm-2',
                                  'classes' => 'qty_',
                                  'attr' => 'min="1"'
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

<div class="getProductOptionsToAssign" style="display:none!important">

    <option value="">select</option>
    <?php foreach ($products as $key => $v): ?>
      <option value="<?= $v->id ?>"><?= $v->name ?></option>
    <?php endforeach; ?>

</div>
