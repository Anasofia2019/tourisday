<?php
include("conexion.php");
session_start();
if (isset($_SESSION['turista'])) {

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--
Las 3 metaetiquetas anteriores * deben * aparecer primero en la cabeza; cualquier otro contenido principal debe venir * después * de estas etiquetas -->
    <title style="font-family:verdana;">Paquetes</title>
	<!--Estilos personalizados para esta plantilla  -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!--Tema opcional -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  </head>
  <body style="background: linear-gradient(to bottom, #ffffff 27%, #ffff66 101%);">
  	<div class='container'>
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Paquetes</h1>
			<?php

				$sql_banner_top=mysqli_query($conexion,"select * from tbl_paquetes");
				while($rw_banner_top=mysqli_fetch_array($sql_banner_top)){
					?>

					<div class="col-lg-3 col-md-4 col-xs-6 thumb">
						<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="<?php echo $rw_banner_top['titulo'];?>" data-caption="<?php echo $rw_banner_top['descripcion'];	?>" data-image="../../img/banner/<?php echo $rw_banner_top['url_image'];?>" data-target="#image-gallery">
							<img class="img-responsive" src="img/banner/<?php echo $rw_banner_top['url_image'];?>" alt="Another alt text">
						</a>
						 <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
						 	<input type="hidden" name="reserva" value="<?php echo $rw_banner_top['id_paquete'];  ?>">
						 	<input type="hidden" name="doc_t" value="<?php echo $_SESSION['turista'];  ?>">

                			<button name="btn_reservar">añadir a favoritos</button>
               			 </form>
                <br><br><br>
					</div>
					<?php


				}
				if (isset($_POST['btn_reservar'])) {
	$id_paquete=$_POST['reserva'];
	$docu_tu=$_POST['doc_t'];

	echo $id_paquete;
	echo $docu_tu;

	$consulta_v=mysqli_query($conexion,"SELECT * FROM tbl_historial_adquirido WHERE id_paquetes='$id_paquete'") or die ("error");
	$cont=mysqli_num_rows($consulta_v);
	echo $cont;
	if ($cont==0) {

	$insert= mysqli_query($conexion,"INSERT INTO tbl_historial_adquirido(id_paquetes,doc_turista) VALUES ($id_paquete,$docu_tu)") or die ("<script>alert('Error al Reservar');</script>");
	echo "<script>alert('Paquete reservado de forma exitosa');</script>";
	// echo "<script>window.location='misitioturista.php'</script>";
	}
	else{
		echo "<script>alert('El paquete fue reservado con anterioridad');</script>";
		// echo "<script>window.location='misitioturista.php'</script>";
	}
}
			?>

			</div>
		</div>

<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="image-gallery-title"></h4>
            </div>
            <div class="modal-body">
			<center>
                <img id="image-gallery-image" class="img-responsive" src="">
			</center>
            </div>
            <div class="modal-footer">

                <div class="col-md-2">
                    <button type="button" class="btn btn-info" id="show-previous-image">Anterior</button>
                </div>

                <div class="col-md-8 text-justify" id="image-gallery-caption">
                    This text will be overwritten by jQuery
                </div>

                <div class="col-md-2">
                    <button type="button" id="show-next-image" class="btn btn-info">Siguiente</button>
                </div>




            </div>
        </div>
    </div>
</div>
	</div>
    <!-- JQuery (necesario para los complementos de JavaScript de Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!--
Último JavaScript compilado y minificado -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  	<script>
	$(document).ready(function(){
    loadGallery(true, 'a.thumbnail');
    //Esta función deshabilita los botones cuando sea necesario
    function disableButtons(counter_max, counter_current){
        $('#show-previous-image, #show-next-image').show();
        if(counter_max == counter_current){
            $('#show-next-image').hide();
        } else if (counter_current == 1){
            $('#show-previous-image').hide();
        }
    }
    /**
     *
     * @param setIDs       Establece ID cuando se carga DOM. Si usa un contador PHP, establezca en falso.
     * @param setClickAttr  Establece el atributo para el controlador de clics.
     */

    function loadGallery(setIDs, setClickAttr){
        var current_image,
            selector,
            counter = 0;

        $('#show-next-image, #show-previous-image').click(function(){
            if($(this).attr('id') == 'show-previous-image'){
                current_image--;
            } else {
                current_image++;
            }

            selector = $('[data-image-id="' + current_image + '"]');
            updateGallery(selector);
        });

        function updateGallery(selector) {
            var $sel = selector;
            current_image = $sel.data('image-id');
            $('#image-gallery-caption').text($sel.data('caption'));
            $('#image-gallery-title').text($sel.data('title'));
            $('#image-gallery-image').attr('src', $sel.data('image'));
            disableButtons(counter, $sel.data('image-id'));
        }

        if(setIDs == true){
            $('[data-image-id]').each(function(){
                counter++;
                $(this).attr('data-image-id',counter);
            });
        }
        $(setClickAttr).on('click',function(){
            updateGallery($(this));
        });
    }
});
	</script>

  </body>
</html>
<script>
  //funcion para mostrar si carga la imagen
			function upload_image(){
				$(".upload-msg").text('Cargando...');
				var id_banner=$("#id_banner").val();
				var inputFileImage = document.getElementById("fileToUpload");
				var file = inputFileImage.files[0];
				var data = new FormData();
				data.append('fileToUpload',file);
				data.append('id',id_banner);
        //direcciona a upload_banner archivo de ajax
				$.ajax({
					url: "ajax/upload_banner.php",        // URL a la que se envía la solicitud
					type: "POST",             // Tipo de solicitud a enviar, llamada como método
					data: data, 			  // Datos enviados al servidor, un conjunto de pares clave / valor (es decir, campos de formulario y valores)
					contentType: false,       // El tipo de contenido utilizado al enviar datos al servidor.
					cache: false,             // Para no poder solicitar que las páginas se almacenen en caché
					processData:false,        // Para enviar DOMDocument o archivo de datos no procesados ​​se establece en falso
					success: function(data)   // Se llamará a una función si la solicitud tiene éxito
					{
						$(".upload-msg").html(data);
						window.setTimeout(function() {
						$(".alert-dismissible").fadeTo(500, 0).slideUp(500, function(){
						$(this).remove();
						});	}, 5000);
					}
				});

			}

			function eliminar(id){
        //Funcion para eliminar
				var parametros = {"action":"delete","id":id};
						$.ajax({
							url:'ajax/upload2.php',
							data: parametros,
							 beforeSend: function(objeto){
							$(".upload-msg2").text('Cargando...');
						  },
							success:function(data){
								$(".upload-msg2").html(data);

							}
						})

				}





	</script>
	<script>
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

<?php

} else {
	echo "<script>alert('no puedes entrar a esta pagina');</script>";
}

?>
