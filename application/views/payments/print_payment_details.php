<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= $page_title ?></title>


        <!-- Hope Ui Design System Css -->
        <link rel="stylesheet" href="<?= base_url('assets/css/hope-ui.min.css?v=1.2.0') ?>" />

        <!-- Custom Css -->
        <link rel="stylesheet" href="<?= base_url('assets/css/custom.min.css?v=1.2.0') ?>" />

        <style style="text/css">

          body
          {
              background: none!important;
          }

        </style>

  </head>
  <body onload="window.print()">

      <h2 align="center"><?= $page_title ?></h2>
      <br><br>

      <table width="30%">
        <tr>
          <th>Customer:</th>
          <td>Customer1</td>
        </tr>
        <tr>
          <th>Date From:</th>
          <td>03-10-2022</td>
        </tr>
        <tr>
          <th>Date To:</th>
          <td>03-20-2022</td>
        </tr>
      </table>
      <br>

      <table class="table table-bordered">
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
             <td style="text-align:right">10</td>
             <td style="text-align:right">0</td>
          </tr>
          <tr>
            <td>1</td>
             <td>12141</td>
             <td>03-04-2021</td>
             <td>5:10 PM</td>
             <td style="text-align:right">0</td>
             <td style="text-align:right">10</td>
          </tr>
          <tr>
            <td>1</td>
             <td>12141</td>
             <td>03-04-2021</td>
             <td>5:10 PM</td>
             <td style="text-align:right">10</td>
             <td style="text-align:right">0</td>
          </tr>
        </tbody>
      </table>


  </body>
</html>
