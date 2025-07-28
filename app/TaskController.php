<?php
class TaskController {
    private $taskModel;

    public function __construct() {
        $this->taskModel = new Task();
    }

    public function index() {
        // Inefficient: Fetching all data even if we don't need it
        $tasks = $this->taskModel->getAllTasks();
        include '../public/tasks.php';
    }
}