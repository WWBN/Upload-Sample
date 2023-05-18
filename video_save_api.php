<?php

$APISecret = 'c7abebdaf07893e7f29d34a0979fc126';
$AVideoSiteURL = "https://demo.avideo.com/";

// File paths
$videos_id = 46;
$created = date('Y-m-d H:i:s', strtotime('-1 year')); // set the created 1 year ago

// API endpoint URL
$apiUrl = "{$AVideoSiteURL}plugin/API/set.json.php?APIName=video_save&APISecret={$APISecret}";

// cURL initialization
$ch = curl_init();


// Set the POST fields
$postFields = array(
    'videos_id' => $videos_id,
    'title' => "Created date modified to $created",
    'created' => $created
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
