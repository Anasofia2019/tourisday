/* Al cargar las páginas,misitioguia.php
 o misitioturista.php,
 se ejecutará la función
 que activa el color amarillo
en el primer botón que se encuentra
 en la navbar,
el valor active equivale a el color amarillo
definido en las hojas de estilo misitioguia.css y
misitioturista.css
 */
 $(document).ready(function(){
	$('ul.tabs li a:first').addClass('active');
/*
En este caso el efecto hide
de jquery,esconde las
etiquetas article, que
sean diferentes

*/
$('.secciones article').hide();
$('.secciones article:first').show();


/*
la siguiente función
lo que nos permite es
crear un evento, al dar
click en uno de los botones
que se encuentra en la navbar,
ese botón obtiene un tono amarillo
y los demás botones tendrán el
color original.

*/

$('ul.tabs li a').click(function(){
 $('ul.tabs li a').removeClass('active');
 $(this).addClass('active');

/*en este caso el efecto
hide de jquery, lo que nos permite
es esconder las etiquetas article
que se  encuentran dentro de las etiquetas
seccion cuando el tab que las contiene no
está activado */

 $('.secciones article').hide();


/* en caso de que se active un tab
cualquiera, es decir cada que demos
clik en un boton de la nav,el articulo
mostrará la información coincidente
que direccione el atributo href de la
etiqueta article*/


 var activeTab = $(this).attr('href');
 $(activeTab).show();
/* en caso de de no coincidir el
 metodo attr arroja false y no ejecuta nada */
 return false;
});

});


/*
El código incluido en el interior
$( document ).ready()solo se ejecutará
una vez que la página esté lista para
que se ejecute el código JavaScript.
https://learn.jquery.com/using-jquery-core/document-ready/
*/
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".dropdown-menu li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
