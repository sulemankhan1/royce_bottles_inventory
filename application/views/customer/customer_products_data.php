<?php foreach ($customers as $key => $v): ?>

<tr>
  <td><?= $key+1 ?></td>
  <td><input type="hidden" name="product_id[]" value="<?= $v->product_id ?>"><?= $v->product_name ?></td>
  <td>
    <input type="number" class="form-control form-control-sm" step="any" name="price[]" required value="<?= $v->price ?>">
  </td>
</tr>

<?php endforeach; ?>
