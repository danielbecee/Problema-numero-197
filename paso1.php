<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="frase">Introduce la Frase</label>
        <input type="text" name="frase">
        <button onclick="" type="submit">Enviar</button>
    </form>
</body>

</html>

<?php

//recibimos la frase
$frase = $_POST['frase'];

//Array de vocales 
$vocales = ["a", "e", "i", "o", "u"];

//creamos una variable y convertimos en un array la frase enviada
$arr = str_split($frase);

//Introducimos dos variables vacia para almacenar
//$resu: Almacenará el resultado final.
//$reverso: Almacena las letras que no son vocales en orden inverso, hasta encontrar una vocal.
$resu = "";
$reverso = "";


// Recorremos el array $arr que contiene los caracteres de la frase.
foreach ($arr as $letra) {
    // Si la letra no es una vocal, la añadimos a $reverso
    if (!in_array(strtolower($letra), $vocales)) {
        $reverso .= $letra;
    } else {
        // Si es una vocal, invertimos las consonantes acumuladas en $reverso
        $resu .= strrev($reverso);
        $resu .= $letra;
        $reverso = "";
    }
}

// si alfinal de foreach sigue tiendo algo reverso lo printa directamente alfinal de la frase

if ($reverso != []) {
    // con esto giramos lo ultimo que tenia con strrev
    $resu .= strrev($reverso);
}

//imprimimos el resultado final
echo  "<br>" . $resu;
