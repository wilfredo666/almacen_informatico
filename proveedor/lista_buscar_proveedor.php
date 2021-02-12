<?php
require "../conexion.php";
$txt_buscar = trim($_POST['txt_bus']);

if($txt_buscar=="")
{
    echo "No se encontraron resultados";
}

else{ 
    $sql = mysqli_query($conectador,"SELECT * FROM proveedor WHERE nombre_prov LIKE '%$txt_buscar%' or nit LIKE '%$txt_buscar%' LIMIT 10");

    while ($f = mysqli_fetch_array($sql)) {

?>
<tr>
    <td><?php echo " $f[0] ";?></td>
    <td><?php echo " $f[1] ";?></td>
    <td><?php echo " $f[2] ";?></td>
    <td><?php echo " $f[3] ";?></td>
    <td><?php echo " $f[4] ";?></td>
    <td>
        <div class="btn-group">
            <button onclick="VerProveedor(<?php echo $f[0]; ?>);" class="btn btn-info btn-circle"><i class="fas fa-eye"></i></button>
            <button onclick="MEditProducto(<?php echo $f[0]; ?>);" class="btn btn-secondary btn-circle"><i class="fas fa-edit"></i></button>
            <button onclick="MEliProveedor(<?php echo $f[0]; ?>);" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></button>
        </div>
    </td>
</tr>
<?php
}
}
?>