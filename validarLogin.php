<?php
session_start();
include_once("conexion.php");

$link = conectar();

    $nombre = $_POST['nombre'];
    $matricula = $_POST['matricula'];
    $carrera = $_POST['carrera'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $lugarVenta = $_POST['lugarVenta'];

    $query = mysqli_query($link, "insert into usuarios (nombreUsuario, matriculaUsuario, carreraUsuario, telefono, mail, lugarVenta) values ('$nombre', '$matricula', '$carrera', '$telefono', '$email', '$lugarVenta')");
    $idQuery = mysqli_query($link, "select idUsuario from usuarios where matriculaUsuario='$matricula'");
    $resIdUsuario = mysqli_fetch_array($idQuery);

    $_SESSION['idUsuario'] = $resIdUsuario[0];
    $_SESSION['usuario'] = $nombre;

    header("Location: indexRegistrado.php");

?>