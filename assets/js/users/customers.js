$(document).on('click','.adjust_prices_',function () {


    let url = $(this).attr('data-url')

    $.ajax({

      url : url,
      dataType : 'json',
      success :function (data) {

        $('#customer_products_price_').html(data.html)
        $('input[name=customer_id_]').val(data.customer_id)
        $('#CustomerProductsPricesModal').modal('show')

      }

    })

})

$(document).on('keyup','.adjust_product_price',function () {

    let id = $(this).attr('id')
    let price = $(this).val()

    $('.product_price_'+id).val(price)

})
