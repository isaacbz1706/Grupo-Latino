<?php include('index_header.php'); ?>
<?php
include('dbcon.php');

$image = addslashes(file_get_contents($_FILES['image1']['tmp_name']));
		$image_name = addslashes($_FILES['image1']['name']);
		$image_size = getimagesize($_FILES['image1']['tmp_name']);
 
		move_uploaded_file($_FILES["image1"]["tmp_name"], "LLANTAS/CONTINENTAL" . $_FILES["image1"]["name"]);
		$ImagenLla = "LLANTAS/CONTINENTAL" . $_FILES["image1"]["name"];



$image2 = addslashes(file_get_contents($_FILES['ImagenMod']['tmp_name']));
		$image_name1 = addslashes($_FILES['ImagenMod']['name']);
		$image_size1 = getimagesize($_FILES['ImagenMod']['tmp_name']);
 
		move_uploaded_file($_FILES["ImagenMod"]["tmp_name"], "gifs/" . $_FILES["ImagenMod"]["name"]);
		$ImagenMod = "gifs/" . $_FILES["ImagenMod"]["name"];


$catalogo = $_POST['catalogo'];
$nombre = $_POST['nombre'];
$medida = $_POST['medida'];
$posicion = $_POST['posicion'];
$precio = $_POST['precio'];
$servicio = $_POST['servicio'];
$descripcion = $_POST['descripcion'];
$modal = $_POST['modal'];



$conn->query("INSERT INTO $catalogo (nombre ,medida ,posicion ,img_llanta ,precio , servicio, descripcion, img_modal, modal) values ('$nombre', '$medida', '$posicion'
,'$ImagenLla', '$precio' ,'$servicio' ,'$descripcion' ,'$ImagenMod' ,'$modal')")or die('<script> 
alert("Error al agregar llanta intentelo de nuevo"); 
location.href="CatalogoContinental.php"; </script>');

echo'<script type="text/javascript">
  alert("llanta agregada con exito con exito");
  window.location.href="CatalogoContinental.php";
  </script>';

  ?>