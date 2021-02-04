<form action="" id="form_proveedor" enctype="multipart/form-data">
    <h4>Registrar Proveedor</h4>
    <div class="row">
        <div class="col">
            <input type="text" name="desc_prov" id="desc_prov" class="form-control" placeholder="Nombre del proveedor"/>
            <br>
            <input type="number" name="nit" id="nit"  class="form-control" placeholder="NIT"/>
        </div>
        <div class="col">
            <input type="text" name="telefono" id="telefono"  class="form-control" placeholder="Telefonos"/>
            <br>
            <input type="text" name="direccion" id="direccion"  class="form-control" placeholder="Direccion"/>
        </div> 
    </div>
</form>
<div class="modal-footer">
   <input class="btn btn-danger" type="button" data-dismiss="modal" value="Cancelar">
    <input class="btn btn-success" type="button" value="Guardar" onclick="RegProveedor();">
</div>