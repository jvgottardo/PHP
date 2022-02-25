<?php

$id =(isset($GET["id"]))?$_GET["id"]:1;

//tratando

if(!is_numeric($id) || strlen($id) > 5){
    exit("pegamos vc!");
}

$conn = mysqli_connect("localhost", "root", "", "dbphp7");

$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

$exec = mysqli_query($conn, $sql);

while ($resultado = mysqli_fetch_object($exec)) {
    var_dump($resultado);
}

?>