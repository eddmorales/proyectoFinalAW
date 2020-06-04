<?php
    session_start();
    include_once("conexion.php");

    $link = conectar();

    $matricula = $_POST['matricula'];
    $email = $_POST['email'];

    $query = mysqli_query($link, "select * from usuarios where matriculaUsuario = '$matricula' and mail = '$email'");
    
    $resultado = mysqli_fetch_array($query);
    $_SESSION['idUsuario'] = $resultado[0];
    $_SESSION['usuario'] = $resultado[2];
    $idUsuario = $_SESSION['idUsuario'];
    $usuario = $_SESSION['usuario'];
    if($resultado) {
        header("Location: indexRegistrado.php");
    } else {
        header("Location: signup.php");
    }
?>