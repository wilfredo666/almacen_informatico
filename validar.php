<?php
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$conexion=mysqli_connect("localhost","root","","almacen_informatico");
/*$conexion=mysqli_connect("mysqlcluster25","costos","Admin123","grupo_regional");*/
$consulta="select * from usuario where nombre_usu='$usuario' and password='$clave'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_fetch_row($resultado);
//prueba de comentario
if($filas>0){
    header("Location:panel_inicial.php?id=$filas[0]");
}
else{
    echo "Error de autenticacion";
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>