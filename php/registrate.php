<?php session_start();

if(isset($_SESSION['nombreUsuario'])){
    header('Location: ../menu.html');
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario = filter_var(strtolower($_POST['nombreUsuario']),FILTER_SANITIZE_STRING);
    $apePaterno = filter_var(strtolower($_POST['apellidoPaterno']),FILTER_SANITIZE_STRING);
    $apeMaterno = filter_var(strtolower($_POST['apellidoMaterno']),FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    // echo "$usuario . $email . $password . $password2";

    $errores = '';

    try {
        $conexion = new PDO('mysql:host=localhost;dbname=db_comflix;charset=utf8', 'root', '');
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOExeption $e) {
        echo "Error: " . $e->getMessage();
    }

    $statment = $conexion->prepare('SELECT * FROM usuarios WHERE nombreUsuario = :usuario LIMIT 1');
    $statment->execute(array(':usuario' => $usuario));
    $resultado = $statment->fetch();

    if ($resultado != false) {
        $errores .= 'El nombre de usuario ya existe.<br>';
    }

    $statment2 = $conexion->prepare('SELECT * FROM usuarios WHERE correo = :email LIMIT 1');
    $statment2->execute(array(':email' => $email));
    $resultado2 = $statment2->fetch();

    if ($resultado2 != false) {
        $errores .= 'El correo ya esta registrado.<br>';
    }

    if ($password != $password2) {
        $errores .= 'Las contraseñas deben coincidir.<br>';
    }

    if ($errores == '') {
        $sql = $conexion->prepare('INSERT INTO usuarios (idUsuario, nombreUsuario, apellidoPaterno, apellidoMaterno, correo, contraseña) VALUES (null, :usuario, :aPaterno, :aMaterno, :correo, :pass)');
        $sql->execute(array(':usuario' => $usuario, 'aPaterno' => $apePaterno, 'aMaterno' => $apeMaterno, ':correo' => $email, ':pass' => $password));
        header('Location: logeo.php');
    }

}

require '../register.php';

?>