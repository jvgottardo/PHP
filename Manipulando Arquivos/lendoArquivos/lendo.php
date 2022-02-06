<?php

$filename = "usuarios.csv";

//garantindo que o arquivo ainda esta na pasta
if (file_exists($filename)) { // se existir ela vai abrir 
    $file = fopen($filename, "r"); //abri o arquivo (r = leitura)

    $headers = explode(",", fgets($file)); // fgets = pegar /os cabecalhos

    $data = array();
    while ($row = fgets($file)) { // vai passar linha por linha 

        $rowData = explode(",", $row);
        $linha = array();

       for ($i = 0; $i < count($headers); $i++){     //percorrer as posicoes

        $linha[$headers[$i]] = $rowData[$i]; 
       }

       array_push($data, $linha); // adicinando no array data o $linha
    }

    fclose($file);

    echo json_encode($data);
}

?>