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
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-body">
                        <!--/stories-->
                        <div class="row">
                            <br>
                            <br>
                            <div class="table-responsive-md">
                                <br>
                                <br>
                                <table class="table table-bordered table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Puesto</th>
                                            <th scope="col">Edad</th>
                                            <th scope="col">Telefono</th>
                                            <th scope="col">Correo</th>
                                            <th scope="col">CV</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                    </thead>

                                    <?php
                                    $query = $conn->query("select * from reclutamiento");

                                    while($row = $query->fetch()){
                                    ?>

                                    <tbody>
                                        <tr>
                                            <td><?php echo $row['id'] ?></td>
                                            <td><?php echo $row['nombre'] ?></td>
                                            <td><?php echo $row['puesto'] ?></td>
                                            <td><?php echo $row['edad'] ?></td>
                                            <td><?php echo $row['telefono'] ?></td>
                                            <td><?php echo $row['email'] ?></td>
                                            <td><?php echo $row['cv'] ?></td>
                                            <td><a href="Modificar_Reclutamiento.php?upd=<?=$row['id'];?>" class="btn btn-warning"><img
                                                        src="iconos/lapiz.png" width="25px" alt=""></a>

                                                <a href="delete_reclutamiento.php?id=<?php echo $row['id'];?>"
                                                    class="btn btn-danger"><img width="25px" src="iconos/basura.png" alt=""></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php 
                                    }

                                    ?>
                                </table>
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