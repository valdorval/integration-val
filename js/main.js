$(function () {
     $('#checkbox').click(function () {
          if ($('#checkbox').prop('checked')) {
               $('.header').addClass('dark');
          } else {
               $('.header').removeClass('dark');
          }
     })
});