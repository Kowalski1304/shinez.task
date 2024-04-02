<?php
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://crm.belmar.pro/api/v1/getstatuses',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => '{
                 "date_from" : ,
                 "date_to" : ,
                 "page" : 0,
                 "limit" : 100
               }',
    CURLOPT_HTTPHEADER => array(
        'token: ba67df6a-a17c-476f-8e95-bcdb75ed3958',
        'Content-Type: application/json'
    ),
));

$response = curl_exec($curl);

curl_close($curl);

$result = json_decode($response, true);

if ($result['status']) {
    foreach ($result['data'] as $lead) {
        echo "<tr>";
        echo "<td>{$lead['id']}</td>";
        echo "<td>{$lead['email']}</td>";
        echo "<td>{$lead['status']}</td>";
        echo "<td>{$lead['ftd']}</td>";
        echo "</tr>";
    }
} else {
    echo "<h1>" . ($result['error']) . "</h1>" ;
}