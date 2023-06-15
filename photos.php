<?php include('header_blog.php'); ?>
<?php include('dbcon.php');?>

<body>

    <?php include('navbar3.php'); ?>



    <div class="container">
        <div class="row">

            <div class="col-md-12">

                <div class="panel">
                    <div class="panel-body">

                        <h2 id="po">Galeria</h2>
                        <div class="pull-right">

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


                            </div> <br><br><br><br><br><br><br><br><br><br><br>

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