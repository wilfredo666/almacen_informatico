<form action="" id="form_cliente" enctype="multipart/form-data">
    <h4>Registrar Cliente</h4>
    <div class="row">
        <div class="col">
            <input type="text" name="nom_cli" id="nom_cli" class="form-control" placeholder="Nombre del Cliente"/>
            <br>
            <input type="text" name="ap_pat_cli" id="ap_pat_cli" class="form-control" placeholder="Apellido paterno del Cliente"/>
            <br>
            <input type="text" name="ap_mat_cli" id="ap_mat_cli" class="form-control" placeholder="Apellido materno del Cliente"/>
        </div>
        <div class="col">
            <input type="number" name="nit" id="nit"  class="form-control" placeholder="NIT/CI"/>
            <br>
            <input type="text" name="telefono" id="telefono"  class="form-control" placeholder="Telefonos"/>
            <br>
            <input type="text" name="direccion" id="direccion"  class="form-control" placeholder="Direccion"/>
        </div> 
    </div>
</form>
<div class="modal-footer">
    <input class="btn btn-danger" type="button" data-dismiss="modal" value="Cancelar">
    <input class="btn btn-success" type="button" value="Guardar" onclick="RegCliente();">
</div>