<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/cabecera.php';
?>
<?php
$sentencia=$pdo->prepare("SELECT * FROM ventas");
$sentencia->execute();
$listaventas=$sentencia->fetchAll(PDO::FETCH_ASSOC);

//print_r($listaventas);
      ?>
<script>
$(document).ready( function () {
    $('#ventas').DataTable();
    
} );
</script>
<table id="ventas" class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
        <th width="20%">Nombre</th>
            <th width="40%">Telefono</th>
            <th width="5%">Precio</th>
            <th width="20%"></th>
            <th width="5%">Total</th>
            <th width="10%">Opcion</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($listaventas as $muestra) { ?>
        <tr>
            <td width="20%"><?php echo $muestra['nombre']?></td>
            <td width="40%"><?php echo $muestra['telefono']?></td>
            <th width="5%"><?php echo $muestra['domicilio']?></th>
            <td width="20%"><?php echo $muestra['correo']?></td>
            <td width="5%"><?php echo $muestra['total']?></td>
            <td width="10%"></td>

            
        </tr>
       
        <?php } ?>
        </tbody>
</table>