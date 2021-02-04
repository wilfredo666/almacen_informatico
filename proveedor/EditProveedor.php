<?php
include "../conexion.php";

$id=$_GET["id"];

$nombre_prov=$_POST["nombre_prov"];
$nit=$_POST["nit"];
$telefono=$_POST["telefono"];
$direccion=$_POST["direccion"];

mysqli_query($conectador,"UPDATE proveedor SET nombre_prov='$nombre_prov', nit='$nit', telefono='$telefono', direccion='$direccion' WHERE id_proveedor='$id';");

?>