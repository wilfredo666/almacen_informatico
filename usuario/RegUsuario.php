<?php
include "../conexion.php";

$nombre=$_POST["nombre"];
$apellido_p=$_POST["apellido_p"];
$apellido_m=$_POST["apellido_m"];
$ci=$_POST["ci"];
$nom_usu=$_POST["nom_usu"];
$pass=$_POST["pass"];

mysqli_query($conectador,"insert into usuario(
nombre_usu,
password,
nombre,
apellido_pat,
apellido_mat,
ci)
values('$nom_usu','$pass','$nombre','$apellido_p','$apellido_m','$ci');");

?>