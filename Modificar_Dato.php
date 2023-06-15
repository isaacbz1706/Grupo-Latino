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
                                    $get_id = $_GET['upd'];
                                    $query = $conn->query("select * from contactos where id='$get_id'");

                                    while($row = $query->fetch()){
                                    ?>
                                <form action="modificarDato.php" method="POST" enctype="multipart/form-data">

                                

                                    <br>
                                    <br>
                                    <div class="col-lg-10 mx-auto">

                                        <div class="input-group input-group-lg" id="InputMod1">
                                            <span class="input-group-text text-white" id="basic-addon2" >ID</span>
                                            <input type="text" name="id"
                                                placeholder="Ingresa el ID de la persona a la que se dece actualizar algun dato"
                                                required class="form-control"  value="<?php echo $row['id'] ?>" readonly>
                                        </div>

                                        <div class="input-group input-group-lg">
                                            <span class="input-group-text text-white" id="basic-addon2"
                                                id="Modi">NOMBRE</span>
                                            <input type="text-dark" type="text" placeholder="Ingresa un nombre"
                                                name="nombre" class="form-control" id="Modi" value="<?php echo $row['nombre']?>">
                                        </div>
                                        <div class="input-group input-group-lg" id="InputMod">
                                            <span class="input-group-text text-white" id="basic-addon2"
                                                for="inputGroupSelect01"
                                                placeholder="Ingresa el nuevo correo electronico">Correo</span>
                                            <input type="text-dark" type="text" name="email" class="form-control" id="Modi"
                                            value="<?php echo $row['email']?>">
                                        </div>

                                        <div class="input-group input-group-lg" id="InputMod">
                                            <span class="input-group-text text-white" id="basic-addon2">Teléfono</span>
                                            <input type="number" name="telefono" placeholder="Ingresa el nuevo numero de telefono"
                                                class="form-control" value="<?php echo $row['telefono'] ?>">
                                        </div>

                                        <div class="input-group input-group-lg" id="InputMod">
                                            <span class="input-group-text text-white" id="basic-addon2">Empresa</span>
                                            <input type="text" name="empresa" placeholder="Ingresa el nombre de la empresa"
                                                class="form-control" value="<?php echo $row['empresa'] ?>">
                                        </div>

                                        <br>
                                        <?php } ?>

                                    
                                        <a  href="datos.php" class="btn btn-primary"><img src="iconos/back.png" width="20px" alt="" id="imback"> Regresar</a>
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