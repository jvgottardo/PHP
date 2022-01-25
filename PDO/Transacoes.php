<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

//transacao/ esta amarrada a conexao
$conn->beginTransaction(); //inicia uma transacao
//preparar a querry
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ? "); 

$id = 2;

//executar
$stmt->execute(array($id)); 

$conn->rollback(); // cancela se der errado

//$conn->commit(); // confirma se der certo

echo "Delete OK!";

?>