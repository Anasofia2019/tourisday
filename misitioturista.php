<?php
include 'conexion.php';
session_start();

if (isset($_SESSION['turista'])) {
  $cedula=$_SESSION['turista'];
  $consulta=mysqli_query($conexion,"SELECT * FROM tbl_turistas WHERE documento_turista='$cedula'");
$datos=mysqli_fetch_array($consulta);
?>
<html lang="en" dir="ltr">
<head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>sitio turista</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- Latest compiled and minified CSS -->

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="http://localhost/touristday/misitioguia.php">
  <link rel="stylesheet" href="css/misitioturista.css">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="javascrypt/main.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

</head>

<body style=" background:#a0c8f7 ;">




  <div class="wrap">
		<ul class="tabs">
			<li><a href="#tab1"><span class="glyphicon  glyphicon-user"></span><span class="tab-text">Inicio</span></a></li>
			<li><a href="#tab2"><span class="glyphicon  glyphicon-search"></span><span class="tab-text">Paquetes</span></a></li>
			<li><a href="#tab3"><span class=" glyphicon glyphicon-check"></span><span class="tab-text">Favoritos</span></a></li>
			<li><a href="#tab4"><span class=" glyphicon glyphicon-star"></span><span class="tab-text">Mi información</span></a></li>

      <div class="dropdown">
        <?php $imagen = $datos['foto_turista']; ?>
 <button class="dropbtn" style="margin-top:13px; height:50px; width:50px; background: url(<?php echo $imagen ?>); background-size: cover; border-radius:50%;"></button>
 <div class="dropdown-content">
   <a href="#">Configuracion</a>
   <a href="#">Ayuda</a>
   <a href="cerrar.php">Salir</a>
 </div>
</div>
  </ul>
	<div class="secciones">
			<article id="tab1">
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
    <img src="img/banner_turista.jpg" alt="" class="banner_turista" width="900px;" height="500px;" style="mar">
    <hr style="width:200px;margin-top:-200px;" class="w3-opacity">
    <p style="  background: linear-gradient(to bottom, #ffffff 27%, #6699ff 101%);padding:10px;margin-left:-20px;font-family:verdana;font-weight:400px;">
      En touristday eres nuestra prioridad,podrás contar con nosotros y con nuestro equipo de trabajo, que te ayudará a resolver las
      inquietudes que puedas tener como turista en la plataforma ya sea por las redes sociales que ofrece el sitio o por via telefonica,
      es importante que sepas,que tu experiencia nos preocupa, por lo tanto, en caso de que ocurra algún percanse con un guía puedes informarlo
      de inmediato con nosotros para tomar las medidas petinentes.
    </p>

    <p class="w3-wide">turismo urbano</p>
    <div class="w3-blue">
      <div class="w3-dark-grey" style="height:28px;width:95%"></div>
    </div>
    <p class="w3-wide">turismo rural</p>
    <div class="w3-blue">
      <div class="w3-dark-grey" style="height:28px;width:85%"></div>
    </div>
    <p class="w3-wide">senderismo</p>
    <div class="w3-blue">
      <div class="w3-dark-grey" style="height:28px;width:80%"></div>
    </div><br>

    <div class="w3-row w3-center w3-padding-16 w3-section w3-light-grey">
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">0+</span><br>
        me gusta
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">0+</span><br>
        comentarios
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">0+</span><br>
        favoritos
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">0+</span><br>
        donaciones
      </div>
    </div>

    <button class="w3-button w3-light-grey w3-padding-large w3-section">
      <i class="fa fa-download"></i> Download Resume
    </button>

    <!-- Grid for pricing tables -->

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


    <!-- End Grid/Pricing tables -->
    </div>
      </article>
			<article id="tab2">
				<h1 >Buscar paquetes</h1>
       <br><br><br><br>



   <iframe src="mostrarpaquete.php" height="600" width="1189" id="mostar_paquetes" style="background:blue;" border></iframe>


        </center>
      </article>
			<article id="tab3">
				<h1> Mis sitios favoritos</h1><br><br><br>

<?php

$consulta_f=mysqli_query($conexion,"SELECT id_paquete,cedula,titulo,descripcion,url_image,id_paquetes,doc_turista FROM tbl_paquetes INNER JOIN tbl_historial_adquirido WHERE doc_turista='$cedula' AND id_paquete=id_paquetes") or die ('error en la consulta');
$num_rows=mysqli_num_rows($consulta_f);
if ($num_rows>0) {


$i=1;
?>

<?php
while ($fetch=mysqli_fetch_array($consulta_f)) {

  if ($i % 3==0 or $i==1) {
    ?>
<div class="w3-row-padding w3-theme">
    <?php
  }
  ?>

<div class="w3-third w3-section">
<div class="w3-card-4">
<img src="img/banner/<?php echo $fetch['url_image'] ?>" style="width:100%">
<div class="w3-container w3-white">
<h4><?php echo $fetch['titulo']; ?></h4>
<p><?php echo $fetch['descripcion']; ?></p>
<center>
  <!-- Button trigger modal -->
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
			<article id="tab4">

        <div class="contenedor_registro_turista" id="cambiar_info2">
        <div class="caja_registro" style="">
        <div class="form__top">

     <div class="tilin" >  <h2><span class="t1">Cambiar mi información</span></h2><div>
         </div>
         <?php
            include 'conexion.php';
            $doc=$_SESSION['turista'];

            $query=mysqli_query($conexion,"SELECT * FROM tbl_turistas WHERE documento_turista='$doc'");
            $rows=mysqli_fetch_array($query);

          ?>
         <form class="form__reg" action="codigo_actualizar.php" method="post">

        <input type="text" name="ced_turista" value="<?php echo $doc; ?>" hidden><br>


        primer_nombre:   <input class="input" value="<?php echo $rows['nombre_turista_1']; ?>" name="nom_turista_1" type="text" placeholder="&#128100; Primer Nombre" required autofocus><br>

        segundo_nombre:<input class="input" value="<?php echo $rows['nombre_turista_2']; ?>" name="nom_turista_2" type="text" placeholder="&#128100;  Segundo Nombre" required autofocus><br>

        primer_apellido:   <input class="input" value="<?php echo $rows['apellido_turista_1']; ?>" name="ape_turista_1" type="text" placeholder="&#128100;  Primer Apellido" required autofocus><br>
        segundo_apellido:<input class="input" value="<?php echo $rows['apellido_turista_2']; ?>" name="ape_turista_2" type="text" placeholder="&#128100;  Segundo Apellido" required autofocus><br>

            fecha_nacimiento:<input class="input" value="<?php echo $rows['telefono_turista']; ?>" name="tel_turista" type="number" placeholder="&#128222;  Telefono" required>
                 <label class="tm"> <h3 style="color:white">País de residencia</h3></label>
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


                 <div class="btn__form">
                <input class="btn__submit" name="actualizar_turista" type="submit" value="Actualizar">
                   <input class="btn__reset" type="reset" value="Limpiar">
                 </div>
         </form>
       </div>

       	</article>
     </div>
    </div>





<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>

<?php
}else {
  echo "<script>alert('No tienes permiso para entrar en este sitio');</script>";
  echo "<script>window.location='index.php';</script>";
}
 ?>
