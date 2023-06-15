<?php
include('dbcon.php');
$username = $_POST['username'];
$password = $_POST['password'];

$query = $conn->query("select * from members where username = '$username' and password = '$password'");
$count = $query->rowcount();
$row = $query->fetch();
if ($count > 0){
      session_start();
      $_SESSION['id'] = $row['member_id'];
  if($row['rol'] == '1'){
      
      echo'<script type="text/javascript">
      alert("Bienvenido al sistema de publicaciones Juan Carlos");
      window.location.href="home.php";
      </script>';
  }
  else{
    if($row['rol'] == '2'){
      echo'<script type="text/javascript">
      alert("Bienbenido al sistema de publicaciones Ing. Evia");
      window.location.href="home.php";
      </script>';
    }
    else{
      if($row['rol'] == '3'){
      
        echo'<script type="text/javascript">
        alert("Bienvenido al sistema de publicaciones Administrador");
        window.location.href="home.php";
        </script>';
    }else{
      if($row['rol'] == '4'){
      
        echo'<script type="text/javascript">
        alert("Bienvenido al sistema de publicaciones Priscila");
        window.location.href="home.php";
        </script>';
    }else{
      if($row['rol'] == '5'){
      
        echo'<script type="text/javascript">
        alert("Bienvenido al sistema de publicaciones Karla");
        window.location.href="home.php";
        </script>';
    }else{
         if($row['rol'] == '6'){
      
        echo'<script type="text/javascript">
        alert("Bienvenido al sistema de publicaciones Nayeli");
        window.location.href="home.php";
        </script>';
      }else{
        if($row['rol'] == '7'){
     
       echo'<script type="text/javascript">
       alert("Bienvenido al sistema de publicaciones Fernanda");
       window.location.href="home.php";
       </script>';
   }
    }
    }
    }
    }
    }
    }
  
  }
 
else{
 echo'<script type="text/javascript">
  alert("Verificar su usuario y contraseña");
  window.location.href="login.php";
  </script>';

}
?>