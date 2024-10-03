<?php

$filePath = './store.json';

if (file_exists($filePath)) {
    $fileContent = file_get_contents($filePath);
    $people = json_decode($fileContent, true);
} else {
    $people = [];
}

$input = file_get_contents('php://input');
$dati = json_decode($input, true);

if ($dati !== null) {
    $people[] = $dati;

    file_put_contents($filePath, json_encode($people, JSON_PRETTY_PRINT));

    echo json_encode(['status' => 'success', 'data' => $dati]);
}

print_r($people);

?>

