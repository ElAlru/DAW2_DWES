<?php
    if (isset($_GET['nombre']) && isset($_GET['contrasenya'])) {
        $nombre = $_GET['nombre'];
        $contrasenya = $_GET['contrasenya'];
        echo "<p> Hola ".$nombre.", tu contraseña es ".$contrasenya;
    }else 
    {
        echo '<form action="Ejercicio15.php" method="GET">';
        echo 'Nombre: <input type="text" value="root" name="nombre"><br>';
        echo 'Contraseña: <input type="password" value="maricon" name="contrasenya"><br>';
        echo '<input type="submit" value="Enviar"><br>';
        echo '</form>';
    }
    
?>

    
    



