<?php
session_start();
if (isset($_SESSION['guia'])) {
  echo "<script>window.location='misitioguia.php';</script>";
  echo "<script>alert('iniciando sesión');</script>";
}elseif(isset($_SESSION['turista'])){
  echo "<script>window.location='misitioturista.php';</script>";
}else{
  ?>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/informacion.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilos.css">
  <title>Formulario</title>
</head>

<body class="body3" style="background:#a0c8f7;">
  <a href="index.php" ><img src="img/mapa.svg" alt="" id="logoRegistroGuia"></a>
  <div class="contenedor_titulo_r_turista">
    <h3>TOURIST DAY</h3>
  </div>

  <a href="##" ><img src="img/imagen_guia.svg" alt="" id="imagen_guia"></a>
   <div class="contenedorRegistroGuia"style="">
   <div class="caja_registro" style="">
   <div class="form__top">

<div class="tilin" >  <h2 > <span class="t1">Formulario  </span><span class="t2">Registro guía</span></h2><div>
    </div>
    <form class="form__reg" action="codigo_registrar.php" method="post" enctype='multipart/form-data'>

      <input class="input" name="nom_guia_1" type="text" placeholder="&#128100; Primer Nombre" required autofocus>
      <input class="input" name="nom_guia_2" type="text" placeholder="&#128100;  Segundo Nombre"  autofocus>
      <input class="input" name="ape_guia_1" type="text" placeholder="&#128100;  Primer Apellido" required autofocus>
        <input class="input" name="ape_guia_2" type="text" placeholder="&#128100;  Segundo Apellido" required autofocus>

            <input class="input" name="mail_guia" type="email" placeholder="&#9993;  Email" required>
            <input class="input" name="tel_guia" type="number" placeholder="&#128222;  Telefono" required>
            <input class="input" name="doc_guia" type="number" placeholder="    &#128443;  Documento" required>
            <input class="input" name="f_n_guia" type="date" placeholder="   Fecha de nacimiento" required>
            <label class="tm"> <h3 style="color:white">Municipio de residencia</h3></label>
                    <select class="input" name="ciudad_guia">
                      <option>Amagá</option>
                      <option>Andes</option>
                      <option>Angelópolis</option>
                      <option>Barbosa</option>
                      <option>Bello</option>
                      <option>Betania</option>
                      <option>Betulia</option>
                      <option>Caldas</option>
                      <option>Caramanta</option>
                      <option>Ciudad Bolívar</option>
                      <option>Concordia</option>
                      <option>Copacabana</option>
                      <option>Envigado</option>
                      <option>Fredonia</option>
                      <option>Girardota</option>
                      <option>Hispania</option>
                      <option>Itagüí</option>
                      <option>Jardín</option>
                      <option>Jericó</option>
                      <option>La estrella</option>
                      <option>La Pintada</option>
                      <option>Medellin</option>
                      <option>Montebello</option>
                      <option>Pueblorrico</option>
                      <option>Sabaneta</option>
                      <option>Salgar</option>
                      <option>Santa Bárbara</option>
                      <option>Támesis</option>
                      <option>Tarso</option>
                      <option>Titiribí</option>
                      <option>Urrao</option>
                      <option>Valparaíso</option>
                      <option>Venecia</option>
                    </select>
            <input class="input" name="pass_guia_1" type="password" placeholder="&#x1F512;  Contraseña" required>
            <input class="input" name="pass_guia_2" type="password" placeholder="&#x1F512;  Confirmar contraseña" required>
            <br>

            <input type='file' required name='imagen' accept="image/*" style="position:absolute;top:580px;margin-left:30px;">
            <br><br>
            <div class="btn__form" style="margin-top:50px;">
           <input class="btn__submit" name="registrar_guia" type="submit" value="Registrar">
              <input class="btn__reset" type="reset" value="Limpiar">
            </div>
          <a class="form__recover" href="registroturista.php" id="textoCuentaGuia">Registro turista</a>


    </form>

  </div>

  <a href="index.php" id="regresar"><img src="img/regresar.svg" alt="" ></a>



<script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

</body>
</html>
<?php
}
?>
