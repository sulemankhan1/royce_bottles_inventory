$('.view_inv_details,.print_inv_details').click(function () {

  let url = $(this).attr('data-url')

    window.open(url,'Invoice Details','height=800,width=800');

})
