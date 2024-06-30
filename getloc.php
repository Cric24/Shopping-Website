<?php

var_dump($_GET);

$endpoints='api.openweathemap.org/data/2.5/weather';
$params= ['appid'=>'a7b8c7e8375944866ca46c3d33a75e2c', 'lat'=>6.9270786, 'lon'=>79.861243];
$url = $endpoints.'?'. http_build_query($params);
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL,$url);


?>                  