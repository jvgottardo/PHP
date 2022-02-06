<?php

$images = scandir("images");
//converter par json

$data = array();
foreach ($images as $img){

    if (!in_array($img, array(".", ".."))){ // in_array-> onde vc ta procurando e as opcoes

        $filename = "images" . DIRECTORY_SEPARATOR . $img;

        $info = pathinfo($filename);

        $info["size"] = filesize($filename); // tamanho de arquivo em bytes
        $info["modified"] = date("d/m/Y H:i:s", filemtime($filename));  //data de modificacao
        $info["url"] = "http://localhost/Manipulando%20Arquivos/".str_replace("\\", "/", $filename);
        array_push($data, $info);
    }
}
echo json_encode($data);

?>