<?php include('index_header.php'); ?>
<?php
include('dbcon.php');
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];

$cv = $_FILES['cv']['name'];
$guardado = $_FILES['cv']['tmp_name'];
$ext =pathinfo($cv,PATHINFO_EXTENSION);




if(!file_exists('archivos')){
    mkdir('archivos',0777,true);
    if(file_exists('archivos')){
        if(move_uploaded_file($guardado,'archivos/'.$cv)){

            echo '<script>
			alert("CV enviado con exito");
			location.href="index.php";
		</script>';

        }else{
            echo '<script>
			alert("Error al subir CV");
			location.href="index.php";
		</script>';
        }
    }
}else{
    if(move_uploaded_file($guardado,'archivos/'.$cv)){

        echo '<script>
        alert("CV enviado con exito");
        location.href="index.php";
    </script>';

    }else{
        echo '<script>
        alert("Error al subir CV");
        location.href="index.php";
    </script>';
    }
    
    
}

$conn->query("insert into reclutamiento (nombre,puesto,edad,telefono,email,cv) values ('$nombre','$puesto','$edad','$telefono','$email','$cv')") or die('<script> 
alert("Error al enviar datos de reclutamiento"); 
location.href="index.php"; </script>');

echo '<script>
			alert("Datos de reclutamiento enviados con exito");
			location.href="index.php";
		</script>'
?>