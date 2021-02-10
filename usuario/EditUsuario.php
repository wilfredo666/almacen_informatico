<?php
include "../conexion.php";

$id=$_GET["id"];

$nombre=$_POST["nombre"];
$apellido_p=$_POST["apellido_p"];
$apellido_m=$_POST["apellido_m"];
$ci=$_POST["ci"];
$nom_usu=$_POST["nom_usu"];
$pass=$_POST["pass"];

mysqli_query($conectador,"UPDATE usuario SET nombre_usu='$nom_usu', password='$pass', nombre='$nombre', apellido_pat='$apellido_p', apellido_mat='$apellido_m', ci='$ci' WHERE id_usuario='$id';");

?>