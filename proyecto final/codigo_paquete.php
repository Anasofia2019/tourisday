<?php

//Incluyo la conexion
include 'conexion.php';
//Btn_comentario es el boton de la pagina "misitioturista.php"
if (isset($_POST['btn_comentario'])) {

	//Lo que esta entre corchetes son los nombtes de la pagina de donde se traen los datos 
		$cedula_tt=$_POST['ced_t'];
		$puntos=$_POST['puntuacion_p'];
		$id_paq=$_POST['btn_comentario'];
		$coment=$_POST[$id_paq];

		// Este query inserta un comentario en la base de datos
		$insert_c=mysqli_query($conexion,"INSERT INTO tbl_comentarios(comentario_turista,puntuacion,id_tu,id_paq) VALUES ('$coment',$puntos,$cedula_tt,$id_paq)") or die ("<script>alert('No se pudo comentar el paquete');window.location='misitioturista.php'</script>");
		
		// Mensaje del comentario exitoso y redireccion al sitio del turista
		echo "<script>alert('comentario subido exitosamente');</script>";
		echo "<script>window.location='misitioturista.php'</script>";
	}
	//si no se entra a la condicion es porque se quiere entrar a la pagina sin haber pulsado un boton que redirrecione entonce se denega el acceso
echo "<script>alert('No tienes permisos para entrar en esta pagina');</script>";
echo "<script>window.location='index.php'</script>";



?>
