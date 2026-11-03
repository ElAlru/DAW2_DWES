<?php
    session_start();
    session_unset();    
    session_destroy();
?>

<form action="p2.php" method="POST">
    <label for="numerosumandos">Introduce numero de sumandos (2..15):</label>
    <input type="number" max="15" min="3" id="numerosumandos" name="numerosumandos" required>
    <input type="submit" value="Enviar">
</form>