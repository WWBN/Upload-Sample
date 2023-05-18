<?php

$AVideoSiteURL = "https://demo.avideo.com/";

$user = 'admin';
$pass = '123';

// File paths
$videoFilePath = 'video.mp4';
$imageFilePath = 'image.png';

// API endpoint URL
$apiUrl = "{$AVideoSiteURL}plugin/MobileManager/upload.php";

// cURL initialization
$ch = curl_init();

$imageData = base64_encode(file_get_contents($imageFilePath));

// Set the POST fields
$postFields = array(
    'upl' => new CURLFile($videoFilePath),
    'base64PNG' => $imageData
);

// Request data
$postFields = array(
    'user' => $user, // required
    'pass' => $pass, // required
    'upl' => new CURLFile($videoFilePath), // required
    'base64PNG' => $imageData, // optional
    'title' => 'Upload test title '.date('Y-m-d H:i:s'), // optional
    'description' => 'This is my video description. sent in '.date('Y-m-d H:i:s'), // optional
    'categories_id' => 1, // optional
    'can_share' => 1, // optional
    'video_password' => '123456' // optional
);


// Set cURL options
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the cURL request
$response = curl_exec($ch);

// Check for errors
if ($response === false) {
    echo 'Error: ' . curl_error($ch);
} else {
    // Decode the JSON response
    $jsonResponse = json_decode($response, true);

    // Check if decoding was successful
    if ($jsonResponse === null) {
        echo 'Error: Failed to decode JSON response<hr>';
        var_dump($postFields, $response);
    } else {
        header('Content-Type: application/json');
        // Print the JSON response
        echo $response;
    }
}

// Close the cURL session
curl_close($ch);
