<?php
include('dbcon.php');
$get_id = $_GET['id'];
$conn->query("DELETE from cat_gt where id='$get_id'");
echo'<script type="text/javascript">
  alert("Llanta eliminada con exito del catalogo de General Tire");
  window.location.href="CatalogoGT.php";
  </script>';?>