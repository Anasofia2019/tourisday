<?php
include 'conexion.php';
if (isset($_POST['btn_paquete'])) {
  $cedula_guia=$_POST['cedula_g'];
  $nombre_p=$_POST['nom_paquete'];
  $ciudad_g=$_POST['a'];
  $categoria_g=$_POST['c_guia'];
  $especificaciones=$_POST['especificar'];


  $insert= mysqli_query($conexion,"INSERT INTO tbl_especificaciones_paquete(id_paquete,cedula_guia,nombre_paquete,categoria,municipio,descripcion) VALUES (NULL,$cedula_guia, '$nombre_p', '$categoria_g', '$ciudad_g', '$especificaciones')") or die ('error al insertar');
  echo "<script>alert('Paquete subido de forma exitosa');</script>";
  echo "<script>window.location='misitioguia.php'</script>";

}elseif (isset($_POST['btn_comentario'])) {
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
