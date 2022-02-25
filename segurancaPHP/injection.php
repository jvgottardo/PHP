<?php

if ($_SERVER["REQUEST_METHOD"] === 'POST'){ //se veio via post

    $cmd = escapeshellcmd($_POST["cmd"]);  //evitando um hacker, tratando um dado dinamico

    //var_dump($cmd);

    echo "<pre>"; // <pre></pre> = pre formatado

    $comando = system($cmd, $retorno);

    echo "</pre>";
}

?>

<form method="post" >

    <input type="text" name="cmd">
    <button type="submit">Enviar</button>
</form>