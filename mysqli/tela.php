<?php
$conn = new mysqli("localhost", "root", "", "dbphp7"); // IP, USUARIO, SENHA E BANCO

if ($conn->connect_error){

    echo "Error: " . $conn->connect_error;
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();//transformar em json

while ($row = $result->fetch_array(MYSQLI_ASSOC)) {

array_push($data, $row);

}
echo json_encode($data);

?>