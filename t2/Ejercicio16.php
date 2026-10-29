<?php
    if (isset($_POST['nombre']) && isset($_POST['contrasenya'])) {

        // Limpiamos los espacios en blanco con trim()
        $nombre = trim($_POST['nombre']);
        $contrasenya = trim($_POST['contrasenya']);

        // Validamos si el nombre está vacío
        if ($nombre === "") {
            echo '<p style="color:red;">El nombre debe tener valor</p>';
        } 
        // Validamos la longitud de la contraseña
        elseif (strlen($contrasenya) < 6 || strlen($contrasenya) > 12) {
            echo '<font color="red"><h1>La contraseña debe tener entre 6 y 12 caracteres</h1></font>';
        } 
        // Si todo es correcto
        else {
            echo "<p>Hola " . $nombre . ", tu contraseña es " . $contrasenya . "</p>";
        }

    } else {
        echo '<form action="Ejercicio15.php" method="POST">';
        echo 'Nombre: <input type="text" name="nombre" value=""><br>';
        echo 'Contraseña: <input type="password" value="" name="contrasenya"><br>';
        echo '<input type="submit" value="Enviar"><br>';
        echo '</form>';
    }
?>