<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="estilos.css" rel="stylesheet">
  <!-- JQUERY -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!--FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <!-- Los iconos tipo Solid de Fontawesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
  <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <!-- Nuestro css-->
  <link rel="stylesheet" type="text/css" href="estilos.css">
  <!-- Bootstrap core CSS -->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
  <!-- Bootstrap core CSS -->
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Anton" />
    <style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 20px;
        padding: 0;
        margin: 0;
    }
    .input-group select {
        background-color: #EAAD00;
    }

    #menu {
        background-color: black;
        text-align: center;
    }

    #menu ul {
        list-style: none;
        margin: 0;
        padding: 20px 30px;
    }

    #menu li {
        display: inline;
        margin: 0;
    }
    .col-sm a{
        margin-top: 15%;
    }

    #menu li a {
        color: white;
        padding: 20px 30px;
        text-decoration: none;
    }

    #menu li a:hover {
        background-color: #EAAD00;
        color: white;
    }

    @media screen and (max-width: 747px) {
        #menu ul {
            padding: 0;
        }

        #menu ul li {
            margin-right: -3px;
            display: inline-block;
            text-align: center;
            width: 33%;
        }

        #menu li a {
            display: list-item;
        }
    }

    @media screen and (max-width: 480px) {
        #menu ul li {
            width: 100%;
        }
    }

    footer {
        color: white;
    }
    a img{
        margin-left: 10px;
    }

    #Photos {
        width: 700px;
        height: 750px;
        /* width="500px" height="750px" */
    }
    #InputMod{
        margin-top: 1.09%;
    }
    #InputMod1{
       margin-bottom: 1.09%;
    }
    .input-group textarea{
        background-color: #EAAD00;
    }
    #basic-addon2{
        background-color: black;
        width: 100%;
    }
    #botonEdit{
        margin-left: 87%;
    }
    #enviar{
        margin-left: 81.5%;
    }
    #imback{
        margin-top: -7%;
    }
    footer{
        position:static;
        display: inline-block;
        bottom: 0;
        width: 100%;
        height: 40px;
    }
    .form-control{
        background-color: #EAAD00;
    }
    </style>


</head>
<?php include('dbcon.php'); ?>