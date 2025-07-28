<?php
require_once '../app/config.php';
require_once '../app/Database.php';
require_once '../app/Task.php';

$taskModel = new Task();

// Memory usage before
$startMemory = memory_get_usage();

// Time before
$startTime = microtime(true);

// Test 1: Get all tasks
$tasks = $taskModel->getAllTasks();
echo "Fetched " . $tasks->num_rows . " tasks\n";

// // Test 2: Calculate stats
// $stats = $taskModel->calculateTaskStats();
// print_r($stats);

// Time after
$timeTaken = microtime(true) - $startTime;
echo "Time taken: " . round($timeTaken * 1000, 2) . "ms\n";

// Memory after
$memoryUsed = memory_get_usage() - $startMemory;
echo "Memory used: " . round($memoryUsed / 1024, 2) . "KB\n";