<?php

$peso = 68;
$altura = 1.65;
$imc =  number_format($peso / ($altura*$altura));

echo "O valor do IMC é $imc <br>";