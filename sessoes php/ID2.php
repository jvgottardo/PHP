<?php

session_id('na660it1v5nmlg303ub5s0tnlg');
require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>