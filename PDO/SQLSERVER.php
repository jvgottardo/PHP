<?php

$conn = new PDO("sqlsrv:Database=dbphp7;host=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "");// tipo do banco, nome e aonde ele esta com nome e senha

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");//prepara o banco e da a ordem

$stmt->execute();//executa o banco

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);// mostra o conteudo do banco em array, fetchALL -> fatia todas as linhas


//para navegar no conteudo 
foreach($results as $row){

    foreach($row as $key => $value){ //key = nome da coluna e o value = valor deigitado la dentro
        echo "<strong>" .$key.":</strong>".$value."<br/>";

    }

    echo "===========================================================<br/>";
}

var_dump($results);


?>