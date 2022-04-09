$('.show_payments_').click(function () {

    let url = $('input[name=getCustomerPayments]').val()
    let customer_id = 1
    window.open(url+'/'+customer_id,'Customer Payments','height=800,width=800');

})

$('.add_payment_').click(function () {

    $('#AddPaymentModal').modal('show')

})
