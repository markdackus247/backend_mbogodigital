<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS"); // Allows specific HTTP methods
header("Access-Control-Allow-Headers: Content-Type, Authorization"); // Allows specific headers

require $_SERVER["DOCUMENT_ROOT"] . '/docroot.php';
require __DOCUMENTROOT__ . '/config/globalvars.php';
require __DOCUMENTROOT__ . '/config/db.php';

require __DOCUMENTROOT__ . '/models/Educations.php';

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        handleGet();
        break;
    default:
        echo json_encode(['message' => 'Invalid request method']);
        break;
}

function handleGet() {
    $educations = Education::selectAll();
    echo json_encode($educations);
}
