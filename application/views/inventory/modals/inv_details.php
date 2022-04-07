<div class="row mt-2">
    <div class="col-sm-12">

      <h3>Product Summary</h3>

      <div class="row mt-3 mb-3">

        <div class="col-sm-8">
          <div class="row">

        <?php

          echo viewDetailsCol('Product Name','Product1',4);
          echo viewDetailsCol('Product Code','002',4);
          echo viewDetailsCol('SKU','XYZ-123',4);
          echo viewDetailsCol('Description','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',12);

        ?>

          </div>
        </div>
        <div class="col-sm-4 text-center">
            <img src="<?= base_url('assets/images/avatars/01.png') ?>" class="img-thumbnail user-form-img" alt="...">
        </div>

      </div>
      <div class="row">
        <div class="col-sm-12" style="font-size: 14px;">
            <table class="table ">
        <thead>
          <tr>
            <th>#</th>

            <?php if ($type == 'available'): ?>

              <th>Product Stock</th>
              <th>Sold Stock</th>
              <?php else: ?>
                <th>Driver</th>
            <?php endif; ?>

            <?php if ($type == 'available' || $type == 'missing'): ?>
              <th>Missing Stock</th>
            <?php endif; ?>

            <?php if ($type == 'available' || $type == 'return'): ?>
              <th>Return Stock</th>
            <?php endif; ?>

            <?php if ($type == 'available' || $type == 'exchange'): ?>
              <th>Exchange Stock</th>
            <?php endif; ?>

            <th>Date & Time</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <?php if ($type == 'available'): ?>
                <td>100</td>
                <td>80</td>
              <?php else: ?>
                <th>Driver1</th>
              <?php endif; ?>

            <?php if ($type == 'available' || $type == 'missing'): ?>
              <td>10</td>
            <?php endif; ?>

            <?php if ($type == 'available' || $type == 'return'): ?>
              <td>5</td>
            <?php endif; ?>

            <?php if ($type == 'available' || $type == 'exchange'): ?>
              <td>5</td>
            <?php endif; ?>

            <td> 03-04-2022,5:56 PM</td>
          </tr>
          <tr>
            <td>1</td>
            <?php if ($type == 'available'): ?>
                <td>100</td>
                <td>80</td>
              <?php else: ?>
                <th>Driver1</th>
              <?php endif; ?>

            <?php if ($type == 'available' || $type == 'missing'): ?>
              <td>10</td>
            <?php endif; ?>

            <?php if ($type == 'available' || $type == 'return'): ?>
              <td>5</td>
            <?php endif; ?>

            <?php if ($type == 'available' || $type == 'exchange'): ?>
              <td>5</td>
            <?php endif; ?>

            <td> 03-04-2022,5:56 PM</td>
          </tr>
          <tr>
            <td>1</td>
            <?php if ($type == 'available'): ?>
                <td>100</td>
                <td>80</td>
              <?php else: ?>
                <th>Driver1</th>
              <?php endif; ?>

            <?php if ($type == 'available' || $type == 'missing'): ?>
              <td>10</td>
            <?php endif; ?>

            <?php if ($type == 'available' || $type == 'return'): ?>
              <td>5</td>
            <?php endif; ?>

            <?php if ($type == 'available' || $type == 'exchange'): ?>
              <td>5</td>
            <?php endif; ?>

            <td> 03-04-2022,5:56 PM</td>
          </tr>
        </tbody>
      </table>
        </div>
      </div>

    </div>
</div>
