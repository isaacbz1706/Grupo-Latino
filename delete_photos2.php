<?php
include('dbcon.php');
$get_id = $_GET['id'];
$conn->query("delete from photos where photos_id='$get_id'");
echo'<script type="text/javascript">
  alert("Foto eliminada con exito");
  window.location.href="photos2.php";
  </script>';
  ?>