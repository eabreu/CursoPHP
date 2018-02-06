<?php

//=======  BASICOS  ======================

$nome = "Hcode";
$site = 'www.hcode.com.br';

$ano = 1990;
$salario = 5500.99;
$bloqueado = false;

//======= COMPOSTAS ===========================

$frutas = array("abacaxi","laranja","manga");
echo $frutas[2];
$nascimento = new DateTime();
echo "</br>";

//var_dump($nascimento);
//======   ESPECIAIS   ============================

$arquivo = fopen("exemplo-03.php", "r");
var_dump($arquivo);
echo "</br>";

$nulo = null;
var_dump($nulo);

?>