<?php
include "../conexion.php";
$id=$_GET["id"];
$res=mysqli_query($conectador,"SELECT * FROM proveedor WHERE id_proveedor=$id");
$f=mysqli_fetch_array($res);
?>
   <form action="" id="form_edit_proveedor" enctype="multipart/form-data">
    <h4>Editar Proveedor</h4>
    <div class="row">
        <div class="col">
            <input type="text" name="nombre_prov" id="nombre_prov"  class="form-control" placeholder="Nombre del proveedor" value="<?php echo $f[1];?>"/>
            <br>
                        <input type="number" name="nit" id="nit"  class="form-control" placeholder="Nit de proveedor" value="<?php echo $f[2];?>"/>
        </div>
        <div class="col">
            <input type="text" name="telefono" id="telefono"  class="form-control" placeholder="Telefonos de contacto" value="<?php echo $f[3];?>"/>
                       <br>
                        <input type="text" name="direccion" id="direccion"  class="form-control" placeholder="Direccion" value="<?php echo $f[4];?>"/>
        </div>     
    </div>
</form>
<div class="modal-footer">
   <input class="btn btn-danger" type="button" data-dismiss="modal" value="Cancelar">
    <input class="btn btn-success" type="button" value="Actualizar" onclick="EditProveedor(<?php echo $id;?>);">
</div>