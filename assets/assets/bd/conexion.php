<?php
$host = "localhost";
$user = "root";
$contrasena = "VinHap9815";
$bd = "systm2";
$conexion = mysqli_connect($host,$user,$contrasena);
if (mysqli_connect_errno()) {
    echo "Error en la conexion";
    exit();
}
mysqli_select_db($conexion, $bd) or die ("No se encuentra la base de datos");
mysqli_set_charset($conexion, "utf8");
?>
