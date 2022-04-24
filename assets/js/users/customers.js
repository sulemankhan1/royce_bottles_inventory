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
