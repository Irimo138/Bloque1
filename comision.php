<?php

$dinero = 10000;
$comision = 0;
if ($dinero <= 10000) {
    $comision = ($dinero / 100) * 5;
}elseif ($dinero <= 20000) {
    $comision = ($dinero / 100) * 8;
}elseif ($dinero <= 40000) {
    $comision = ($dinero / 100) * 10;
}else {
    $comision = ($dinero / 100) * 13;
}
echo $comision;
?>