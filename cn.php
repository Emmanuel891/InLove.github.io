<?php 
$conexion = mysqli_connect("localhost","root","","registro_civil");

if(!$conexion){
    echo 'Error al conectar a la base de datos';
}
else{
    echo '';
}

?>