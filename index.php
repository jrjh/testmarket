<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/cabecera.php';
?>

        <h1>Seleccione articulos para agregar al carrito de compras.</h1>
        <div class="alert alert-primary" role="alert">
            <?php echo($mensage);?>
        </div>
        <div class="row">
            <?php
            $sentencia=$pdo->prepare("SELECT * FROM `articulos`");
            $sentencia->execute();
            $listaproductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            //print_r($listaproductos);

            ?>
            <?php
            foreach($listaproductos as $producto){
            ?>
            <div class="col-3">
                <div class="card text-left">
                    <img class="card-img-top" title="<?php echo $producto['nombre']?>" src="<?php echo $producto['imagen']?>" alt="<?php echo $producto['nombre']?>">
                    <div class="card-body">
                        
                        <h4 class="card-title"><?php echo $producto['nombre']?></h4>
                        <p class="card-text"><?php echo $producto['descripcion']?></p>
                        <h2>$<?php echo $producto['precio']?></h2>
                        <form action="" method="post">
                            <input type="hidden" name="id" id="id" value="<?php echo $producto['id']?>">
                            <input type="hidden" name="nombre" id="nombre" value="<?php echo $producto['nombre']?>">
                            <input type="hidden" name="precio" id="precio" value="<?php echo $producto['precio']?>">
                            <input type="hiden" name="cantidad" id="cantidad" value="1">
                        <button name="add" value="Agregar" type="submit" class="btn btn-primary">Agregar al carrito</button>
            </form>
                    </div>
                </div>
            </div>
            <?php }?>
            
        </div>


    </div>
    <?php include 'templates/pie.php';?>
