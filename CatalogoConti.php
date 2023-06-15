<?php include('header.php');?>

<body>

    <?php include('navbar.php');?>

    <section id="ImgContiVale">
    <h3 class="text-center"><img src="images/contiPromo.png" id="Contivaleimg" alt=""></h3>
   </section>
   
    <section id="fondoNegro">
        <!-- Promocion-->
        <div class="container">
            <p class="lead fw-normal text-white-50 mb-0"><img src="imagenes/PromoConti.jpg" alt="" id="promocion"></p>
        </div>
    </section>



    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                <?php
                                    $query = $conn->query("SELECT * from cat_conti");

                                    while($row = $query->fetch()){
                                    ?>

                <!-- 1 -->
                <div class="col mb-5">

                    <div class="card h-100" id="DetallesProductos">

                        <!-- Product image-->
                        <p class="text-center bg-light"><img class="card-img-top" id="ImagCat"
                                src="<?php echo $row['img_llanta'] ?>" alt="" /></p>
                        <!-- Product details-->
                        <br>
                        <div class="card-body p-4" id="DetallesProductos">
                                                   
                        <div class="text-center">
                                <!-- Product name-->
                                <h5 class="text-white"><b><?php echo $row['nombre'] ?></b></h5>
                                <?php include('LogoConti.php');?>
                                <!-- Product price-->
                                <p class="lead text-white"><b>Medida:</b> "<?php echo $row['medida'] ?>"<br>
                                    <b>Posición:</b><?php echo $row['posicion'] ?> <br>
                                    <b>Servicio:</b> <?php echo $row['servicio'] ?><br>
                                    <b>Precio: </b><?php echo $row['precio'] ?>
                                </p>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#<?php echo $row['modal'] ?>"><b>Más información</b></button>

                                <!-- Modal -->
                                <div class="modal fade" id="<?php echo $row['modal'] ?>" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Descripción</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Texto del modal -->
                                                <h3><?php echo $row['descripcion'] ?></h3>
                                                <!-- Imagen del modal -->
                                                <img src="<?php echo $row['img_modal'] ?>" alt="" class="card-img-top">
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
            </div>
        </div>

    </section>

    <!-- footer -->

    <section id="footerConti">
        <div class="container-fluid">
            <p id="PCOnti" class="m-0 text-center text-white"><b><i>COTIZA TUS LLANTAS CONTINENTAL <img
                            src="iconos/CaballoConti.png" width="50px" alt=""></i></b></p>
                            <p class="m-0 text-center text-white"><b>Copyright 2022 &copy; GRUPO LATINO </b></p>
        </div>
    </section>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>