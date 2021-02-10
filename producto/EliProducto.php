<?php
include "../conexion.php";
$id=$_GET["id"];
mysqli_query($conectador,"DELETE FROM producto WHERE id_producto=$id");
?>