<?php
session_start();

$mensage="";

$id=$_POST['id'];
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
print_r($_SESSION,true);
?>