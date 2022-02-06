<?php

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

// criando um arquivo SCV
$headers = array();

    foreach($usuarios[0] as $key => $value) { //key =  nome da coluna value = valor da coluna

        array_push($headers, ucfirst($key));

    }

    $file = fopen("usuarios.csv", "w+");

    fwrite($file, implode(",", $headers) . "\r\n");
    
//1 foreach = nas linhas, nos registros
    foreach($usuarios as $row){ //  foreach siginifica para cada...

        $data = array();

//2 foreach = nos campos, nas colunas
        foreach($row as $key => $value){

            array_push($data, $value);
        }// fecha o foreach de coluna

        fwrite($file, implode(", ", $data) . "\r\n");
    }// fecha o foreach de linha 

    fclose($file);
    //implode(",", $headers); //oq usar pra dividir o array 


?>