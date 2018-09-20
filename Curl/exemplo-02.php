<?php
$username = 'api@mav.com.br';  // authentication
$password = 'mav123@';  // authentication
$cep = "01310100";

$link = "https://mia1-master-fe01.m9.network:5052/_REST/api/listAccounts";

$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
curl_setopt ($ch, CURLOPT_POSTFIELDS, "login=api@mav.com.br&password=mav123@&domain=mav.com.br&quota=1");

$response = curl_exec($ch);

curl_close($ch);

$data =  json_decode($response, TRUE);

print_r($data);

?>