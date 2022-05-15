<?php foreach ($assign_products as $key => $v): ?>
<?php if ($v->qty != 0): ?>

<div class="row">
  <?php

    $sold_qty = $v->qty - $v->available_qty;

    echo getHiddenField('product_id[]',$v->product_id);

    echo getInputField([
      'label' => 'Product',
      'column' => 'sm-2',
      'attr' => 'readonly',
      'value' => $v->product_name,
      'col_attr' => 'style="width:22.666667%!important"'
    ]);
    echo getInputField([
      'label' => 'Assign Qty',
      'name' => 'assign_qty[]',
      'column' => 'sm-1',
      'col_classes' => 'return_stock_inp_cols',
      'attr' => 'readonly',
      'value' => $v->qty
    ]);
    echo getInputField([
      'label' => 'Sale Qty',
      'name' => 'sale_qty[]',
      'column' => 'sm-1',
      'col_classes' => 'return_stock_inp_cols',
      'classes' => 'sale_qty_',
      'attr' => 'readonly',
      'value' => $sold_qty
    ]);
    echo getInputField([
      'label' => 'Exchange Qty',
      'name' => 'exchange_qty[]',
      'column' => 'sm-1',
      'col_classes' => 'return_stock_inp_cols',
      'attr' => 'readonly',
      'classes' => 'exchange_qty_',
      'value' => $v->exchange_qty
    ]);
    echo getInputField([
      'label' => 'Foc Qty',
      'name' => 'foc_qty[]',
      'column' => 'sm-1',
      'col_classes' => 'return_stock_inp_cols',
      'attr' => 'readonly',
      'classes' => 'foc_qty_',
      'value' => $v->foc_qty
    ]);
    echo getInputField([
      'label' => 'Missing Qty',
      'name' => 'missing_qty[]',
      'column' => 'sm-1',
      'col_classes' => 'return_stock_inp_cols',
      'classes' => 'missing_qty_'
    ]);
    echo getInputField([
      'label' => 'Return Qty',
      'name' => 'return_qty[]',
      'column' => 'sm-1',
      'col_classes' => 'return_stock_inp_cols',
      'classes' => 'return_qty_'
    ]);
    echo getInputField([
      'label' => 'Total',
      'name' => 'total',
      'column' => 'sm-1',
      'col_classes' => 'return_stock_inp_cols',
      'attr' => 'readonly,min="'.$v->qty.'",max="'.$v->qty.'"',
      'classes' => 'total_qty_',
    ]);

    ?>

</div>

<?php endif; ?>
<?php endforeach; ?>
