<?php include('login_header.php');?>
<?php include('dbcon.php');?>


</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <div class="container2">
                        <div class="row">
                            <div class="col">
                                <img src="imagenes/GL.jpg" alt="" width="50px" height="80px">
                            </div>
							<div class="col">
								
							</div>
                            <div class="col">
                                <p class="text-end"><img src="imagenes/Lubricantes.jpg " alt="" width="80px"height="60px"></p>
                            </div>
                        </div>
                    </div>
                    <h3><b>Bienvenido</b></h3>
                    <div class="d-flex justify-content-end social_icon">
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="validar.php">
                        <h4 class="text-white"> <b>Usuario</b> </h4>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input class="form-control" id="username" name="username" required="required" type="text"
                                placeholder="Nombre de Usuario">

                        </div>
                        <br>
                        <h4 class="text-white"> <b>Contraseña</b> </h4>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input id="password" name="password" required="required" type="password"
                                class="form-control" placeholder="Contraseña">
                        </div>
                        <div class="row align-items-center remember">
                        </div>
                        <div class="form-group">
                            <b><input type="submit" value="Ingresar" class="btn float-right login_btn"></b>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    </div>
</body>

</html>