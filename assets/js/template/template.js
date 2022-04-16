$('#add_template_').click(function () {

  let head = $(this).attr('data-head')

  $('#template_action_head').text(head)

  $('#AddTemplateModal').modal('show')

})

$('.edit_template_').click(function () {

  let head = $(this).attr('data-head')

  $('#template_action_head').text(head)

  $('#AddTemplateModal').modal('show')

})


//check or uncheck all customers
$('.check_all_customers').change(function () {
  
    if($(this).is(':checked'))
    {

      $('.customer_check').prop('checked',true)

    }
    else
    {

      $('.customer_check').prop('checked',false)

    }
})
