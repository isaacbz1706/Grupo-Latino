<?php include('header.php');?>
<?php include('dbcon.php');?>

<body id="index">

    <!-- Navegacion-->
    <?php include('navbar.php')?>
    <!-- Cuerpo-->
    <!-- Carrusel -->

    <div class="container mt-5">
        <div class="col-12">



            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Buscador</h4>


                            <form method="get" action="">
                                <div class="col-12 row">

                                    <div class="mb-3">
                                        <label class="form-label">Nombre de la llanta buscar</label>
                                        <input type="text" class="form-control" id="buscar" name="buscar">
                                    </div>

                                    <h4 class="card-title">Filtro de búsqueda</h4>

                                    <div class="col-11">

                                        <table class="table">
                                            <thead>
                                                <tr class="filters">
                                                    <th>
                                                        Marca
                                                        <select id="assigned-tutor-filter" id="buscademarca"
                                                            name="buscademarca" class="form-control mt-2"
                                                            style="border: #bababa 1px solid; color:#000000;">
                                                            <option value="">Todos</option>
                                                            <option value="cat_conti">Contiental</option>
                                                            <option value="cat_gt">General Tire</option>
                                                            <option value="cat_sailun">Sailun</option>
                                                            <option value="cat_sumi">Sumitomo</option>
                                                            <option value="cat_sote">Sotera</option>
                                                        </select>
                                                    </th>

                                                    <th>
                                                        Medida:
                                                        <select id="assigned-tutor-filter" id="buscamedida"
                                                            name="buscamedida" class="form-control mt-2"
                                                            style="border: #bababa 1px solid; color:#000000;">
                                                            <option value="">Todos</option>
                                                            <option value="11R24.5">11R24.5</option>
                                                            <option value="11R22.5">11R22.5</option>
                                                            <option value="295/75R22.5">295/75R22.5</option>
                                                            <option value="285/75R24.5">285/75R24.5</option>
                                                            <option value="295/80R22.5">295/80R22.5</option>
                                                            <option value="315/80R22.5">315/80R22.5</option>
                                                            <option value="215/75R17.5">215/75R17.5</option>
                                                            <option value="315/80R22.5">315/80R22.5</option>
                                                            <option value="275/80R22.5">275/80R22.5</option>
                                                            <option value="225/70R19.5">225/70R19.5</option>
                                                            <option value="245/70R19.5">245/70R19.5</option>
                                                            <option value="285/75R22.5">285/75R22.5</option>
                                                        </select>
                                                    </th>
                                                    <th>
                                                        Posición:
                                                        <select id="assigned-tutor-filter" id="buscaposicion"
                                                            name="buscaposicion" class="form-control mt-2"
                                                            style="border: #bababa 1px solid; color:#000000;">
                                                            <option value="">Todos</option>
                                                            <option value="Toda PosiciÃ³n">Toda Posición</option>
                                                            <option value="TracciÃ³n">Tracción</option>
                                                            <option value="Remolque">Remolque</option>
                                                        </select>
                                                    </th>
                                                    <th>
                                                        Servicio:
                                                        <select id="subject-filter" id="servicio" name="servicio"
                                                            class="form-control mt-2"
                                                            style="border: #bababa 1px solid; color:#000000;">
                                                            <option value="">Todos</option>
                                                            <option value="Regional/Largo trayecto ">Regional/Largo
                                                                trayecto
                                                            </option>
                                                            <option value="Regional">Regional</option>
                                                            <option value="Largo trayecto">Largo trayecto </option>
                                                            <option value="Mixto">Mixto</option>
                                                            </option>
                                                        </select>
                                                    </th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>

                                    <div class="col-1">
                                        <input type="submit" class="btn" name="enviar" value="Ver"
                                            style="margin-top: 38px; background-color: purple; color: white;">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <h1 class="text-white"><b><i>Resultados:</i></b></h1>

    <div class="table-responsive-xl text-center">
        <br>
        <table class="table table-bordered table table-striped">
            <thead>
                <tr class="bg-primary">
                    <th scope="col" class=" text-center text-white">ID</th>
                    <th scope="col" class=" text-center text-white">Nombre</th>
                    <th scope="col" class=" text-center text-white">Medida</th>
                    <th scope="col" class=" text-center text-white">Posición</th>
                    <th scope="col" class=" text-center text-white">Precio</th>
                    <th scope="col" class=" text-center text-white">Servicio</th>
                    <th scope="col" class=" text-center text-white">Descripción</th>
                    <th scope="col" class=" text-center text-white">Opciones</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

    <br><br>

    <footer class="py-5">
        <div class="container">
            <h3 class="m-0 text-center text-white"><b>GRUPO LATINO 2022 &copy; </b></h3>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
    </script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>