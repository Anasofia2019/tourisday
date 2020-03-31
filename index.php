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
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link rel="shortcut- icon" type="image/x-icon" href="./img/mapa.svg">
   </head>

  <body>

   <header>
    <nav class="navbar navbar-default">
     <div class="container-fluid">
     <div class="navbar-header">

    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
             <span class="sr-only">menu</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
  </button>
  <div class="contenedor_logo">
       <img src="img/mapa.svg" style="width: 200px; height:80px;">
    <div id="titulo_logo"><h1>TOURIST DAY</h1></div>
  </div>
</div>

<div class="contenedor_botones">
  <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Registrarme</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="registroturista.php">Como turista</a>
    <a href="registroguia.php">Como guía</a>

  </div>
</div>
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


<script>
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
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
