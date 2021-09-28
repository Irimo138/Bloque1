<?php
$nino = 6;
$altura = 120;
$acompañado = "no";

if ($nino >= 10 || $altura >= 120) {
    echo "Entra";
}elseif ($acompañado == "Si" && $nino >= 6) {
    echo "Entra";
}else{
    echo "No entra";
}
?>