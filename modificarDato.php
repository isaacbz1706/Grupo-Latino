<?php include('index_header.php'); ?>
<?php
include('dbcon.php');
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$empresa = $_POST['empresa'];
$id = $_POST['id'];


$conn->query("UPDATE contactos SET nombre = '$nombre',email = '$email',telefono = '$telefono',empresa = '$empresa' WHERE id='$id'") or die('<script> 
alert("Error al enviar datos de reclutamiento"); 
location.href="datos.php"; </script>');

echo'<script type="text/javascript">
  alert("Datos actualizado con exito");
  window.location.href="datos.php";
  </script>';

?>