<div class="row">
      <div class="col-md-2">
		<hr>
		<center><img class="pp" src="<?php echo $image; ?>" height="140" width="160"></center>
		<hr>
		<a class="btn btn-success" href="change_pic.php">Cambiar Foto de Perfil</a>
      </div>
		<div class="col-md-5">
			<hr>
			<p>Información Personal</p>
				<?php
			$query = $conn->query("select * from members where member_id = '$session_id'");
			$row = $query->fetch();
			$id = $row['member_id'];
			?>
			<hr>
			<p>Nombre: <?php echo $row['firstname']." ".$row['lastname']; ?><span class="margin-p"> </span>Puesto: <?php echo $row['gender']; ?></p>
			<hr>
			<p>Dirección: <?php echo $row['address']; ?></p>
			<hr>
		</div>
      <div class="col-md-8">
			<form method="post" action="post2.php">
						<textarea name="content" placeholder="¿Que estas pensando?"></textarea>
						<br>
						<hr>
						<button class="btn btn-success"><i class="icon-share"></i> Compartir </button>
			</form>
      </div>
    </div> 