<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= $page_title ?></title>
    <style type="text/css">

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

      <table width="30%" id="log-details-filter">
        <tr>
          <td>Product:</td>
          <th>All</th>
        </tr>
        <tr>
          <td>Customer:</td>
          <th>All</th>
        </tr>
        <tr>
          <td>Driver:</td>
          <th>All</th>
        </tr>
        <tr>
          <td>Type:</td>
          <th>All</th>
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

      <table width="100%" border="1">
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
