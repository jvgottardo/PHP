<?php

$conn = new mysqli("localhost", "root", "", "dbphp7"); // IP, USUARIO, SENHA E BANCO

if ($conn->connect_error){

    echo "Error: " . $conn->connect_error;
}

    $stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)"); //colocar
    // comandos do banco para executar

    $stmt->bind_param("ss", $login, $pass); //para os VALUES (?, ?) no caso aqui foi ss = string string
   

    $login = "user";//Valores user e 12345 = usuario e senha
    $pass = "12345";

    $stmt->execute();

    $login = "root";
    $pass = "hcode";

    $stmt->execute();

?>