<?php

$qualASuaIdade = 80;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if($qualASuaIdade < $idadeCrianca) {
   echo "Crianca";

} elseif($qualASuaIdade < $idadeMaior) {

    echo "Jovem";

} else if($qualASuaIdade < $idadeMaior){

    echo "Adulto";
} else{

    echo "Idoso";
}

echo "<br/>";

echo ($qualASuaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade";


?>