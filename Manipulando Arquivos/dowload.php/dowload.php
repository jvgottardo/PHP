<?php

$link = "https://criticalhits.com.br/wp-content/uploads/2020/04/goku-smile.jpg";

$content = file_get_contents($link);

//pegando informacoes da imagem

//transformando em um arquivo real

$parse = parse_url($link);

$basename = basename($parse["path"]);

//criando o arquivo
$file = fopen($basename, "w+"); //$basename e onde vc pode mudar o nome da imagem

fwrite($file, $content);

fclose($file);
 // no img o = substitui o echo
?>

<img src="<?=$basename?>" > 