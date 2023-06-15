<?php include('header_datosYrec.php'); ?>
<?php include('session.php'); ?>

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
                    <div class="top-spacer"> </div>
                </div>
            </div>
        </div><!-- /cont -->
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm">
            </div>
            <div class="col-lg-14">
                <?php  include('navcat.php')?>
            </div>
            <div class="col-sm">
            </div>
            <div class="col-lg-14">
                <div class="panel">

                    <br><br>
                    <div class="container">
                        <div class="panel-body">
                            <!--/stories-->

                            <h3><b><i>Catalogo Continental:</i></b></h3>


                            <div class="table-responsive-xl text-center">
                                <br>
                                <table class="table table-bordered table-dark table-striped">
                                    <br>
                                    <thead>
                                        <tr>
                                            
                                            <th scope="col">ID</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Medida</th>
                                            <th scope="col">Posición</th>
                                            <th scope="col">Precio</th>
                                            <th scope="col">Servicio</th>

                                        </tr>
                                    </thead>

                                    <?php
                                    $query = $conn->query("select * from cat_conti");

                                    while($row = $query->fetch()){
                                    ?>

                                    <tbody>
                                        <tr>
                                            <td><?php echo $row['id'] ?></td>
                                            <td><?php echo $row['nombre'] ?></td>
                                            <td><?php echo $row['medida'] ?></td>
                                            <td><?php echo $row['posicion'] ?></td>
                                            <td><?php echo $row['precio'] ?></td>
                                            <td><?php echo $row['servicio'] ?></td>
                                            <td><?php echo $row['descripcion'] ?></td>
                                            <td><a href="Modificar_Cat_Conti.php?upd1=<?=$row['id'];?>"
                                                    class="btn btn-warning"><img src="iconos/lapiz.png" width="25px"
                                                        alt=""></a>

                                                <a href="delete_conti.php?id=<?php echo $row['id'];?>"
                                                    class="btn btn-danger"><img width="25px" src="iconos/basura.png"
                                                        alt=""></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php 
                                    }

                                    ?>
                                </table>
                            </div>


                            <hr>
                        </div>
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