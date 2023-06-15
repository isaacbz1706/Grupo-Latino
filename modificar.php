<?php include('index_header.php'); ?>
<?php
include('dbcon.php');
$nombre = $_POST['nombre'];
$puesto = $_POST['puesto'];
$edad = $_POST['edad'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$id = $_POST['id'];


$conn->query("UPDATE reclutamiento SET nombre = '$nombre',puesto = '$puesto',edad = '$edad',telefono = '$telefono',email = '$email' WHERE id='$id'") or die('<script> 
alert("Error al enviar datos de reclutamiento"); 
location.href="reclutamiento.php"; </script>');

echo'<script type="text/javascript">
  alert("Dato actualizado con exito");
  window.location.href="reclutamiento.php";
  </script>';

?>