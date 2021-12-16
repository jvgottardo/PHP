<?php

class Pessoa {

    public $nome = "Rasmus Lerdorf";// consegue acessar, todo mundo ve
    protected $idade = 48;// so consegue acessar quem ta dentro da propria classe ou quem herda da classe
    private $senha = "123456";//so consegue acessar quem ta dentro da propria classe e +protegido

    public function verDados(){

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }
}
//private nao extende para programador

class Programador extends Pessoa {

    public function verDados(){

        echo get_class($this) . "<br/>";

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }

}

$objeto = new Programador();

//echo $objeto->idade . "<br/>";

$objeto->verDados();

?>