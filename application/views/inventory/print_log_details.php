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

    </style>
  </head>
  <body onload="window.print()">

      <h2 align="center"><?= $page_title ?></h2>
      <br><br>

      <table width="30%" id="log-details-filter">
        <tr>
          <th>Product:</th>
          <td>All</td>
        </tr>
        <tr>
          <th>Customer:</th>
          <td>All</td>
        </tr>
        <tr>
          <th>Driver:</th>
          <td>All</td>
        </tr>
        <tr>
          <th>Type:</th>
          <td>All</td>
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
           <tr>
              <td>1</td>
              <td>
                  Product1
              </td>
              <td>10</td>
              <td>Assigned</td>
              <td>-</td>
              <td>Driver1</td>
              <td>User1</td>
              <td>03-04-2021</td>
              <td>5:10 PM</td>
           </tr>
           <tr>
              <td>1</td>
              <td>Product1
              </td>
              <td>10</td>
              <td>Removed</td>
              <td>-</td>
              <td>-</td>
              <td>User1</td>
              <td>03-04-2021</td>
              <td>5:10 PM</td>
           </tr>
           <tr>
              <td>1</td>
              <td>
                  Product1
              </td>
              <td>10</td>
              <td>Sold</td>
              <td>Customer1</td>
              <td>Driver1</td>
              <td>User1</td>
              <td>03-04-2021</td>
              <td>5:10 PM</td>
           </tr>
           <tr>
              <td>1</td>
              <td>
                  Product1
              </td>
              <td>10</td>
              <td>Sold</td>
              <td>Customer1</td>
              <td>Driver1</td>
              <td>User1</td>
              <td>03-04-2021</td>
              <td>5:10 PM</td>
           </tr>
         </tbody>
      </table>


  </body>
</html>
