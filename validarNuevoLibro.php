<?php

    session_start();
    include_once("conexion.php");
    $idUsuario = $_SESSION['idUsuario'];
    $usuario = $_SESSION['usuario'];

    $enlace = conectar();
    if($usuario == null || $usuario = '') {
        header("Location: index.php");
    }
    $idLibro = $_POST['idLibro'];
    $nombreLibro = $_POST['nombreLibro'];
    $areaLibro = $_POST['areaLibro'];
    $descripcionLibro = $_POST['descripcionLibro'];
    $costoLibro = $_POST['costoLibro'];
    $estadoLibro = $_POST['estadoLibro'];

    $nombreImagen = $_FILES['imagen']['name'];
    $tipoImagen = $_FILES['imagen']['type'];
    $tamanoImagen = $_FILES['imagen']['size'];
    $carpetaDestino = $_SERVER['DOCUMENT_ROOT'].'/aplicacionesWeb/proyectoFinal/images/';
     var_dump($estadoLibro);
    move_uploaded_file($_FILES['imagen']['tmp_name'], $carpetaDestino.$nombreImagen);

    $urlImagen = 'http://localhost/aplicacionesWeb/proyectoFinal/images/'.$nombreImagen;

    if(isset($idLibro)) {
        $query = mysqli_query($enlace, "update libros set nombreLibro='$nombreLibro', areaLibro='$areaLibro', descripcionLibro='$descripcionLibro', costoLibro='$costoLibro', imagenLibro='$urlImagen', estadoLibro='$estadoLibro' where idLibro=$idLibro");
    } else {
        $query = mysqli_query($enlace, "insert into libros (nombreLibro, areaLibro, descripcionLibro, costoLibro, imagenLibro, estadoLibro, idUsuario) values ('$nombreLibro', '$areaLibro', '$descripcionLibro', '$costoLibro', '$urlImagen', '$estadoLibro', $idUsuario)");
    }

    if($query) {
        header("Location: indexRegistrado.php");
    } else if(!$query && isset($idLibro)) {
        header("Location: actualizarLibro.php");
    } else if(!$query && !isset($idLibro)) {
        header("Location: nuevoLibro.php");
    }

?>