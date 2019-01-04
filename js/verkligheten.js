
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
  if(menu.css('height') == '40px' ){
    menu.css('height', 'inherit')
  } else {
    menu.css('height', '40px');
  }
});
$('.index li').on('click', function(){
  if(!$(this).hasClass('title')){
    $(this).closest('.index').css('height', '40px');
  }
});