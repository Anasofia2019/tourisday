<?php
include 'conexion.php';

session_start();


$active_config="active";
$active_banner="active";

if (isset($_SESSION['guia'])) {
  $c_guia= $_SESSION['guia'];

  $consulta= mysqli_query($conexion,"SELECT * FROM tbl_guias WHERE cedula='$c_guia'");
  $datos= mysqli_fetch_array($consulta);
  ?>
<html lang="en" dir="ltr">
<head>

    <title>sitioguia</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- Latest compiled and minified CSS -->

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="http://localhost/touristday/misitioguia.php">
  <link rel="stylesheet" href="css/misitioguia.css">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="javascrypt/main.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <link rel="stylesheet"href="//code.query.com/ui/1.12.1/themes/base/jquery-ui.css">


</head>

<body style="background:   #bccde1    ;">




  <div class="wrap" >
		<ul class="tabs" >
			<li><a href="#tab1"><span class="glyphicon  glyphicon-user"></span><span class="tab-text">Inicio</span></a></li>
			<li><a href="#tab2"><span class="glyphicon  glyphicon-search"></span><span class="tab-text">Paquetes</span></a></li>
			<li><a href="#tab3"><span class="glyphicon  glyphicon-plus"></span><span class="tab-text">Añadir</span></a></li>
			<li><a href="#tab4"><span class="glyphicon glyphicon-star"></span><span class="tab-text">Mi información</span></a></li>


      <div class="dropdown">
 <button class="dropbtn" style="margin-top:13px; height:50px; width:50px; background: url(<?php echo $datos['foto_guia']; ?>); background-size: cover; border-radius:50%;"></button>
 <div class="dropdown-content">
   <a href="#">Configuracion</a>
   <a href="#">Ayuda</a>
   <a href="cerrar.php">Salir</a>
 </div>
</div>
  </ul>
	<div class="secciones">

			<article id="tab1">
        <img src="img/welcome.svg" alt="" height="120px;" width="300px" id="welcome">
        <center><h1 id="titulo_tab1">Bienvenido apreciado guía</h1>
        <div class="contenedor_inicio">
          <img src="img/ban1.jpg" alt="">

        </div>



      </article>
      <br>
			<article id="tab2">
        <img src="img/paket.svg" alt="" height="200px">
				<h2 id="titulo_paquete">Mis paquetes</h2>

        <?php
        $paquetes=mysqli_query($conexion,"SELECT * FROM tbl_paquetes WHERE cedula='$c_guia'");
        $cont=mysqli_num_rows($paquetes);
        $i=0;
        ?>
        <br><br><br><br>

        <div class="row">
			  <div class="col-xs-12 text-right">
			  </div>

			</div>
      <div id="loader" class="text-center"> <span><img src="./img/ajax-loader.gif"></span></div>
		  <div class="outer_div"></div>




        <?php

        while ($cont>$i) {
          $rowss=mysqli_fetch_array($paquetes);
          ?>
          <!-- Este div es el de los cuadritos azules que usted quiere poner pero hay que organizarlo. Te amo mi amor <3 -->
          <div class="paquetes_guia">

            <input type="text" name="" value="<?php echo $rowss['nombre_paquete']; ?>">
            <input type="text" name="" value="<?php echo $rowss['categoria']; ?>">
            <input type="text" name="" value="<?php echo $rowss['municipio']; ?>">
            <input type="text" name="" value="<?php echo $rowss['descripcion']; ?>">

              <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Eliminar paquete
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">¡Desea eliminar el paquete?</h5>
        <form class="" action="codigo_eliminar.php" method="post">
          <input type="submit" name="btn_eliminar_paquete" value="Si">
          <input  type="hidden" name="id_paq" value="<?php echo $rowss['id_paquete']; ?>" >
        </form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
    </div>
  </div>
</div>
          </div>
          <br><br><br><br>
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

<iframe name=miframeflotante src="anadirpaquete.php" width=990 height=550 frameborder="0" scrolling=yes marginwidth=2 marginheight=4 style="margin-left:-25%;margin-top:100px;" ></iframe>
      </article>

			<article id="tab4">
        <img src="img/candado.svg" alt="" id="imagen_cambiar">

        <div class="contenedor_registro" id="cambiar_info">
        <div class="caja_registro" style="">
        <div class="form__top">


     <div class="tilin" >  <h2><span class="t1">Cambiar mi información</span></h2><div>
         </div>
         <form class="form__reg" action="codigo_actualizar.php" method="post">
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


                 <div class="btn__form">
                <input class="btn__submit" name="actualizar_guia" type="submit" value="Actializar" id="boton1">
                   <input class="btn__reset" type="reset" value="Limpiar" id="boton1">
                 </div>
         </form>
       </div>

       	</article>
     </div>
    </div>




<script src="http://code.jquery.com/jquery-latest.js"></script>
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
		page=1;
		var parametros = {"action":"ajax","page":page,"id":id};
		if(confirm('Esta acción  eliminará de forma permanente el banner \n\n Desea continuar?')){
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
