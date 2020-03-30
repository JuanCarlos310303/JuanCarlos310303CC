<?php 
$host="localhost";
$user="root";
$pass="";
$db="citaod2";

$con=mysqli_connect($host,$user,$pass,$db);

$Nombre= $_POST['Nombre'];
$Apellidop= $_POST['Apellidop'];
$Apellidom= $_POST['Apellidom'];
$Fecha= $_POST['Fecha'];
$Hora= $_POST['Hora'];
$insertar="INSERT INTO citaodontológica (Nombre,Apellidop,Apellidom,Fecha,Hora) VALUES ('$Nombre','$Apellidop','$Apellidom','$Fecha','$Hora')";
$query=mysqli_query($con,$insertar);
if (!$query) {
	echo "Hubo algun error";
}
else
{
	echo "Datos guardados correctamente<br><a href='Cita_medica.html'>Volver</a>";
}
 ?>

