<?php

use AmoCRM\Models\AccountModel;

include_once __DIR__ . '/bootstrap.php';


try {
    $account = $apiClient->events();
    echo "<pre>";
    echo "</pre>";
} catch (AmoCRMApiException $e) {
    printError($e);
}
?>