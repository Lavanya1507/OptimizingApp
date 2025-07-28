<?php
class Task {
    private $db;

    public function __construct() {
        $this->db = new Database(); // New instance every time
    }

    // Fetch all tasks with user data (inefficient JOIN)
    public function getAllTasks() {
        $sql = "SELECT t.*, u.name as user_name 
                FROM tasks t 
                LEFT JOIN users u ON t.user_id = u.id";
        return $this->db->query($sql);
    }

    // Add a new task (unoptimized, no validation)
    public function addTask($title, $description, $user_id) {
        $sql = "INSERT INTO tasks (title, description, status, user_id) VALUES ('"
            . $title . "', '" . $description . "', 'pending', " . intval($user_id) . ")";
        return $this->db->query($sql);
    }

    // Update a task (unoptimized, no validation)
    public function updateTask($id, $title, $description, $user_id) {
        $sql = "UPDATE tasks SET title='" . $title . "', description='" . $description . "', user_id=" . intval($user_id) . " WHERE id=" . intval($id);
        return $this->db->query($sql);
    }

    // Mark a task as completed (unoptimized)
    public function completeTask($id) {
        $sql = "UPDATE tasks SET status='completed' WHERE id=" . intval($id);
        return $this->db->query($sql);
    }

    // Delete a task (unoptimized)
    public function deleteTask($id) {
        $sql = "DELETE FROM tasks WHERE id=" . intval($id);
        return $this->db->query($sql);
    }
}