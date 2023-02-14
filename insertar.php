<?php 
include ("cn.php");

$person1 =$_POST['person1'];
$person2 =$_POST['person2'];
$testigo1 =$_POST['testigo1'];
$testigo2 =$_POST['testigo2'];


$insertar = "INSERT INTO registro(person1,person2,testigo1,testigo2) VALUES ('$person1', '$person2','$testigo1','$testigo2')";

$resultado = mysqli_query($conexion,$insertar);

if ($resultado) {
	echo "<script>alert('se agrego el usuario correctamente'); window.location='index.php'; </script>";
}else{
	echo "<script>alert('No se pudo agregar al usuario'); window.history.go(-1);</script>";
}

?>