//delete sale record
$(document).on('click','.delete_record_',function () {

  let msg = $(this).attr('data-msg')
  let url = $(this).attr('data-url')

  $('#delete-msg').text(msg)

  $('#delete-action-btn-txt').text('Delete')
  $('#delete-action-btn-txt').prop('href',url)

  $('#deleteRecordModal').modal('show')

})

$(document).on('click','.view_sale_details_',function () {

  let url = $(this).attr('data-url')

    window.open(url,'View Sale Information','height=800,width=800');

})

$(document).on('click','.changeSalesStatus',function () {

  let url = $(this).attr('data-url')
  let msg = $(this).attr('data-msg')
  let btn = $(this).attr('data-btn')

  $('#sale-status-msg').text(msg)
  $('#sale-status-action-btn-txt').text(btn).prop('href',url)

  $('#SaleStatusModal').modal('show')

})
