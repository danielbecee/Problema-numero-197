<?php
$frase = "E nul nugad rel aM ahcna...";

$vocales = ["a", "e", "i", "o", "u"];

$arr = str_split($frase);

$resu = "";
$reverso = "";

foreach ($arr as $letra) {
    if (!in_array(strtolower($letra), $vocales)) {
        $reverso .= $letra;
    } else {
        $resu .= strrev($reverso);
        $resu .= $letra;
        $reverso = "";
    }
}

if ($reverso != []) {
    $resu .= $reverso;
}

echo  "<br>" . $resu;