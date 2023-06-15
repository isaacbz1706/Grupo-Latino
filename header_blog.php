<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css2/bootstrap.min.css" rel="stylesheet">
    <link href="css2/bootstrap-glyphicons.css" type="text/css" rel="stylesheet">
    <link href="css2/font-awesome.css" type="text/css" rel="stylesheet">
    <link href="css2/my_style.css" type="text/css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="estilos_navbar.css"> -->
    <!-- Chat en vivo -->
    <script type="text/javascript">
    window.$crisp = [];
    window.CRISP_WEBSITE_ID = "0768a9f3-47a2-4da7-8f1c-2dfbb56003f7";
    (function() {
        d = document;
        s = d.createElement("script");
        s.src = "https://client.crisp.chat/l.js";
        s.async = 1;
        d.getElementsByTagName("head")[0].appendChild(s);
    })();
    </script>

    <style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 20px;
        padding: 0;
        margin: 0;
    }
    nav{
        background-color: black;

    }
    #menu {
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

    #ImgBlog {
        width: 100%;
    }

    footer {
        color: white;
    }

    #Photos {
        width: 100%;

        /* width="500px" height="750px" */
    }

    #galeria {
        width: 80%;
        max-height: 700px;
    }
    /* Navbar */
    #flechaup{
        margin-top: 15%;
        position: fixed;
    }
    </style>


</head>
<?php include('dbcon.php'); ?>