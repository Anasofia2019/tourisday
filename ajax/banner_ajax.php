<?php
/*Pagina  que elimina  datos, tambien incluye la paginacion  */
session_start();
/* Llamar la Cadena de Conexion*/
include ("../conexion.php");
$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
if($action == 'ajax'){
	//Elimino producto
	if (isset($_REQUEST['id'])){
		$id_banner=intval($_REQUEST['id']);
//este if sirve  para eliminar algun registro de la tabla tbl_paquetes con el id que se solicita
		if ($delete=mysqli_query($conexion,"delete from tbl_paquetes where id_paquete='$id_banner'")){
			//este es el mensaje que se muestra si la consulta fue exitosa
			$message= "Datos eliminados satisfactoriamente";
		} else {
			//si hay algun error para eliminar el registro nos mostrara un mensaje que nos dira que no se puede hacer
			$error= "No se pudo eliminar los datos";
		}
	}

//nos esta haciendo referencia a que tabla esta llamando
	$tables="tbl_paquetes";
	$sWhere=" ";
	$sWhere.=" ";

//aca es para el orden de los id
	$sWhere.=" order by id_paquete";
	include 'pagination.php'; //incluir archivo de paginación
	//variables de paginación
	$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
	$per_page = 12; //cuantos registros quieres mostrar
	$adjacents  = 4; //espacio entre páginas después del número de adyacentes
	$offset = ($page - 1) * $per_page;

	//Cuente el número total de filas en su tabla*/
	$count_query   = mysqli_query($conexion,"SELECT count(*) AS numrows FROM $tables  $sWhere ");
	//este if nos sirve para los registros que hay en orden en la tabla
	if ($row= mysqli_fetch_array($count_query))
	{
	$numrows = $row['numrows'];
	}
	else {echo mysqli_error($conexion);}
	//aca nos muestra el total de paginas que hay
	$total_pages = ceil($numrows/$per_page);
	$reload = './productslist.php';
	//consulta principal para recuperar los datos
	$query = mysqli_query($conexion,"SELECT * FROM  $tables  $sWhere LIMIT $offset,$per_page");
//este nos muestra un aviso
	if (isset($message)){
		?>
		<div class="alert alert-success alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
			<strong>Aviso!</strong> <?php echo $message;?>
		</div>

		<?php
	}
	//este if es por se presenta algun error
	if (isset($error)){
		?>
		<div class="alert alert-danger alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
			<strong>Error!</strong> <?php echo $error;?>
		</div>

		<?php
	}
	//recorrer los datos recuperados
	if ($numrows>0)	{
		?>

		 <div class="row">
			<?php
				while($row = mysqli_fetch_array($query)){
					$url_image=$row['url_image'];
					$titulo=$row['titulo'];
					$id_slide=$row['id_paquete'];

					?>

					  <div class="col-sm-6 col-md-3">
						<div class="thumbnail">
						  <img src="../img/banner/<?php echo $url_image;?>" alt="...">
						  <div class="caption">
							<h3><?php echo $titulo;?></h3>

							<p class='text-right'><a href="banneredit.php?id=<?php echo intval($id_slide);?>" class="btn btn-info" role="button"><i class='glyphicon glyphicon-edit'></i> Editar</a> <button type="button" class="btn btn-danger" onclick="eliminar_slide('<?php echo $id_slide;?>');" role="button"><i class='glyphicon glyphicon-trash'></i> Eliminar</button></p>
						  </div>
						</div>
					  </div>

					<?php
				}
			?>
		  </div>

		<div class="table-pagination text-right">

			<?php echo paginate($reload, $page, $total_pages, $adjacents);?>
		</div>
		<?php
	}
}
?>
