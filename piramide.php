<?php

$num = 5;

for ($i = 1; $i <= $num; $i++) { 
    for ($j = $num; $j > $i ; $j-- ) { 
        echo "#";
    }
    for ($k = 1; $k <= $i ; $k++ ) { 
        echo "*";
        echo ' ';
    }
    //$num--;
    echo "</br>";
}
?>