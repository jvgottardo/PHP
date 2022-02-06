<?php

//criando 2 arquivos
$dir1 = "folder_01";
$dir2 = "folder_02";
 
//se nao existir vai criar
if (!is_dir($dir1)) mkdir($dir1);
if (!is_dir($dir2)) mkdir($dir2);

$filename = "README.txt";
// se nao existir vai criar dentro dos arquivos
if (!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename)) {
// criando arquivo
    $file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename , "w+");
//escrevendo algo dentro do arquivo
    fwrite($file, date("Y-m-d H:i:s"));
//fechando arquivo
    fclose($file);
}
//movendo o arquivo
//1 parametro, nome original e o caminho / 2 parametro para onde ele vai ficar e rename
rename(
$dir1 . DIRECTORY_SEPARATOR . $filename, //origem
$dir2 . DIRECTORY_SEPARATOR . $filename //destino
);

echo "Arquivo movido com sucesso!";
?>