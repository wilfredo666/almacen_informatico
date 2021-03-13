<?php
include "../conexion.php";
$id=$_GET["id"];
$res=mysqli_query($conectador,"SELECT * FROM cliente WHERE id_destino=$id");
$f=mysqli_fetch_array($res);
?>
<br>
<div class="table-responsive">
    <table class="table">
        <tbody>
            <tr>
                <th style="width:50%;">Id del cliente:</th>
                <td><?php echo $f[0];?></td>
            </tr>
            <tr>
                <th>Nombre:</th>
                <td><?php echo $f[1];?></td>
            </tr>
            <tr>
                <th>Direccion:</th>
                <td><?php echo $f[2];?></td>
            </tr>
            <tr>
                <th>Telefono(s):</th>
                <td><?php echo $f[3];?></td>
            </tr>
                        <tr>
                <th>Nit/ci:</th>
                <td><?php echo $f[4];?></td>
            </tr>
        </tbody>

    </table> 
</div>