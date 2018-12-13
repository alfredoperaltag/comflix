<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_comflix";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$tildes = $conn->query("SET NAMES 'utf8'"); //Para que se muestren las tildes

?>
