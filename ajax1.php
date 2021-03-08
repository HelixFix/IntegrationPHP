<?php

if (isset($_POST['numtbl'])) {

    for ($i = 1; $i < 11; $i++) {

        echo $i . "x" . $_POST['numtbl'] . "=" . $i * $_POST['numtbl'] . "<br>";
    }

} else {

    if ($_GET['idprd'] == 1) {

        echo "Red/Green/Blue/Dark";
    }
    if ($_GET['idprd'] == 2) {

        echo "Rouge/Vert/Bleu";
    }
}
