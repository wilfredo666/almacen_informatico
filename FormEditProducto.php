<?php
include "conexion.php";
$id=$_GET["id"];
$res=mysqli_query($conectador,"SELECT * FROM producto WHERE id_producto=$id");
$f=mysqli_fetch_array($res);
?>
   <form action="" id="form_edit_producto" enctype="multipart/form-data">
    <h4>Editar Producto</h4>
    <div class="row">
        <div class="col">
            <textarea name="desc_prod" id="desc_prod" cols="30" rows="5" placeholder="Descripcion del producto"><?php echo $f[1];?></textarea>
        </div>
        <div class="col">
            <input type="text" name="marca" id="marca"  class="form-control" placeholder="Marca del producto" value="<?php echo $f[2];?>"/>
            <br>
            <select name="proveedor" id="proveedor" class="form-control">
                <?php
                include "conexion.php";
                /*extrayendo el proveedor actual*/
                $resul=mysqli_query($conectador,"select nombre_prov from proveedor where id_proveedor=$f[4]");
                $nom=mysqli_fetch_array($resul);
                echo "<option value=".$f[4].">$nom[0]</option>";
                /*listando los proveedores*/
                $resul2=mysqli_query($conectador,"select * from proveedor");
                while($p=mysqli_fetch_array($resul2))
                {
                    echo "<option value=".$p[0].">$p[1]</option>";
                }
                ?>
            </select>
        </div>
        <div class="col">
            <input type="text" name="modelo" id="modelo"  class="form-control" placeholder="Modelo del producto" value="<?php echo $f[3];?>"/>
        </div>     
    </div>
</form>
<div class="modal-footer">
   <input class="btn btn-danger" type="button" data-dismiss="modal" value="Cancelar">
    <input class="btn btn-success" type="button" value="Actualizar" onclick="EditProducto(<?php echo $id;?>);">
</div>