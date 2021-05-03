<?php
require "../conexion.php";
$txt_buscar = trim($_POST['txt_bus']);

if($txt_buscar=="")
{
    echo "No se encontraron resultados";
}

else{ 
    $sql = mysqli_query($conectador,"SELECT * FROM cliente WHERE nombre_cli LIKE '%$txt_buscar%' or ci_cliente LIKE '%$txt_buscar%' LIMIT 10");

    while ($f = mysqli_fetch_array($sql)) {

?>
<tr>
    <td><?php echo " $f[1] $f[2] $f[3] ";?></td>
    <td><?php echo " $f[4] ";?></td>
    <td><?php echo " $f[5] ";?></td>
    <td><?php echo " $f[6] ";?></td>
    <td>
        <div class="btn-group">
            <button onclick="MEditCliente(<?php echo $f[0]; ?>);" class="btn btn-secondary btn-circle"><i class="fas fa-edit"></i></button>
            <button onclick="MEliCliente(<?php echo $f[0]; ?>);" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></button>
        </div>
    </td>
</tr>
<?php
                                          }
}
?>