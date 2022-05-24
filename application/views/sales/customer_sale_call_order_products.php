<?php $total = 0;$call_order_id = 0; foreach ($products as $key => $v): ?>

<?php if ($v->qty != 0):
  $call_order_id = $v->call_order_id;
  $amount = $v->product_price * $v->qty;
  $total += $amount; ?>

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

    echo getHiddenField('available_qty[]',0);

    echo getInputField([
      'label' => 'Sale Qty',
      'name' => 'sale_qty[]',
      'column' => 'sm-2',
      'attr' => 'readonly',
      'value' => $v->qty
    ]);

    echo getHiddenField('exchange_qty[]',0);
    echo getHiddenField('foc_qty[]',0);
    echo getHiddenField('total[]',$v->qty);

    echo getHiddenField('amount[]',$amount);

    ?>

</div>

<?php endif; ?>
<?php endforeach;
echo getHiddenField('total_amount',number_format(floatval($total),2,'.',''));
echo getHiddenField('main_id',$call_order_id);
?>
