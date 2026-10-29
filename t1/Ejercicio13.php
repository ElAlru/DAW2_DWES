<?php
    $insultos = [
    'tonto',
    'idiota',
    'imbecil',
    'estupido',
    'capullo',
    'cabron',
    'gilipollas',
    'payaso',
    'mierda',
    'puta',
    'pesado',
    'inutil',
    'miserable',
    'cretino',
    'baboso'
];

    echo 'Insultame puto mierdas -> ';
    $insultosUsuario = trim(strtolower(readline()));

    $arrayTroceado = explode(" ",$insultosUsuario);
    print_r($arrayTroceado);
    $fraseModificada = "";
    foreach ($arrayTroceado as $isnultoActual) {
        if (in_array($isnultoActual,$insultos)) {
                for ($i=0; $i < strlen($isnultoActual) ; $i++) { 
                    $fraseModificada.="*";
                }
                $fraseModificada .= " ";
        }else {
             $fraseModificada.= $isnultoActual." ";
        }
    }
    echo $fraseModificada;

?>