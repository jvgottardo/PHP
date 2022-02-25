<?php

$email = $_POST["inputEmail"];

//verificacao dos dados
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "aqui vai o site do google");
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

curl_setopt($ch, CURLOPT_POSTFIELDS, https_build_query(array(
    "secret-key"=>"...",
    "response"=>$_POST["response"],
    "remoteip"=>$_SERVER["REMOTE_ADR"]
)));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$recaptcha = json_decode(curl_exec($ch), true);

curl_close($ch);

if($recaptcha["sucess"] === true){
    echo "OK".$_POST["inputEmail"];
} else{
    header("Location: exemplo-04.php");
}

?>