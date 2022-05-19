<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= $page_title ?></title>

    <!-- Hope Ui Design System Css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/hope-ui.min.css?v=1.2.0') ?>" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.min.css?v=1.2.0') ?>" />

    <!-- to set deisgn in print -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-print.min.css') ?>" media="print">

    <style type="text/css">


      body
      {
        background: none!important;
      }
      .table-img-design
      {
          width: 45px!important;
          border-radius: 23px!important;
      }

      .table-img-txt-design
      {
        margin-left: 3px!important;
      }

      @media print
      {
          .hide_content
          {
              display: none !important;
          }

      }
      body {
        padding-left: 10px;
        padding-right: 10px;
      }

    </style>
  </head>
  <body>

    <span>

        <a href="javascript:void(0)" class="btn btn-sm btn-primary hide_content" id="print_log_details" style="float:right!important;margin-right:10px;">Print</a>

    </span>

      <h2 align="center" style="margin-top:10px;"><?= $page_title ?></h2>

      <br><br>

      <table width="30%" id="log-details-filter">
        <tr>
          <th>Product:</th>
          <td>
            <?php

              if(!empty($product))
              {

                echo $product->name;

              }
              else
              {
                echo 'All';
              }

             ?>
          </td>
        </tr>
        <tr>
          <th>Customer:</th>
          <th>
            <?php

              if(!empty($customer))
              {

                echo $customer->name;

              }
              else
              {
                echo 'All';
              }

             ?>
          </th>
        </tr>
        <tr>
          <th>Driver:</th>
          <th>
            <?php

              if(!empty($driver))
              {

                echo $driver->name;

              }
              else
              {
                echo 'All';
              }

             ?>
          </th>
        </tr>
        <tr>
          <th>Type:</th>
          <th><?php echo $type != ''?$type:'All' ?></th>
        </tr>
        <tr>
          <th>Date From:</th>
          <th><?= getDateTimeFormat($from,'date') ?></th>
        </tr>
        <tr>
          <th>Date To:</th>
          <th><?= getDateTimeFormat($to,'date') ?></th>
        </tr>
      </table>
      <br>

      <div class="table-responsive">
      <table class="table">
         <thead>
            <tr>
               <th>#</th>
               <th>Product Name</th>
               <th>Qty</th>
               <th>Type</th>
               <th>Customer</th>
               <th>Driver</th>
               <th>User</th>
               <th>Date</th>
               <th>Time</th>
            </tr>
         </thead>
         <tbody>

           <?php if (!empty($logs)): ?>

           <?php foreach ($logs as $key => $v): ?>

           <tr>
              <td><?= $key + 1 ?></td>
              <td>
                  <?= $v->product_name ?>
              </td>
              <td><?= $v->qty ?></td>
              <td><?= $v->type ?></td>
              <td><?= $v->customer_name ?></td>
              <td><?= $v->driver_name ?></td>
              <td><?= $v->username ?></td>
              <td><?= getDateTimeFormat($v->added_at,'date') ?></td>
              <td><?= getDateTimeFormat($v->added_at,'only_time') ?></td>
           </tr>

          <?php endforeach; ?>
          <?php else: ?>

            <tr>
              <td colspan="9">No log found...</td>
            </tr>

          <?php endif; ?>

         </tbody>
      </table>
      </div>


  </body>

  <!-- Library Bundle Script -->
  <script src="<?= base_url('assets/js/core/libs.min.js') ?>"></script>

  <script type="text/javascript">

    $('#print_log_details').click(function () {

        window.print()

    })

  </script>
</html>
