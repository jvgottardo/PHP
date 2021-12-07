<?php

//define("SERVIDOR", '127.0.0.1');


//echo SERVIDOR;


/////////////////////////

define("BANCO_DE_DADOS", [
    '127.0.0.1',
    'root',
    'password',
    'teste'
], true); // usar o true e insensitive --> pode chamar de qualquer jeito

print_r(BANCO_DE_DADOS);

?>