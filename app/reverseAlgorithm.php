<?php
namespace reverseAlgorithm;

class reverseAlgorithm {
    function reverseAlgorithmEncryption($string) {
        // encrypt endpoint.
        $url = 'http://backendtask.robustastudio.com/encode';
        // Data send with the request
        $data = [
        'string' => $string
        ];
        // Initializes a new cURL session
        $curl = curl_init($url);
        // Set the CURLOPT_RETURNTRANSFER option to true
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        // Set the CURLOPT_POST option to true for POST request
        curl_setopt($curl, CURLOPT_POST, true);
        // Set the request data as JSON using json_encode function
        curl_setopt($curl, CURLOPT_POSTFIELDS,  json_encode($data));
        // Set custom headers for RapidAPI Auth and Content-Type header
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json'
        ]);
        // Execute cURL request with all previous settings
        $response = curl_exec($curl);
        // Close cURL session
        curl_close($curl);
        return $response . PHP_EOL;
    }

    function reverseAlgorithmDecryption($string) {
        // encrypt endpoint.
        $url = 'http://backendtask.robustastudio.com/decode';
        // Data send with the request
        $data = [
        'string' => $string
        ];
        // Initializes a new cURL session
        $curl = curl_init($url);
        // Set the CURLOPT_RETURNTRANSFER option to true
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        // Set the CURLOPT_POST option to true for POST request
        curl_setopt($curl, CURLOPT_POST, true);
        // Set the request data as JSON using json_encode function
        curl_setopt($curl, CURLOPT_POSTFIELDS,  json_encode($data));
        // Set custom headers
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json'
        ]);
        // Execute cURL request with all previous settings
        $response = curl_exec($curl);
        // Close cURL session
        curl_close($curl);
        return $response . PHP_EOL;
    }
}