<?php
session_start();

$mensage="";



$nombre=$_POST['nombre'];
$cantidad=$_POST['cantidad'];
$precio=$_POST['precio'];

if(!isset($_SESSION['CARRITO'])){
$producto=array(
    'ID'=>$id,
    'NOMBRE'=>$nombre,
    'CANTIDAD'=>$cantidad,
    'PRECIO'=>$precio
);
$_SESSION['CARRITO'][0]=$producto;
}
else{
    $numeroproductos=count($_SESSION['CARRITO']);
    $producto=array(
        'ID'=>$id,
        'NOMBRE'=>$nombre,
        'CANTIDAD'=>$cantidad,
        'PRECIO'=>$precio
    );
    $_SESSION['CARRITO'][$numeroproductos]=$producto;
}
$mensage= $nombre $cantidad $precio;
?>