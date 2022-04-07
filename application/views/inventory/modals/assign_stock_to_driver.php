
<div class="modal fade" id="AssignStockToDriverModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
        <form action="<?= site_url('inventory') ?>" method="post" class="row g-3 needs-validation" novalidate>
          <div class="modal-body">

              <div class="container">

                <h3>Assign Stock To Driver</h3>

                <div class="row mt-3">

                  <?php

                    $pro_arr = [

                      ['id' => 1,'name' => 'Driver1'],
                      ['id' => 2,'name' => 'Driver2'],
                      ['id' => 3,'name' => 'Driver3']

                    ];

                    echo getSelectField([
                      'label' => 'Driver',
                      'name' => 'driver_id',
                      'column' => 'sm-8',
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
                        'column' => 'sm-8',
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

          </div>
          <div class="modal-footer">
              <button type="submit" class="btn btn-sm btn-success" style="text-transform:capitalize!important">Assign Stock</button>
              <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cancel</button>
          </div>
        </form>
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
        'column' => 'sm-8',
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
