<?php

    include("keys.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Login</title>
<meta http-equiv="Content-Language" content="English" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/custom.css">

<script src="https://www.google.com/recaptcha/api.js?render=<?php echo SITE_KEY; ?>"></script>

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
<li><a href="#">Links</a></li>
<li><a href="#">Forum</a></li>
<li><a href="#">Free Stuff</a></li>
</ul>
</div>

<div id="content">
<div class="left"> 

    <h2 class="subtitulo">Busca tu siguiente libro dentro de la gran variedad que tenemos</h2>

    <br />
    <img src="images/principal.jpg" alt="Example pic" style="width: 450px; border: 3px solid #ccc;" />
    <br /><br />

    <h2 style="text-align: center;">Registrate</h2>

    <form action="validarLogin.php" method="post" id="form">
        <input type="text" name="nombre" placeholder="Ingresa tu nombre" required>
        <input type="text" name="matricula" placeholder="Ingresa tu matricula" required>
        <input type="text" name="carrera" placeholder="Ingresa tu carrera" required>
        <input type="text" name="telefono" placeholder="Ingreesa tu telefono" required>
        <input type="text" name="email" placeholder="Ingresa tu Email" required>
        <input type="text" name="lugarVenta" placeholder="Donde te gustaría hacer la compra" required>
        <input type="hidden" name="googleResponseToken" id="googleResponse">

        <input type="submit" value="Registrarse">
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

<script type="text/javascript">

    const enviar = document.getElementById('form');

    const captcha = document.getElementById('googleResponse');

    console.log(captcha.value);

        grecaptcha.ready(function() {
          grecaptcha.execute('<?php echo SITE_KEY; ?>', {action: 'homepage'}).then(function(token) {
              captcha.value = token;
          });   
        });
</script>

