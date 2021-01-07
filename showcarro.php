<?php
include 'global/config.php';
include 'carrito.php';
include 'templates/cabecera.php';
?>
<br>
<h3>Tu carrito</h3>

<script>
$(document).ready( function () {
    $('#tablee').DataTable();
    
} );
</script>

<table id="tablee" class="table-responsive-sm">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Total</th>
            <th>elininar</th>
            

        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
            <td>Row 1 Data 2</td>
            <td>Row 1 Data 2</td>
            <td>Row 1 Data 2</td>
            <td><button type="button" class="btn btn-danger">ELIMINAR</button></td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
            <td>Row 1 Data 2</td>
            <td>Row 1 Data 2</td>
            <td>Row 1 Data 2</td>
            <td><button type="button" class="btn btn-danger">ELIMINAR</button></td>
        </tr>
    </tbody>
</table>

<?php include 'templates/pie.php';?>