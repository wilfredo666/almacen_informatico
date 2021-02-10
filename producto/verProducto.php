<?php
include "../conexion.php";
$id=$_GET["id"];
$res=mysqli_query($conectador,"SELECT * FROM producto WHERE id_producto=$id");
$f=mysqli_fetch_array($res);
?>
<table>
    <tr>
        <th>Id de producto:</th>
        <td><?php echo $f[0];?></td>
    </tr>
    <tr>
        <th>Descripcion:</th>
        <td><?php echo $f[1];?></td>
    </tr>
    <tr>
        <th>Marca:</th>
        <td><?php echo $f[2];?></td>
    </tr>
    <tr>
        <th>Modelo:</th>
        <td><?php echo $f[3];?></td>
    </tr>
    <tr>
        <th>Proveedor:</th>
        <td><?php echo $f[4];?></td>
    </tr>
    <tr>
        <th>Stock en almacen:</th>
        <td><?php echo $f[5];?></td>
    </tr>
</table>   
<div class="modal-footer">
    <input class="btn btn-primary" type="button" data-dismiss="modal" value="OK">
</div>
