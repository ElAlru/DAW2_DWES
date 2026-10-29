<?php
    $normales = ['uno','dos','tres','cuatro','cinco','seis','siete','ocho','nueve','diez'];
    $numerosRomanos = ['i','ii','iii','iv','v','vi','vii','viii','ix','x'];

    $a = -1;
    while ($a > 10 || $a < 1) {
        echo 'Introduce numero (1..10) -> ';
        $a = (int) readline();
    }

    echo 'Formato (nombre o romano) -> ';
    $loquequiere =trim(strtolower(readline()));
    switch ($loquequiere) {
        case 'nombre':
            for ($i=0; $i < $a ; $i++) { 
                echo $normales[$i] . " ";
            }
            break;
        case 'romano':
            for ($j=0; $j < $a ; $j++) { 
                echo $numerosRomanos[$j] . " ";
            }
            break;
        default:
            echo 'Opcion no valida';
            break;
    }
?>