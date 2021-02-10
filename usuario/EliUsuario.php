<?php
include "../conexion.php";
$id=$_GET["id"];
mysqli_query($conectador,"DELETE FROM usuario WHERE id_usuario=$id");
?>