<?php
    $nombres = [ 
		'Uno',
		'Dos',
		'Tres',
		'Cuatro',
		'Cinco',
		'Seis',
		'Siete',
		'Ocho',
		'Nueve',
		'Diez',
		'Once',
		'Doce',
		'Trece',
		'Catorce',
		'Quince'
];
    if (isset($_POST['numero'])) {
        $numero = $_POST['numero'];
        echo '<form action="p3.php" method="post">';
        for ($i=1; $i <= $numero; $i++) { 
            echo '<input type="radio" name="numero" value='.$i.">".$nombres[$i-1]."";
        }
        echo '<input value="ENVIAR" type="submit"></form>';
    }
?>