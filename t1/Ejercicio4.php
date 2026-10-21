<?php
    $numerosIntroducidosUsuario = [];

    const NUMERO_SALIDA = 0;
    $numero = 1;


    echo 'Introduce el numero 0 para dejar de escirbir numeros';
    while ($numero != NUMERO_SALIDA)
        {
            echo 'Introduce numero -> ';
            $numero = (int)readline();
            if ($numero != NUMERO_SALIDA) {
                $numerosIntroducidosUsuario[] = $numero;
            }
        }

        echo '¿Que operacion deseas hacer?';
        echo 'SUMAR o MULTIPLICAR -> ';
        $operacion = readline();


        switch (trim(strtolower($operacion)))
        {
            case 'sumar':
                $totalOperacion = 0;
                for($i = 0; $i < count($numerosIntroducidosUsuario);$i++)
                    {
                        $totalOperacion += $numerosIntroducidosUsuario[$i];
                    }
            break;
            case 'multiplicar':
                $totalOperacion = 1;
                for($i = 0; $i < count($numerosIntroducidosUsuario);$i++)
                    {
                        $totalOperacion *= $numerosIntroducidosUsuario[$i];
                    }
            break;
        }
        echo $totalOperacion;
?>