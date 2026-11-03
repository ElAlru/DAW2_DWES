<?php
    session_start();
    if (isset($_POST['numerosumandos'])) {
        $numerosumandos = $_POST['numerosumandos'];
        $_SESSION['numerosumandos'] = $numerosumandos;
        $_SESSION['cantidadsumandossolicitados'] = 1;
    }
    if (isset($_POST['sumando'])) {
        $sumando = $_POST['sumando'];
        
        $_SESSION['sumando'.$_SESSION['cantidadsumandossolicitados']] = $sumando;

        if (isset($_SESSION['sumaresultado'] )) {
           $_SESSION['sumaresultado'] = ($_SESSION['sumaresultado']+$sumando);
        } else 
        {
            $_SESSION['sumaresultado'] = $sumando;
        }
        
        $_SESSION['cantidadsumandossolicitados'] = ($_SESSION['cantidadsumandossolicitados']+1);
    }

    if ($_SESSION['cantidadsumandossolicitados'] > $_SESSION['numerosumandos']) {
        header('Location:p3.php');
        exit();
    } else 
    {
        echo 'Introduce el sumando número ' . $_SESSION['cantidadsumandossolicitados'] . '(1..10)';
        echo '<form action="p2.php" method="POST">';
        echo '<input type="number" max="10" min="1" id="sumando" name="sumando" required>';
        echo '<input type="submit" value="Enviar">';
        echo '</form>';
    }
?>