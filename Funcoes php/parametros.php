<?php

function ola($texto = "mundo", $periodo = "bom dia!"){

    return "ola $texto! $periodo!<br>  ";
}
echo ola();
echo ola("", "boa noite");
echo ola("joao", "boa tarde
");
?>