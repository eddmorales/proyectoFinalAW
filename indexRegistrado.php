<?php
session_start();
include_once("conexion.php");
$idUsuario = $_SESSION['idUsuario'];
$usuario = $_SESSION['usuario'];

if($usuario == null || $usuario = '') {
    header("Location: index.php");
}

$enlace = conectar();

$query = mysqli_query($enlace, "select * from usuarios");
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Venta de Libros</title>
<meta http-equiv="Content-Language" content="English" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>

<div id="wrap">

<div id="header">
<h1 style="margin-bottom: 5px;">Venta de Libros en la FCC</h1>
<h2>Busca y compra los libros que más te gusten. Ponte de acuerdo con los vendedores</h2>
</div>

<div id="menu">
<ul>
<li><a href="indexRegistrado.php">Inicio</a></li>
<li><a href="login.php">Registrarse</a></li>
<li><a href="signup.php">Iniciar Sesión</a></li>
<li><a href="miPerfil.php">Mi Perfil</a></li>
<li><a href="miPerfil.php#misLibros">Mis Libros</a></li>
<li><a href="cerrarSesion.php">Cerrar Sesión</a></li>
</ul>
</div>

<div id="content">
<div class="left"> 

    <h2 class="subtitulo">Busca tu siguiente libro dentro de la gran variedad que tenemos</h2>

    <br />
    <img src="images/principal.jpg" alt="Example pic" style="width: 450px; border: 3px solid #ccc;" />
    <br /><br />


    <h2 class="subtitulo">Conoce el catalogo que acada usuario posee</h2>
    <div id="contenedorUsuariosyLibros">
    <?php
    $queryLibros = mysqli_query($enlace, "select * from libros where not idUsuario=$idUsuario");
        while($resultadoLibros = mysqli_fetch_array($queryLibros)) {
            echo '
                <div class="resultadoLibros">
                    <h3 style="font-size: 18px; margin-bottom: 1rem;">Libro disponible para su venta</h3>
                    <div class="datosLibro">
                        <div class="imagenLibro">
                            <img src='.$resultadoLibros[5].' alt="Imagen del usuario" style="width: 100px;">
                        </div>
                        <div class="infoLibro">
                            <p>'.$resultadoLibros[1].'</p>
                            <p>$ '.$resultadoLibros[4].'</p>
                            <a href="mostrarLibro.php?idLibro='.$resultadoLibros[0].'&idUsuario='.$resultadoLibros[8].'" class="boton">Ver más</a>
                        </div>
                    </div>
                </div>
                <hr>
            ';
        }            
    ?>
    </div>

</div>

<div class="right"> 

<div class="adleft">
<br /><br />
125x125<br />
Ads
</div>
<div class="adright">
<br /><br />
125x125<br />
Ads
</div>

<div style="clear: both;"> </div>

<h2>Categories :</h2>
<ul>
<li><a href="#">World Politics</a></li> 
<li><a href="#">Europe Sport</a></li> 
<li><a href="#">Networking</a></li> 
<li><a href="#">Nature - Africa</a></li>
<li><a href="#">SuperCool</a></li> 
<li><a href="#">Last Category</a></li>
</ul>

<h2>Archives</h2>
<ul>
<li><a href="#">January 2007</a></li> 
<li><a href="#">February 2007</a></li> 
<li><a href="#">March 2007</a></li> 
<li><a href="#">April 2007</a></li>
<li><a href="#">May 2007</a></li> 
<li><a href="#">June 2007</a></li> 
<li><a href="#">July 2007</a></li> 
<li><a href="#">August 2007</a></li> 
<li><a href="#">September 2007</a></li>
<li><a href="#">October 2007</a></li>
<li><a href="#">November 2007</a></li>
<li><a href="#">December 2007</a></li>
</ul>

</div>

<div style="clear: both;"> </div>

</div>

<div id="footer">
Designed by <a href="http://www.free-css-templates.com/">Free CSS Templates</a>, Thanks to <a href="http://www.openwebdesign.org/">Custom Web Design</a>
</div>

</div>

</body>
</html>

