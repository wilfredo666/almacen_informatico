<?php
include "../conexion.php";
$id=$_GET["id"];
$res=mysqli_query($conectador,"SELECT * FROM usuario WHERE id_usuario=$id");
$f=mysqli_fetch_array($res);
?>
<table>
    <tr>
        <th style="width: 150px">Id de usuario:</th>
        <td><?php echo $f[0];?></td>
    </tr>
    <tr>
        <th>Nombre(s):</th>
        <td><?php echo $f[1];?></td>
    </tr>
    <tr>
        <th>Apellido paterno:</th>
        <td><?php echo $f[4];?></td>
    </tr>
    <tr>
        <th>Apellido materno:</th>
        <td><?php echo $f[5];?></td>
    </tr>
    <tr>
        <th>Usuario:</th>
        <td><?php echo $f[1];?></td>
    </tr>
        <tr>
        <th>C.I.:</th>
        <td><?php echo $f[6];?></td>
    </tr>
</table>   
<div class="modal-footer">
    <input class="btn btn-primary" type="button" data-dismiss="modal" value="OK">
</div>