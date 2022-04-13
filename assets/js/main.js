//delete record
$('.delete_record_').click(function () {
  
  let type = $(this).attr('data-type-msg')

  let msg = 'Are you sure you want to delete this '+type+'?'

  // let btn_txt = 'Delete '+type
  let btn_txt = 'Delete'

  $('#delete-msg').text(msg)

  $('#delete-action-btn-txt').text(btn_txt)

  $('#deleteRecordModal').modal('show')

})

//view details
$('.view_details_').click(function () {

  let url = $(this).attr('data-url')

  $.ajax({

    url : url,
    dataType : 'json',
    success :function (data) {

      $('#view_details_').html(data.html)
      $('#ViewDetailsModal').modal('show')

    }

  })


})
