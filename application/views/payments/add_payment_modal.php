
<div class="modal fade select2_modal_" id="AddPaymentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
        <form action="<?= site_url('save_payment') ?>" method="post" class="row g-3 needs-validation" novalidate>
          <div class="modal-body">

              <div class="container">

                <h3>Add Payment</h3>

                <div class="row mt-3">

                  <?php

                    echo getSelectField([
                      'label' => 'Customer',
                      'name' => 'customer_id',
                      'column' => 'sm-12',
                      'classes' => 'modal_select_',
                      'data' => $customers
                    ]);

                    echo getInputField([
                      'label' => 'Amount',
                      'type' => 'number',
                      'name' => 'amount',
                      'column' => 'sm-12'
                    ]);

                  ?>

                </div>
              </div>

          </div>
          <div class="modal-footer">
              <button type="submit" class="btn btn-sm btn-primary" style="text-transform:capitalize!important">Submit</button>
              <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cancel</button>
          </div>
        </form>
      </div>
  </div>
</div>
