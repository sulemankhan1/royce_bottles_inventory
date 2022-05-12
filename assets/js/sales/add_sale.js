function show_error_(_error_msg) {

   toastr.error(_error_msg, "", {
    positionClass: "toast-top-right",
    timeOut: 5e3,
    closeButton: !0,
    debug: !1,
    newestOnTop: !0,
    progressBar: !0,
    preventDuplicates: !0,
    onclick: null,
    showDuration: "300",
    hideDuration: "1000",
    extendedTimeOut: "1000",
    showEasing: "swing",
    hideEasing: "linear",
    showMethod: "fadeIn",
    hideMethod: "fadeOut",
    tapToDismiss: !1
  })

}

function show_success_(_succes_msg) {

  toastr.success(_succes_msg, "", {
    positionClass: "toast-top-right",
    timeOut: 5e3,
    closeButton: !0,
    debug: !1,
    newestOnTop: !0,
    progressBar: !0,
    preventDuplicates: !0,
    onclick: null,
    showDuration: "300",
    hideDuration: "1000",
    extendedTimeOut: "1000",
    showEasing: "swing",
    hideEasing: "linear",
    showMethod: "fadeIn",
    hideMethod: "fadeOut",
    tapToDismiss: !1
  })

}

//get customer sale prooducts,remarks,unpaid invoices
$('#sale_customer_id').change(function () {

    let customer_id = $(this).val()

    $('#total_unpaid_inv').empty()
    $('.customer_remarks_col').css('display','none')
    $('#customer_remarks').empty()
    $('#showCustomerSaleProducts_').empty()

    if(customer_id != '')
    {

      $.ajax({
        url : 'AjaxController/getCustomerSaleInfo/'+customer_id,
        dataType : 'json',
        success : function (data) {

          if(data.payment_type != 'Cash')
          {

              $('#is_customer_pay').val('No').trigger('change').prop('readonly',true)

          }

          $('input[name=customer_category]').val(data.payment_type)
          $('input[name=total_products]').val(data.total_products)
          $('#total_unpaid_inv').html(data.total_unpaid_inv)
          $('.customer_remarks_col').css('display','block')
          $('#customer_remarks').html(data.remarks)
          $('#showCustomerSaleProducts_').html(data.html)

        }
      })

    }

})

// remove sale product row
$(document).on('click','.remove_customer_sale_product',function () {

  $(this).closest('.row').remove()

})


// check customer is pay or not
$('#is_customer_pay').change(function () {

  let is_pay = $(this).val()

  $('.payment_type_col,.reason_col').css('display','none')

  $('.bank_name_col,.acc_no_col,.cheque_no_col').css('display','none')
  $('#bank_name,#acc_no,#cheque_no').prop('required',false)
  $('#bank_name,#acc_no,#cheque_no').val('')

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
  $('#bank_name,#acc_no,#cheque_no').val('')

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
$('#save_sale').submit(function (e) {

  e.preventDefault()

  let data = $('#save_sale').serialize()

  let total_products = $('input[name=total_products]').val()

  if(total_products != 0)
  {

    $.ajax({

      url : 'Sales/save_sale',
      type : 'post',
      data : data,
      dataType : 'json',
      success : function (data) {

        console.warn(data)

        if(data.status == true)
        {

          show_success_(data.msg)

          window.open('AjaxController/showSalesDetails/'+data.sale_id,'Sale Information','height=800,width=800');

        }
        else
        {

          show_error_(data.msg)

        }

      }

    })

  }
  else
  {

      show_error_('Kindly select anyone product')

  }

})


// calculate qty
$(document).on('keyup','.sale_qty_,.exchange_qty_,.foc_qty_',function () {

  let $t = $(this).closest('.row')

  let sale_qty = Number($t.find('.sale_qty_').val())
  let exchange_qty = Number($t.find('.exchange_qty_').val())
  let foc_qty = Number($t.find('.foc_qty_').val())

  let total = sale_qty + exchange_qty + foc_qty

  $t.find('.total_qty_').val(total)

})

function total_amount_()
{

  var sum = 0;
  $('.amount_').each(function (){

      sum += Number($(this).val())

  })

  $('input[name=total_amount]').val(sum)

}

// calculate qty
$(document).on('keyup','.sale_qty_',function () {

  let $t = $(this).closest('.row')

  let sale_qty = Number($t.find('.sale_qty_').val())

  let price = Number($t.find('.price_').val())

  let amount = sale_qty * price

  $t.find('.amount_').val(amount)

  total_amount_()

})
