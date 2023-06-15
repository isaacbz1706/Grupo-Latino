<?php include('index_header.php'); ?>
<?php
include('dbcon.php');
$nombre = $_POST['nombre'];
$medida = $_POST['medida'];
$posicion = $_POST['posicion'];
$ImagenLla = $_POST['ImagenLla'];
$precio = $_POST['precio'];
$servicio = $_POST['servicio'];
$descripcion = $_POST['descripcion'];
$ImagenMod = $_POST['ImagenMod'];
$modal = $_POST['modal'];
$id = $_POST['id'];


$conn->query("UPDATE cat_sote SET nombre = '$nombre',medida = '$medida',posicion = '$posicion',img_llanta = '$ImagenLla',
precio = '$precio', servicio = '$servicio', descripcion = '$descripcion', img_modal = '$ImagenMod', modal = '$modal' WHERE id='$id'") or die('<script> 
alert("Error al actualizar datos del catalago de Sotera"); 
location.href="CatalogoSot.php"; </script>');

echo'<script type="text/javascript">
  alert("Dato actualizado con exito del catalago de Sotera");
  window.location.href="CatalogoSot.php";
  </script>';