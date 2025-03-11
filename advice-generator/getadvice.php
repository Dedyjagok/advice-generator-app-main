<?php
header('Content-Type: application/json');

// Use the Advice Slip API instead of scraping
$url = 'https://api.adviceslip.com/advice';

// Get advice from the API
$response = file_get_contents($url);
$data = json_decode($response, true);

// Check if we got valid data
if ($data && isset($data['slip'])) {
    $adviceId = $data['slip']['id'];
    $advice = $data['slip']['advice'];
    
    echo json_encode([
        'id' => $adviceId,
        'advice' => $advice
    ]);
} else {
    // Fallback advice in case the API fails
    $fallbackAdvices = [
        "Take time to know yourself.",
        "A narrow focus brings big results.",
        "Show up fully.",
        "Don't make assumptions.",
        "Be patient and persistent.",
        "In order to get, you have to give."
    ];
    
    $randomIndex = array_rand($fallbackAdvices);
    
    echo json_encode([
        'id' => rand(1, 999),
        'advice' => $fallbackAdvices[$randomIndex]
    ]);
}