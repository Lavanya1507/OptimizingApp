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

    // Add a new task
    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'] ?? '';
            $description = $_POST['description'] ?? '';
            $user_id = $_POST['user_id'] ?? 1;
            $this->taskModel->addTask($title, $description, $user_id);
            header('Location: index.php');
            exit;
        } else {
            // Show add form (reuse tasks.php for simplicity)
            $tasks = $this->taskModel->getAllTasks();
            $add_mode = true;
            include '../public/tasks.php';
        }
    }

    // Edit a task
    public function edit() {
        $id = $_GET['id'] ?? null;
        if (!$id) {
            header('Location: index.php');
            exit;
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'] ?? '';
            $description = $_POST['description'] ?? '';
            $user_id = $_POST['user_id'] ?? 1;
            $this->taskModel->updateTask($id, $title, $description, $user_id);
            header('Location: index.php');
            exit;
        } else {
            $tasks = $this->taskModel->getAllTasks();
            $edit_id = $id;
            include '../public/tasks.php';
        }
    }

    // Mark as complete
    public function complete() {
        $id = $_GET['id'] ?? null;
        if ($id) {
            $this->taskModel->completeTask($id);
        }
        header('Location: index.php');
        exit;
    }

    // Delete a task
    public function delete() {
        $id = $_GET['id'] ?? null;
        if ($id) {
            $this->taskModel->deleteTask($id);
        }
        header('Location: index.php');
        exit;
    }
}