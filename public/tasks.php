<!DOCTYPE html>
<html>
<head>
    <title>Task Manager (Unoptimized)</title>
    <!-- Unminified CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1>All Tasks</h1>

    <!-- Add Task Form -->
    <form method="POST" action="index.php?action=add" style="margin-bottom:20px;">
        <input type="text" name="title" placeholder="Title" required>
        <input type="text" name="description" placeholder="Description" required>
        <input type="number" name="user_id" placeholder="User ID" min="1" value="1" required>
        <button type="submit">Add Task</button>
    </form>

    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Status</th>
            <th>Assigned To</th>
            <th>Actions</th>
        </tr>
        <?php while ($task = $tasks->fetch_assoc()): ?>
        <tr>
            <td><?= $task['id'] ?></td>
            <td>
                <?php if (isset($edit_id) && $edit_id == $task['id']): ?>
                    <!-- Edit Task Form -->
                    <form method="POST" action="index.php?action=edit&id=<?= $task['id'] ?>">
                        <input type="text" name="title" value="<?= htmlspecialchars($task['title']) ?>" required>
                        <input type="text" name="description" value="<?= htmlspecialchars($task['description']) ?>" required>
                        <input type="number" name="user_id" value="<?= $task['user_id'] ?>" min="1" required>
                        <button type="submit">Save</button>
                        <a href="index.php">Cancel</a>
                    </form>
                <?php else: ?>
                    <?= htmlspecialchars($task['title']) ?>
                <?php endif; ?>
            </td>
            <td><?= htmlspecialchars($task['description']) ?></td>
            <td><?= $task['status'] ?></td>
            <td><?= $task['user_name'] ?></td>
            <td>
                <?php if (!isset($edit_id) || $edit_id != $task['id']): ?>
                    <a href="index.php?action=edit&id=<?= $task['id'] ?>">Edit</a>
                    <a href="index.php?action=complete&id=<?= $task['id'] ?>">Complete</a>
                    <a href="index.php?action=delete&id=<?= $task['id'] ?>" onclick="return confirm('Delete this task?');">Delete</a>
                <?php endif; ?>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>

    <!-- Unminified JS -->
    <script src="assets/js/app.js"></script>
</body>
</html>