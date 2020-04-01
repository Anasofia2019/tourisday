<?php
include 'conexion.php';
session_start();
if (isset($_POST['iniciar_s'])) {

  $correo_usu=$_POST['correo_ini'];
  $pass_usu=$_POST['pw_ini'];
  $rol_usu=$_POST['rol_usu'];


  if ($rol_usu=="Guía") {

    $consulta_g=mysqli_query($conexion,"SELECT * FROM tbl_guias WHERE correo_guia='$correo_usu' AND contra_guia='$pass_usu'");
      if (mysqli_num_rows($consulta_g)>0) {

        $usuario_g= mysqli_fetch_array($consulta_g);
        $_SESSION['guia']= $usuario_g['cedula'];

        echo "<script>alert('Iniciando sesión');</script>";
        echo "<script>window.location='misitioguia.php';</script>";

        } else {
          echo "<script>alert('Usuario o contraseña incorrecto');</script>";
          echo "<script>window.location='inicio.php';</script>";
      }
  } elseif ($rol_usu=="Turista") {

        $consulta_t=mysqli_query($conexion,"SELECT * FROM tbl_turistas WHERE correo_turista='$correo_usu' AND contra_turista='$pass_usu'");

          if (mysqli_num_rows($consulta_t)>0) {

            $usuario_t=mysqli_fetch_array($consulta_t);
            $_SESSION['turista']= $usuario_t['documento_turista'];

            echo "<script>alert('Iniciando sesión');</script>";
            echo "<script>window.location='misitioturista.php';</script>";
          }else {
            echo "<script>alert('Usuario o contraseña incorrecto');</script>";
            echo "<script>window.location='inicio.php';</script>";
          }
  }
}else {
  echo "<script>alert('¿para que quiere ver el codigo? :l');</script>";
  echo "<script>window.location='index.php';</script>";
}
echo "<script>alert('seleccione un rol');</script>";
echo "<script>window.location='inicio.php';</script>";
?>
