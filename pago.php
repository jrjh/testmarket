<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/cabecera.php';
?>

<?php
if($_POST){
$total=0;
$sid=session_id();
$corre=$_POST['corrb'];
    foreach($_SESSION['CARRITO'] as $indice=>$producto){
        $total=$total+($producto['PRECIO']*$producto['CANTIDAD']);
    }
    $sentencia=$pdo->prepare("INSERT INTO `ventas`
     (`id`, `nombre`, `telefono`, `domicilio`, `correo`, `total`)
      VALUES (NULL,:nom,:tel,:dir,:corr,:tot);");
     $sentencia->bindParam(":nom",$sid);
     $sentencia->bindParam(":tel",$sid);
     
     $sentencia->bindParam(":dir",$sid);
     $sentencia->bindParam(":corr",$corre);
     $sentencia->bindParam(":tot",$total);
     $sentencia->execute();

    //echo "<h3>".$total."</h3>";
}
?>

<div class="jumbotron">
    <h1 class="display-3">¡Gracias por tu Compra</h1>
    <hr class="my-2">
    <p class="lead">Se realizo con exito tu pago de:
    <h4><?php echo number_format($total,2);?></h4></p>
    
    <p>Para seguimiento del paquete verificar correo proporcionado</p>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
    </p>
</div>