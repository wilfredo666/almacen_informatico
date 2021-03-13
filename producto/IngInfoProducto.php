<?php
include "../conexion.php";
$id=$_GET["id"];
$res=mysqli_query($conectador,"SELECT * FROM producto, proveedor WHERE producto.id_proveedor=proveedor.id_proveedor and id_producto=$id");
$f=mysqli_fetch_array($res);
?>
<br>
<div class="table-responsive">
    <table class="table">
        <tbody>
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
                <th>Precio:</th>
                <td><?php echo $f[6];?></td>
            </tr>
            <tr>
                <th>Proveedor:</th>
                <td><?php echo $f[8];?></td>
            </tr>
            <tr>
                <th>Stock en almacen:</th>
                <td><?php echo $f[5];?></td>
            </tr>
        </tbody>

    </table> 
</div>
