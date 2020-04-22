<?php
include 'conexion.php';
// actualizar guia es el nombre del boton de la pagina "misitioguia.php"
if (isset($_POST['actualizar_guia'])) {

//Los nombres de los campos
  $c_g=$_POST['cedula_g'];
  $no_1_g=$_POST['nom_guia_1'];
	$no_2_g=$_POST['nom_guia_2'];
	$ap_1_g=$_POST['ape_guia_1'];
	$ap_2_g=$_POST['ape_guia_2'];
  $ciu_g=$_POST['ciudad_guia'];
  $pass_1_g=$_POST['pass_guia_1'];
  $pass_2_g=$_POST['pass_guia_2'];
//Verifico que las dos contraseñas sean identicas
  if ($pass_1_g==$pass_2_g) {
    //consulta para coger los datos del guia
    $consulta=mysqli_query($conexion,"SELECT * FROM tbl_guias WHERE cedula='$c_g'");
    $row=mysqli_fetch_array($consulta);
    //Verifico que la contraseña ingresada sea igual a la de la base de datos
    if ($row['contra_guia']==$pass_1_g) {
      //Hago el cambio en la base de datos
      $cambio_g=mysqli_query($conexion,"UPDATE tbl_guias SET nombre_guia_1='$no_1_g', nombre_guia_2='$no_2_g', apellido_guia_1='$ap_1_g', apellido_guia_2='$ap_2_g', ciudad_guia='$ciu_g' WHERE cedula='$c_g'") or die ('error al actualizar');
      //Mensaje de exito y redireccion a la pagina del guia
      echo "<script>alert('Actualizacion exitosa');</script>";
      echo "<script>window.location='misitioguia.php';</script>";
    }else {
      //mensaje que dice que la condicion no se cumplió y se redirecciona a la pagina del guia
      echo "<script>alert('La contraseña no coincide con la registrada en la base de datos');</script>";
      echo "<script>window.location='misitioguia.php';</script>";
    }
  }else {
    //Mensaje que dice que las contraseñas no coinciden y no se puede realizar el cambio
    echo "<script>alert('Las contraseñas no inciden');</script>";
    echo "<script>window.location='misitioguia.php';</script>";
  }


//"actializar_turista" Es el nombre del boton en la pagina "misitioguia.php"
}elseif (isset($_POST['actualizar_turista'])) {
  //Es el nombre de los campos que se actualizarán
  $c_g=$_POST['ced_turista'];
  $n_1_t=$_POST['nom_turista_1'];
  $n_2_t=$_POST['nom_turista_2'];
  $a_1_t=$_POST['ape_turista_1'];
  $a_2_t=$_POST['ape_turista_2'];
  $tel_t=$_POST['tel_turista'];
  $pais_t=$_POST['pais_turista'];
  $p_t_1=$_POST['pass_turista_1'];
  $p_t_2=$_POST['pass_turista_2'];

//Verifico que las dos contraseñas sean identicas
  if ($p_t_1==$p_t_2) {

    //consulta para coger los datos del turista
    $consulta=mysqli_query($conexion,"SELECT * FROM tbl_turistas WHERE documento_turista='$c_g'");
    $row=mysqli_fetch_array($consulta);

      //Verifico que la contraseña ingresada sea igual a la de la base de datos
    if ($row['contra_turista']==$p_t_1) {
      //Hago el cambio en la base de datos
      $cambio_g=mysqli_query($conexion,"UPDATE tbl_turistas SET nombre_turista_1 ='$n_1_t', nombre_turista_2='$n_2_t', apellido_turista_1='$a_1_t', apellido_turista_2='$a_2_t', nacionalidad_turista='$pais_t', telefono_turista='$tel_t' WHERE documento_turista='$c_g'") or die ('error al actualizar');
      //Mensaje de exito y redireccion a la pagina del turista
      echo "<script>alert('Actualizacion exitosa');</script>";
      echo "<script>window.location='misitioturista.php';</script>";
    }else {
      //mensaje que dice que la condicion no se cumplió y se redirecciona a la pagina del tursita
      echo "<script>alert('La contraseña no coincide con la registrada en la base de datos');</script>";
      echo "<script>window.location='misitioguia.php';</script>";
    }
  }else {
     //Mensaje que dice que las contraseñas no coinciden y no se puede realizar el cambio
    echo "<script>alert('Las contraseñas no inciden');</script>";
    echo "<script>window.location='misitioturista.php';</script>";

  }
}























/*
if (isset($_POST['actualizar_guia'])) {
	$no_1_g=$_POST['nom_guia_1'];
	$no_2_g=$_POST['nom_guia_2'];
	$ap_1_g=$_POST['ape_guia_1'];
	$ap_2_g=$_POST['ape_guia_2'];
	$mail_g=$_POST['mail_guia'];
	$tele_g=$_POST['tel_guia'];
	$ci_g=$_POST['ciudad_guia'];
	$p_g_1=$_POST['pass_guia_1'];
	$p_g_2=$_POST['pass_guia_2'];

	$p_g_antiguo=$_POST['pass_guia_antigua'];
	$mail_antiguo=$_POST['correo_g'];

	$consulta=mysqli_query($conexion,"SELECT * FROM tbl_guias WHERE correo_guia='$mail_antiguo' AND contra_guia='$p_g_antiguo' ");


	if (mysqli_num_rows($consulta)>0) {
		$consulta_correo_n=mysqli_query($conexion,"SELECT * FROM tbl_guias WHERE correo_guia='$mail_g'");
		if (mysqli_num_rows($consulta_correo_n<1)) {
			if ($p_g_1==$p_g_2) {
				$cambio_g=mysqli_query($conexion,"UPDATE tbl_guias SET nombre_guia_1='$no_1_g', nombre_guia_2='$no_2_g', apellido_guia_1='$ap_1_g', apellido_guia_2='$ap_2_g', telefono_guia='$tele_g', correo_guia='$mail_g', ciudad_guia='$ci_g', contra_guia='$p_g_1' WHERE correo_guia='$mail_antiguo' AND contra_guia='$p_g_antiguo' ") or die ("error al insertar");
				echo "<script>alert('actializacion exitosa');</script>";
				echo "<script>window.location='misitioguia.php'</script>";
			}else{
				echo "Las nuevas contraseñas no coinciden";
				echo "<script>window.location='misitioguia.php'</script>";
			}
		}else{
			echo "<script>alert('El nuevo correo ya exite, no es posible actualizar');</script>";
			echo "<script>window.location='misitioguia.php'</script>";
		}
	} else{
		echo "<script>alert('Contraseña o correo incorrecto);</script>";
		echo "<script>window.location='misitioguia.php'</script>";
	}
}elseif (isset($_POST['actualizar_turista'])) {
  $n_1_t=$_POST['nom_turista_1'];
  $n_2_t=$_POST['nom_turista_2'];
  $a_1_t=$_POST['ape_turista_1'];
  $a_2_t=$_POST['ape_turista_2'];
  $mail_t=$_POST['mail_turista'];
  $tel_t=$_POST['tel_turista'];
  $pais_t=$_POST['pais_guia'];
  $p_t_1=$_POST['n_turista_1'];
  $p_t_2=$_POST['n_turista_2'];
  $mail_antiguo=$_POST['correo_a'];
  $p_t_antiguo=$_POST['contra_a'];

  $consulta=mysqli_query($conexion,"SELECT * FROM tbl_turistas WHERE correo_turista='$mail_antiguo' AND contra_turista='$p_t_antiguo' ");

  if (mysqli_num_rows($consulta)>0) {

  	$consulta_correo_n=mysqli_query($conexion,"SELECT * FROM tbl_turistas WHERE correo_turista='$mail_t'");

  	if (mysqli_num_rows($consulta_correo_n)<1) {
  		if ($p_t_1==$p_t_2) {
	  		$cambio_t=mysqli_query($conexion,"UPDATE tbl_turistas SET nombre_turista_1='$n_1_t', nombre_turista_2='$n_2_t', apellido_turista_1='$a_1_t', apellido_turista_2='$a_2_t', correo_turista='$mail_t', telefono_turista='$tel_t', nacionalidad_turista='$pais_t', contra_turista='$p_t_1' WHERE correo_turista='$mail_antiguo' AND contra_turista='$p_t_antiguo'");
	  			echo "<script>alert('actializacion exitosa');</script>";
				echo "<script>window.location='misitioturista.php'</script>";
  		}else{
  			echo "<script>alert('Las nuevas contraseñas no coinciden');</script>";
			echo "<script>window.location='misitioturista.php';</script>";
  		}
  	}else{
  		echo "<script>alert('El nuevo correo ya exite, no es posible actualizar');</script>";
		echo "<script>window.location='misitioturista.php';</script>";
  	}
  }else{
  		echo "<script>alert('Contraseña o correo incorrecto');</script>";
		echo "<script>window.location='misitioturista.php';</script>";
  }
}
*/


?>
