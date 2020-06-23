<?php
/*Pagina donde se manda el formulario para validar los campos y poder agregar, editar o eliminar los datos*/
session_start();

if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["titulo"])){
	/* Llamar la Cadena de Conexion*/
	include ("../conexion.php");
	// escapar, además de eliminar todo lo que podría ser código (html / javascript-)
	//aca estamos definiendo variables para los campos de texto de los formularios de añadir y actualizar
     $titulo = mysqli_real_escape_string($conexion,(strip_tags($_POST['titulo'], ENT_QUOTES)));
		 $cedula = mysqli_real_escape_string($conexion,(strip_tags($_POST['cedula'])));
	 $descripcion = mysqli_real_escape_string($conexion,($_POST['descripcion']));
	 $orden = intval($_POST['orden']);
	 $estado = intval($_POST['estado']);
	 $id_banner=intval($_POST['id_banner']);
//esta consulta es para el formulario de actualizar, si se va a cambiar los datos ya registrados en la base de datos
	 $sql=" UPDATE tbl_paquetes  SET cedula='$cedula',titulo='$titulo', descripcion='$descripcion', orden='$orden', estado='$estado' WHERE id_paquete='$id_banner'";
	 $query = mysqli_query($conexion,$sql);
	//aca nos muestra un mensaje que nos avisa si se actualizaron esos registros
	if ($query) {
		$messages[] = "Datos  han sido actualizados satisfactoriamente.";
	} else {
		// esta parte de aca es por si algo fallo de la consulta
		$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($conexion);
	}
//este if es por si hay algun error
	if (isset($errors)){
//aca nos dice en un mensaje que nos dice el error que tenemos
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong>
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
		}
		//este if de aca es para decirnos que esta bien hecho lo que hicimos
		if (isset($messages)){
//aca nos dice en un mensaje que esta bien hecho
			?>
			<div class="alert alert-success" role="alert">
					<button type="button" class="close" data-dismiss="alert">&times;</button>

					<strong>¡Bien hecho!</strong>
					<?php
						foreach ($messages as $message) {
								echo $message;
							}
						?>
			</div>
			<?php
		}

}
?>
