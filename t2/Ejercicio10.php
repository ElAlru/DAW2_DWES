<?php
    require_once("Ejercicio9.php");

    for ($i=1; $i <= 50; $i++) { 
        if ($i % 2 != 0) {
            echo resaltar($i);
        }
   
    }
?>