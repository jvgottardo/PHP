<form method="POST" enctype="multipart/form-data">

<input type="file" name="fileUpload">

<button type="submit">Send</button>

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST"){

    $file = $_FILES["fileUpload"];

    if ($file["error"]) {
        throw new Exception("Error: " . $file["error"]);
        
    }

    $dirUploads = "uploads";

    if (!is_dir($dirUploads)) {

        mkdir($dirUploads);
    }

    //upload propriamente dito
    if( move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])){//filename e destino

        echo "upload realizado com sucesso"; 

    } else {
        throw new Exception("nao foi possivel fazer o upload.");
    }
}

?>