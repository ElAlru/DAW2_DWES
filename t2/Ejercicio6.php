<table border="1">
        <thead>
            <tr>
                <th>#</th>
                <th>Caracter</th>
                <th>Cod.URL</th>
            </tr>
        </thead>
        <tbody>
                <?php
                                /*<td>Dato 1</td>
                <td>Dato 2</td>
                <td>Dato 3</td>*/
                for ($i=0; $i <= 255 ; $i++) { 
                    echo "<tr><td>".$i."</td>"."<td>".urlencode(chr($i))."</td>"."<td>".rawurlencode(chr($i))."</td></tr>";
                }
                ?>
            
        </tbody>
    </table>