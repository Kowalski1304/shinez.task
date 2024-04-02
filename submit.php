<?php

$data = array(
    "firstName" => $_POST['firstName'],
    "lastName" => $_POST['lastName'],
    "phone" => $_POST['phone'],
    "email" => $_POST['email'],
    "countryCode" => "GB",
    "box_id" => "28",
    "offer_id" => "5",
    "landingUrl" => $_SERVER['HTTP_HOST'],
    "ip" => $_SERVER['REMOTE_ADDR'],
    "password" => "qwerty12",
    "language" => "en"
);

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://crm.belmar.pro/api/v1/addlead',
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => json_encode($data),
    CURLOPT_HTTPHEADER => array(
        'token: ba67df6a-a17c-476f-8e95-bcdb75ed3958',
        'Content-Type: application/json'
    ),
));

$response = curl_exec($curl);

curl_close($curl);

print_r($response);