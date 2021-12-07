<?php

$json = '[{"nome":"joao","idade":20},{"nome":"pedro","idade":40}]';

$data = json_decode($json, true);

var_dump($data);

?>