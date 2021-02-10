<?php
include "../conexion.php";
$id=$_GET["id"];
$res=mysqli_query($conectador,"SELECT * FROM usuario WHERE id_usuario=$id");
$f=mysqli_fetch_array($res);
?>
<form action="" id="form_edit_usuario" enctype="multipart/form-data">
    <h4>Editar Usuario</h4>
    <div class="row">
        <div class="col">
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre(s)" value="<?php echo $f[3];?>"/>
            <br>
            <input type="text" name="apellido_p" id="apellido_p" class="form-control" placeholder="Apellido paterno" value="<?php echo $f[4];?>"/>
            <br>
            <input type="text" name="apellido_m" id="apellido_m" class="form-control" placeholder="Apellido materno" value="<?php echo $f[5];?>"/>
            <br>
            <input type="number" name="ci" id="ci" class="form-control" placeholder="CI" value="<?php echo $f[6];?>"/>
        </div>
        <div class="col">
            <input type="text" name="nom_usu" id="nom_usu"  class="form-control" placeholder="Escriba un nombre de usuario" value="<?php echo $f[1];?>"/>
            <br>
            <input type="password" name="pass" id="pass"  class="form-control" placeholder="Elija y escriba una contraseña" value="<?php echo $f[2];?>"/><br>
        </div> 
    </div>
</form>
<div class="modal-footer">
   <input class="btn btn-danger" type="button" data-dismiss="modal" value="Cancelar">
    <input class="btn btn-success" type="button" value="Actualizar" onclick="EditUsuario(<?php echo $id;?>);">
</div>