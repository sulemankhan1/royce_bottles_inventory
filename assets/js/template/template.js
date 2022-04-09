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
