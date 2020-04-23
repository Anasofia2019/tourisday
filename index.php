<?php
session_start();
if (isset($_SESSION['guia'])) {
  echo "<script>window.location='misitioguia.php';</script>";
  echo "<script>alert('iniciando seccion');</script>";
}elseif(isset($_SESSION['turista'])){
  echo "<script>window.location='misitioturista.php';</script>";
  echo "<script>alert('iniciando seccion');</script>";
}else{
  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
     <title>Tourist day</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- nuestro codigo css bootstrap minificado -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <!-- link de fontawesome para los iconos -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <!-- aqui tenemos el icono que se refleja en el buscador -->
    <link rel="shortcut- icon" type="image/x-icon" href="./img/mapa.svg">
  </head>

 <body style="background:#a0c8f7;">
<!-- Aqui encontramos nuestra navbar
 que va contener el logo y el dropdown  -->

<header>
<!-- Ya dentro del header llamamos
 la clase header de bootstrap -->
  <nav class="navbar navbar-default">
<div class="container-fluid">
     <div class="navbar-header">
      <!-- Aqui podemos ver que al disminuir el tamaño del dispositivo en que se observa la plataforma  cambia la vista del menu -->
       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
          <span class="sr-only">menu</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
       </button>
    <!-- En esta parte se encuentra nuestro logo -->
      <div class="contenedor_logo">
       <img src="img/mapa.svg" style="width: 200px; height:80px;">
       <div id="titulo_logo"><h1>TOURIST DAY</h1></div>
      </div>
</div>
 <!-- creamos nuestros botones dentro del dropdawn desplegable -->
 <div class="contenedor_botones">
<div class="dropdown">
<!-- Aqui se crea un evento de tipo onclick en un dropdown desplegable  -->
 <button onclick="myFunction()" class="dropbtn">Registrarme</button>
    <div id="myDropdown" class="dropdown-content">
    <a href="registroturista.php">Como turista</a>
    <a href="registroguia.php">Como guía</a>
    </div>
  </div>
  <!-- Se crea un segundo botón dentro de un href -->
  <a href="inicio.php"><button type="button" name="button">Iniciar sesión</button></a>

 </div>
  </nav>
</header>
<div>

  <?php
  if(@ $_GET['mod']=="")
    {
    require_once("informacion.php");
    }
  else
    if(@ $_GET['mod']=="aa")
    {
    require_once("informacion.php");
    }

    else
    if(@ $_GET['mod']=="bb")
    {
    require_once("misitioguia.php");
    }
    else
    if(@ $_GET['mod']=="aa}")
    {
    require_once("misitioguias.php");
    }
    ?>

<!-- Retomamos codigo javascrypt para los eventos del dropdawn -->
<script>
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }

// Cierre el menú desplegable si el usuario hace clic fuera de él
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
    </script>
  </body>
</html>




<?php
}

?>
