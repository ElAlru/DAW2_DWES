<?php
  
    $caracteres = ['+','-','.'];

    $numeroCaracteresMaximo = 10;

    for($i = $numeroCaracteresMaximo; $i >= 1; $i--)
        {
            echo "\n";
            for ($j = $i; $j >= 1; $j--)
                {
                    echo $caracteres[($i-$j) % 3];
                }
        }
  
?>