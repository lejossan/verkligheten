$("[data-fancybox]").fancybox({
    // Options will go here
  });



$('.menu .title').on('click', function(){
  var menu = $(this).closest('.menu');
  if(menu.css('height') == '25px'){
    menu.css('height', 'inherit')
  } else {
    menu.css('height', '25px');
  }
});

$('.index .title').on('click', function(){
  var menu = $(this).closest('.index');
  if(menu.css('height') == '25px'){
    menu.css('height', 'inherit')
  } else {
    menu.css('height', '35px');
  }
});