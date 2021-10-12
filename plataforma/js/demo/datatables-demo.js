// Call the dataTables jQuery plugin
$(document).ready(function() {
  if($('#dataTable')){
    $('#dataTable').DataTable();
  }

  if($('#dataTableUser')){
    $('#dataTableUser').DataTable();
  }
  if($('#dataTableOrders')){
    $('#dataTableOrders').DataTable();
  }
});
