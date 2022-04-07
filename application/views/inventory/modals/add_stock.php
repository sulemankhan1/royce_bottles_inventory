
<div class="modal fade" id="AddStockModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
        <form action="<?= site_url('inventory') ?>" method="post" class="row g-3 needs-validation" novalidate>
          <div class="modal-body">

              <div class="container">

                <h3>Add Stock</h3>

                <div class="row mt-3">

                  <?php
                    echo getHiddenField('redirect_to','view_inventory','add_stock_redirect_to_');
                    $pro_arr = [

                      ['id' => 1,'name' => 'Product1'],
                      ['id' => 2,'name' => 'Product2'],
                      ['id' => 3,'name' => 'Product3']

                    ];

                    echo getSelectField([
                      'label' => 'Product',
                      'name' => 'product_id',
                      'column' => 'sm-9',
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

          </div>
          <div class="modal-footer">
              <button type="submit" class="btn btn-sm btn-primary" style="text-transform:capitalize!important">Add Stock</button>
              <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cancel</button>
          </div>
        </form>
      </div>
  </div>
</div>
