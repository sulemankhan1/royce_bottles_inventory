<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= $page_title ?></title>

    <!-- Hope Ui Design System Css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/hope-ui.min.css?v=1.2.0') ?>" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.min.css?v=1.2.0') ?>" />


    <!-- Font Awesome script -->
    <script src="https://kit.fontawesome.com/b04cb78fd5.js" crossorigin="anonymous"></script>

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
  <body>

    <div class="row">
        <div class="col-sm-12 col-lg-12">
          <div class="card">
             <div class="card-header d-flex justify-content-between" style="background: #f5f6fa!important;">
                <div class="header-title" style="margin-bottom: 25px!important;">
                   <h3 class="card-title"><?= $page_title ?></h3>
                </div>
                <span>

                    <a href="javascript:void(0)" class="btn btn-sm btn-success" id="send_sheet_to_whtaspp"><i class="fa-brands fa-whatsapp"></i> Send Pdf To WhatsApp</a>
                    <a href="javascript:void(0)" class="btn btn-sm btn-success" id="send_mail_to_customer">Send Mail To Customer</a>

                    <a href="javascript:void(0)" class="btn btn-sm btn-primary" id="print_customer_payments" data-url="<?= base_url('AjaxController/printCustomerPayments')?>">Print</a>

                </span>
             </div>
             <div class="card-body">
               <div class="row">
                 <div class="col-sm-12 mb-4">
                   <table width="30%">
                     <tr>
                       <td>Customer:</td>
                       <th>Customer1</th>
                     </tr>
                     <tr>
                       <td>Date From:</td>
                       <th>03-10-2022</th>
                     </tr>
                     <tr>
                       <td>Date To:</td>
                       <th>03-20-2022</th>
                     </tr>
                   </table>
                 </div>
               </div>
                <div class="table-responsive">
                   <table class="table">
                      <thead>
                         <tr>
                            <th>#</th>
                            <th>Invoice No#</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Debit</th>
                            <th>Credit</th>
                         </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                           <td>12141</td>
                           <td>03-04-2021</td>
                           <td>5:10 PM</td>
                           <td>10</td>
                           <td>0</td>
                        </tr>
                        <tr>
                          <td>1</td>
                           <td>12141</td>
                           <td>03-04-2021</td>
                           <td>5:10 PM</td>
                           <td>0</td>
                           <td>10</td>
                        </tr>
                        <tr>
                          <td>1</td>
                           <td>12141</td>
                           <td>03-04-2021</td>
                           <td>5:10 PM</td>
                           <td>10</td>
                           <td>0</td>
                        </tr>
                      </tbody>
                   </table>
                </div>
             </div>
          </div>
        </div>
    </div>


        <!-- confirmation modal -->
        <div class="modal fade" id="ConfirmationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-body">
                      <p>Are you sure you want to send?</p>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-sm btn-primary">Yes</button>
                      <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cancel</button>
                  </div>
              </div>
          </div>
        </div>

  </body>

  <!-- Library Bundle Script -->
  <script src="<?= base_url('assets/js/core/libs.min.js') ?>"></script>

  <script type="text/javascript">

    $('#print_details').click(function () {

        window.print()

    })

    $('#send_sheet_to_whtaspp,#send_mail_to_customer').click(function () {

      $('#ConfirmationModal').modal('show')

    })


    $("#print_customer_payments").on('click', function () {

      let url = $(this).attr('data-url')

      window.open(url,'Customer Payments','height=800,width=800');

    })

  </script>
</html>
