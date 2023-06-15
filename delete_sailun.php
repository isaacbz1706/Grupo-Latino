<?php
include('dbcon.php');
$get_id = $_GET['id'];
$conn->query("DELETE from cat_sailun where id='$get_id'");
echo'<script type="text/javascript">
  alert("Llanta eliminada con exito del catalogo de Sailun");
  window.location.href="CatalogoSai.php";
  </script>';?>