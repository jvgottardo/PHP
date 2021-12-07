<?php

$nomeNascimento = 2003;
/*
$nomeCompleto = "Joao";
//comentario 
*/

$sobrenome = "gottardo";
$nome1 = "gusta";
$nomeCompleto = $nome1 . " " . $sobrenome;

echo $nomeCompleto;

exit;

echo $nome1;

echo "<br/>";

unset($nome1);

if (isset($nome1)) {
echo $nome1;
}


?>