<?php
include "../conexion.php";

$id=$_GET["id"];

$desc_prod=$_POST["desc_prod"];
$marca=$_POST["marca"];
$proveedor=$_POST["proveedor"];
$modelo=$_POST["modelo"];

mysqli_query($conectador,"UPDATE producto SET descripcion='$desc_prod', marca='$marca', modelo='$modelo', id_proveedor='$proveedor' WHERE id_producto='$id';");

?>