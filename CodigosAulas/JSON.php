<?php

$pessoas = array();

array_push($pessoas, array(

    'nome'=>'joao',
    'idade'=>20
));
array_push($pessoas, array(

    'nome'=>'pedro',
    'idade'=>40
));

 echo json_encode($pessoas);
?>