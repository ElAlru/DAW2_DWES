<?php
    session_start();
    if (isset($_GET['receptor']) && isset($_GET['enviador'])) {
        $receptor = $_GET['receptor'];
        $enviador = $_GET['enviador'];
        
        echo 'De: ' . $enviador . '<br>';
        echo 'Para: ' . $receptor . '<br>';
        echo 'Escribe el contenido del mensaje:';
        echo '<form action="escribir.php?receptor=' . $receptor . '&enviador=' . $enviador . '" method="POST">';
        echo '<textarea name="mensaje" id="mensaje"></textarea>';
        echo '<input type="submit" value="Enviar">';
        echo '</form>';
    }

    if (isset($_POST['mensaje']) && isset($_GET['receptor']) && isset($_GET['enviador'])) {
        $mensaje = $_POST['mensaje'];
        $receptor = $_GET['receptor'];
        $enviador = $_GET['enviador'];

        $_SESSION['mensajes'][$receptor][] = [
            'de'    => $enviador,
            'texto' => $mensaje,
            'fecha' => date('Y-m-d H:i:s')
        ];
        
        header('Location: listaUsuarios.php');
        exit();
    }
?>