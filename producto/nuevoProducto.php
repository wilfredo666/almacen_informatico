<form action="" id="form_producto" enctype="multipart/form-data">
    <h4>Registrar Producto</h4>
    <div class="row">
        <div class="col">
            <textarea name="desc_prod" id="desc_prod" cols="30" rows="5" placeholder="Descripcion del producto"></textarea>
        </div>
        <div class="col">
            <input type="text" name="marca" id="marca"  class="form-control" placeholder="Marca del producto"/>
            <br>
            <select name="proveedor" id="proveedor" class="form-control">
                <?php
                include "conexion.php";
                $resul=mysqli_query($conectador,"select * from proveedor");
                while($f=mysqli_fetch_array($resul))
                {
                    echo "<option value=".$f[0].">$f[1]</option>";
                }
                ?>
            </select>
        </div>
        <div class="col">
            <input type="text" name="modelo" id="modelo"  class="form-control" placeholder="Modelo del producto"/>
        </div>     
    </div>
</form>
<div class="modal-footer">
   <input class="btn btn-danger" type="button" data-dismiss="modal" value="Cancelar">
    <input class="btn btn-success" type="button" value="Guardar" onclick="RegProducto();">
</div>