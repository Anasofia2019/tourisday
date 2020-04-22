<?php
include 'conexion.php';
if (isset($_POST['btn_comentario'])) {
		$cedula_tt=$_POST['ced_t'];
		$puntos=$_POST['puntuacion_p'];
		$id_paq=$_POST['btn_comentario'];
		$coment=$_POST[$id_paq];

		$insert_c=mysqli_query($conexion,"INSERT INTO tbl_comentarios(comentario_turista,puntuacion,id_tu,id_paq) VALUES ('$coment',$puntos,$cedula_tt,$id_paq)") or die ("<script>alert('No se pudo comentar el paquete');window.location='misitioturista.php'</script>");
		
		echo "<script>alert('comentario subido exitosamente');</script>";
		echo "<script>window.location='misitioturista.php'</script>";
	}
echo "<script>alert('No tienes permisos para entrar en esta pagina');</script>";
echo "<script>window.location='index.php'</script>";



?>
