<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/datatables.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" charset="utf8" src="js\datatables.min.js"></script>
    <title>SuperMarket</title>
</head>

<body style="height:1500px">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <a class="navbar-brand" href="#">
            <img src="img/logo.jpg" alt="logo" style="width:40px;">
        </a>
        <a class="navbar-brand" href="index.php">Super Market</a>

        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="showcarro.php">Carrito(
                <?php
                    echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
                    ?>
            )</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Admin</a>
            </li>

        </ul>
    </nav>
    <div class="container-fluid" style="margin-top:80px">