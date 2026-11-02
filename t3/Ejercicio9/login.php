<h1>LOGIN<h1>
<form action="listaUsuarios.php" method="POST">
<label for="usuario">Nombre:</label>
<?php
    session_start();
    if (isset($_POST['usuario']) && isset($_POST['contrasenya'])) {
        $usuario = $_POST['usuario'];
        $contrasenya = $_POST['contrasenya'];
        $_SESSION['usuarios'][$usuario] = $contrasenya;
    }    
    $ultimoUsuarioLogeado = $_SESSION['ultimoUsuarioLogeado'];
    echo "<input type='text' id='usuario' name='usuario' placeholder='Escribe aquí...' value='".$ultimoUsuarioLogeado ."'required><br>";
?>
<label for="contrasenya">Contraseña:</label>
<input type="password" id="contrasenya" name="contrasenya" minlength="6" required><br>
<label>
        Recordar
    <input type="checkbox" name="recordar" value="valor" checked>
</label><br>
<input type="submit" value="Enviar">
</form><br>
<a href="registrar.php">Registrar un nuevo usuario</a>



