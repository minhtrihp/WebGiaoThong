<?php
$servername = "localhost";
$username = "root";
$password = "";
$mysql_port = "3308";

try{
	$conn = new PDO ("mysql:host=$servername;port=$mysql_port;dbname=giaothongcsdl1",$username,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOExeption $e){
	echo "Connected failed: " . $e->getMessage();
}

?>
