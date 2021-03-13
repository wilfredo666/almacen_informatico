<?php
require "../conexion.php";
$fecha_inicio = $_POST['fecha_inicio'];
$fecha_fin = $_POST['fecha_fin'];

$sql = mysqli_query($conectador,"select id_ingreso_prod, descripcion, costo_unitario, cantidad, costo_total, fecha_hora FROM ingreso_producto JOIN producto ON producto.id_producto=ingreso_producto.id_producto where fecha_hora between '$fecha_inicio 00:00:01' and '$fecha_fin 23:59:59'");

         while ($f = mysqli_fetch_array($sql)) {
        ?>
        <tr>
            <td><?php echo " $f[1] ";?></td>
            <td><?php echo " $f[3] ";?></td>
            <td><?php echo " $f[2] ";?></td>
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
