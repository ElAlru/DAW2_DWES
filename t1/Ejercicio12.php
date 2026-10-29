<?php

    echo 'Insultame puto mierdas -> ';
    $insultosUsuario = trim(strtolower(readline()));

    $arrayTroceado = explode(" ",$insultosUsuario);
    print_r($arrayTroceado);
    $fraseModificada = "";
    foreach ($arrayTroceado as $isnultoActual) {
        if ($isnultoActual == "tonto") {
            $fraseModificada.='***** ';
        }else {
             $fraseModificada.= $isnultoActual." ";
        }
    }
    echo $fraseModificada;

?>