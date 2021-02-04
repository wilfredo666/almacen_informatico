<?php
include "../conexion.php";
$id=$_GET["id"];
$res=mysqli_query($conectador,"SELECT * FROM proveedor WHERE id_proveedor=$id");
$f=mysqli_fetch_array($res);
?>
<table>
    <tr>
        <th style="width: 150px">Id de proveedor:</th>
        <td><?php echo $f[0];?></td>
    </tr>
    <tr>
        <th>Nombre:</th>
        <td><?php echo $f[1];?></td>
    </tr>
    <tr>
        <th>Nit:</th>
        <td><?php echo $f[2];?></td>
    </tr>
    <tr>
        <th>Telefono:</th>
        <td><?php echo $f[3];?></td>
    </tr>
    <tr>
        <th>Direccion:</th>
        <td><?php echo $f[4];?></td>
    </tr>
</table>   
<div class="modal-footer">
    <input class="btn btn-primary" type="button" data-dismiss="modal" value="OK">
</div>