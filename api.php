<?php
    require './store.php';

$input = file_get_contents('php://input');
$dati = json_decode($input, true);

echo "Tipo di \$dati: " . gettype($dati) . "\n";

// Assicurati che i dati siano validi
if ($dati !== null) {
    echo json_encode(['status' => 'success', 'data' => $dati]);
$people[] = $dati;
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid JSON']);
}


print_r($people);

?>

