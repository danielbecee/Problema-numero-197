<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=F, initial-scale=1.0">
    <title>Problema número 197</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <form action="" method="post">
            <label for="frase1">Frase a decifrar</label>
            <input type="text" name="frase1" value="<?php
                                                    if (isset($_POST["frase1"])) {
                                                        echo $_POST["frase1"];
                                                    } else {
                                                        echo "E. .n.ualn cnhuag aMda  rle";
                                                    }
                                                    ?>" size="25">
            <input type="submit" value="Decifrar por pasos" name="pasos">
            <input type="submit" value="Decifrar directamente" name="Desifrar">
            <br><br>
        </form>
</body>
<div class="row">

    <?php
    // |-------------------------------------------------------------------|
    // |                          De X2 a X1                               |
    // |-------------------------------------------------------------------| 
    if (isset($_POST["pasos"])) {
        $frase = $_POST["frase1"];
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
        $nueva = $impar . strrev($par);

    ?>
        <div class="col">
            <form action="" method="post">
                <label for="frase1">Quieres decirfrar el X1?</label>
                <br>
                <input type="text" name="frase2" value="<?php
                                                        echo  $nueva;
                                                        ?>" size="25">
                <input type="submit" value="siguiente paso pasos" name="pasos2">
                <br><br>
            </form>
        <?php
    }

    // |-------------------------------------------------------------------|
    // |                          De X1 a X                                |
    // |-------------------------------------------------------------------| 
    if (isset($_POST["pasos2"])) {
        $frase = $_POST["frase2"];
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

        ?>

            <form action="" method="post">
                <label for="frase1">Quieres decirfrar el X1?</label>
                <br>
                <input type="text" name="frase2" value="<?php
                                                        echo  $frase;
                                                        ?>" size="25">
                <input type="submit" value="siguiente paso pasos" name="pasos2">
                <br><br>
            </form>
            <?php
            // echo "El desifrado X2 a X1 es:<br> " . . "<br><br>";
            echo "<p>El desifrado X1 a X es: <br>" . $resu . "</p>";
            ?>

        </div>
    <?php
    }
    // |-------------------------------------------------------------------|
    // |                          De X2 a X                                |
    // |-------------------------------------------------------------------|
    if (isset($_POST["Desifrar"])) {
        $frase = $_POST["frase1"];
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
        $nueva = $impar . strrev($par);
        $vocales = ["a", "e", "i", "o", "u"];
        $arr = str_split($nueva);
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
            $resu .= strrev($reverso);
        }
    ?>
        <div class="col">
            <form action="" method="post">
                <label for="frase1">Quieres decirfrar el X1?</label>
                <br>
                <input type="text" name="frase2" value="<?php
                                                        echo  $nueva;
                                                        ?>" size="25">
                <input type="submit" value="siguiente paso pasos" name="pasos2">
                <br><br>
            </form>
            <?php
            // echo "El desifrado X2 a X1 es:<br> " . $nueva . "<br><br>";
            echo "El desifrado X1 a X es: <br>" . $resu;
            ?>
        </div>
        <div class="col">
            <?php
            echo  "El desifrado de X2 a X es: <br>" . $resu;
            ?>
        </div>
    <?php
    }
    ?>
</div>
</div>

</html>