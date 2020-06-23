<?php
//Incluyo la conexion para utilizar la variable al momento de hacer las consultas
include 'conexion.php';
//inicio una seccion
session_start();
//"iniciar_S" es el nombre del boton de la pagina "inicio.php"
if (isset($_POST['iniciar_s'])) {
  
// Estos son los nombres de los campos
  $correo_usu=$_POST['correo_ini'];
  $pass_usu=$_POST['pw_ini'];
  $rol_usu=$_POST['rol_usu'];

// El inicio de cada rol
  if ($rol_usu=="Guía") {

//Esta consulta lo que hace es comparar los datos de los campos obtenidos con los de la base de datos para saber si hay un registro
    $consulta_g=mysqli_query($conexion,"SELECT * FROM tbl_guias WHERE correo_guia='$correo_usu' AND contra_guia='$pass_usu'");

    //Si encuentro datos entonces es porque hay un registro
      if (mysqli_num_rows($consulta_g)>0) {

        //A una variable le doy todos los campos de una fila de la base de datos 
        $usuario_g= mysqli_fetch_array($consulta_g);

        //A $_SESSION que es una variable super global, le doy como valor la cedula del guia cuando
        $_SESSION['guia']= $usuario_g['cedula'];

        //Inicio seccion y redirecciono a la pagina del guia
        echo "<script>alert('Iniciando sesión');</script>";
        echo "<script>window.location='misitioguia.php';</script>";

        } else {
          //Si no se encuentran datos es porque no hay un registro o hubo algun error al momento de dijitar correo o contraseña
          echo "<script>alert('Correo o contraseña incorrecto');</script>";
          echo "<script>window.location='inicio.php';</script>";
      }

      //Se hace la consulta con el rol turista
  } elseif ($rol_usu=="Turista") {

//Esta consulta lo que hace es comparar los datos de los campos obtenidos con los de la base de datos para saber si hay un registro
        $consulta_t=mysqli_query($conexion,"SELECT * FROM tbl_turistas WHERE correo_turista='$correo_usu' AND contra_turista='$pass_usu'");


        //Si encuentro datos entonces es porque hay un registro
          if (mysqli_num_rows($consulta_t)>0) {

            //A una variable le doy todos los campos de una fila de la base de datos
            $usuario_t=mysqli_fetch_array($consulta_t);

            //A $_SESSION que es una variable super global, le doy como valor la cedula del turista cuando
            $_SESSION['turista']= $usuario_t['documento_turista'];

            //Inicio seccion y redirecciono a la pagina del guia
            echo "<script>alert('Iniciando sesión');</script>";
            echo "<script>window.location='misitioturista.php';</script>";
          }else {
            //Si no se encuentran datos es porque no hay un registro o hubo algun error al momento de dijitar correo o contraseña
            echo "<script>alert('correo o contraseña incorrecto');</script>";
            echo "<script>window.location='inicio.php';</script>";
          }
  }
}else {
  // Cuando una persona no le ha dado al botón de iniciar seccion se le muestra este mensaje
  echo "<script>alert('¿para que quiere ver el codigo? :l');</script>";
  echo "<script>window.location='index.php';</script>";
}
echo "<script>alert('seleccione un rol');</script>";
echo "<script>window.location='inicio.php';</script>";
?>
