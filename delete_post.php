<?php
include('dbcon.php');
$get_id = $_GET['id'];
$conn->query("delete from post where post_id='$get_id'");
echo'<script type="text/javascript">
  alert("Publicacion eliminada con exito");
  window.location.href="home.php";
  </script>';?>