<?php
//Variables del servidor//
$servername="localhost";
$username="root";
$password="";
$dbname="Class";
try {
	$conn= new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO:: ERRMODE_EXCEPTION);
	#echo "Buena conexion";
}Catch(PDOexception $e){

	echo  "conexion fallo". $e->getmessage();
}
?>