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
    <?php $total=0;?>
    <?php foreach($_SESSION['CARRITO'] as $indice=>$producto){ ?>
        <tr>
            <td width="20%"><?php echo $producto['NOMBRE']?></td>
            <td width="40%"></td>
            <td width="20%"><?php echo $producto['PRECIO']?></td>
            <td width="5%"><?php echo $producto['CANTIDAD']?></td>
            <td width="10%"><?php echo number_format($producto['PRECIO']*$producto['CANTIDAD'],2); ?></td>

            <td width="5%">
            <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo $producto['ID']?>" id="">
            <button type="submit" name="add" value="eliminar" class="btn btn-danger">ELIMINAR</button>
            </form>
            </td>
        </tr>
        <?php $total=$total+($producto['PRECIO']*$producto['CANTIDAD']);?>
        <?php } ?>
        
        
    </tbody>
</table>
<table class="table">
   
    <tbody>
        
        <tr>
            <td colspan="3" align="right"><h3>Total</h3></td>
            <td align="right"><h3>$<?php echo number_format($total,2);?></h3></td>
            <td></td>
        
            
            
        </tr>
        <tr>
            <td colspan="5">
            <form action="pago.php" method="post">
            <div class="alert alert-success" role="alert">
            <div class="form-group">
              <label for="nom">Nombre:</label>
              <label for="">Telefono</label>
              <label for="">Domicilio</label>
              <label for="">Correo Electronico</label>
              <input type="text" name="nom" id="nom" class="form-control" placeholder="Campo Obligatorio" aria-describedby="helpId">
              <small id="helpId" class="text-muted">Help text</small>
            </div> 
            
            </div>
            <<button type="submit" value="proce" name="add" class="btn btn-primary btn-lg btn-block">Pagar</button>
            </form>
            </td>
        </tr>
       
    </tbody>
</table>
<?php }else {?>
<div class="alert alert-primary" role="alert">
    <strong>Sin productos agregados</strong>
</div>
<?php } include 'templates/pie.php';?>