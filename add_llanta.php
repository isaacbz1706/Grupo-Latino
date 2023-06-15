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

                                <form action="add_llanta2.php" method="POST" enctype="multipart/form-data">
                                    <br>
                                    <br>

                                    <div class="col-lg-10 mx-auto" class="form-control" id="InputMod">
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-text text-white" id="basic-addon2"
                                                id="Modi">SELECCIONA UN CATALOGO</span>
                                            <select type="text-dark" type="text" class="form-control" id="Modi"
                                                name="catalogo">
                                                <option value="cat_conti">Contiental</option>
                                                <option value="cat_gt">General Tire</option>
                                                <option value="cat_sailun">Sailun</option>
                                                <option value="cat_sumi">Sumitomo</option>
                                                <option value="cat_sote">Sotera</option>
                                            </select>
                                        </div>

                                        <div class="input-group input-group-lg" id="InputMod">
                                            <span class="input-group-text text-white" id="basic-addon2"
                                                for="inputGroupSelect01">NOMBRE</span>
                                            <input type="text-dark" type="text" placeholder="Ingresa el nombre"
                                                name="nombre" class="form-control" id="Modi">
                                        </div>

                                        <div class="input-group input-group-lg" id="InputMod">
                                            <span class="input-group-text text-white" id="basic-addon2"
                                                for="inputGroupSelect01">MEDIDA</span>
                                            <input type="text-dark" type="text" placeholder="Ingresa la medida"
                                                name="medida" class="form-control" id="Modi">
                                        </div>

                                        <div class="input-group input-group-lg" id="InputMod">
                                            <span class="input-group-text text-white" id="basic-addon2">POSICIÓN</span>
                                            <input type="text" name="posicion" placeholder="Ingresa la posición"
                                                class="form-control">
                                        </div>

                                        <div class="input-group input-group-lg" id="InputMod">
                                            <span class="input-group-text text-white" id="basic-addon2">IMAGEN DE LA
                                                LLANTA</span>
                                            <input type="file" name="image1"
                                                placeholder="Ingresa la imagen de la llanta" class="form-control">
                                        </div>

                                        <div class="input-group input-group-lg" id="InputMod">
                                            <span class="input-group-text text-white" id="basic-addon2">PRECIO</span>
                                            <input type="text" name="precio"
                                                placeholder="Ingresa el precio de la llanta" class="form-control">
                                        </div>

                                        <div class="input-group input-group-lg" id="InputMod">
                                            <span class="input-group-text text-white" id="basic-addon2">SERVICIO</span>
                                            <input type="text" name="servicio"
                                                placeholder="Ingresa el servicio correspondiente" class="form-control">
                                        </div>

                                        <div class="input-group input-group-lg" id="InputMod">
                                            <span class="input-group-text text-white"
                                                id="basic-addon2">DESCRIPCION</span>
                                            <textarea type="text" name="descripcion"
                                                placeholder="Ingresa la descripción" class="form-control"> </textarea>
                                        </div>

                                        <div class="input-group input-group-lg" id="InputMod">
                                            <span class="input-group-text text-white" id="basic-addon2">IMAGEN DEL
                                                LA DESCRIPCION</span>
                                            <input type="file" name="ImagenMod" class="form-control">
                                        </div>

                                        <div class="input-group input-group-lg" id="InputMod">
                                            <span class="input-group-text text-white" id="basic-addon2">ID DE
                                                DESCRIPCIÓN (catalogo + numero)</span>
                                            <input type="text" name="modal" class="form-control"
                                                placeholder="Ejemplo: Continental1">
                                        </div>


                                        <br>



                                        <a href="CatalogoContinental.php" class="btn btn-primary"><img
                                                src="iconos/back.png" width="20px" alt="" id="imback"> Regresar</a>
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