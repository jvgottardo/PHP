<?php

$filename = "senna.jpg";

$base64 = base64_encode(file_get_contents($filename)); //le o conteudo do arquivo inteiro e 
//transfoma de binario para string com base64

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileinfo->file($filename);
//padrao de exibicao do base64
$base64encode = "data:" . $mimetype . ";base64," . $base64;


?>

<a href="<?$base64encode?>" target="_blank">  Link para imagem</a>
<img src=" <?=$base64encode?>" > 