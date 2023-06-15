<?php include('header_navbar.php'); ?>
<?php include('session.php'); ?>

<body id="contenedor2">
    <?php include('navbar2.php'); ?>

    <div>
        <div class="container">
            <?php include('heading.php'); ?>
        </div><!-- /cont -->

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-spacer"> </div>
                </div>
            </div>
        </div><!-- /cont -->

    </div>


    <div class="container">
        <div class="row">

            <div class="col-md-12">

                <div class="panel">
                    <div class="panel-body">

                        <h2 id="po">Mis Fotos</h2>
                        <br><br><br> <br><br>
                        <div class="pull-right">
                            <form id="photos" method="POST" enctype="multipart/form-data">

                                <label class="control-label" for="input01">Imagen:</label>

                                <input type="file" name="image" class="font" required>


                                <br><button type="submit" name="submit" class="btn btn-success"><i
                                        class="icon-upload"></i> Subir Foto</button>

                            </form>
                            <br><br>
                            <div id="SubFoto">
                                <?php 
								if (isset($_POST['submit'])) {
 
		$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$image_name = addslashes($_FILES['image']['name']);
		$image_size = getimagesize($_FILES['image']['tmp_name']);
 
		move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
		$location = "upload/" . $_FILES["image"]["name"];
		$conn->query("insert into photos (location,member_id) values ('$location','$session_id')");
	?>
                                <script>
                                window.location = 'photos2.php';
                                </script>
                                <?php
	}
	?>
                            </div>

                        </div>

                        <div class="row">
                            <hr>
                            <hr>

                            <?php
				
	$query = $conn->query("select * from photos LEFT JOIN members on members.member_id = photos.member_id order by photos_id DESC");
	while($row = $query->fetch()){
		$posted_by = $row['firstname']." ".$row['lastname'];
		$posted_image = $row['image'];
	$id = $row['photos_id'];

	?>

                            <div class="col-md-2 col-sm-3 text-center" id="Photos">
                                <img class="photo" id="galeria" src="<?php echo $row['location']; ?>">
                                <div class="row">

                                    <small style="font-family:courier,'new courier';" class="text-muted">Publicado
                                        por:<a href="#" class="text-muted"><?php echo $posted_by; ?></a></small>
                                    </h4>
                                </div>
                                <hr>

                                <a class="btn btn-danger" href="delete_photos2.php<?php echo '?id='.$id; ?>"><i
                                        class="icon-remove"></i> Eliminar</a>
                            </div>
                            <br><br><br><br><br><br><br><br><br><br><br>
                            <?php } ?>
                        </div>
                        <hr>








                    </div>
                </div>



            </div>
            <!--/col-12-->
        </div>
    </div>


    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">GRUPO LATINO 2022 &copy; </p>
        </div>
        <!-- /.container -->
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>

</body>

</html>