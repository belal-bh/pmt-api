<?php

// Endpoint URL
// $URL = 'https://belal-bh.000webhostapp.com/api/get_pmt.php';
// When Local Host :DEV
$URL = 'http://localhost/belal-bh/api/get_pmt.php';

// Create POST Request data array
$data = array(
    "balance" => 420,  
    "n" => 5,
);

// Initiate and Configure cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $URL);
curl_setopt($ch, CURLOPT_TIMEOUT, 120); //timeout after 120 seconds
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($data));

// Execute Request
$response = curl_exec($ch);

// Close cURL
curl_close($ch);

// Do whatever you want with resulted data
print_r(json_decode($response));

?>