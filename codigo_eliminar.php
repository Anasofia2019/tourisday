<?php
include 'conexion.php';

if (isset($_POST['btn_eliminar_paquete'])) {
  $id_p=$_POST['id_paq'];
  $query_eliminar=mysqli_query($conexion,"DELETE FROM tbl_especificaciones_paquete WHERE id_paquete='$id_p'") or die ('error al eliminar');
  echo "<script>alert('Eliminacion exitosa');</script>";
  echo "<script>window.location='misitioguia.php';</script>";
}

 ?>
