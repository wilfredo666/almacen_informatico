<form action="" id="form_usuario" enctype="multipart/form-data">
    <h4>Registrar Usuario nuevo</h4>
    <div class="row">
        <div class="col">
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre(s)"/>
            <br>
            <input type="text" name="apellido_p" id="apellido_p" class="form-control" placeholder="Apellido paterno"/>
            <br>
            <input type="text" name="apellido_m" id="apellido_m" class="form-control" placeholder="Apellido materno"/>
            <br>
            <input type="number" name="ci" id="ci" class="form-control" placeholder="CI"/>
        </div>
        <div class="col">
            <input type="text" name="nom_usu" id="nom_usu"  class="form-control" placeholder="Escriba un nombre de usuario"/>
            <br>
            <input type="password" name="pass" id="pass"  class="form-control" placeholder="Elija y escriba una contraseña"/><br>
           <input type="password" name="pass2" id="pass2"  class="form-control" placeholder="Repita la contraseña"/>
        </div> 
    </div>
</form>
<div class="modal-footer">
    <input class="btn btn-danger" type="button" data-dismiss="modal" value="Cancelar">
    <input class="btn btn-success" type="button" value="Guardar" onclick="RegUsuario();">
</div>