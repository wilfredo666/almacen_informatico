<?php
include "../conexion.php";

$desc_prov=$_POST["desc_prov"];
$nit=$_POST["nit"];
$telefono=$_POST["telefono"];
$direccion=$_POST["direccion"];

mysqli_query($conectador,"insert into proveedor(
nombre_prov,
nit,
telefono,
direccion)
values('$desc_prov','$nit','$telefono','$direccion');");

?>