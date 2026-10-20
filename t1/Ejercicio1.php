<?php

    $numero = 1;
    echo "Si quieres dejar de escribir numeros escribe el 0\n";
    while ($numero != 0) {
        echo "Introduce un numero -> ";
        $numero = readline();
        
    }
    echo 'Introduciste numeros hasta 0, en 0 se acabo.';
?>