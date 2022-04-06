<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0" style="margin-top:20px!important;">
  <div class="row">
      <div class="col-sm-12 col-lg-12">
        <?=
        showBreadCumbs([
          ['label'=>'Home','url' => 'dashboard'],
          ['label'=>'Customers','url' => 'customers'],
          ['label'=>'Add Customer ']
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

                    <div class="col-sm-3">


                        <?php

                          echo getImgField('Upload Photo', base_url('assets/images/avatars/01.png'));

                         ?>


                    </div>
                    <div class="col-sm-9">
                      <div class="row">

                        <?php

                          echo getInputField('Customer Name','text','name');
                          echo getInputField('Shop Name','text','name');
                          echo getInputField('Shop Acronym','text','name');
                          echo getInputField('Shop ID','text','name');
                          echo getInputField('Contact #','number','contact_no');
                          echo getInputField('Email Address For E-Receipt','email','email');
                          echo getInputField('Email Address For SOA','email','email');
                          echo getSelectField('Category','category');
                          echo getSelectField('Salesperson','salesperson_id');
                          echo getSelectField('Driver','driver_id');
                          echo getSelectField('Days','day');
                          ?>
                      </div>
                      <div class="row">
                        <?php

                          echo getTextareaField('Shop Address','address' , true ,'' ,'' ,'',6);
                          echo getTextareaField('Remarks','remarks' , true ,'' ,'' ,'',6);

                            echo getSubmitBtn('Add Customer');

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
