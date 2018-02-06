<?php

$anoNascimento = 1990;

$nome1 = "Joao";
$nome2 = "Pedro";

$nomeComposto = $nome1 . " " . $nome2;

echo $nomeComposto;
echo "</br>";
unset($anoNascimento);

if(isset($anoNascimento)){
 echo $anoNascimento;	
}else{
    
 echo "variavel indefinida";
}

?>