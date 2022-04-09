<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= $page_title ?></title>

    <!-- Hope Ui Design System Css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/hope-ui.min.css?v=1.2.0') ?>" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.min.css?v=1.2.0') ?>" />

    <style type="text/css">

        .row
        {
          --bs-gutter-x: 0px!important;
        }

        .company_logo
        {
          min-width: 100px;
          height: 100px;
        }

        #company_head
        {
          text-align: right;
          text-transform: uppercase;
          margin-top: 10px;
        }
        #company_address
        {
          text-align: right;
          font-size: 13px;
        }
        .font_uppercase
        {
          text-transform: uppercase!important;
        }
        .font_design
        {
          color: black;
          font-size : 14px;
        }
        #customer_address
        {
          font-size: 13px;
        }
        #totals_color
        {
          color:black;
        }

        @media print
        {
            #print_details
            {
                display: none !important;
            }
        }

    </style>
  </head>
  <?php if ($type == 'invoice_print'): ?>

  <body onload="window.print()">
    <?php else: ?>
  <body>
  <?php endif; ?>

    <div class="row">
        <div class="col-sm-12 col-lg-12">
          <div class="card">
             <div class="card-header d-flex justify-content-between" style="background: #f5f6fa!important;">
                <div class="header-title" style="margin-bottom: 25px!important;">
                   <h3 class="card-title"><?= $page_title ?></h3>
                </div>
                <span>

                  <?php if ($type != 'details' && $type != 'invoice' && $type != 'invoice_print'): ?>

                    <a href="javascript:void(0)" class="btn btn-sm btn-success" id="mark_as_done">Mark As Done</a>
                  <a href="javascript:void(0)" class="btn btn-sm btn-primary" id="return_to_sale" data-url="<?= site_url('edit_sale/1') ?>">Return To Sale</a>

                  <?php endif; ?>

                  <?php if ($type == 'invoice' || $type == 'invoice_print'): ?>

                    <a href="javascript:void(0)" class="btn btn-sm btn-primary" id="print_details">Print</a>

                  <?php endif; ?>

                </span>
             </div>
             <div class="card-body">

               <!-- company info row start -->
                <div class="row">

                  <div class="col-12 col-sm-6 col-md-8">
                    <img src="<?= base_url('assets/images/company_logo.jpg')?>" alt="company_logo" class="company_logo">
                  </div>
                  <div class="col-12 col-sm-6 col-md-4">
                    <h5 id="company_head">Alphinex Solutions</h5>
                    <label id="company_address">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                    </label>
                  </div>

                </div>
                <!-- company info row end -->

                <!-- invoice info row start -->
                <div class="row mt-5">

                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">

                    <div class="row mt-1">
                      <div class="col-sm-12">

                        <h6 class="text-primary font_uppercase">Invoice Information</h6>

                      </div>
                      <div class="col-12 col-sm-12 mt-1">
                          <div class="row">

                            <div class="col-12 col-sm-4 col-md-5 col-lg-4">
                              <span class="font_design font_uppercase">Invoice #:</span>
                            </div>
                            <div class="col-12 col-sm-8 col-md-7 col-lg-8">
                              <span class="font_design font_uppercase">14234</span>
                            </div>
                          </div>
                      </div>
                      <div class="col-12 col-sm-12">
                          <div class="row">

                            <div class="col-12 col-sm-5 col-md-6 col-lg-6 col-xl-5">
                              <span class="font_design font_uppercase">Invoice Date:</span>
                            </div>
                            <div class="col-12 col-sm-7 col-md-6 col-lg-6 col-xl-7">
                              <span class="font_design font_uppercase">03-04-2022</span>
                            </div>
                          </div>
                      </div>
                      <div class="col-12 col-sm-12">
                          <div class="row">

                            <div class="col-3 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                              <span class="font_design font_uppercase">Category:</span>
                            </div>
                            <div class="col-9 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                              <span class="font_design font_uppercase">
                                <span class="badge rounded-pill bg-warning">Credit</span>
                              </span>
                            </div>
                          </div>
                      </div>
                      <div class="col-12 col-sm-12">
                          <div class="row">

                            <div class="col-3 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                              <span class="font_design font_uppercase">Status:</span>
                            </div>
                            <div class="col-9 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                              <span class="font_design font_uppercase">
                                <span class="badge rounded-pill bg-success">Paid</span>
                              </span>
                            </div>
                          </div>
                      </div>

                    </div>

                  </div>
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">

                    <div class="row mt-1">
                      <div class="col-sm-12">

                        <h6 class="text-primary font_uppercase">Invoice To</h6>
                        <div class="col-sm-12 mt-1">
                          <span class="font_design font_uppercase">Demo Customer</span>
                        </div>
                        <div class="col-sm-12">
                          <label id="customer_address">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                          </label>
                        </div>
                      </div>
                    </div>

                  </div>

                </div>
                <!-- invoice info row end -->

                <!-- table row start -->
                <div class="row mt-4">

                  <div class="col-12">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th width="55%">Products</th>
                            <th width="10%">Sale Qty</th>
                            <th width="13%">Exchange Qty</th>
                            <th width="10%">Price</th>
                            <th style="text-align:right">Total</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Product1</td>
                            <td>10</td>
                            <td>100</td>
                            <td>10</td>
                            <td style="text-align:right">1000</td>
                          </tr>
                          <tr>
                            <td>Product1</td>
                            <td>10</td>
                            <td>10</td>
                            <td>100</td>
                            <td style="text-align:right">1000</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <div class="col-sm-12">
                    <table class="table">
                      <thead>
                        <tr>
                          <th width="78%"></th>
                          <td>SubTotal</td>
                          <td id="totals_color">2000</td>
                        </tr>
                        <tr>
                          <th width="78%"></th>
                          <td>Taxes</td>
                          <td id="totals_color">1000</td>
                        </tr>
                        <tr>
                          <th width="78%"></th>
                          <td>Discount</td>
                          <td id="totals_color">100</td>
                        </tr>
                        <tr>
                          <th width="78%"></th>
                          <td>Net Amount</td>
                          <td id="totals_color">2900</td>
                        </tr>
                      </thead>
                    </table>
                  </div>

                </div>
                <!-- table row end -->

                <!-- terms & condition row start -->

                <div class="row mt-3">
                  <div class="col-sm-12 mt-1">
                    <span class="font_design font_uppercase">Terms & Condition</span>
                  </div>
                  <div class="col-10 col-sm-10 col-md-8 col-lg-7">
                    <label id="customer_address">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                    </label>
                  </div>
                </div>
                <!-- terms & condition row end -->

             </div>
          </div>
        </div>
    </div>


    <!-- confirmation modal -->
    <div class="modal fade" id="markAsDoneModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-body">
                  <p>Are you sure you want to submit this sale?</p>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-sm btn-primary" id="confirm_sale" data-url="<?= site_url('AjaxController/updateSale/1')?>" data-redirect="<?= site_url('sales')?>">Submit</button>
                  <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cancel</button>
              </div>
          </div>
      </div>
    </div>


  </body>

  <!-- Library Bundle Script -->
  <script src="<?= base_url('assets/js/core/libs.min.js') ?>"></script>

  <script type="text/javascript">

    $('#mark_as_done').click(function functionName() {

      $('#markAsDoneModal').modal('show')

    })

    //yes mark as done
    $('#confirm_sale').click(function () {

      let url = $(this).attr('data-url')

      let redirect = $(this).attr('data-redirect')
      // update status of sale
      $.ajax({
        url : url,
        dataType : 'json',
        success : function (data) {

          if(data)
          {


            self.opener.location.href = redirect

            window.close()

          }

        }
      })

    })

    $('#return_to_sale').click(function () {

      let url = $(this).attr('data-url')

      self.opener.location.href = url

      window.close()

    })

    $('#print_details').click(function () {

        window.print()

    })

  </script>
</html>
