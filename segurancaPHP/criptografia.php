<?php
//definindo a criptografia
define('SECRET_IV', pack('a16', 'senha')); // 1 chave em 16bits com senha
define('SECRET', pack('a16', 'senha'));// 2 chave em 16bits com senha

//array para incriptar
$data = [
    "nome"=>"JOAO",
    "2_nome"=>"gustavo"
];
//comecando a criptografia
$openssl = openssl_encrypt (
    json_encode($data), //transforma o arary em json
    'AES-128-CBC', // algoritmo que vai ser usado
    SECRET, // 1 chave com senha
    0, // forma de retorno que ele tem
    SECRET_IV // 2 chave com senha
);

echo $openssl;

//decriptando o array, processo inverso

$string = openssl_decrypt($openssl,'AES-128-CBC',  SECRET, 0, SECRET_IV );

//var_dump(json_decode($string, true));
var_dump($string);
?>