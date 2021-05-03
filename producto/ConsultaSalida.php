<?php
require "../conexion.php";
$fecha_inicio = $_POST['fecha_inicio'];
$fecha_fin = $_POST['fecha_fin'];

$sql = mysqli_query($conectador,"SELECT id_salida_producto, descripcion, nombre_cli, cantidad, total, fecha_hora
FROM venta_producto
JOIN producto
ON producto.id_producto=venta_producto.id_producto
JOIN cliente
ON cliente.id_cliente=venta_producto.id_destino
where fecha_hora between '$fecha_inicio 00:00:01' and '$fecha_fin 23:59:59'");
         while ($f = mysqli_fetch_array($sql)) {
             //obteniendo el precio unitario
             $precio_uni=$f[4]/$f[3];
        ?>
        <tr>
            <td><?php echo " $f[2] ";?></td>
            <td><?php echo " $f[1] ";?></td>
            <td><?php echo " $f[3] ";?></td>
            <td><?php echo $precio_uni;?></td>
            <td><?php echo " $f[4] ";?></td>
            <td><?php echo " $f[5] ";?></td>
            <td>
                <div class="btn-group">
                    <button onclick="MEditSalida(<?php echo $f[0]; ?>);" class="btn btn-secondary btn-circle"><i class="fas fa-edit"></i></button>
                    <button onclick="MEliSalida(<?php echo $f[0]; ?>);" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></button>
                </div>
            </td>
        </tr>
        <?php } ?>
