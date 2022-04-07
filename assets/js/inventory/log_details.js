
  $("#print_log_details").on('click', function () {

    let url = $(this).attr('data-url')

    window.open(url,'Log Details','height=800,width=800');

  })
