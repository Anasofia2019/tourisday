<?php
  //Se incluye la conexión
include 'conexion.php';

  //iniciamos la sesión en la pagina
session_start();

  /*usamos la variable superglobal "$_SESSION"
  para saber si esta iniciada en el rol turista*/
if (isset($_SESSION['turista'])) {
  //Si esta iniciada se procede a mostrar toda la pagina del guia


  //La Variable super global tomó el valor de la cedula del turista, "$cedula" toma el valor de la variable super global para realizar consultas mas adelante
  $cedula=$_SESSION['turista'];

  // Esta consulta es para traer todos los datos de un guia
  $consulta=mysqli_query($conexion,"SELECT * FROM tbl_turistas WHERE documento_turista='$cedula'");

  //$datos toma toda fila de datos del guia (Cedula, nombres, apellidos, residencia, entre otros)
$datos=mysqli_fetch_array($consulta);
?>
<html lang="en" dir="ltr">
<head>
  <!-- código bootstrap minimizado css -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Utilizamos nuestra fuente personalizada -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <!-- Link que nos permite  hacer uso de las librerias de bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>sitio turista</title>
    <meta charset="utf-8">
    <!-- Etiqueta nos nos da una vista
    del software en el dispositivo que se abra -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- escrypt que nos permite hacer uso
    de las bibliotecas de jquery -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="http://localhost/touristday/misitioguia.php">
  <!-- link que direcciona al diseño css -->
  <link rel="stylesheet" href="css/misitioturista.css">
  <!-- link que utiliza bootstrap para usar codigo jquery    -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <!-- este codigo nos direcciona al archivo .js
que nos da la interacción de efectos de la página  -->
  <script src="javascrypt/main.js"></script>
  <!-- Utilizamos nuestra fuente personalizada -->
  <link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
  <!-- código bootstrap minimizado  -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

</head>

<body style="background:#ECF0F1;">
  <!-- Este contenedor tendra los botones de
  nuestros tabs en el modulo turista  -->
  <div class="wrap">
    <!-- Los tabs están organizados en listas -->
		  <ul class="tabs">
        <!-- Cada una de estas etiquetas  li es
        un boton que genera el evento de carga y recarga de los tabs
      que son segmentos de codigo  -->
			  <li><a href="#tab1"><span class="glyphicon  glyphicon-user"></span><span class="tab-text">Inicio</span></a></li>
			  <li><a href="#tab2"><span class="glyphicon  glyphicon-search"></span><span class="tab-text">Paquetes</span></a></li>
			  <li><a href="#tab3"><span class=" glyphicon glyphicon-check"></span><span class="tab-text">Favoritos</span></a></li>
			  <li><a href="#tab4"><span class=" glyphicon glyphicon-star"></span><span class="tab-text">Mi información</span></a></li>
        <!-- Creamos un items a parte de de los tabs
        que pertenece a la clase dropdown -->
     <div class="dropdown">
        <!-- Este  botón contiene la foto del pérfil de
        nuestro usuario con la cual se logueó -->
        <?php $imagen = $datos['foto_turista']; ?>
        <button class="dropbtn" style="margin-top:13px; height:50px; width:50px; background: url(<?php echo $imagen ?>); background-size: cover; border-radius:50%;"></button>
 <!-- Contenido desplegable del dropdown -->
 <div class="dropdown-content">
   <!-- Lista de links de opciones -->
       <a href="#">Configuracion</a>
       <a href="#">Ayuda</a>
       <a href="cerrar.php">Salir</a>
      </div>
    </div>
  </ul>
  <!-- contenedor de las secciones  -->
<div class="secciones">
  <!-- Primer articulo de contenido
es decir un modulo del sitio-->
			<article id="tab1">
       <!-- Banner de bienvenida  -->
        <img src="img/targeta.png" alt="" style="width:900px;margin-top:50px;margin-left:50px;">
				<!-- <h1>Bienvenido apreciado turista</h1>
        <img src="img/banner_turista.jpg" alt="" id="poster">
      <p> Te damos la bienvenida y esperamos que tengas una excelente experiencia como usuario de tourist day, es momento de empezar la aventura de una forma dinamica e interactiva con tu portátil o smarphone </p>
       <img src="img/mapa.svg" alt="" id="mapa_guia">
      <h3 id="titulo_mapa">TOURIST DAY</h3> -->


      <div class="w3-padding-large" id="main">
  <!-- Header/Home -->


  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <!-- Segundo banner de bienvenida -->
    <img src="img/banner_turista.jpg" alt="" class="banner_turista" width="900px;" height="500px;" style="mar">
    <!-- Información del banner -->
    <hr style="width:200px;margin-top:-200px;" class="w3-opacity">
    <br>
    <br>

    <!-- Primera barra de porcentaje  -->
      <p class="w3-wide">turismo urbano</p>
       <div class="w3-yellow">
      <div class="w3-dark-grey" style="height:28px;width:95%"></div>
    </div>
    <!-- segunda barra de porcentaje  -->
    <p class="w3-wide">turismo rural</p>
    <div class="w3-yellow">
      <div class="w3-dark-grey" style="height:28px;width:85%"></div>
    </div>

    <!-- tercera barra de porcentaje  -->
  <p class="w3-wide">senderismo</p>
  <!-- clase w3school para dar color -->
  <!-- se crea la clase que va acontener nuestra
  barra de informes  -->
    <div class="w3-yellow">
      <div class="w3-dark-grey" style="height:28px;width:80%"></div>
    </div><br>

<!-- En esta parte centramos el Contenido
y los segmentamos en bloque por items -->
    <div class="w3-row w3-center w3-padding-16 w3-section w3-light-grey">
      <!-- Primer segmento -->
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">0+</span><br>
        me gusta
      </div>
      <!-- segundo segmento -->

      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">0+</span><br>
        comentarios
      </div>

      <!-- Tercer  segmento -->

      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">0+</span><br>
        favoritos
      </div>
      <!-- Cuarto  segmento -->

      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">0+</span><br>
        donaciones
      </div>
    </div>
   <!-- Boton de descarga -->
    <button class="w3-button w3-light-grey w3-padding-large w3-section">
      <i class="fa fa-download"></i> Download Resume
    </button>

    <!--manejo de primer targeta con grid -->

    <div class="w3-row-padding" style="margin:0 -16px;position:absolute;width:500px;">
      <div class="w3-half w3-margin-bottom">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off" style="background:red;">
          <li class="w3-dark-grey w3-xlarge w3-padding-32" style="background:red;">Basico</li>
          <li class="w3-padding-16">mejores clasificados</li>
          <li class="w3-padding-16">album de fotos</li>
          <li class="w3-padding-16">cupones</li>
          <li class="w3-padding-16">mejores guias nivel b</li>
          <li class="w3-padding-16">
            <h2>$ 50</h2>
            <span class="w3-opacity">per month</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-white w3-padding-large w3-hover-black">Sign Up</button>
          </li>
        </ul>
      </div>
      <!--manejo de segunda  targeta con grid -->

      <div class="w3-half">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Pro</li>
          <li class="w3-padding-16">mejores clasificados gold</li>
          <li class="w3-padding-16">album de fotos d</li>
          <li class="w3-padding-16">descuentos hasta del 15%</li>
          <li class="w3-padding-16">mejores guias gold</li>
          <li class="w3-padding-16">
            <h2>$ 120</h2>
            <span class="w3-opacity">per month</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-white w3-padding-large w3-hover-black">Sign Up</button>
          </li>
        </ul>
      </div>


    <!-- fin del contenedor de las tarjetas-->
    </div>
      </article>
      <!-- Segundo articulo de contenido -->
			<article id="tab2">
        <img src="img/search.png" height="150px" width="200px" style="margin-top:20px;">
				<h1 style="color:white;">Buscar paquetes</h1>
       <br><br><br><br>
    <!-- Aca se utilizo iframe para mostrar los paquetes -->
   <iframe src="mostrarpaquete.php" height="600" width="1189" id="mostar_paquetes" style="background:blue;" border></iframe>


        </center>
      </article>
      <!-- Tercer articulo con contenido -->
			<article id="tab3">
        <!-- Texto principal -->
			<h1 style="color:white;"> Mis sitios favoritos</h1><br><br><br>

<?php

//Esta consulta se realiza para traer todos los paquetes adquiridos por el turista
$consulta_f=mysqli_query($conexion,"SELECT id_paquete,cedula,titulo,descripcion,url_image,id_paquetes,doc_turista FROM tbl_paquetes INNER JOIN tbl_historial_adquirido WHERE doc_turista='$cedula' AND id_paquete=id_paquetes") or die ('error en la consulta');

//Esta variable hace un conteo de todos los paquetes
$num_rows=mysqli_num_rows($consulta_f);

//Si hay paquetes entonces se procede a mostrarlos
if ($num_rows>0) {

//Variable para finalizar el while
$i=1;
?>

<?php
//Mientras la variable "$fetch" tome nuevos datos entonces se sigue ejecutando el mientras y se siguen mostrando los paquetes adquiridos
while ($fetch=mysqli_fetch_array($consulta_f)) {

//Esta condicion las organiza de a 3 por fila
  if ($i % 3==0 or $i==1) {
    ?>
<div class="w3-row-padding w3-theme">
    <?php
  }
  ?>
<!-- Se le da forma de carta a los
paquetes creados -->
<div class="w3-third w3-section">
<div class="w3-card-4">
<img src="img/banner/<?php echo $fetch['url_image'] ?>" style="width:100%">
<div class="w3-container w3-white">
<h4><?php echo $fetch['titulo']; ?></h4>
<p><?php echo $fetch['descripcion']; ?></p>
<center>
  <!-- botom que lleva a la modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php echo $fetch['id_paquete']; ?>">
  Añadir comentario
</button>

<!-- Modal -->
<div class="modal fade" id="<?php echo $fetch['id_paquete']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $fetch['titulo']; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Este form envía los datos a la pagina para la puntuacion y comentario de un paquete ya adquirido -->
      <form method="post" action="codigo_paquete.php">
          <div class="modal-body">
            <input type="hidden" name="ced_t" value="<?php echo $cedula; ?>">
            <input type="hidden" name="id_paqu" value="<?php echo $fetch['id_paquete']; ?>">

           Comentario <input type="text" name="<?php echo $fetch['id_paquete']; ?>"><br><br>
            Puntuacion<select name="puntuacion_p">
              <option selected disabled>Seleccionar</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button class="btn btn-primary" value="<?php echo $fetch['id_paquete']; ?>" name="btn_comentario">Enviar</button>
          </div>
      </form>
    </div>
  </div>
</div>
</center>
</div>
</div>
</div>





  <?php
  if ($i % 3==0) {
    ?>
    </div>
    <?php
  }
  $i=$i+$i;
}?>

<?php
} else{
  echo "<b><center>No tienes paquetes favoritos</b></center>";
}
?>




			</article>
      <!-- Ultimo articulo de contenido -->
			<article id="tab4">
        <!-- Contenedor  del formulario -->
        <div class="contenedor_registro_turista" id="cambiar_info2">
          <!-- Caja de registro interno -->
        <div class="caja_registro" style="">
          <!-- Se crea una clase form
          para dar forma al formulario -->
        <div class="form__top">
        <!-- Titulo del formulario interno  -->


     <div class="tilin" >  <h2><span class="t1">Cambiar mi información</span></h2><div>

         </div>
         <?php
            include 'conexion.php';
            $doc=$_SESSION['turista'];

            $query=mysqli_query($conexion,"SELECT * FROM tbl_turistas WHERE documento_turista='$doc'");
            $rows=mysqli_fetch_array($query);

          ?>
          <!-- Caja del formulario -->

         <form class="form__reg" action="codigo_actualizar.php" method="post">

        <input type="text" name="ced_turista" value="<?php echo $doc; ?>" hidden><br>
        <!-- Campos de datos -->


        primer_nombre:   <input class="input" value="<?php echo $rows['nombre_turista_1']; ?>" name="nom_turista_1" type="text" placeholder="&#128100; Primer Nombre" required autofocus><br>

        segundo_nombre:<input class="input" value="<?php echo $rows['nombre_turista_2']; ?>" name="nom_turista_2" type="text" placeholder="&#128100;  Segundo Nombre" required autofocus><br>

        primer_apellido:   <input class="input" value="<?php echo $rows['apellido_turista_1']; ?>" name="ape_turista_1" type="text" placeholder="&#128100;  Primer Apellido" required autofocus><br>
        segundo_apellido:<input class="input" value="<?php echo $rows['apellido_turista_2']; ?>" name="ape_turista_2" type="text" placeholder="&#128100;  Segundo Apellido" required autofocus><br>

            fecha_nacimiento:<input class="input" value="<?php echo $rows['telefono_turista']; ?>" name="tel_turista" type="number" placeholder="&#128222;  Telefono" required>
                 <label class="tm"> <h3 style="color:black">País de residencia</h3></label>
                         <select class="input" name="pais_turista">
                           <option><?php echo $rows['nacionalidad_turista']; ?></option>
                           <option>Afganistán</option>
                           <option>Albania</option>
                           <option>Alemania</option>
                           <option>andorra</option>
                           <option>Angola</option>
                           <option>Antigua y Barbuda</option>
                           <option>Arabia Saudita</option>
                           <option>Argelia</option>
                           <option>Argentina</option>
                           <option>Armenia</option>
                           <option>Australia</option>
                           <option>Austria</option>
                           <option>Azerbaiyán</option>
                           <option>Bahamas</option>
                           <option>Bangladés</option>
                           <option>Barbados</option>
                           <option>Baréin</option>
                           <option>Bélgica</option>
                           <option>Belice</option>
                           <option>Benín</option>
                           <option>Bielorrusia</option>
                           <option>Birmania</option>
                           <option>Bolivia</option>
                           <option>bosnia y Herzegovina</option>
                           <option>Botsuana</option>
                           <option>Brasil</option>
                           <option>Brunéi</option>
                           <option>Bulgaria</option>
                           <option>Burkina Faso</option>
                           <option>Burundi:</option>
                           <option>Bután</option>
                           <option>Cabo Verde</option>
                           <option>Venecia</option>
                         </select>

                 nueva_clave:<input class="input" name="pass_turista_1" type="password" placeholder="&#x1F512;  Contraseña" required><br><br>
                 comfirmar_clave:<input class="input" name="pass_turista_2" type="password" placeholder="&#x1F512;  Confirmar contraseña" required>

                 <!-- Contenedor de botones del formulario -->

                 <div class="btn__form">
                   <!-- Boton ingresar -->

                <input class="btn__submit" name="actualizar_turista" type="submit" value="Actualizar">
                  <!-- Botom Para limpiar formulario -->
                   <input class="btn__reset" type="reset" value="Limpiar">
                 </div>
         </form>
       </div>

       	</article>
     </div>
    </div>




<!-- link de codigo  jquery minimizado  -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<!-- link de  codigo bootstrap minimizado -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>

<?php
}else {
  echo "<script>alert('No tienes permiso para entrar en este sitio');</script>";
  echo "<script>window.location='index.php';</script>";
}
 ?>
