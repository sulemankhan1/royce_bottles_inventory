
<style type="text/css">

  .return_stock_inp_cols
  {
    -webkit-box-flex: 0!important;
    -webkit-flex: 0 0 auto!important;
    -ms-flex: 0 0 auto!important;
    flex: 0 0 auto!important;
    width: 11%!important;

  }
  .return_stock_inp_cols label
  {

    font-size: 13px!important;

  }
</style>
<div class="modal fade" id="ReturnStockModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <form action="<?= site_url('inventory') ?>" method="post" class="row g-3 needs-validation" novalidate>
          <div class="modal-body">

              <div class="container">

                <h3>Return Stock</h3>

                <div class="row mt-4">

                  <?php

                    $pro_arr = [

                      ['id' => 1,'name' => 'Driver1'],
                      ['id' => 2,'name' => 'Driver2'],
                      ['id' => 3,'name' => 'Driver3']

                    ];

                    echo getHiddenField('return_stock_url',base_url('AjaxController/getReturnStockProductsByDriverId'));

                    echo getSelectField([
                      'label' => 'Driver',
                      'name' => 'driver_id',
                      'id' => 'return_stock_driver',
                      'column' => 'sm-4',
                      'data' => $pro_arr
                    ]);
                    ?>
                </div>

                <div id="show_driver_products_"></div>

              </div>

          </div>
          <div class="modal-footer">
              <button type="submit" class="btn btn-sm btn-warning" style="text-transform:capitalize!important">Return Stock</button>
              <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cancel</button>
          </div>
        </form>
      </div>
  </div>
</div>
