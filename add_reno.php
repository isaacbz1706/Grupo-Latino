<?php include('index_header.php'); ?>
<?php
include('dbcon.php');

$image = addslashes(file_get_contents($_FILES['img_llanta']['tmp_name']));
		$image_name = addslashes($_FILES['img_llanta']['name']);
		$image_size = getimagesize($_FILES['img_llanta']['tmp_name']);
 
		move_uploaded_file($_FILES["img_llanta"]["tmp_name"], "renovado/" . $_FILES["img_llanta"]["name"]);
		$ImagenLla = "renovado/" . $_FILES["img_llanta"]["name"];



        $nombre = $_POST['nombre'];
        $posicion = $_POST['posicion'];
        $profundidad = $_POST['profundidad'];
        $servicio = $_POST['servicio'];
        $modal = $_POST['modal'];
        $descripcion = $_POST['descripcion'];
        
        
        $conn->query("INSERT INTO cat_renovado (nombre,posicion,profundidad,servicio,modal,descripcion,img_llanta) values('$nombre','$posicion'
        ,'$profundidad','$servicio','$modal','$descripcion','$ImagenLla')") or die('<script> 
        alert("Error al agregar un nuevo renovado"); 
        location.href="CatalogoReno.php"; </script>');
        
        echo'<script type="text/javascript">
          alert("Un nuevo renovado se agregado al catalogo");
          window.location.href="CatalogoReno.php";
          </script>';

  ?>