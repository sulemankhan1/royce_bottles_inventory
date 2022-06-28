
<div class="modal fade" id="CustomerProductsPricesModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <form action="<?= site_url('update_customer_products_price')?>" method="post" id="myForm" data-parsley-validate>
            <input type="hidden" name="customer_id_">
          <div class="modal-body">
            <div class="container">
              <h5 class="mb-3">Product Adjustment Prices</h5>
              <div class="container" id="customer_products_price_">
              </div>
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
