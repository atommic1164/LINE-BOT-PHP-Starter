<?php
$access_token = 'urwqel4JgykFbMN+f7YfsVKssIpi+Y8eQ7yhuOE27S56ciL0ZSZNed4J+mcUwdUZTbHgfcmtO6n4JPYtqbW47rHwUo4nxUjG+3q6qVi4rAjwMrwC1NwxSdnZ/v86OzjvesrfxwPSvzOYSrBXCAiGxgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
