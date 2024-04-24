<?php

include_once __DIR__ . '/bootstrap.php';

$file = __DIR__ . "/webhook.json";
////$events = $apiClient->events();
//$events_filter = $events->

$types = ['lead','contacts'];
$methods = ['add','update'];
$entity_type = "";
$created_at = 0;
$created_by = 0;


if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $post_data = file_get_contents("php://input");

    foreach ($types as $type) {
        if( ( isset ($post_data[$type]) ) ){
            $entity_type = $type;
        }
    }
    foreach ($methods as $type) {
        if( ( isset ($post_data[$type]) ) ){
            $entity_type = $type;
        }
    }

}

if (file_exists($file)) {
    // Read the content of the file
    echo '<pre>';
    $content = file_get_contents($file);
    $text = json_decode($content, true);

    print_r($text);

    echo '<pre>';
} else {
    echo "File not found.";
}




