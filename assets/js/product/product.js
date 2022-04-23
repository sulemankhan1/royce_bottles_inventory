
$('select[name=cat_id]').change(function () {

    let cat_id = $(this).val()
    let url = $('input[name=getCategoryPrice]').val()

    $.ajax({

      url : url+'/'+cat_id,
      dataType : 'json',
      success : function (data) {

        $('input[name=price]').val(data.price)

      }

    })
})
