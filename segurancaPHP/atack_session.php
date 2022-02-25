<?php
//como previnir, gerando um novo id de sessao cada vez que dar F5

session_start();

//depois de verificar login e senha, reinicie o ID da sessao

session_destroy();

session_start();

session_regenerate_id();

echo session_id();

?>