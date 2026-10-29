<?php

    echo "Día: ";
    $dia = (int)readline();

    echo "Mes: ";
    $mes = (int)readline();

    echo "Año: ";
    $ano = (int)readline();

    $fechaIntroducida = mktime(0, 0, 0, $mes, $dia, $ano);
    $fechaActual = time();

    $segundosTotales = $fechaActual - $fechaIntroducida;

    $segundosMinuto = 60;
    $segundosHora = 60 * $segundosMinuto;
    $segundosDia = 24 * $segundosHora;
    $segundosMes = 30 * $segundosDia;
    $segundosAno = 365 * $segundosDia;

    $anos = (int)($segundosTotales / $segundosAno);
    $resto = $segundosTotales % $segundosAno;

    $meses = (int)($resto / $segundosMes);
    $resto = $resto % $segundosMes;

    $dias = (int)($resto / $segundosDia);
    $resto = $resto % $segundosDia;

    $horas = (int)($resto / $segundosHora);
    $resto = $resto % $segundosHora;

    $minutos = (int)($resto / $segundosMinuto);
    $segundos = $resto % $segundosMinuto;

    echo "Han transcurrido $anos años, $meses meses, $dias días, $horas horas, $minutos minutos y $segundos segundos desde la fecha indicada\n";

?>
