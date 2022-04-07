
  $('#print_log_details').click(function () {

    var divToPrint=document.getElementById('logs_data');

    var newWin=window.open('','Print-Window');

    newWin.document.open();

    newWin.document.write('<html><style>	#log-details-filter tr th,#log-details-filter tr td{padding-bottom: 10px!important;}#log-details-filter tr td{color: black!important}#log-details-filter{margin-left: 18px!important;}.table-img-design{width: 45px!important;border-radius: 23px!important;}.table-img-txt-design{margin-left: 3px!important;}</style><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');

    newWin.document.close();

    setTimeout(function(){newWin.close();},10);

  })
