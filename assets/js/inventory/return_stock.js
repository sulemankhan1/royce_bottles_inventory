//return_stock_driver
$('#return_stock_driver').change(function () {

  let driver_id = $(this).val()

  let url = $('input[name=return_stock_url]').val()

  $.ajax({
    url : url+'/'+driver_id,
    dataType : 'json',
    success : function (data) {

      $('#show_driver_products_').html(data.html)

    }
  })

})
