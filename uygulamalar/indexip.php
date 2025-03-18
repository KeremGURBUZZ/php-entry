<?php

function IPbul()
{
    if (!empty($_SERVER["HTTP_CLIENT_IP"])) {
        $ipAdress = $_SERVER["HTTP_CLIENT_IP"];
    } elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])) {
        $ipAdress = $_SERVER["HTTP_X_FORWARDED_FOR"];
    } else {
        $ipAdress = $_SERVER["REMOTE_ADDR"];
    }
    return $ipAdress;
}

// echo $ip = IPbul();

$api = file_get_contents("http://ip-api.com/json/176.40.28.197");
$dec = json_decode($api);

echo "Ülke: {$dec->country} ({$dec->countryCode})<br>";
echo "Şehir: {$dec->city}<br>";

?>