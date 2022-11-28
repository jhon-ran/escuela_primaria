<?php

//Para conexion local
//$conexion = mysqli_connect("localhost", "root", "", "escuela");

//Para conexion en 000webhost.com
$conexion = mysqli_connect("localhost", "id19804469_unadm", "zu0Sil%#%QpYgcN=", "id19804469_escuela_web");

if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}
echo $conexion->host_info . "\n";



?>