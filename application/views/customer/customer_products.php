
<div class="modal fade" id="CustomerProductsPricesModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
          <form action="<?= site_url('update_customer_products_price')?>" method="post" id="myForm" data-parsley-validate>
            <input type="hidden" name="customer_id_">
          <div class="modal-body">
            <div class="container">
              <h5 class="mb-3">Product Adjustment Prices</h5>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th style="width:5%">Product</th>
                    <th>Price</th>
                  </tr>
                </thead>
                <tbody id="customer_products_price_">

                </tbody>
              </table>

            </div>
          </div>
          <div class="modal-footer">
              <button type="submit" class="btn btn-sm btn-primary">Update Prices</button>
              <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cancel</button>
          </div>
          </form>
      </div>
  </div>
</div>
