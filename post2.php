<?php
include('dbcon.php');
include('session.php');
$content = $_POST['content'];
$conn->query("insert into post (content,date_posted,member_id) values('$content',NOW(),'$session_id')") or die('<script> 
alert("Su estado no fue publicado"); 
location.href="home.php"; </script>');

echo'<script>
			alert("Estado publicado con exito");
			location.href="home.php";
		</script>'
        ?>