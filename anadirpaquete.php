 <?php
/*
Esta pagina es para crear los paquetes, se llena el formulario y se sube la imagen del lugar
*/
session_start();
$title="Agregar paquete";
/* Llamar la Cadena de Conexion*/
include ("conexion.php");
//Insertar un nuevo producto
$imagen_demo="demo.png";
//para insertar imagenes
$insert=mysqli_query($conexion,"insert into tbl_paquetes (url_image, estado) values ('$imagen_demo','0')");
//consulta para que se muestre la tabla tbl_paquetes con limites
$sql_last=mysqli_query($conexion,"select LAST_INSERT_ID(id_paquete) as last from tbl_paquetes order by id_paquete desc ");
$rw=mysqli_fetch_array($sql_last);
$id_banner=intval($rw['last']);
//consulta para que se muestre la tabla tbl_paquetes
$sql=mysqli_query($conexion,"select * from tbl_paquetes where id_paquete='$id_banner'");
  $c_guia= $_SESSION['guia'];
//Consulta para que  se muestre en el campo de la cedula
$consulta=mysqli_query($conexion,"SELECT cedula FROM tbl_guias WHERE cedula='$c_guia' ");
$datos=mysqli_fetch_array($consulta);
$count=mysqli_num_rows($sql);

if ($count==0){
	//header("location: bannerlist.php");
	//exit;
}
$rw=mysqli_fetch_array($sql);
$titulo=$rw['titulo'];
$cedula=$datos['cedula'];
$descripcion=$rw['descripcion'];
$url_image=$rw['url_image'];
$orden=intval($rw['orden']);
$estado=intval($rw['estado']);

$active_config="active";
$active_banner="active";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--
Las 3 metaetiquetas anteriores * deben * aparecer primero en la cabeza; cualquier otro contenido principal debe venir * después * de estas etiquetas -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/ico/favicon.ico">
    <title><?php echo $title;?></title>
    <!-- Bootstrap core CSS -->
    <!-- CSS compilado y minificado más reciente -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Estilos personalizados para esta plantilla -->
    <link href="css/navbar-fixed-top.css" rel="stylesheet">
	<link href="css/preview-image.css" rel="stylesheet">
  </head>
  <body>


    <div class="container">

      <!--- Esta parte es de la creacion de la información de los paquetes--->
      <div class="row">


		 <div class="col-md-7">
		 <h3 ><span class="glyphicon glyphicon-edit"></span> Agregar paquete</h3>
			<form class="form-horizontal" id="editar_banner">

        <!--- Esta parte es de la imagen del paquete--->
        <div class="col-md-5">
         <h3 ><span class="glyphicon glyphicon-picture"></span> Imagen</h3>

         <form class="form-vertical">

         <div class="form-group">

            <div class="col-sm-12">


             <div class="fileinput fileinput-new" data-provides="fileinput">
               <div class="fileinput-new thumbnail" style="max-width: 100%;" >
            <img class="img-rounded" src="../img/banner/<?php echo $url_image;?>" />
          </div>
          <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 250px; max-height: 250px;"></div>
          <div>
          <span class="btn btn-info btn-file"><span class="fileinput-new">Selecciona una imagen</span>
          <span class="fileinput-exists" onclick="upload_image();">Cambiar imagen</span><input type="file" name="fileToUpload" id="fileToUpload" required onchange="upload_image();"></span>
          <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Cancelar</a>
          </div>
              </div>
              <div class="upload-msg"></div>

            </div>

            </div>



<!--Este es el campo del titulo-->
			  <div class="form-group">
				<label for="titulo" class="col-sm-3 control-label">Titulo</label>
				<div class="col-sm-9">
				  <input type="text" class="form-control" id="titulo" value="<?php echo $titulo;?>" required name="titulo">
				  <input type="hidden" class="form-control" id="id_banner" value="<?php echo intval($id_banner);?>" name="id_banner">
				</div>
<!--Este es el campo de la cedula-->
			  </div>
        <div class="form-group">
       <label for="titulo" class="col-sm-3 control-label">Cedula</label>
       <div class="col-sm-9">

<input type="text" class="form-control" id="cedula" value="<?php echo $cedula;?>" required name="cedula">

         <input type="hidden" class="form-control" id="id_banner" value="<?php echo intval($id_banner);?>" name="id_banner">
       </div>
       </div>
<!--Este es el campo de la descripcion-->
			  <div class="form-group">
				<label for="titulo" class="col-sm-3 control-label">Descripción</label>
				<div class="col-sm-9">
				  <textarea class='form-control' name="descripcion" id="descripcion" required rows=8><?php echo $descripcion;?></textarea>
				</div>
			  </div>


<!--Este es el campo del orden-->
			  <div class="form-group">
				<label for="orden" class="col-sm-3 control-label">Orden</label>
				<div class="col-sm-9">
				  <input type="number" class="form-control" id="orden" name="orden" value="<?php echo $orden;?>">
				</div>
			  </div>
<!--Este es el campo del Estado-->

			  <div class="form-group">
				<label for="estado" class="col-sm-3 control-label">Estado</label>
				<div class="col-sm-9">
				  <select class="form-control" id="estado" required name="estado">
					<option value="0" <?php if($estado==0){echo "selected";} ?>>Inactivo</option>
					<option value="1" <?php if($estado==1){echo "selected";} ?>>Activo</option>
				 </select>
				</div>
			  </div>



<!--Este es el boton para crear los datos del paquete-->

			  <div class="form-group">
			  <div id='loader'></div>
			  <div class='outer_div'></div>
				<div class="col-sm-offset-3 col-sm-9">
				  <button type="submit" class="btn btn-success">Crear paquete</button>
				</div>
			  </div>
			</form>



		</div>




		 </form>
		</div>
    </div>
	</div><!-- /container -->

    <!-- JavaScript de Bootstrap core
    ================================================== -->
    <!-- Colocado al final del documento para que las páginas se carguen más rápido-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Último JavaScript compilado y minificado -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="js/jasny-bootstrap.min.js"></script>

  </body>
</html>
	<script>
	/**
 * @var id_banner
 * @var inputFileImage
 * @var file
 * @var data
 */
			function upload_image(){
				$(".upload-msg").text('Cargando...');
        //permite aumentar los datos del formulario antes de enviarlos para incluir información adicional
				var id_banner=$("#id_banner").val();
				var inputFileImage = document.getElementById("fileToUpload");
				var file = inputFileImage.files[0];
				var data = new FormData();
				data.append('fileToUpload',file);
				data.append('id',id_banner);
        //direcciona a upload_banner para las imagenes si se permiten o no  por el tipo o el tamaño
        $.ajax({
          url: "ajax/upload_banner.php",        // URL a la que se envía la solicitud
          type: "POST",           // Tipo de solicitud a enviar, llamada como método
          data: data, // Datos enviados al servidor, un conjunto de pares clave / valor (es decir, campos de formulario y valores)
          contentType: false,       // El tipo de contenido utilizado al enviar datos al servidor.
          cache: false,             // Para no poder solicitar que las páginas se almacenen en caché
          processData:false,        // Para enviar DOMDocument o archivo de datos no procesados ​​se establece en falso
          success: function(data)   // Se llamará a la función si la solicitud tiene éxito
          {
						$(".upload-msg").html(data);
						window.setTimeout(function() {//metodo que llama a una función o evalúa una expresión después de un número
                             // específico de milisegundos
						$(".alert-dismissible").fadeTo(500, 0).slideUp(500, function(){
						$(this).remove();
						});	}, 5000);
					}
				});

			}
//funcion que muestra si la imagen es permitida o no
//tambien permite eliminar
/**
 * @param id
 */
			function eliminar(id){
				var parametros = {"action":"delete","id":id};
						$.ajax({
							url:'ajax/upload2.php',// URL a la que se envía la solicitud
							data: parametros,// Datos enviados al servidor, un conjunto de pares clave / valor (es decir, campos de formulario y valores)
							 beforeSend: function(objeto){//metodo o funcion para gif animados con una imagen de precarga
							$(".upload-msg2").text('Cargando...');
						  },
							success:function(data){  // Se llamará a la función si la solicitud tiene éxito
								$(".upload-msg2").html(data);

							}
						})


				}





	</script>

  <script>
/**
 * @param e
 */


  //funcion que envia a editar_banner para actualizar datos
		$("#editar_banner").submit(function(e) {

			  $.ajax({
				  url: "ajax/editar_banner.php",
				  type: "POST",
				  data: $("#editar_banner").serialize(),
				   beforeSend: function(objeto){
					$("#loader").html("Cargando...");
				  },
				  success:function(data){
						$(".outer_div").html(data).fadeIn('slow');
						$("#loader").html("");
					}
			});
			 e.preventDefault();
		});
	</script>
