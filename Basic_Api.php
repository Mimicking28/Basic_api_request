<?php


$long_url = 'https://www.youtube.com/watch?v=dQw4w9WgXcQ';

$request_body = array(
    'url' => $long_url,
);
$json = json_encode($request_body);

$request_header = array(
    'Content_Type: application/json'
    'Content-Length' . strlen($json),
);

$ch = curl_init('https://tinyurl.com/api-create.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
curl_setopt($ch, CURLOPT_HTTPHEADER, $request_header);

$response = curl_exec($ch);
curl_close($ch);

if($response) {
    echo 'Long Link:' . $long_url;
    echo '<br>Short Link' . $response;

} else{
    echo 'Error in creating short link'
 }
 
 ?>