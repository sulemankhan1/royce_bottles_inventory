
$('#invAvailableDataTable').DataTable({
  dom: 'lBfrtip',
    buttons: [
      {
        text: 'Excel',
        extend: 'excelHtml5',
        className: 'btn btn-sm btn-primary',
        init: function(api, node, config) {
           $(node).removeClass('dt-button')
        }
      },
      {
        text: 'Pdf',
        extend: 'pdfHtml5',
        className: 'btn btn-sm btn-primary',
        init: function(api, node, config) {
           $(node).removeClass('dt-button')
        }
      }
    ],
  language: {
    'paginate': {
      'previous': '«',
      'next': '»'
    }
  }

})

$('#invMissingDataTable').DataTable({
  dom: 'lBfrtip',
    buttons: [
      {
        text: 'Excel',
        extend: 'excelHtml5',
        className: 'btn btn-sm btn-primary',
        init: function(api, node, config) {
           $(node).removeClass('dt-button')
        }
      },
      {
        text: 'Pdf',
        extend: 'pdfHtml5',
        className: 'btn btn-sm btn-primary',
        init: function(api, node, config) {
           $(node).removeClass('dt-button')
        }
      }
    ],
  language: {
    'paginate': {
      'previous': '«',
      'next': '»'
    }
  }

})

$('#invReturnDataTable').DataTable({
  dom: 'lBfrtip',
    buttons: [
      {
        text: 'Excel',
        extend: 'excelHtml5',
        className: 'btn btn-sm btn-primary',
        init: function(api, node, config) {
           $(node).removeClass('dt-button')
        }
      },
      {
        text: 'Pdf',
        extend: 'pdfHtml5',
        className: 'btn btn-sm btn-primary',
        init: function(api, node, config) {
           $(node).removeClass('dt-button')
        }
      }
    ],
  language: {
    'paginate': {
      'previous': '«',
      'next': '»'
    }
  }

})

$('#invExchangeDataTable').DataTable({
  dom: 'lBfrtip',
    buttons: [
      {
        text: 'Excel',
        extend: 'excelHtml5',
        className: 'btn btn-sm btn-primary',
        init: function(api, node, config) {
           $(node).removeClass('dt-button')
        }
      },
      {
        text: 'Pdf',
        extend: 'pdfHtml5',
        className: 'btn btn-sm btn-primary',
        init: function(api, node, config) {
           $(node).removeClass('dt-button')
        }
      }
    ],
  language: {
    'paginate': {
      'previous': '«',
      'next': '»'
    }
  }

})
