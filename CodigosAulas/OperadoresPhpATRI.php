<?php 
//operadores
$nome = "joao"; // atribuicao 

echo $nome . " mais alguma coisa <br/>"; //concatena "igual o +"

$nome .= " Treinamentos"; //acrescenta

echo $nome;


//////////////////////////////////////////////////
$valorTotal = 0;

$valorTotal += 100;// acrecenta

$valorTotal += 25;

$valorTotal -= 10;//tira

$valorTotal *= .9;//porcetagem

echo $valorTotal;

//////////////////////////////////////////////////////

$a = 10;
$b = 2;

echo $a + $b;

echo "<br/>";

echo $a - $b;

echo "<br/>";

echo $a * $b;

echo "<br/>";

echo $a / $b;

echo "<br/>";

echo $a % $b;

echo "<br/>";

echo $a ** $b;

////////////////////////////////////////////////////

$a = 30;
$b = 55;

var_dump($a > $b);

echo "<br/>";

var_dump($a < $b);

echo "<br/>";

var_dump($a == $b);// compara valor

echo "<br/>";

var_dump($a === $b);//igualdade de identidade

echo "<br/>";

var_dump($a != $b);// compara valor

echo "<br/>";

var_dump($a !== $b);//igualdade de identidade


///////////////////////////////////////////////////

$a = 50;

$b = 35;

var_dump($a <=> $b);// a<b = / 1 a=b = 0 / a<b = -1

////////////////////////////////////////////////////////


$a = NULL;
$b = NULL;
$c = 10;

echo $a ?? $b ?? $c;
////////////////////////////////////////////////////////
//incremento
$a = 10;

echo $a++;

echo "<br/>";

echo $a;
//decremento

echo --$a;

////////////////////////////////////////////////////////////
//ordem de execucao dos operadores ()

$resultado = (10 + 3) / 2 > 5 || 10+5 < 3;
//comparacao usa var_dump

var_dump($resultado);
echo $resultado;



?>