<?php

$anoNascimento = 1990;

//Comentario
$nomeCompleto = "";
/*

Bloco comentario

*/

echo $anoNascimento;

echo "</br>";

unset($anoNascimento);

if(isset($anoNascimento)){
 echo $anoNascimento;	
}else{
 echo "variavel indefinida";
}



?>