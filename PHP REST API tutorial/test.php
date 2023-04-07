<?php

$curl = curl_init();




curl_setopt_array($curl, [
    CURLOPT_URL => "https://localhost/PHP%20REST%20API%20tutorial/api/post/read.php",
    CURLOPT_SSL_VERIFYPEER=>false,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
]);



$response = curl_exec($curl);
$err = curl_error($curl);
//$httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}



?>