
$('#save_sale').parsley()

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
        url : 'AjaxController/getCustomerConfirmedCallOrderInfo/'+customer_id,
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
$('save_sale').submit(function (e) {

  e.preventDefault()

  let url = $('input[name=save_sale]').val()
  let show_details_url = $('input[name=show_details]').val()

  let data = $('#save_sale').serialize()

  let total_products = $('input[name=total_products]').val()

  if(total_products != 0)
  {

    $.ajax({

      url : url,
      type : 'post',
      data : data,
      dataType : 'json',
      success : function (data) {

        if(data.status == true)
        {

          show_success_(data.msg)

          window.open(show_details_url+'/'+data.sale_id+'/save_sale','Sale Information','height=800,width=800');

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
