//change user status
$('.changeUser_status_').click(function () {

  let type = $(this).attr('data-type-msg')

  let msg = 'Are you sure you want to deactive this '+type+'?'

  let btn_txt = 'Deactive '+type

  $('#user-status-msg').text(msg)

  $('#user-status-action-btn-txt').text(btn_txt)

  $('#UserStatusModal').modal('show')

})
