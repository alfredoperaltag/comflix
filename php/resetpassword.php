<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];

    $errores = '';
    $info = '';
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=db_comflix;charset=utf8', 'root', '');
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOExeption $e) {
        echo "Error: " . $e->getMessage();
    }

    $statment = $conexion->prepare('SELECT * FROM usuarios WHERE correo = :email LIMIT 1');
    $statment->execute(array(':email' => $email));
    $resultado = $statment->fetch();

    if ($resultado == true) {
        $info .= 'Se enviara un correo de recuperacion.<br>';
        mail($email,"Restablecer Contraseña de Comflix","Puedes restablecer tu contraseña en el sigiente enlace \n\n http://comflix.test/reset.php");
    }else{
        $errores .= 'Correo incorrecto.<br>';
    }
    // var_dump($resultado);

}

require '../forgot.php';
