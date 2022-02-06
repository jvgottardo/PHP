<?php

try {

    throw new Exception("Houve um erro.", 400);

} catch (Exception $e){//capturando o catch do Exception e o erro foi jogado no dolar $e

    echo json_encode(array(
        "message"=>$e->getMessage(),// -> para acessar um metodo // menssagem
        "line"=>$e->getLine(), // linha do erro
        "file"=>$e->getFile(), // qual o arquivo
        "code"=>$e->getCode() // o codigo do erro

));
}

?>