<?php
//diferenca entre aspas simples e aspas duplas
$nome = "joao";
$nome2 = 'treinamentos';

echo "ABC $nome"; //escreve o vaor da variavel.
echo 'ABC $nome'; //escree o que ta entre as ''. 

////////////////////////////////////////////
//funcoes para string nativas

$nome = "joao vitor";
$nome = strtoupper($nome);// todas as letras maiusculas
echo $nome;

$nome = strtolower($nome);// todas as letras minusculas
echo $nome; 

echo ucwords($nome);//primeira letra em maiusculo de cada frase

echo ucfirst($nome);//primeira letra em maisculo da frase inteira

//////////////////////////////////////////////////
$empresa = "sprint screen";
$empresa = str_replace("e", "3", $empresa);// muda a letra pelo oq vc quiser
echo $empresa;

/////////////////////////////

$frase = "A repeticao e a mae da retencao";

$palavra = "mae";

$q = strpos($frase, $palavra); //retorna a palavra procurada

$text = substr($frase, 0, $q);// retorna tudo que ta antes da palavra "mae"

$text2 = substr($frase, $q); //comeca a partir de "mae"

$text2 = substr($frase, $q + strlen($palavra), strlen($frase));//strlen, vai contar o tamanho da palavra e essa funcao vai colocar a frase depois do "mae"

?>