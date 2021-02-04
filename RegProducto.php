<?php
include "conexion.php";

$desc_prod=$_POST["desc_prod"];
$marca=$_POST["marca"];
$proveedor=$_POST["proveedor"];
$modelo=$_POST["modelo"];
$stock=0;

mysqli_query($conectador,"insert into producto(
descripcion,
marca,
modelo,
id_proveedor,
stock)
values('$desc_prod','$marca','$modelo','$proveedor','$stock');");

?>