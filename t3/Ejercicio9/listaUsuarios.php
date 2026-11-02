<?php
    session_start();
    if (isset($_POST['usuario']) && isset($_POST['contrasenya'])) {
        $usuario = $_POST['usuario'];
        $contrasenya = $_POST['contrasenya'];
        $_SESSION['ultimoUsuarioLogeado'] = $usuario;
    } else {
        $usuario = $_SESSION['ultimoUsuarioLogeado'] ?? '';
    }

    if (isset($_SESSION['usuarios'][$usuario])) {
        echo 'Usuario actual '. $usuario;
        echo '<h1>Lista de usuarios / mensajes </h1>';
        
        foreach ($_SESSION['usuarios'] as $enviador => $contrasenya) {
            if ($enviador === $usuario) {
                continue;
            }
            
            $totalMensajes = 0;
            if (isset($_SESSION['mensajes'][$usuario])) {
                foreach ($_SESSION['mensajes'][$usuario] as $msg) {
                    if ($msg['de'] === $enviador) {
                        $totalMensajes++;
                    }
                }
            }
            
            echo $enviador . '(' . $totalMensajes . ') ';
            echo '<a href="escribir.php?receptor='.$enviador.'&enviador='.$usuario.'"> Escribir </a>';
            
            if ($totalMensajes > 0) {
                echo '<a href="leer.php?enviador='.$enviador.'&receptor='.$enviador.'"> Leer </a>';
            }
            echo '<br>';
        }
    } else {
        header('Location:registrar.php');
    }
?> 

<a href="login.php">Volver a login</a>