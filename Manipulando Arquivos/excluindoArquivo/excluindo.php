<?php

$file = fopen("teste.txt", "w+");

fclose($file);

//removendo arquivo
unlink("teste.txt");

echo "Arquivo removido com sucesso!";

?>