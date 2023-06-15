<?php include('index_header.php'); ?>
<?php
include('dbcon.php');
$nombre = $_POST['nombre'];
$posicion = $_POST['posicion'];
$profundidad = $_POST['profundidad'];
$servicio = $_POST['servicio'];
$modal = $_POST['modal'];
$descripcion = $_POST['descripcion'];
$img_llanta = $_POST['img_llanta'];
$id = $_POST['id'];


$conn->query("UPDATE cat_renovado SET nombre = '$nombre',posicion = '$posicion',img_llanta = '$img_llanta',
profundidad = '$profundidad', servicio = '$servicio', modal = '$modal', descripcion = '$descripcion' WHERE id='$id'") or die('<script> 
alert("Error al actualizar datos del catalago de Renovado"); 
location.href="CatalogoReno.php"; </script>');

echo'<script type="text/javascript">
  alert("Dato actualizado con exito del catalago de Renovado");
  window.location.href="CatalogoReno.php";
  </script>';