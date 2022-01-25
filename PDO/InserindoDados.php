<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

//preparar a querry

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)"); // PARA MAIOR SEGURANCA USAR O VALUES ASSIM.

$login = "joao";
$password = "1234567890";

$stmt->bindParam(":LOGIN", $login);  // ligar o login com o valor usando bindParam
$stmt->bindParam(":PASSWORD", $password);

//executar
$stmt->execute();

echo "Inserido OK!";

?>