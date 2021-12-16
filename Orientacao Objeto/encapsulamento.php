<?php

class Pessoa {

    public $nome = "Rasmus Lerdorf";// consegue acessar, todo mundo ve
    protected $idade = 48;// so consegue acessar quem ta dentro da propria classe ou quem herda da classe
    private $senha = "123456"; //so consegue acessar quem ta dentro da propria classe e +protegido

    public function verDados(){

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }
}

$objeto = new Pessoa();

//echo $objeto->idade . "<br/>";

$objeto->verDados();

?>