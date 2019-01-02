<?php 

/* session_start();
if (isset($_SESSION['nombreUsuario'])) {
    header('Location: login.php');
} */

$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = filter_var(strtolower($_POST['nombreUsuario']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];

    try {
        $conexion = new PDO('mysql:host=localhost;dbname=db_comflix;charset=utf8', 'root', '');
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOExeption $e) {
        echo "Error: " . $e->getMessage();
    }

    $statement = $conexion->prepare('SELECT * FROM usuarios WHERE nombreUsuario = :user AND contraseña = :pass');
    $statement->execute(array(':user' => $usuario, ':pass' => $password));

   /*  $res = $statement->fetch(); */

    if ($statement->fetch()) {
        $_SESSION['usuario'] = $usuario;
        header('Location: menu.php');
    } else {
        $errores .= '¡Usuario o contraseña incorracta!';
    }

}

require 'login.php';
