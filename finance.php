<?php
$xpath_divid = "//div[@id='yfi_headlines']";
$query = 'select * from html where url="http://finance.yahoo.com/q?s=yhoo" and xpath="'.$xpath_divid.'"'; 
// echo $query; 
$url = 'http://query.yahooapis.com/v1/public/yql?format=json&q='.urlencode($query);
// echo $url;
$session = curl_init();
curl_setopt($session, CURLOPT_URL, $url);
curl_setopt($session, CURLOPT_RETURNTRANSFER,true);  
$json = curl_exec($session);
// $data = json_decode($json);
// var_dump($data);
echo $json;
?>

