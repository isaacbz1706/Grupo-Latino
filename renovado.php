<?php include('header.php');?>

<body>
    <section id="FNeg2">
        <?php include('navbar.php');?>
        <img src="imagenes/renovadofranja.png" width="100%" alt="">
    </section>
    <section id="FNeg2">
        <h2 class="text-center text-white"><b><i>PROCESO DE RENOVADO:</i></b></h2>
        <div class="container" id="MarRenovado">
            <div class="row">
                <div class="col-sm">
                    <img src="renovado/inspeccion.jpg" id="ImgRenovado" alt="">
                </div>
                <div class="col-sm">
                    <img src="renovado/raspado.jpg" id="ImgRenovado" alt="">
                </div>
                <div class="col-sm">
                    <img src="renovado/cardeo.jpg" id="ImgRenovado" alt="">
                </div>
            </div>
        </div>

        <div class="container" id="MarRenovado">
            <div class="row">
                <div class="col-sm">
                    <img src="renovado/enbanndado.jpg" id="ImgRenovado" alt="">
                </div>
                <div class="col-sm">
                    <img src="renovado/renovado.jpg" id="ImgRenovado" alt="">
                </div>
                <div class="col-sm">
                    <img src="renovado/final.jpg" id="ImgRenovado" alt="">
                </div>
            </div>
        </div>

    </section>

    <!-- Section-->



    <!-- Header-->

    <!-- Cuerpo -->
    <br><br>

    <h1 class="m-0 text-center"><b><i>Opciones de renovado:</i></b></h1>

    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">

            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                <?php
                                    $query = $conn->query("SELECT * from cat_renovado");

                                    while($row = $query->fetch()){
                                    ?>

                <!-- 1 -->
                <div class="col mb-5">

                    <div class="card h-100" id="DetallesProductos">

                        <!-- Product image-->
                        <p class="text-center bg-light"><img class="card-img-top" id="ImagCat"
                                src="<?php echo $row['img_llanta'] ?>" alt="" /></p>
                        <!-- Product details-->
                        <div class="card-body p-4" id="DetallesProductos">
                            <div class="text-center">
                                <!-- Product name-->
                                <?php include('LogoMichelin.php');?>
                                <br>
                                <h5 class="text-white"> <?php echo $row['nombre'] ?></h5>
                                <!-- Product price-->
                                <p class="lead text-white">
                                    <b>Posición:</b> <?php echo $row['posicion'] ?> <br>
                                    <b>Profundidad:</b> <?php echo $row['profundidad'] ?> <br>
                                    <b>Servicio:</b><?php echo $row['servicio'] ?> <br>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#<?php echo $row['modal'] ?>"><b>Más información</b></button>

                                <!-- Modal -->
                                <div class="modal fade" id="<?php echo $row['modal'] ?>" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">
                                                    <?php echo $row['nombre'] ?></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Texto del modal -->
                                                <pre> <?php echo $row['descripcion'] ?>
                                                </pre>
                                                <!-- Imagen del modal -->
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cerrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                        }

                        ?>
                <!-- 2 -->
            </div>
        </div>
    </section>
    <!-- Footer-->
    <section id="footerRenovado">
        <div class="container-fluid">
            <p id="PCOnti" class="m-0 text-center text-white"><b><i>COTIZA TU RENOVADO MICHELIN<img
                            src="LOGOS/michelin.png" width="200px" alt=""></i></b></p>
                <p class="m-0 text-center text-white"><b>Copyright 2022 &copy; GRUPO LATINO </b></p>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
</body>

</html>