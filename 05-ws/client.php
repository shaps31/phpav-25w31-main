<?php

$apiURL = 'https://api.chucknorris.io/jokes/random';

$ch = curl_init($apiURL);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Accept: application/json',
]);
$content = curl_exec($ch);
curl_close($ch);
var_dump(json_decode($content, true));
