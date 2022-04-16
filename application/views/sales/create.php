<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0">
  <div class="row">
      <div class="col-sm-12 col-lg-12">
        <?=
        showBreadCumbs([
          ['label'=>'Home','url' => 'dashboard'],
          ['label'=>'Sales','url' => 'sales'],
          ['label'=>'Add Sale']
        ])
        ?>
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h3 class="card-title"><?= $page_head ?></h3>
               </div>
               <span id="total_unpaid_inv"></span>
            </div>
            <div class="card-body">
              <form class="row g-3 needs-validation" novalidate>
                <div class="row mt-4">

                    <div class="col-sm-12">
                      <div class="row">

                        <?php

                          $pro_arr = [

                            ['id' => 1,'name' => 'Customer1'],
                            ['id' => 2,'name' => 'Customer2 (Pending Sale)'],
                            ['id' => 3,'name' => 'Customer3']

                          ];

                          echo getHiddenField('getCustomerSaleInfo',base_url('AjaxController/getCustomerSaleInfo'));
                          echo getHiddenField('show_view_sale',base_url('AjaxController/showSalesDetails'));

                          echo getSelectField([
                            'label' => 'Customer',
                            'name' => 'customer_id',
                            'id' => 'sale_customer_id',
                            'column' => 'sm-4',
                            'data' => $pro_arr
                          ]);
                          ?>

                        <div class="col-md-8">
                          <label for="Customer Remarks" class="form-label customer_remarks_col" style="display:none;">Customer Remarks</label>
                          <p id="customer_remarks"></p>
                        </div>

                        <?php

                          echo getSelectField([
                            'label' => 'Customer Paying?',
                            'name' => 'is_customer_pay',
                            'id' => 'is_customer_pay',
                            'column' => 'sm-4',
                            'data' => [
                              ['id' => 'Yes','name' => 'Yes'],
                              ['id' => 'No','name' => 'No'],
                            ]
                          ]);

                          echo getSelectField([
                            'label' => 'Payment Type',
                            'name' => 'payment_type',
                            'classes' => 'payment_type',
                            'column' => 'sm-4',
                            'col_classes' => 'payment_type_col',
                            'data' => [
                              ['id' => 'Cash','name' => 'Cash'],
                              ['id' => 'Cheque','name' => 'Cheque'],
                              ['id' => 'Bank','name' => 'Bank']
                            ]
                          ]);

                          echo getInputField([
                            'label' => 'Reason',
                            'name' => 'reason',
                            'column' => 'sm-8',
                            'col_classes' => 'reason_col',
                            'required' => false
                          ]);

                        ?>
                      </div>

                      <div class="row">

                        <?php

                          echo getInputField([
                            'label' => 'Bank Name',
                            'name' => 'bank_name',
                            'id' => 'bank_name',
                            'column' => 'sm-4',
                            'col_classes' => 'bank_name_col'
                          ]);
                          echo getInputField([
                            'label' => 'Account Number',
                            'name' => 'acc_no',
                            'id' => 'acc_no',
                            'column' => 'sm-4',
                            'col_classes' => 'acc_no_col'
                          ]);
                          echo getInputField([
                            'label' => 'Cheque No',
                            'name' => 'cheque_no',
                            'id' => 'cheque_no',
                            'column' => 'sm-4',
                            'col_classes' => 'cheque_no_col'
                          ]);

                         ?>

                      </div>

                      <div id="showCustomerSaleProducts_">

                      </div>

                      <div class="row mt-1 mb-1">

                        <div class="col-sm-3">

                          <a href="javascript:void(0)" class="btn btn-sm btn-primary add_sale_">Add Sale</a>

                        </div>

                        <?php

                          getSubmitBtn('Add Sale');

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
