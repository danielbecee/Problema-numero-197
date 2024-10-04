<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=F, initial-scale=1.0">
    <title>Desencriptar</title>
</head>

<body>
    <form action="" method="post">
        <label for="frase1">Frase a decifrar</label>
        <input type="text" name="frase1" value="<?php
                                                if (isset($_POST["frase1"])) {
                                                    echo $_POST["frase1"];
                                                } else {
                                                    echo "E. .n.ualn cnhuag aMda  rle";
                                                }
                                                ?>" size="25">
        <input type="submit" value="Decifrar" name="validar">
    </form>
</body>

</html>

<?php
if (isset($_POST["validar"])) {
    $frase = $_POST["frase1"];
    // $frase = "E. .n.ualn cnhuag aMda  rle";
    $arr = str_split($frase);

    $par = "";
    $impar = "";
    $cont = 0;

    foreach ($arr as $letra) {
        $cont++;
        if ($cont % 2 == 0) {
            $par .= $letra;
        } else {
            $impar .= $letra;
        }
    }

    // echo $impar . "<br>";
    // echo $par . "<br>";

    // Dar la vuelta a par
    $nueva = $impar . strrev($par);

    echo "X1 es: " . $nueva;
}

//  x'': Aauirnedleiua nBo
// x''->x' => AurelianoB uednia
// x'->x => Aureliano Buendia

// x'': E. .n.ualn cnhuag aMda  rle
// x''->x' => E nul nugad rel aM ahcna...
// x'->x => En un lugar de la Mancha...

// x'': aueoi
// x''->x' => aeiou
// x'->x => aeiou

// x'': BnodJo s, dBneam
// x''->x' => BoJ ,dnameB sodn
// x'->x => Bond, James Bond

// x'': dnany
// x''->x' => daynn
// x'->x => danny 