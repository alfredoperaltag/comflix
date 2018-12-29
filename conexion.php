<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_comflix";

// Create connection
$conexion = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conexion->connect_error) {
    die("Connection failed: " . $conexion->connect_error);
}
$tildes = $conexion->query("SET NAMES 'utf8'"); //Para que se muestren las tildes

?>
