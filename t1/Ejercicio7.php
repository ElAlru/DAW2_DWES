<?php

    echo 'Introduce linea de texto -> ';
    $texto = readline();

    echo 'Introduce numero -> ';
    $veces = (int)readline();

    $html = "";
    for($i = 1; $i <= $veces;$i++)
        {
            $html .= "<h".$i.">".$texto."</h".$i.">\n";
        }
        echo $html;
?>