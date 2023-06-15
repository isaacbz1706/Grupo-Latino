<?php include('header_datosYrec.php'); ?>
<?php include('session.php'); ?>
<?php include('index_header.php'); ?>



<body id="contenedor2">
    <?php include('navbar2.php'); ?>
    <div id="masthead">
        <div class="container">
            <br>
            <?php include('heading4.php'); ?>
        </div><!-- /cont -->

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-body">
                            <!--/stories-->
                            <div class="row">
                                <br>
                                <?php
                                    $get_id1 = $_GET['upd1'];
                                    $query = $conn->query("SELECT * FROM cat_sote WHERE id='$get_id1'");

                                    while($row = $query->fetch()){
                                    ?>
                                    <form action="modificarSot.php" method="POST" enctype="multipart/form-data">



                                    <br>
                                    <br>
                                    <div class="col-lg-10 mx-auto" class="form-control" id="InputMod">

                                        <div class="input-group input-group-lg" id="InputMod1">
                                            <span class="input-group-text text-white" id="basic-addon2">ID</span>
                                            <input type="text" name="id"
                                                placeholder="Ingresa el ID de la persona a la que se dece actualizar algun dato"
                                                required class="form-control" value="<?php echo $row['id'] ?>" readonly>
                                        </div>


                                        <div class="input-group input-group-lg">
                                            <span class="input-group-text text-white" id="basic-addon2"
                                                id="Modi">NOMBRE</span>
                                            <input type="text-dark" type="text" placeholder="Ingresa el nombre"
                                                name="nombre" class="form-control" id="Modi"
                                                value="<?php echo $row['nombre']?>">
                                        </div>
                                        <div class="input-group input-group-lg" id="InputMod">
                                            <span class="input-group-text text-white" id="basic-addon2"
                                                for="inputGroupSelect01"
                                                placeholder="Ingresa tu numero celurar">MEDIDA</span>
                                            <input type="text-dark" type="text" name="medida" class="form-control"
                                                id="Modi" value="<?php echo $row['medida']?>">
                                        </div>

                                        <div class="input-group input-group-lg" id="InputMod">
                                            <span class="input-group-text text-white" id="basic-addon2">POSICIÓN</span>
                                            <input type="text" name="posicion" placeholder="Ingresa la posición"
                                                class="form-control" value="<?php echo $row['posicion'] ?>">
                                        </div>

                                        <div class="input-group input-group-lg" id="InputMod">
                                            <span class="input-group-text text-white" id="basic-addon2">IMAGEN DE LA
                                                LLANTA</span>
                                            <input type="text" name="ImagenLla" placeholder="Ingresa tu numero celular"
                                                class="form-control" value="<?php echo $row['img_llanta'] ?>" readonly>
                                        </div>

                                        <div class="input-group input-group-lg" id="InputMod">
                                            <span class="input-group-text text-white" id="basic-addon2">PRECIO</span>
                                            <input type="text" name="precio"
                                                placeholder="Ingresa el nombre de tu empresa" class="form-control"
                                                value="<?php echo $row['precio'] ?>">
                                        </div>

                                        <div class="input-group input-group-lg" id="InputMod">
                                            <span class="input-group-text text-white" id="basic-addon2">SERVICIO</span>
                                            <input type="text" name="servicio"
                                                placeholder="Ingresa el nombre de tu empresa" class="form-control"
                                                value="<?php echo $row['servicio'] ?>">
                                        </div>

                                        <div class="input-group input-group-lg" id="InputMod">
                                            <span class="input-group-text text-white"
                                                id="basic-addon2">DESCRIPCION</span>
                                            <textarea type="text" name="descripcion"
                                                placeholder="Ingresa el nombre de tu empresa"
                                                class="form-control"> <?php echo $row['descripcion'] ?></textarea>
                                        </div>

                                        <div class="input-group input-group-lg" id="InputMod">
                                            <span class="input-group-text text-white" id="basic-addon2">IMAGEN DEL
                                                MODAL</span>
                                            <input type="text" name="ImagenMod"
                                                placeholder="Ingresa el nombre de tu empresa" class="form-control"
                                                value="<?php echo $row['img_modal'] ?>" readonly>
                                        </div>

                                        <div class="input-group input-group-lg" id="InputMod">
                                            <span class="input-group-text text-white" id="basic-addon2">MODAL</span>
                                            <input type="text" name="modal"
                                                placeholder="Ingresa el nombre de tu empresa" class="form-control"
                                                value="<?php echo $row['modal'] ?>" readonly>
                                        </div>


                                        <br>
                                        <?php } ?>


                                        <a href="CatalogoSot.php" class="btn btn-primary"><img src="iconos/back.png"
                                                width="20px" alt="" id="imback"> Regresar</a>
                                        <input type="submit" class="btn btn-warning" id="enviar" value="Enviar">


                                    </div>

                                </form>
                            </div>

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