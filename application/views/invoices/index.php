
<!--Nav End-->
</div>
<div class="conatiner-fluid content-inner mt-n5 py-0" style="margin-top:20px!important;">
  <div class="row">
      <div class="col-sm-12">
        <?=
        showBreadCumbs([
          ['label'=>'Home','url' => 'dashboard'],
          ['label'=>'Sales']
        ])
        ?>
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">

                 <h4 class="card-title"><?= $page_head ?></h4>
               </div>

            </div>
            <div class="card-body">

              <form class="row g-3 needs-validation" novalidate>
                <div class="row mt-4">


                    <div class="col-sm-12">
                      <h5 class="text-primary">Filters</h5>
                    </div>
                    <div class="col-sm-12 mt-3">
                      <div class="row">

                        <?php

                            echo getInputField([
                              'label' => 'Invoice No#',
                              'name' => 'invoice_no',
                              'id' => 'invoice_no',
                              'column' => 'sm-3'
                            ]);

                            $pro_arr = [

                              ['id' => 1,'name' => 'Customer1'],
                              ['id' => 2,'name' => 'Customer2'],
                              ['id' => 3,'name' => 'Customer3']

                            ];
                            echo getSelectField([
                              'label' => 'Customer',
                              'name' => 'customer_id',
                              'id' => 'customer_id',
                              'column' => 'sm-3',
                              'data' => $pro_arr
                            ]);

                            $pro_arr = [

                              ['id' => 1,'name' => 'Driver1'],
                              ['id' => 2,'name' => 'Driver2'],
                              ['id' => 3,'name' => 'Driver3']

                            ];

                            echo getSelectField([
                              'label' => 'Driver',
                              'name' => 'driver_id',
                              'id' => 'driver_id',
                              'column' => 'sm-3',
                              'data' => $pro_arr
                            ]);

                            $pro_arr = [

                              ['id' => 1,'name' => 'Paid'],
                              ['id' => 2,'name' => 'Unpaid'],
                              ['id' => 3,'name' => 'Credit'],
                              ['id' => 3,'name' => 'Pending']

                            ];
                            echo getSelectField([
                              'label' => 'Status',
                              'name' => 'status',
                              'id' => 'status',
                              'column' => 'sm-3',
                              'data' => $pro_arr
                            ]);

                            echo getInputField([
                              'label' => 'From',
                              'name' => 'from',
                              'type' => 'date',
                              'id' => 'from',
                              'column' => 'sm-3'
                            ]);
                            echo getInputField([
                              'label' => 'To',
                              'name' => 'to',
                              'type' => 'date',
                              'id' => 'to',
                              'column' => 'sm-3'
                            ]);

                          ?>

                            <div class="col-sm-3">
                              <button type="submit" class="btn btn-sm btn-primary" style="margin-top: 32px!important;">Submit</button>
                            </div>

                        </div>
                      </div>
                </div>
              </form>
               <div class="row mt-5">

                 <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">

                   <div class="card" style="box-shadow: 0 1px 6px 0 rgb(54 51 51)!important;">
                     <div class="card-body">

                       <div class="row">
                         <div class="col-sm-8">
                           <h6 class="text-primary">Invoice # 10003</h6>

                         </div>
                         <div class="col-sm-4" style="text-align:right!important">

                           <span class="badge rounded-pill bg-success">Paid</span>

                         </div>
                       </div>
                       <div class="row">
                         <div class="col-6 col-sm-12 col-md-6 mt-3">
                           <label id="invoice_label">Customer</label>

                           <div class="row mt-1">
                             <div class="col-sm-12">
                               <img src="<?= base_url('assets/images/avatars/01.png') ?>" class="inv-img-design" alt="">
                               <span class="inv-txt-design">
                                 Customer
                               </span>
                             </div>
                           </div>

                         </div>
                         <div class="col-6 col-sm-12 col-md-6 mt-3">
                           <label id="invoice_label">Driver</label>
                           <div class="row mt-1">
                             <div class="col-sm-12">
                               <img src="<?= base_url('assets/images/avatars/01.png') ?>" class="inv-img-design" alt="">
                               <span class="inv-txt-design">
                                 Driver
                               </span>
                             </div>
                           </div>
                         </div>
                       </div>

                       <div class="row">
                         <div class="col-6 col-sm-7 mt-3">
                           <label id="invoice_label">Date</label>

                           <div class="row mt-1">
                             <div class="col-sm-12">
                               <span class="inv-txt-design">
                                 03-04-2022
                               </span>
                             </div>
                           </div>

                         </div>
                         <div class="col-6 col-sm-5 mt-3">
                           <label id="invoice_label">Category</label>
                           <div class="row mt-1">
                             <div class="col-sm-12">
                                  <span class="badge rounded-pill bg-success">Cash</span>
                             </div>
                           </div>
                         </div>
                       </div>

                       <div class="row">
                         <div class="col-6 col-sm-7 mt-3">
                           <label id="invoice_label">Products</label>

                           <div class="row mt-1">
                             <div class="col-sm-12">
                               <span class="inv-txt-design">
                                 59
                               </span>
                             </div>
                           </div>

                         </div>
                         <div class="col-6 col-sm-5 mt-3">
                           <label id="invoice_label">Total</label>
                           <div class="row mt-1">
                             <div class="col-sm-12">
                               <span class="inv-txt-design">
                                 10000
                               </span>
                             </div>
                           </div>
                         </div>
                       </div>

                       <div class="row mt-2 inv_btn_row">
                         <div class="col-6 col-sm-6 inv_btn_col">

                           <button type="button" class="btn btn-sm btn-primary view_inv_details" data-url="<?= site_url('AjaxController/showInvoiceDetails/1/invoice')?>"><i class="fa fa-eye"></i> View Details</button>
                         </div>
                         <div class="col-6 col-sm-6 inv_btn_col">

                           <button type="button" class="btn btn-sm btn-primary print_inv_details" data-url="<?= site_url('AjaxController/showInvoiceDetails/1/invoice_print')?>" ><i class="fa fa-print"></i> Print Invoice</button>
                         </div>
                       </div>

                     </div>
                   </div>

                 </div>
                 <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">

                   <div class="card" style="box-shadow: 0 1px 6px 0 rgb(54 51 51)!important;">
                     <div class="card-body">

                       <div class="row">
                         <div class="col-sm-8">
                           <h6 class="text-primary">Invoice # 10003</h6>

                         </div>
                         <div class="col-sm-4" style="text-align:right!important">

                           <span class="badge rounded-pill bg-success">Paid</span>

                         </div>
                       </div>
                       <div class="row">
                         <div class="col-6 col-sm-12 col-md-6 mt-3">
                           <label id="invoice_label">Customer</label>

                           <div class="row mt-1">
                             <div class="col-sm-12">
                               <img src="<?= base_url('assets/images/avatars/01.png') ?>" class="inv-img-design" alt="">
                               <span class="inv-txt-design">
                                 Customer
                               </span>
                             </div>
                           </div>

                         </div>
                         <div class="col-6 col-sm-12 col-md-6 mt-3">
                           <label id="invoice_label">Driver</label>
                           <div class="row mt-1">
                             <div class="col-sm-12">
                               <img src="<?= base_url('assets/images/avatars/01.png') ?>" class="inv-img-design" alt="">
                               <span class="inv-txt-design">
                                 Driver
                               </span>
                             </div>
                           </div>
                         </div>
                       </div>

                       <div class="row">
                         <div class="col-6 col-sm-7 mt-3">
                           <label id="invoice_label">Date</label>

                           <div class="row mt-1">
                             <div class="col-sm-12">
                               <span class="inv-txt-design">
                                 03-04-2022
                               </span>
                             </div>
                           </div>

                         </div>
                         <div class="col-6 col-sm-5 mt-3">
                           <label id="invoice_label">Category</label>
                           <div class="row mt-1">
                             <div class="col-sm-12">
                                  <span class="badge rounded-pill bg-success">Cash</span>
                             </div>
                           </div>
                         </div>
                       </div>

                       <div class="row">
                         <div class="col-6 col-sm-7 mt-3">
                           <label id="invoice_label">Products</label>

                           <div class="row mt-1">
                             <div class="col-sm-12">
                               <span class="inv-txt-design">
                                 59
                               </span>
                             </div>
                           </div>

                         </div>
                         <div class="col-6 col-sm-5 mt-3">
                           <label id="invoice_label">Total</label>
                           <div class="row mt-1">
                             <div class="col-sm-12">
                               <span class="inv-txt-design">
                                 10000
                               </span>
                             </div>
                           </div>
                         </div>
                       </div>

                       <div class="row mt-2 inv_btn_row">
                         <div class="col-6 col-sm-6 inv_btn_col">

                           <button type="button" class="btn btn-sm btn-primary view_inv_details" data-url="<?= site_url('AjaxController/showInvoiceDetails/1/invoice')?>"><i class="fa fa-eye"></i> View Details</button>
                         </div>
                         <div class="col-6 col-sm-6 inv_btn_col">

                           <button type="button" class="btn btn-sm btn-primary print_inv_details" data-url="<?= site_url('AjaxController/showInvoiceDetails/1/invoice_print')?>" ><i class="fa fa-print"></i> Print Invoice</button>
                         </div>
                       </div>

                     </div>
                   </div>

                 </div>
                 <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">

                   <div class="card" style="box-shadow: 0 1px 6px 0 rgb(54 51 51)!important;">
                     <div class="card-body">

                       <div class="row">
                         <div class="col-sm-8">
                           <h6 class="text-primary">Invoice # 10003</h6>

                         </div>
                         <div class="col-sm-4" style="text-align:right!important">

                           <span class="badge rounded-pill bg-success">Paid</span>

                         </div>
                       </div>
                       <div class="row">
                         <div class="col-6 col-sm-12 col-md-6 mt-3">
                           <label id="invoice_label">Customer</label>

                           <div class="row mt-1">
                             <div class="col-sm-12">
                               <img src="<?= base_url('assets/images/avatars/01.png') ?>" class="inv-img-design" alt="">
                               <span class="inv-txt-design">
                                 Customer
                               </span>
                             </div>
                           </div>

                         </div>
                         <div class="col-6 col-sm-12 col-md-6 mt-3">
                           <label id="invoice_label">Driver</label>
                           <div class="row mt-1">
                             <div class="col-sm-12">
                               <img src="<?= base_url('assets/images/avatars/01.png') ?>" class="inv-img-design" alt="">
                               <span class="inv-txt-design">
                                 Driver
                               </span>
                             </div>
                           </div>
                         </div>
                       </div>

                       <div class="row">
                         <div class="col-6 col-sm-7 mt-3">
                           <label id="invoice_label">Date</label>

                           <div class="row mt-1">
                             <div class="col-sm-12">
                               <span class="inv-txt-design">
                                 03-04-2022
                               </span>
                             </div>
                           </div>

                         </div>
                         <div class="col-6 col-sm-5 mt-3">
                           <label id="invoice_label">Category</label>
                           <div class="row mt-1">
                             <div class="col-sm-12">
                                  <span class="badge rounded-pill bg-success">Cash</span>
                             </div>
                           </div>
                         </div>
                       </div>

                       <div class="row">
                         <div class="col-6 col-sm-7 mt-3">
                           <label id="invoice_label">Products</label>

                           <div class="row mt-1">
                             <div class="col-sm-12">
                               <span class="inv-txt-design">
                                 59
                               </span>
                             </div>
                           </div>

                         </div>
                         <div class="col-6 col-sm-5 mt-3">
                           <label id="invoice_label">Total</label>
                           <div class="row mt-1">
                             <div class="col-sm-12">
                               <span class="inv-txt-design">
                                 10000
                               </span>
                             </div>
                           </div>
                         </div>
                       </div>

                       <div class="row mt-2 inv_btn_row">
                         <div class="col-6 col-sm-6 inv_btn_col">

                           <button type="button" class="btn btn-sm btn-primary view_inv_details" data-url="<?= site_url('AjaxController/showInvoiceDetails/1/invoice')?>"><i class="fa fa-eye"></i> View Details</button>
                         </div>
                         <div class="col-6 col-sm-6 inv_btn_col">

                           <button type="button" class="btn btn-sm btn-primary print_inv_details" data-url="<?= site_url('AjaxController/showInvoiceDetails/1/invoice_print')?>" ><i class="fa fa-print"></i> Print Invoice</button>
                         </div>
                       </div>

                     </div>
                   </div>

                 </div>

               </div>

               <div class="row">

                 <div class="col-sm-3 mx-auto">

                   <nav aria-label="Standard pagination example">
                       <ul class="pagination">
                           <li class="page-item">
                               <a class="page-link" href="#" aria-label="Previous">
                                   <span aria-hidden="true">«</span>
                               </a>
                           </li>
                               <li class="page-item active"><a class="page-link" href="#">1</a></li>
                               <li class="page-item"><a class="page-link" href="#">2</a></li>
                               <li class="page-item"><a class="page-link" href="#">3</a></li>
                               <li class="page-item">
                               <a class="page-link" href="#" aria-label="Next">
                                   <span aria-hidden="true">»</span>
                               </a>
                           </li>
                       </ul>
                   </nav>

                 </div>

               </div>

            </div>
         </div>
      </div>
   </div>
</div>

<?php
include(APPPATH.'views/modals/delete-modal.php');
include(APPPATH.'views/modals/view-details-modal.php');
 ?>
