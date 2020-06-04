<?php
    session_start();

    $idUsuario = $_SESSION['idUsuario'];
    $usuario = $_SESSION['usuario'];

    if($usuario == null || $usuario = '') {
        header("Location: index.php");
    }

    include_once("conexion.php");

    $enlace = conectar();

    $idLibro = $_GET['idLibro'];

    $query = mysqli_query($enlace, "delete from libros where idLibro = $idLibro");
    
    header("Location: miPerfil.php");



?>