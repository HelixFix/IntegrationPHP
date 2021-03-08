<?php

require('class_test.php');
require('class_test_enfant.php');

$monobjet = new Firstclass('Durand', 'Loic', 36);

$monobjet2 = new Firstclass('Meyer', 'Cedric', 39);

$monobjet->vieillir(10);
$monobjet->identification();

$monobjet2->identification();


$monobjet3 = new Childclass('duppond', 'Tom', 36);
$monobjet3->identification();
$monobjet3->parle();
