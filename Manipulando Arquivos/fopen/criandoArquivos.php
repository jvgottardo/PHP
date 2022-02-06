<?php

$file = fopen("log.txt", "a+");//criando arquivo/  w+ =  dando a permicao pra escrever 

fwrite($file, date("Y-m-d H:i:s") . "\r\n"); // primeiro o arquivo e segundo os dados que quer dentro do arquivo

//fechar o manipulador
fclose($file);

echo "Arquivo criado com sucesso";
?>