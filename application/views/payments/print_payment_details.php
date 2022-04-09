<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= $page_title ?></title>
  </head>
  <body onload="window.print()">

      <h2 align="center"><?= $page_title ?></h2>

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

      <table width="100%" border="1">
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
