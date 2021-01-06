<?php
session_start();

$mensage="";

if(isset($_POST['add'])){
switch($_POST['add']){
    case 'Agregar':
        if(is_numeric($_POST['id'])){
            $id=$_POST['id'];
            $mensage=$id;
        }
}
}
/*
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
print_r($_SESSION,true);*/
?>