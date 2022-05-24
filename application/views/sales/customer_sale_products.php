<?php $assign_stock_id = 0; foreach ($products as $key => $v): ?>

<?php if ($v->available_qty != 0):

  $assign_stock_id = $v->assign_stock_id;
  ?>

<div class="row">

  <?php

    echo getHiddenField('product_id[]',$v->product_id);
    echo getHiddenField('price[]',$v->product_price,'price_');

    echo getInputField([
      'label' => 'Product',
      'value' => $v->product_name,
      'column' => 'sm-4',
      'attr' => 'readonly'
    ]);
    echo getInputField([
      'label' => 'Available Qty',
      'name' => 'available_qty[]',
      'column' => 'sm-1',
      'col_classes' => 'sale_stock_inp_cols',
      'classes' => 'available_qty_',
      'attr' => 'readonly',
      'value' => $v->available_qty
    ]);
    echo getInputField([
      'label' => 'Sale Qty',
      'name' => 'sale_qty[]',
      'column' => 'sm-1',
      'col_classes' => 'sale_stock_inp_cols',
      'classes' => 'sale_qty_'
    ]);
    echo getInputField([
      'label' => 'Exchange Qty',
      'name' => 'exchange_qty[]',
      'column' => 'sm-1',
      'col_classes' => 'sale_stock_inp_cols',
      'classes' => 'exchange_qty_'
    ]);
    echo getInputField([
      'label' => 'Foc Qty',
      'name' => 'foc_qty[]',
      'column' => 'sm-1',
      'col_classes' => 'sale_stock_inp_cols',
      'classes' => 'foc_qty_'
    ]);
    echo getInputField([
      'label' => 'Total',
      'name' => 'total[]',
      'column' => 'sm-1',
      'col_classes' => 'sale_stock_inp_cols',
      'classes' => 'total_qty_',
      'attr' => 'readonly,max="'.$v->available_qty.'"'

    ]);

    echo getHiddenField('amount[]',0,'amount_');

    ?>

    <div class="col-sm-1" style="padding:0px!important;width:1.333333%!important;">
      <a href="javascript:void(0)" class="remove_customer_sale_product">
        <i class="fa-solid fa-x" style="font-size: 20px;margin-top: 38px;margin-left:8px;;color:#fd6262!important;"></i>
      </a>
    </div>

</div>

<?php endif; ?>
<?php endforeach;
echo getHiddenField('main_id',$assign_stock_id = $v->assign_stock_id);
?>
