// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable({
    'lengthMenu': [[10, 20, 50, 100, 200, -1], [10, 20, 50, 100, 200, 'All']],
    "language": {
      "paginate": {
        "previous": "previous",
        'next':"next",
      }
    },

  });

  $('#userSaleDataTable').DataTable({
    'pageLength': 5,
  });

 
});

