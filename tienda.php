<?php

$total_compra = 81;
$tipo_compra = "ropa";

if ($total_compra >= 19) {
    if ($tipo_compra == "mascotas") {
        echo "no se realizan envios";
    }elseif ($total_compra >= 19 && $total_compra <= 40) {
        echo "El envio cuesta 9€";
    }elseif ($total_compra > 80){
        echo "El envio es gratis";
    }
}
if ($tipo_compra == "mascotas") {
    $total_compra = $total_compra + ($total_compra / 10);
}else{
    $total_compra = $total_compra + (($total_compra * 100)/21);
}
echo "</br>";
echo "El precio final es: ". round($total_compra, 2)."€";


?>