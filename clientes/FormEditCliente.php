<?php
include "../conexion.php";
$id=$_GET["id"];
$res=mysqli_query($conectador,"SELECT * FROM cliente WHERE id_cliente=$id");
$f=mysqli_fetch_array($res);
?>
   <form action="" id="form_edit_cliente" enctype="multipart/form-data">
    <h4>Editar Cliente</h4>
    <div class="row">
        <div class="col">
            <input type="text" name="nom_cli" id="nom_cli" class="form-control" placeholder="Nombre del Cliente" value="<?php echo $f[1];?>"/>
            <br>
            <input type="text" name="ap_pat_cli" id="ap_pat_cli" class="form-control" placeholder="Apellido paterno del Cliente" value="<?php echo $f[2];?>"/>
            <br>
            <input type="text" name="ap_mat_cli" id="ap_mat_cli" class="form-control" placeholder="Apellido materno del Cliente" value="<?php echo $f[3];?>"/>
        </div>
        <div class="col">
            <input type="number" name="nit" id="nit"  class="form-control" placeholder="NIT/CI" value="<?php echo $f[4];?>"/>
            <br>
            <input type="text" name="telefono" id="telefono"  class="form-control" placeholder="Telefonos" value="<?php echo $f[5];?>"/>
            <br>
            <input type="text" name="direccion" id="direccion"  class="form-control" placeholder="Direccion" value="<?php echo $f[6];?>"/>
        </div> 
    </div>
</form>
<div class="modal-footer">
    <input class="btn btn-danger" type="button" data-dismiss="modal" value="Cancelar">
    <input class="btn btn-success" type="button" value="Actualizar" onclick="EditCliente(<?php echo $f[0];?>);">
</div>