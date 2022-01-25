<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

//preparar a querry

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN , dessenha = :PASSWORD WHERE idusuario = :ID"); 
// usar SET para dizer qual a coluna e qual o valor que ela recebe para ser atualizado
$login = "gustavo";
$password = "ruimdemira";
$id = 5;

// ligar o login com o valor usando bindParam

$stmt->bindParam(":LOGIN", $login);  
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

//executar
$stmt->execute();

echo "Atualizado OK!";

?>