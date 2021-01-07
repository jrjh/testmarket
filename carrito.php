<?php
session_start();

$mensage="";

if(isset($_POST['add'])){
    switch($_POST['add']){

        case'Agregar':
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
        $mensage=print_r($_SESSION,true);
        break;
        case "eliminar":
            $id=$_POST['id'];

            foreach($_SESSION['CARRITO'] as $indice=>$producto){
                if ($producto['ID']==$id) {
                    unset($_SESSION['CARRITO'][$indice]);
                    echo"<script>alert('Articulo Borrado.')</script>";
                }
            }
            break;
    }
    

}


?>