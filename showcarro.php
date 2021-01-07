<?php
include 'global/config.php';
include 'carrito.php';
include 'templates/cabecera.php';
?>
<br>
<h3>Tu carrito</h3>
<?php if (!empty($_SESSION['CARRITO'])) {

?>
<script>
$(document).ready( function () {
    $('#tablee').DataTable();
    
} );
</script>

<table id="tablee" class="table-responsive">
    <thead>
        <tr>
            <th width="20%">Nombre</th>
            <th width="40%">Descripcion</th>
            <th width="20%">Precio</th>
            <th width="5%">Cantidad</th>
            <th width="10%">Total</th>
            <th width="5%">Opcion</th>
            

        </tr>
    </thead>
    <tbody>
        <tr>
            <td width="20%">Row 1 Data 1</td>
            <td width="40%">Row 1 Data 2</td>
            <td width="20%">Row 1 Data 2</td>
            <td width="5%">Row 1 Data 2</td>
            <td width="10%">Row 1 Data 2</td>
            <td width="5%"><button type="button" class="btn btn-danger">ELIMINAR</button></td>
        </tr>
        
        
    </tbody>
</table>
<table class="table">
   
    <tbody>
        
        <tr>
            <td colspan="3" align="right"><h3>Total</h3></td>
            <td align="right"><h3>$<?php echo number_format(300,2);?></h3></td>
            <td></td>
        
            
            
        </tr>
       
    </tbody>
</table>
<?php }else {?>
<div class="alert alert-primary" role="alert">
    <strong>Sin productos agregados</strong>
</div>
<?php } include 'templates/pie.php';?>