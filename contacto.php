<?php include('index_header.php'); ?>
<?php
include('dbcon.php');
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$empresa = $_POST['empresa'];
$conn->query("insert into contactos (nombre,email,telefono,empresa) values ('$nombre','$email','$telefono','$empresa')") or die('<script> 
alert("Error al enviar datos"); 
location.href="index.php"; </script>');

echo '<script>
			alert("Datos enviados con exito");
			location.href="index.php";
		</script>'
?>

