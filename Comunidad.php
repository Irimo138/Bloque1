<?php

$pisos = 5;
$letra = array('A', 'B', 'C', 'D', 'E');
$puertas = 4;

for ($i=1; $i <= $pisos ; $i++) { 
    for ($j=0; $j < $puertas ; $j++) { 
        echo $i.".".$letra[$j]."    ";
    }
    echo "<br>";
    echo "<br>";
}


?>