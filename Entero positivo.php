<?php

$num = 79;
echo $num.", ";
    do{
        if ($num % 2 == 0) {
            $num = $num / 2;
            echo $num.", ";
        }else{
            $num = $num * 3 + 1;
            echo $num.", ";
        }
    }while ($num != 1)
?>