<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= $page_title ?></title>

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
            .hide_content
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
             </div>
             <div class="card-body">
               <div class="row">
                 <div class="col-sm-12 mb-4">
                   <table width="30%">
                     <tr>
                       <td>Customer:</td>

                       <?php if (!empty($customer_id)): ?>

                         <th><?= isset($customer->name)?$customer->name:'' ?></th>

                         <?php else: ?>

                           <th>All</th>

                        <?php endif; ?>

                     </tr>
                     <tr>
                       <td>Date From:</td>
                       <th><?= $from != ''?getDateTimeFormat($from,'date'):'All' ?></th>
                     </tr>
                     <tr>
                       <td>Date To:</td>
                       <th><?= $to != ''?getDateTimeFormat($to,'date'):'All' ?></th>
                     </tr>
                   </table>
                 </div>
               </div>
                <div class="table-responsive">
                   <table class="table" width="100%" border="1">
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
                        <?php if (!empty($payments)): ?>

                        <?php foreach ($payments as $key => $v): ?>

                        <tr>
                           <td><?= $key+1 ?></td>
                           <td><?= $v->invoice_no ?></td>
                           <td><?= getDateTimeFormat($v->added_at,'date') ?></td>
                           <td><?= getDateTimeFormat($v->added_at,'only_time') ?></td>
                           <?php if ($v->type != 'credit'): ?>

                             <td><?= $v->amount ?></td>
                             <td>0</td>

                             <?php else: ?>

                             <td>0</td>
                             <td><?= $v->amount ?></td>

                            <?php endif; ?>
                        </tr>

                        <?php endforeach; ?>
                        <?php else: ?>
                          <tr>
                            <th colspan="6">No payments found...</th>
                          </tr>
                        <?php endif; ?>
                      </tbody>
                   </table>
                </div>
             </div>
          </div>
        </div>
    </div>

  </body>
</html>
