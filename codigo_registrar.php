<?php
//Incluyo la conexion
include 'conexion.php';

//Si se pulsa el boton de registrar en la pagina de "registroguia.php" se realiza lo siguiente
if (isset($_POST['registrar_guia'])) {
  $n_1_g=$_POST['nom_guia_1'];
  $n_2_g=$_POST['nom_guia_2'];
  $a_1_g=$_POST['ape_guia_1'];
  $a_2_g=$_POST['ape_guia_2'];
  $mail_g=$_POST['mail_guia'];
  $tel_g=$_POST['tel_guia'];
  $doc_g=$_POST['doc_guia'];
  $f_n_g=$_POST['f_n_guia'];
  $c_g=$_POST['ciudad_guia'];
  $p_g_1=$_POST['pass_guia_1'];
  $p_g_2=$_POST['pass_guia_2'];

  //Se hace una consulta para saber si ya hay un correo igual registrado anteriormente
  $consulta_correo=mysqli_query($conexion,"SELECT * FROM tbl_guias WHERE correo_guia='$mail_g'");

  //si no hay un correo igual registrado entonces se procede con el registro
  if (mysqli_num_rows($consulta_correo)==0) {

    //Se valida que las dos contraseñas ingresadas sean iguales
      if ($p_g_1==$p_g_2) {

        //Se coge la ruta de la imagen
        $datos = $_FILES['imagen']['tmp_name'];
        $nombre = $_FILES['imagen']['name'];
        
        $ruta = "img_perfil/".$nombre;

        //Se descarga la foto en la carpeta especificada en la ruta
        move_uploaded_file($datos, $ruta);

        //Se hace la insercion de todos los datos y se registra el nuevo guía
       $insertar=mysqli_query($conexion,"INSERT INTO tbl_guias(cedula,nombre_guia_1,nombre_guia_2,apellido_guia_1,apellido_guia_2,fecha_n_guia,telefono_guia,correo_guia,ciudad_guia,contra_guia,foto_guia)
       VALUES ($doc_g,'$n_1_g','$n_2_g','$a_1_g','$a_2_g','$f_n_g',$tel_g,'$mail_g','$c_g','$p_g_1','$ruta')") or die ("<script>  alert('Error al insertar'); window.location='registroguia.php';</script>");

       //Se redirecciona a la pagina de inicio de seccion 
       echo "<script>alert('Registro exitoso')</script>";
       echo "<script>window.location='inicio.php';</script>";
  } else {
    // Si las contraseñas no coinciden entonces no se  reliza el registro y de redirecciona a la pagina del registro
    echo "<script>alert('Las contraseñas no coinciden')</script>";
    echo "<script>window.location='registroguia.php';</script>";
  }
  } else {
    //Si ya hay un correo existente, no se puede realizar el registro y se redirreciona a la  pagina del registro
    echo "<script>alert('Ya exite el correo')</script>";
   echo "<script>window.location='registroguia.php';</script>";
  }

//Si se pulsa el boton de registrar en la pagina de "registroguia.php" se realiza lo siguiente
}elseif (isset($_POST['registrar_turista'])) {
  $n_1_t=$_POST['nom_turista_1'];
  $n_2_t=$_POST['nom_turista_2'];
  $a_1_t=$_POST['ape_turista_1'];
  $a_2_t=$_POST['ape_turista_2'];
  $mail_t=$_POST['mail_turista'];
  $tel_t=$_POST['tel_turista'];
  $doc_t=$_POST['doc_turista'];
  $f_n_t=$_POST['f_n_turista'];
  $pais_t=$_POST['pais_guia'];
  $p_t_1=$_POST['pass_turista_1'];
  $p_t_2=$_POST['pass_turista_2'];

  //Se hace una consulta para saber si ya hay un correo igual registrado anteriormente
  $consulta_correo=mysqli_query($conexion,"SELECT * FROM tbl_turistas WHERE correo_turista='$mail_t'");

  //si no hay un correo igual registrado entonces se procede con el registro
  if (mysqli_num_rows($consulta_correo)==0) {

  //Se valida que las dos contraseñas ingresadas sean iguales
  if ($p_t_1==$p_t_2) {

      //Se coge la ruta de la imagen
      $datos = $_FILES['imagen']['tmp_name'];
      $nombre = $_FILES['imagen']['name'];
      $ruta = "img_perfil/".$nombre;

      //Se descarga la foto en la carpeta especificada en la ruta
      move_uploaded_file($datos, $ruta);


    //Se hace la insercion de todos los datos y se registra el nuevo guía
    $insertar=mysqli_query($conexion,"INSERT INTO tbl_turistas(documento_turista,nombre_turista_1,nombre_turista_2,apellido_turista_1,apellido_turista_2,nacionalidad_turista,telefono_turista,f_n_turista,correo_turista,contra_turista,foto_turista)
    VALUES ($doc_t,'$n_1_t','$n_2_t','$a_1_t','$a_2_t','$pais_t',$tel_t,'$f_n_t','$mail_t','$p_t_1','$ruta')") or die("<script>alert('Error al insertar'); window.location='registroturista.php';</script>");

    //Se redirecciona a la pagina de inicio de seccion 
    echo "<script>alert('Registro exitoso')</script>";
    echo "<script>window.location='inicio.php';</script>";
  } else {
    // Si las contraseñas no coinciden entonces no se  reliza el registro y de redirecciona a la pagina del registro
    echo "<script>alert('Las contraseñas no coinciden')</script>";
    echo "<script>window.location='registroguia.php';</script>";
  }
  }else {
    //Si ya hay un correo existente, no se puede realizar el registro y se redirreciona a la  pagina del registro
    echo "<script>alert('Ya exite el correo')</script>";
    echo "<script>window.location='registroturista.php';</script>";
  }
}
echo "<script>alert('We, primero registrate .-.');</script>";
echo "<script>window.location='index.php';</script>";
?>
