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
            <td>
            <form action="pago.php" method="post">
            <div class="alert alert-success" role="alert">
            <div class="form-group">
              <label for="nomb">Nombre:</label>
              <input type="text"  name="nomb" id="nomb" class="form-control" placeholder="Campo Obligatorio" aria-describedby="helpId" required>
              
              <label for="telb">Telefono</label>
              <input type="text"  name="telb" id="telb" class="form-control" placeholder="Campo Obligatorio" aria-describedby="helpId" required>
             
              <label for="domb">Domicilio</label>
              <input type="text"  name="domb" id="domb" class="form-control" placeholder="Campo Obligatorio" aria-describedby="helpId" required>
              
              <label for="corrb">Correo Electronico</label>
              <input type="email"  name="corrb" id="corrb" class="form-control" placeholder="Campo Obligatorio" aria-describedby="helpId" required>
              
            </div> 
            
            </div>
            <button type="submit" value="proce" name="add" class="btn btn-primary btn-lg btn-block">Pagar</button>
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