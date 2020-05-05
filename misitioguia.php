<?php
  //Se incluye la coneccion
include 'conexion.php';

  //iniciamos la seccion en la pagina
session_start();


$active_config="active";
$active_banner="active";

  //usamos la variable superglobalr "$_SESSION" para saber si esta iniciada en el guia
if (isset($_SESSION['guia'])) {
  //Si esta iniciada se procede a mostrar toda la pagina del guia

  //La Variable super global tomó el valor de la cedula del guia, "$c_guia" toma el valor de la variable super global para realizar consultas mas adelante
  $c_guia= $_SESSION['guia'];

  // Esta consulta es para traer todos los datos de un guia 
  $consulta= mysqli_query($conexion,"SELECT * FROM tbl_guias WHERE cedula='$c_guia'");

  //$datos toma toda fila de datos del guia (Cedula, nombres, apellidos, residencia, entre otros)
  $datos= mysqli_fetch_array($consulta);
  ?>
<html lang="en" dir="ltr">

    <title>sitioguia</title>
   <!-- Utf-8 permite el uso de caracteres
   en las etiquetas meta -->
    <meta charset="utf-8">
   <!-- Viewport nos da la vista de la pagina
   en los diferentes dispositivos  -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<!-- Este link lo que nos permite utilizar un appi de google
que utiliza codigo ajax para los efectos de jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- este link nos llama el codigo css  -->
   <link rel="stylesheet" href="css/misitioguia.css">
   <!-- link que utiliza bootstrap para usar codigo jquery    -->
   <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
   <!-- este codigo nos direcciona al archivo .js
 que nos da la interacción de efectos de la página  -->
   <script src="javascrypt/main.js"></script>
   <!-- Utilizamos nuestra fuente personalizada -->
   <link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
     <!-- código bootstrap minimizado  -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <!-- código de temas bootstrap minimizado -->
   <link rel="stylesheet"href="//code.query.com/ui/1.12.1/themes/base/jquery-ui.css">


</head>

<body style="background:   #bccde1    ;">



<!-- Este contenedor tendra los botones de
nuestros tabs en el modulo guia  -->
<div class="wrap" >
    <!-- Los tabs están organizados en listas -->
		  <ul class="tabs" >
        <!-- Cada una de estas etiquetas  li es
        un boton que genera el evento de carga y recarga de los tabs
      que son segmentos de codigo  -->
			    <li><a href="#tab1"><span class="glyphicon  glyphicon-user"></span><span class="tab-text">Inicio</span></a></li>
			    <li><a href="#tab2"><span class="glyphicon  glyphicon-search"></span><span class="tab-text">Paquetes</span></a></li>
			    <li><a href="#tab3"><span class="glyphicon  glyphicon-plus"></span><span class="tab-text">Añadir</span></a></li>
			    <li><a href="#tab4"><span class="glyphicon glyphicon-star"></span><span class="tab-text">Mi información</span></a></li>

  <!-- Creamos un items a parte de de los tabs
  que pertenece a la clase dropdown -->
  <div class="dropdown">
    <!-- Este  botón contiene la foto del pérfil de
    nuestro usuario con la cual se logueó -->
   <button class="dropbtn" style="margin-top:13px; height:50px; width:50px; background: url(<?php echo $datos['foto_guia']; ?>); background-size: cover; border-radius:50%;"></button>
  <!-- Contenido desplegable del dropdown -->
     <div class="dropdown-content">
       <!-- Lista de links de opciones -->
         <a href="#">Configuracion</a>
         <a href="#">Ayuda</a>
         <a href="cerrar.php">Salir</a>
     </div>
   </div>
 </ul>

 <!-- contenedor de las secciones  -->
	<div class="secciones">
   <!-- Primer tab que que es en realidad un segmento de página -->
			<article id="tab1">
        <!-- Imagen principal de la parte superior -->
        <img src="img/welcome.svg" alt="" height="120px;" width="300px" id="welcome">
        <!-- Texto de bienvenida -->
        <center><h1 id="titulo_tab1">Bienvenido apreciado guía</h1>
         <!-- banner de bienvenida -->
        <div class="contenedor_inicio">
            <!-- instructivo del guia -->
          <img src="img/ban1.jpg" alt="">

        </div>



      </article>
      <br>
      <!-- Siguiente tab que es el modulo de paquetes  -->
			<article id="tab2">
        <!-- Icono principal del modulo paquetes -->
        <img src="img/paket.svg" alt="" height="200px">
        <!-- Titulo del modulo del paquete -->
				<h2 id="titulo_paquete">Mis paquetes</h2>

        <?php
        //Esta consulta trae todos los paquetes que subió el guia que inició sección
        $paquetes=mysqli_query($conexion,"SELECT * FROM tbl_paquetes WHERE cedula='$c_guia'");

        //Esta variable cuenta los paquetes que tiene el guia
        $cont=mysqli_num_rows($paquetes);
        $i=0;
        ?>
        <br><br><br><br>
        <!-- Esta parte muestra los paquetes a los guias para que lo puedan editar o eliminar -->
        <div class="row">
			  <div class="col-xs-12 text-right">
			  </div>

			</div>
      <div id="loader" class="text-center"> <span><img src="./img/ajax-loader.gif"></span></div>
		  <div class="outer_div"></div>




        <?php
        //este mientras muestra los paquetes uno a uno hasta que "$i" llegue al mismo numero que "$cont" Que es la cantidad de paquetes que tiene el guia
        while ($cont>$i) {
          $rowss=mysqli_fetch_array($paquetes);
          ?>


<!-- Modal -->

          <?php
          $i=$i+1;
        }
         ?>

       </table>

     </center>

			</article>
      <br>
			<article id="tab3">
        <img src="img/idea.svg" alt="" width="400px" height="200px" id="logo_crear">
<!-- Aca se utilizo iframe para crear los paquetes -->
    <iframe name=miframeflotante src="anadirpaquete.php" width=990 height=550 frameborder="0" scrolling=yes marginwidth=2 marginheight=4 style="margin-left:-25%;margin-top:100px;" ></iframe>
      </article>
 <!-- último modulo de actualizar información -->
			<article id="tab4">
       <!-- Logo del formulario -->
        <img src="img/candado.svg" alt="" id="imagen_cambiar">
      <!-- Contenedor  del formulario -->
        <div class="contenedor_registro" id="cambiar_info">
      <!-- Caja de registro interno -->
        <div class="caja_registro" style="">
          <!-- Se crea una clase form p
          para dar forma al formulario -->
        <div class="form__top">

     <!-- Titulo del formulario interno  -->
     <div class="tilin" >  <h2><span class="t1">Cambiar mi información</span></h2><div>

         </div>
         <!-- Caja del formulario -->
         <form class="form__reg" action="codigo_actualizar.php" method="post">
           <!-- Campos de datos -->
         <input type="hidden" name="cedula_g" value="<?php echo $datos['cedula'] ?>"  readonly>
         <input class="input" value="<?php echo $datos['nombre_guia_1'] ?>" name="nom_guia_1" type="text" placeholder="&#128100; Primer Nombre" required autofocus>
         <label for="titulo" class="col-sm-3 control-label">primer_nombre:</label>
         <input class="input" value="<?php echo $datos['nombre_guia_2'] ?>" name="nom_guia_2" type="text" placeholder="&#128100;  Segundo Nombre" required autofocus>
         <label for="titulo" class="col-sm-3 control-label">segundo_nombre:</label>
         <input class="input" value="<?php echo $datos['apellido_guia_1'] ?>" name="ape_guia_1" type="text" placeholder="&#128100;  Primer Apellido" required autofocus>
         <label for="titulo" class="col-sm-3 control-label">primer_apellido:</label>
         <input class="input" value="<?php echo $datos['apellido_guia_2']; ?>"name="ape_guia_2" type="text" placeholder="&#128100;  Segundo Apellido" required autofocus>
         <label for="titulo" class="col-sm-3 control-label">segundo_apellido:</label> <br><br>


                         municipio_residencia:<select class="input" name="ciudad_guia">
                            <option><?php echo $datos['ciudad_guia']; ?></option>
                            <option>Amagá</option>
                            <option>Andes</option>
                            <option>Angelópolis</option>
                            <option>Barbosa</option>
                            <option>Bello</option>
                            <option>Betania</option>
                            <option>Betulia</option>
                            <option>Caldas</option>
                            <option>Caramanta</option>
                            <option>Ciudad Bolívar</option>
                            <option>Concordia</option>
                            <option>Copacabana</option>
                            <option>Envigado</option>
                            <option>Fredonia</option>
                            <option>Girardota</option>
                            <option>Hispania</option>
                            <option>Itagüí</option>
                            <option>Jardín</option>
                            <option>Jericó</option>
                            <option>La estrella</option>
                            <option>La Pintada</option>
                            <option>Medellin</option>
                            <option>Montebello</option>
                            <option>Pueblorrico</option>
                            <option>Sabaneta</option>
                            <option>Salgar</option>
                            <option>Santa Bárbara</option>
                            <option>Támesis</option>
                            <option>Tarso</option>
                            <option>Titiribí</option>
                            <option>Urrao</option>
                            <option>Valparaíso</option>
                            <option>Venecia</option>
                         </select> <br><br>

                         <label for="titulo" class="col-sm-3 control-label">contaseña:</label>

                 <input class="input" name="pass_guia_1" type="password" placeholder="&#x1F512;  Contraseña" required> <br> <br>
                 <label for="titulo" class="col-sm-3 control-label">comfirme_clave:  </label>

                 <input class="input" name="pass_guia_2" type="password" placeholder="&#x1F512;  Confirmar contraseña" required>

            <!-- Contenedor de botones del formulario -->
                 <div class="btn__form">
                   <!-- Boton actualizar -->
                <input class="btn__submit" name="actualizar_guia" type="submit" value="Actializar" id="boton1">
                 <!-- Boton de limpiar -->
                   <input class="btn__reset" type="reset" value="Limpiar" id="boton1">
                 </div>
         </form>
       </div>

       	</article>
     </div>
    </div>



<!-- link de codigo  jquery minimizado  -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<!-- link de  codigo bootstrap minimizado -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
<!-- hola -->
</html>

<?php
}else {
  echo "<script>alert('No tienes permiso para entrar en este sitio');</script>";
  echo "<script>window.location='index.php';</script>";
}
 ?>
<script>
	$(document).ready(function(){
		load(1);
	});
	function load(page){
    //funcion que envia a banner_ajax para cargar la pagina
		var parametros = {"action":"ajax","page":page};
		$.ajax({
			url:'./ajax/banner_ajax.php',
			data: parametros,
			 beforeSend: function(objeto){
			$("#loader").html("<img src='../img/ajax-loader.gif'>");
		  },
			success:function(data){
				$(".outer_div").html(data).fadeIn('slow');
				$("#loader").html("");
			}
		})
	}
	function eliminar_slide(id){
    //funcion que envia a banner_ajax para eliminar datos
		page=1;
		var parametros = {"action":"ajax","page":page,"id":id};
		if(confirm('Esta acción  eliminará de forma permanente  \n\n ¿Desea continuar?')){
		$.ajax({
			url:'./ajax/banner_ajax.php',
			data: parametros,
			 beforeSend: function(objeto){
			$("#loader").html("<img src='../images/ajax-loader.gif'>");
		  },
			success:function(data){
				$(".outer_div").html(data).fadeIn('slow');
				$("#loader").html("");
			}
		})
	}
	}
</script>
