<?php
include('dbcon.php');
$get_id = $_GET['id'];
$conn->query("DELETE from cat_renovado where id='$get_id'");
echo'<script type="text/javascript">
  alert("Opción de renovado eliminada con exito");
  window.location.href="CatalogoReno.php";
  </script>';?>