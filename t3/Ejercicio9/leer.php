<?php
    session_start();
    if (!isset($_SESSION['ultimoUsuarioLogeado'])) {
        header('Location: login.php');
        exit();
    }

    echo 'Usuario actual ' . $_SESSION['ultimoUsuarioLogeado'];

    if (isset($_GET['enviador'])) {
        $enviador = $_GET['enviador'];
        $usuarioActual = $_SESSION['ultimoUsuarioLogeado'];

        echo '<h1>Lista de mensajes de '.$enviador. '</h1>';
        echo '<table border=1>
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Texto</th>
            </tr>
        </thead>
        <tbody>';

        if (isset($_SESSION['mensajes'][$usuarioActual])) {
            foreach ($_SESSION['mensajes'][$usuarioActual] as $mensaje) {
                if ($mensaje['de'] === $enviador) {
                    echo '<tr>';
                    echo '<td>' . $mensaje['fecha'] . '</td>';
                    echo '<td>' . $mensaje['texto'] . '</td>';
                    echo '</tr>';
                }
            }
        }

        echo '</tbody>
        </table>';
    } else {
        header('Location:listaUsuarios.php');
        exit();
    }
?>
<br>
<a href="listaUsuarios.php">Volver a lista</a>