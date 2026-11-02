<?php
    session_start();
?>
<h1>NUEVO USUARIO</h1>
<form action="login.php" method="POST">
    <label for="usuario">Nombre:</label>
    <input type="text" id="usuario" name="usuario" placeholder="Escribe aquí..." required><br>
    <label for="contrasenya">Contraseña:</label>
    <input type="password" id="contrasenya" name="contrasenya" minlength="6" required><br>
    <input type="submit" value="Enviar">
</form>