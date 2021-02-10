<?php
include "../conexion.php";
$id=$_GET["id"];
mysqli_query($conectador,"DELETE FROM proveedor WHERE id_proveedor=$id");
?>