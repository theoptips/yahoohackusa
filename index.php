// <?php
// 	$yql_query_url=
// 	'SELECT * FROM flickr.people.info2 WHERE user_id="57453294@N00"  and api_key="a192455f488b7bf66f10def87ec230ab" ';//div[@id="yfi_headlines"]/div[2]/ul/li/a'; 
// 	$session = curl_init($yql_query_url);  
// 	curl_setopt($session, CURLOPT_RETURNTRANSFER,true);  
// 	$json = curl_exec($session); 
// 	//$json now contains the result of the YQL Query...See ouput tab
// 	var_dump($json);


$query = 'SELECT * FROM flickr.people.info2 WHERE user_id="57453294@N00"  and api_key="a192455f488b7bf66f10def87ec230ab" ';  
  
// insert the query into the full URL  
// $url = 'http://query.yahooapis.com/v1/public/yql?format=json&q=' . urlencode($query);  
  
// set up the cURL  
// $c = curl_init();  
// curl_setopt($c, CURLOPT_URL, $url);  
// curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);  
// curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);  
// curl_setopt($c, CURLOPT_SSL_VERIFYHOST, false);  
  
// execute the cURL  
// $rawdata = curl_exec($c);  
// curl_close($c);  

$url = 'http://query.yahooapis.com/v1/public/yql?format=json&q='.urlencode($query);
$session = curl_init();
curl_setopt($session, CURLOPT_URL, $url);
curl_setopt($session, CURLOPT_RETURNTRANSFER,true);  
$json = curl_exec($session);
$data = json_decode($json);
var_dump($json);

// Convert the returned JSON to a PHP object  
// $data = json_decode($rawdata);  
  
// Show us the data  
// echo '<pre>';  
// print_r($data);  
// echo '</pre>';  

// ?>

