<?php
include 'global/config.php';
include 'carrito.php';
include 'templates/cabecera.php';
?>
<br>
<h3>Tu carrito</h3>

<script>
$(document).ready( function () {
    $('tablee').DataTable();
    data: dataSet,
    columns: columnDefs
} );
</script>

<table id="tablee" class="display">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
    </tbody>
</table>

<?php include 'templates/pie.php';?>