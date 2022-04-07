// add_assign_products_to_driver
$('.add_assign_products_to_driver').click(function () {

  let pro_row = $('.getProductRowToAssign').html()

  $('#assign_products_to_driver').append(pro_row)

})

// remove_assign_products_to_driver
$(document).on('click','.remove_assign_products_to_driver',function () {

    $(this).closest('.row').remove()

})
