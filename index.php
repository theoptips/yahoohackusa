<?php
$query = 'SELECT * FROM flickr.people.info2 WHERE user_id="57453294@N00"  and api_key="a192455f488b7bf66f10def87ec230ab" ';  
  
$url = 'http://query.yahooapis.com/v1/public/yql?format=json&q='.urlencode($query);
$session = curl_init();
curl_setopt($session, CURLOPT_URL, $url);
curl_setopt($session, CURLOPT_RETURNTRANSFER,true);  
$json = curl_exec($session);
$data = json_decode($json);
var_dump($data);
?>

