<!-- tourist day es un sitio web
que permite a registrar usuarios turistas
con el fin de visualizar información y fotos
que insertan a la plataforma otros usuarios guias
no obstante si al turista le
agrada el sitio se comunica con el
a través de la información dada -->




<!DOCTYPE html>
<!-- es importante tener en cuenta que el contenido de esta página
hace parte del mismo index -->
<html lang="en">
</style>
<head>
  <title>Tourist day</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <!-- reducimos en este link el codigo css de bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
   <!-- nuestros links de font wesome  y archivo javascrypt minimizado  -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- llamamos nuestro archivo css -->
  <link rel="stylesheet" href="./css/informacion.css">
 <link rel="stylesheet" href="font.css">

</head>

<body>
<!-- Aca podemos ver reflejada la información principal en un contenedor -->
<div class="container">
  <!-- En este contenedor pondremos los textos
  que estan debajo de los iconos -->
  <div class="contenedor_principal">
    <!-- dentrro de este otro div  va el contenido como tal -->
    <div class="contenedor_titulo">
      <!-- Este es el titulo de loguin para el
      guia -->
       <h1>Intervenimos entre guías y turistas para promocionar el valle de aburrá.</h1><br>
       <h2>Una forma fácil de conocer amigos y lugares.</h2> <br>
       <!-- este banner contiene la misión visión
       y políticas del software  -->
       <div class="contenedor_banner">
         <!-- este boton es de el div principal y
         su funcion es llevar al login de guia -->
       <a href="registroguia.php"><button type="button" name="button" id="empezar">Empezar ya</button></a>
          <!-- Imagen del banner principal -->
       <img src="img/telephone.svg" alt="">
      </div>
    </div>
  </div>
</div>
<!-- aca creamos la clase que va a contener
 la social var con las redes sociales
que se clasifican en las etiquetas a -->
  <div class="social-bar">
<!-- Podemos observar que los iconos
se encuentran en la clase de las
etiquetas a     -->
     <a href="#" class="icon icon-facebook" target="_blank" ></a>
     <a href="#" class="icon icon-youtube" target="_blank"></a>
     <a href="#" class="icon icon-instagram " target="_ blank"></a>
  </div>
   <br><br><br><br>
 <!-- A continuación podemos ver los botones opcionales
   después del contenedor principal -->
    <a href="registroguia.php"><button type="button" name="button" id="boton_guia">Ser  guía</button></a>
    <a href="registroturista.php"><button type="button" name="button" id="boton_turista">Soy turista</button></a>

<!-- En este div encontramos los iconos
  que estan debajo de los dos botones
  opcionales de logueo -->

    <div class= "contenedor_aviso1">
<!-- subcontenedor de los iconos   -->
      <div id="contenedor_imagenes">
<!-- podemos observar los iconos svg en etiquetas img     -->
        <img src="img/guia.svg" alt="" id="imagen1">
        <img src="img/laptop.svg" alt="" id="imagen2">
        <img src="img/turista.svg" alt="" id="imagen3">
      </div>
  </div>

<!-- este es el texto del icono guia -->
 <div class="contenedor_textos1">
  <div id="texto1">
   <h3 style=""> <a href="registroguia.php" >Ser guía</a></h3>
   <p style="">Si lo Tuyo es ser guía,con nosotros tendrás la oportunidad de serlo siempre y cuando te registres y sigas los pasos correctamente. <p>
  </div>

  <!-- este es el texto del icono turista -->
  <div id="texto2">
    <h3 ><a href="registroturista.php" style="">Ingresar como turista</a></h3>
    <p >Puedes disfrutar de una aventura a tu manera,de la mano de un guía y a su vez un amigo  que  resolvera tus inquietudes.   <p>
  </div>

</div>

<br>
<br>
<!-- Este contenedor contiene tres iconos
a la ves y sus contenedores-->
<div class="contenedor_mision">
  <!-- div que contienene los iconos de anuncio -->
  <div class="contenedorImagenesMision">
    <!-- Tres iconos de anuncio uno de la misión,visión,políticas -->
     <img src="img/mision1.svg" alt="" id="imagen1">
     <img src="img/vision.svg" alt="" id="imagen2">
     <img src="img/politicas.svg" alt="" id="imagen3">
</div>

<!-- texto que contiene la información de la misión -->
  <div class="contenedor_texto3">
    <a href="#"><h3>Misión</h3></a>
    <p>Nuestra misión es poder ser intermediarios <br>de nuestros guías y turistas  a través<br>de un sistema de información</p>
  </div>

  <!-- texto que contiene la información de la visión -->
 <div class="contenedor_texto4">
    <a href="#"><h3>Visión</h3></a>
    <p>Nuestra visión es crear una forma  de <br> empleo que justifique el  cuidado <br> de nuestro patrimonio cultural  </p>
  </div>

  <!-- texto que contiene la información de las políticas -->
  <div class="contenedor_texto5">
    <a href="#"><h3>Políticas</h3></a>
    <p>Para trabajar con nosotros,tendrás que <br> aceptar términos y condiciones que <br> respaldan la seguridad  de nuestros usuarios</p>
  </div>
</div>

<!-- Inicio del footer o pie de página -->
<footer id="footer">
  <!-- clase de bootstrap tipo footer -->
  <div class="footer-top">
    <!-- Este es el contenedor de la información
    del footer -->
      <div class="container">
        <!-- Creamos una clase tipo fila -->
        <div class="row">
          <!-- en este clase  decimos el tamaño de nuestra columna -->
          <div class="col-lg-4 col-md-6 footer-info">
            <h3>Tourist day</h3>
            <p>No olvides que puedes contactarnos, a través de los medios que puedes visualizar en la plataforma
            y ten en cuenta, que puedes contar con nosotros para que tengas una cálida experiencia. </p>
          </div>

        <!-- Definimos el tamaño de la siguiente
        columna que sera de información
        de enlaces   -->

       <div class=" col-lg-2 col-md-6 footer-links">
          <h4>ingresa a nuestros enlaces</h4>
          <!-- organizamos nuestra lista con la etiqueta ul  -->
       <ul>
         <!-- estos son los items de nuestra
         lista los cuáles se encuentran
         en etiquetas li seguidos de
         etiquetas a -->

        <li><a href="#">ser guía</a></li>
        <li><a href="#">ser turista</a></li>
        <li><a href="#">nuestros sitios</a></li>
        <li><a href="#">que hacemos</a></li>
        <li><a href="#">equipo de trabajo</a></li>
      </ul>
    </div>

       <!-- Se crea otra columna con informacion adicional  -->
           <div class="col-lg-3 col-md-6 footer-contact">
              <!-- Contenido en etiquetas de texto
              como h4 o p -->
           <h4>información adicional<h4>
            <p>
              Crr 46 <br>
              Nmro 81-35 <br>
              Campo valdés manrique <br>
              MEDELLÍN Colombia <br>
              <strong>celular:</strong>+91 304-567-5629 <br>
              <strong>email:</strong>tourist@gmail.com.co <br>
            </p>
      </div>
      <!-- se crea la ultima columna con el
      sistema de bootstap  -->
    <div class="col-lg-3 col-md-6 footer-newletter">
      <!-- contenido de texto -->
       <h4>Eres libre de hacer lo que quiera y más cuando estás pagando.</h4>
       <p>
       Un viaje viaje no se mide en kilometros,se mide en amigos.
       </p>
       <!-- se crea un formulario para
       recibir correos -->
       <form accept="" method="post">
         <!-- este input recibe la información
         de typo email -->
      <input type="email" name="email" value=""> <input type="submit"  value="Subscribe">
      </form>
    </div>
   </div>
  </div>
</div>
<!-- se crea un segundo contenedor final -->
 <div class="container">
   <!-- Logo de pie de página -->
   <img src="img/mapa.svg" alt="" style="" id="logo_footer">
   <!-- Contenedor del pie de pagina final -->
      <div class="titulo_footer">
        <!-- Titulo final -->
        <h3>TOURIST DAY</h3>
     </div>
     <!-- información de derechos de autor -->
      <div class="copyright">
        &copy; copyright <strong></strong>

      </div>
      <!-- Este div contiene los creditos de
      los desarroladores del sitio web -->
      <div class="credits">
        DERECHOS RESERVADOS <a href="#">TOURIST DAY</a>
      <br>
     </div>

    </div>
  </footer>


</div>






<!-- este link nos permite ingresar a las bibliotecas
de jquery de las cuales hace uso bootstrap -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<!-- este link es de bootstrap.com para el uso del
framework -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>


</body>
</html>
