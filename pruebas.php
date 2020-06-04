<div id="contenedorUsuariosyLibros">
    <h2 class="subtitulo">Conoce el catalogo que acada usuario posee</h2>
    <?php
        while($resultadoUsuarios = mysqli_fetch_array($query)) {
            echo '
                <div class="datosUsuario">
                    <div class="imagenUsuario">
                        <img src="$resultadoUsuarios[1]" alt="Imagen del usuario" style="width: 100px;">
                    </div>
                    <div class="infoUsuario">
                        <?php
                            echo "
                                <p style='text-transform: uppercase;'>Nombre: $resultadoUsuarios[2]</p>
                                <p>Tel de contacto: $resultadoUsuarios[5]</p>
                                <p>Email de contacto: $resultadoUsuarios[6]</p>
                                <p>Lugar de venta: $resultadoUsuarios[7]</p>    
                            ";
                        ?>
                    </div>
                </div>
            ';
            
        }
        $queryLibros = mysqli_query($enlace, "select * from libros where idUsuario = $resultadoUsuarios[0]");
        
        while($resultadoLibros = mysqli_fetch_array($queryLibros)) {
            echo '
                <div class="" id="resultadoLibros">
                    <h3 style="font-size: 18px; margin-bottom: 1rem;">Libros disponibles para su venta</h3>
                    <div class="datosLibro">
                        <div class="imagenLibro">
                            <img src="$resultadoLibros[5]" alt="Imagen del usuario" style="width: 100px;">
                        </div>
                        <div class="infoLibro">
                            <p>$resultadoLibros[1]</p>
                            <p>$resultadoLibros[4]</p>
                            <a href="mostrarLibro.php?idLibro=$resultadoLibros[0]" class="boton">Ver más</a>
                        </div>
                    </div>
                </div>
            ';
        }
    ?>
</div>


   
    