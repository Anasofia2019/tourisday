<?php
//Se inicia una seccion para saber si alguno de los roles ha ingresado
session_start();

//Usamos la variable superglobar "$_SESSION" para ver si esta variable esta iniciada en el guia
if (isset($_SESSION['guia'])) {
   // Si la variable se inició en el guia, entonces se le redirecciona a su pagina
  echo "<script>alert('Iniciando sección');</script>";
  echo "<script>window.location='misitioguia.php';</script>";

//Usamos la variable superglobar "$_SESSION" para ver si esta variable esta iniciada en el turista
}elseif(isset($_SESSION['turista'])){
  // Si la variable se inició en el turista, entonces se le redirecciona a su pagina
  echo "<script>alert('Iniciando sección');</script>";
  echo "<script>window.location='misitioturista.php';</script>";
}else{
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Meta viweport vista en dispositivos -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- link que direcciona al diseño css -->
  <link rel="stylesheet" href="./css/informacion.css">
  <!-- Utilizamos nuestra fuente personalizada -->
  <link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
  <!-- código bootstrap minimizado  -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

  <title>Inicio de sesión</title>

</style>
</head>
<body class="body3" style="background:#a0c8f7;">
  <!-- Logo principal del sign in -->
<a href="index.php" ><img src="img/mapa.svg" alt="" id="logo_inicio"></a>
<!-- Contenedor titulo inicial -->
<div class="contenedor_titulo_inicio">
  <h3>TOURISTDAY</h3>
</div>

   <center>
     <!-- Contenedor de caja de  registro -->
    <div class="login__container">
       <!-- Contenedor formulario inicio -->
       <div class="login__top">

         <div class="contenedorLogoInicio">
           <!-- Icono del logo principal -->
            <img src="img/logo_users.svg" alt="" id="logo_users">

         </div>
          <!-- Dos links de opcion  -->
          <a class="form__recover" href="#" >¿Olvidaste la contraseña?</a>
          <a class="form__recover" href="#" id="texto_cuenta">¿No tienes cuenta?</a>

          <!-- Titulo del formulario -->
        <div class="tilin">  <h2 > <span class="t2">INICIAR SESIÓN </span></h2><div>


       </div>


            <!-- Formulario interno que tiene el contenido -->
          <form class="form1" action="codigo_iniciar.php" method="post">
              <!-- Campos de texto -->
            <input type="text" name="correo_ini" placeholder="&#128100; correo" required autofocus><br>
            <input type="password" name="pw_ini" placeholder="&#x1F512; Contraseña" required><br>
              <!-- Campo que despliega lista -->
          <select id="usuarios" class="input" name="rol_usu" placeholder="e">

              <option>Guía</option>
              <option>Turista</option>
            </select>

                <input class="btn__submit" name="iniciar_s" type="submit" value="Ingresar">
              </form>
        </div>



      </div>
    </div>
  </center>
</span>
<!-- Boton de regresar al index -->
<a href="index.php" id="volver"><img src="img/regresar.svg" alt="" id="imagen"></a>
<!-- link de codigo  jquery minimizado  -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<!-- link de  codigo bootstrap minimizado -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

</body>

</html>

<?php
}

?>
