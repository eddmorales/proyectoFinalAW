<?php
            echo '
                <div class="datosUsuario">
                    <img class="imagenUsuario" src='.$resUsuario[1].' alt="Imagen del usuario">

                    <div class="infoUsuario">
                        <p style="text-transform: uppercase;">Nombre: '.$resUsuario[2].'</p>
                        <p>Tel de contacto: '.$resUsuario[5].'</p>
                        <p>Email de contacto: '.$resUsuario[6].'</p>
                        <p>Lugar de venta: '.$resUsuario[7].'</p>    
                    </div>
                </div>
            ';
            
            echo '
                    <div class="resultadoLibros">
                        <h3 style="font-size: 18px; margin-bottom: 1rem;">Libro disponible para su venta</h3>
                        <div class="datosLibro">
                            <div class="imagenLibro">
                                <img src='.$resLibros[5].' alt="Imagen del usuario" style="width: 100px;">
                            </div>
                            <div class="infoLibro">
                                <p>'.$resLibros[1].'</p>
                                <p>$ '.$resLibros[4].'</p>
                                <a href="comprarLibro.php?idLibro='.$resLibros[0].'" class="boton">Comprar Libro</a>
                            </div>
                        </div>
                    </div>
                ';
                

            //echo "<hr>";
        ?>
