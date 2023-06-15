<?php
include('dbcon.php');
$get_id = $_GET['id'];
$conn->query("DELETE from contactos where id='$get_id'");
echo'<script type="text/javascript">
  alert("Contacto eliminado con exito");
  window.location.href="datos.php";
  </script>';?>