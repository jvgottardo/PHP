<?php

function trataNome($name){

    if (!$name) {

        throw new Exception("Nenhum nome foi informado.", 1);
        
    }

    echo ucfirst($name)."<br>";
}

try {

    trataNome("Joao");
    trataNome("");

} catch (Exception $e) {

    echo $e->getMessage(). "<br>";
    echo "linha " . $e->getLine(). "<br>";// linha do erro
    echo  "file " .$e->getFile(). "<br>";// qual o arquivo
    echo "code " .$e->getCode() . "<br>";

} finally {
    echo " Executou o Try!";

}
    


?>