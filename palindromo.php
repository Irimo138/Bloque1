<?php
$palabra = "rotomotor";
$boolean = true;
//echo substr($palabra, 0, 1)."<br>";
for ($i=0; $i < strlen($palabra) ; $i++) { 
    if (substr($palabra, $i, 1) != substr($palabra, strlen($palabra) - 1 - $i, 1) ) {
        $boolean = false;
    }
}
if ($boolean == true) {
    echo "Es palindromo";
}else{
    echo "No es palindromo";
}
?>