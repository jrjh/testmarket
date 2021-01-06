<?php
include 'global/config.php';
include 'global/conexion.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>pruebagit3677</title>
</head>

<body style="height:1500px">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <a class="navbar-brand" href="#">
            <img src="img/logo.jpg" alt="logo" style="width:40px;">
        </a>
        <a class="navbar-brand" href="#">Super Market</a>
        <ul class="navbar-nav">
            <li class="nav-item">

            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Admin</a>
            </li>

        </ul>
    </nav>
    <div class="container-fluid" style="margin-top:80px">
        <h1>Seleccione articulos para agregar al carrito de compras.</h1>

        <div class="row">
            <?php
            $sentencia=$pdo->prepare("SELECT * FROM `articulos`");
            $sentencia->execute();
            $listaproductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            print_r($listaproductos);

            ?>
            <?php
            foreach($listaproductos as $producto){
            ?>
            <div class="col-3">
                <div class="card text-left">
                    <img class="card-img-top" title="<?php echo $producto['nombre']?>" src="<?php echo $producto['imagen']?>" alt="Brocoli">
                    <div class="card-body">
                        
                        <h4 class="card-title"><?php echo $producto['nombre']?></h4>
                        <p class="card-text"><?php echo $producto['descripcion']?></p>
                        <h2>$<?php echo $producto['precio']?></h2>
                        <button type="button" name="add" value="Agregar" type="submit" class="btn btn-primary">Agregar al carrito</button>

                    </div>
                </div>
            </div>
            <?php }?>
            
        </div>


    </div>
</body>

</html>