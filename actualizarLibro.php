<?php
    session_start();
    include_once("conexion.php");
    $idUsuario = $_SESSION['idUsuario'];
    $usuario = $_SESSION['usuario'];

    $enlace = conectar();
    if($usuario == null || $usuario = '') {
        header("Location: index.php");
    }

    $idLibro = $_GET['idLibro'];

    $query = mysqli_query($enlace, "select * from libros where idLibro = $idLibro");
    $res = mysqli_fetch_array($query);
    
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
<li><a href="index.php">Inicio</a></li>
<li><a href="login.php">Registrarse</a></li>
<li><a href="signup.php">Iniciar Sesión</a></li>
<li><a href="miPerfil.php">Mi Perfil</a></li>
<li><a href="#">Mis Libros</a></li>
<li><a href="cerrarSesion.php">Cerrar Sesión</a></li>
</ul>
</div>

<div id="content">
<div class="left"> 

    <h2 class="subtitulo">Busca tu siguiente libro dentro de la gran variedad que tenemos</h2>

    <br />
    <img src="images/principal.jpg" alt="Example pic" style="width: 450px; border: 3px solid #ccc;" />
    <br /><br />

    <h2 style="text-align: center;">Actualiza los datos de tu Libro</h2>

    <form action="validarNuevoLibro.php" method="post" enctype="multipart/form-data">
        <input type="text" name="nombreLibro" placeholder="<?php echo $res[1]; ?>" required>
        <input type="text" name="areaLibro" placeholder="<?php echo $res[2]; ?>" required>
        <input type="text" name="descripcionLibro" placeholder="<?php echo $res[3]; ?>" required>
        <input type="text" name="costoLibro" placeholder="<?php echo $res[4]; ?>" required>
        <input type="text" name="estadoLibro" placeholder="<?php echo $res[6]; ?>" required>
        <input type="hidden" name="idLibro" value="<?php echo $res[0]; ?>">
        <label for="imagen">Imagen del libro: </label>
        <input type="file" name="imagen">

        <input type="submit" value="Actualizar Libro">
    </form>
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

