$(document).ready(function () {
  $("#sidebar").mCustomScrollbar({
    theme: "minimal"
  });
$('#sidebarCollapse').on('click', function () {
  $('#sidebar, #content').toggleClass('active');
  $('.collapse.in').toggleClass('in');
  $('a[aria-expanded=true]').attr('aria-expanded', 'false');
  });
});


$('#validatedCustomFile').on('change',function(){
      var fileName = $(this).val();
        $(this).next('.custom-file-label').html(fileName);
    })