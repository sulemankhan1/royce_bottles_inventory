//get customer sale prooducts,remarks,unpaid invoices
$('#sale_customer_id').change(function () {

    let url = $('input[name=getCustomerSaleInfo]').val()
    let customer_id = $(this).val()

    $.ajax({
      url : url+'/'+customer_id,
      dataType : 'json',
      success : function (data) {

        $('#total_unpaid_inv').html(data.total_unpaid_inv)
        $('.customer_remarks_col').css('display','block')
        $('#customer_remarks').html(data.remarks)
        $('#showCustomerSaleProducts_').html(data.html)

      }
    })

})

// remove sale product row
$(document).on('click','.remove_customer_sale_product',function () {

  $(this).closest('.row').remove

})


// check customer is pay or not
$('#is_customer_pay').change(function () {

  let is_pay = $(this).val()

  $('.payment_type_col,.reason_col').css('display','none')

  if(is_pay == 'Yes')
  {
    $('.payment_type_col').css('display','block')
    $('.payment_type').prop('required',true)
  }
  else if(is_pay == 'No')
  {
    $('.payment_type').prop('required',false)
    $('.reason_col').css('display','block')
  }

})


//check payment type
$('.payment_type').change(function () {

  let pay_type = $(this).val()

  $('.bank_name_col,.acc_no_col,.cheque_no_col').css('display','none')

  $('#bank_name,#acc_no,#cheque_no').prop('required',false)

  if(pay_type == 'Cheque')
  {

    $('.bank_name_col,.acc_no_col,.cheque_no_col').css('display','block')
    $('#bank_name,#acc_no,#cheque_no').prop('required',true)

  }
  else if(pay_type == 'Bank')
  {

    $('.bank_name_col,.acc_no_col').css('display','block')
    $('#bank_name,#acc_no').prop('required',true)

  }

})


//add sale
$('.add_sale_').click(function () {

  let url = $('input[name=show_view_sale]').val()
  let sale_id = 1
  window.open(url+'/'+sale_id,'Sale Information','height=800,width=800');

})
