
<h4>Esta seguro de eliminar este usuario?</h4>
<?php
$id=$_GET["id"];
?>

<div class="modal-footer">
    <input class="btn btn-primary" type="button" data-dismiss="modal" value="Cancelar">
    <input class="btn btn-danger" type="button" value="Eliminar" onclick="EliUsuario(<?php echo $id;?>);">
</div>