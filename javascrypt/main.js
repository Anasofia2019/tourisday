// se crea el evento de categorización de los tabs y de los articulos al cargar la pagina
$(document).ready(function(){
	$('ul.tabs li a:first').addClass('active');
$('.secciones article').hide();
$('.secciones article:first').show();


// aqui hacemos uso de los efectos de jquery como hide o show para esconder o prolongar los articulos
$('ul.tabs li a').click(function(){
 $('ul.tabs li a').removeClass('active');
 $(this).addClass('active');
 $('.secciones article').hide();

 var activeTab = $(this).attr('href');
 $(activeTab).show();
 return false;
});

});




$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".dropdown-menu li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
