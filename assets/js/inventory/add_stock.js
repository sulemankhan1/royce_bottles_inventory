// add stock popup
$('#add_stock_').click(function () {

    let redirect_url = $(this).attr('data-redirect')

    $('.add_stock_redirect_to_').val(redirect_url)

    $('#AddStockModal').modal('show');

})
