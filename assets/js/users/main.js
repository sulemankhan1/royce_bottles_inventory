//change user status
$('.changeUser_status_').click(function () {

  let type = $(this).attr('data-type-msg')
  let status = $(this).attr('data-type-status')

  let msg = 'Are you sure you want to '+status+' this '+type+'?'

  // let btn_txt = status +' '+type
  let btn_txt = status

  $('#user-status-msg').text(msg)

  $('#user-status-action-btn-txt').text(btn_txt)

  $('#UserStatusModal').modal('show')

})
