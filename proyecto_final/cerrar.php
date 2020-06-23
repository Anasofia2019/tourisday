<?php
session_start();
session_destroy();
//destruyo la seccion y redirecciono a "index.php"
echo "<script>alert('Cerrando sesión');</script>";
echo "<script>window.location='index.php';</script>";


?>
