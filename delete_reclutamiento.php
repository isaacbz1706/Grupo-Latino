<?php
include('dbcon.php');
$get_id = $_GET['id'];
$conn->query("DELETE from reclutamiento where id='$get_id'");
echo'<script type="text/javascript">
  alert("Datos de reclutamiento eliminados con exito");
  window.location.href="reclutamiento.php";
  </script>';?>