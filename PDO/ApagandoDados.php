<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

//preparar a querry

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID"); 

$id = 3;

// ligar o login com o valor usando bindParam
$stmt->bindParam(":ID", $id);

//executar
$stmt->execute();

echo "Delete OK!";

?>