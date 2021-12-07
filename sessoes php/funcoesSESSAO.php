<?php

require_once("config.php");

echo session_save_path();
echo "<br/>";
var_dump(session_status());
echo "<br/>";
switch(session_status()){

    case PHP_SESSION_DISABLED:
        echo "sessoes desabilitadas";
        break;

        case PHP_SESSION_NONE:
            echo "sessoes habilitadas mas nao existe";
            break;


            case PHP_SESSION_ACTIVE:
                echo "sessoes habilitadas e existe";
                break;
}

?>