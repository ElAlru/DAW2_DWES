<?php 

    echo 'Introduce un numero (n) -> ';
    $n = readline();

        echo 'Introduce un numero (p) -> ';
    $p = readline();

    for ($i = 1; $i <= $n; $i++)
        {
            for($j = 0; $j < $p;$j++)
                {
                    echo $j . " ";
                }
        }

    

?>