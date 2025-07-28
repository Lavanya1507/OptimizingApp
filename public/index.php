<?php
require_once '../app/config.php';
require_once '../app/Database.php';
require_once '../app/Task.php';
require_once '../app/TaskController.php';

$controller = new TaskController();

// Simple router (only index for now)
$action = $_GET['action'] ?? 'index';
if (method_exists($controller, $action)) {
    $controller->$action();
} else {
    http_response_code(404);
    echo "Not Found";
}