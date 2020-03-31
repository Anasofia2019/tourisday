<?php
session_start();
if (isset($_SESSION['guia'])) {
  echo "<script>window.location='misitioguia.php';</script>";
  echo "<script>alert('bienvenido sesión exitosa');</script>";
}elseif(isset($_SESSION['turista'])){
  echo "<script>window.location='misitioturista.php';</script>";
}else{
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

  <link rel="stylesheet" href="./css/informacion.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

  <title>Inicio de sesión</title>

</style>
</head>
<body class="body3">
<a href="index.php" ><img src="img/mapa.svg" alt="" id="logo_inicio"></a>
<div class="contenedor_titulo_inicio">
  <h3>TOURISTDAY</h3>
</div>

   <center>
    <div class="login__container">

       <div class="login__top">
         <div class="contenedorLogoInicio">
            <img src="img/logo_users.svg" alt="" id="logo_users">

         </div>

         <a class="form__recover" href="#" >¿Olvidaste la contraseña?</a>
          <a class="form__recover" href="#" id="texto_cuenta">¿No tienes cuenta?</a>


        <div class="tilin">  <h2 > <span class="t2">INICIAR SESIÓN </span></h2><div>


       </div>



          <form class="form1" action="codigo_iniciar.php" method="post">

            <input type="text" name="correo_ini" placeholder="&#128100; correo" required autofocus><br>
            <input type="password" name="pw_ini" placeholder="&#x1F512; Contraseña" required><br>

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
<a href="index.php" id="volver"><img src="img/regresar.svg" alt="" id="imagen"></a>
<script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

</body>

</html>

<?php
}

?>
