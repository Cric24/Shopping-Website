<?php

$api=file_get_contents("https://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=9b46b43da230412ea01e709164177b2e");
$news-json_decode($api,true);

print_r($news);

?>