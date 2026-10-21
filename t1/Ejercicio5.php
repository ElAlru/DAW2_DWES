<?php

    $palabras = ['as','dos','tres','cuatro','cinco','seis','siete','sota','caballo','rey'];

    echo 'Introduce numero -> ';
    $nuemro = (int)readline();
    $contador = 0;
    $indiceArray = 0;

    while ($contador != $nuemro)
        {
            if ($indiceArray > 9)
                {
                    $indiceArray = 0;
                }

            echo $palabras[$indiceArray]  . " ";
            $indiceArray++;
            $contador++;
        }

?>