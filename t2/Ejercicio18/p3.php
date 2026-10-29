<h1>RESULTADO FINAL</h1><br>
<?php
    if (isset($_POST['numero'])) {
    $numero = $_POST['numero'];
    echo "<h1>".$numero . "+" . "2  = " . ($numero+2)."</h1>";
}
?>
