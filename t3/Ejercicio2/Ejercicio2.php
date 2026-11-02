<?php
    if (isset($_COOKIE['visitas'])) {
        $visitas = $_COOKIE['visitas'];
        echo "<h1>ME CAGO EN TU PUTA MADRE, ME HAS VISITADO ".$visitas." VECES";
        setcookie("visitas",$_COOKIE['visitas']+1);
    }else {
        echo "<h1>Con que es tu primera vez aqui...</h1>";
        setcookie("visitas",1);
    }
?>