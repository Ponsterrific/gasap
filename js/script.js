$(document).ready(function() { $('#example').dataTable(); } );
$('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})