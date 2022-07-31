// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable({
    'lengthMenu': [[10, 20, 50, 100, 200, -1], [10, 20, 50, 100, 200, 'All']],
    "language": {
      "paginate": {
        "previous": "Previous page custom name",
        'next':"Next page custom name",
      }
    },

  });

 
});

