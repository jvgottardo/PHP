<?php

$data = array(
    "empresa"=>"Hcode Treinamentos"
);

//definindo um cookie
//1- dando nome ao cookie/ 2- valor / 3- quanto tempo o cookie vai durar em segundos
setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600); 

echo "OK";

?>