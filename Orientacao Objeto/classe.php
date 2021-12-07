<?php

class Pessoa {

    public $nome;//atributo

    public function falar(){//metodo

        return "O meu nome e ".$this->nome;

    }
}

$glaucio = new Pessoa();
$glaucio->nome = "Glaucio Daniel";
echo $glaucio->falar();


?>