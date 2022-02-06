<?php

$name = "images";
//saber se existe ou nao o diretorio

if (!is_dir($name)){
    //criando caso nao tenha
        mkdir($name);
        echo "diretorio $name criado com sucesso!";
}else {
    //remove o diretorio
    rmdir($name);
    echo "ja existe 0 diretorio: $name foi removido";
}


?>