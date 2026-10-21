<?php 

    $nombres = [];

    $nombre = "";

    while ($nombre != "fin")
        {
            echo 'introduce nombre -> ';
            $nombre = readline();
            
            if ($nombre != "fin")
                {   
                    echo 'Introduce la edad de ' . $nombre . " -> ";
                    $edad = readline();
                }

                $nombres [$nombre] = [$edad];
        }

        print_r($nombres);

?>