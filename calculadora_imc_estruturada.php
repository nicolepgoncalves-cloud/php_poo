<?php

$joaoNome = "João Filho";
$joaoPeso = 80;
$joaoAltura = 1.15;
$joaoImc = number_format($joaoPeso / ($joaoAltura),2, ',', '.');
echo "O IMC de $joaoNome é $joaoImc. <br>";

$mariaNome = "João Filho";
$mariaPeso = 80;
$mariaAltura = 1.15;
$mariaImc = number_format($mariaPeso / ($mariaAltura),2, ',', '.');
echo "O IMC de $mariaNome é $mariaImc. <br>";

