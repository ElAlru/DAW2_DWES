<?php
    session_start();
    echo '<h1>';
    for ($i=1; $i <= $_SESSION['numerosumandos']; $i++) { 
         if ($i == $_SESSION['numerosumandos']) {
           echo $_SESSION['sumando'.$i];
         }
         else 
            {
                echo $_SESSION['sumando'.$i] . ' + ';
            }
    }
    echo  ' = '.$_SESSION['sumaresultado'];
    echo '</h1>';
    echo '<a href="p1.php" target="_blank">VOLVER</a>';
?>
