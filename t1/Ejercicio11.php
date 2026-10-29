<?php
    $cadenaEjemplo = "Juan:Perez:654123456//Maria:Gomez:611222333//Carlos:Lopez:699887766//Lucia:Fernandez:600112233//";

    echo "Introduce la cadena:\n-> ";
    $entrada = readline();

    $cadena = !empty(trim($entrada)) ? $entrada : $cadenaEjemplo;

    // Separamos los diferentes contactos por "//"
    $personas = explode("//", $cadena); //le poneosm el separador y luego la cadena que queremos separar

    echo "\n================ LISTADO DE CONTACTOS ================\n";

    $contador = 1;
    foreach ($personas as $persona) {
        // Si hay entradas vacías (por ejemplo un '//' al final), las ignoramos
        if (trim($persona) === "") {
            continue;
        }

        // Separamos los campos por ":"
        $datos = explode(":", $persona);

        if (count($datos) >= 3) {
            $nombre = trim($datos[0]);
            $apellido = trim($datos[1]);
            $telefono = trim($datos[2]);

            echo "Contacto #$contador\n";
            echo "  Nombre:   $nombre\n";
            echo "  Apellido: $apellido\n";
            echo "  Teléfono: $telefono\n";
            echo "------------------------------------------------------\n";
            $contador++;
        }
    }

?>