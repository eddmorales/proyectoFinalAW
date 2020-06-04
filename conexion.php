<?php

    function conectar() {
        $link = mysqli_connect("localhost", "root", "", "proyectofinal");

        return $link;
    }

?>