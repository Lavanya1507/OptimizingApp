<!DOCTYPE html>
<html>
<head>
    <title>Task Manager (Unoptimized)</title>
    <!-- Unminified CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1>All Tasks</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Status</th>
            <th>Assigned To</th>
        </tr>
        <?php while ($task = $tasks->fetch_assoc()): ?>
        <tr>
            <td><?= $task['id'] ?></td>
            <td><?= $task['title'] ?></td>
            <td><?= $task['description'] ?></td>
            <td><?= $task['status'] ?></td>
            <td><?= $task['user_name'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>

    <!-- Unminified JS -->
    <script src="assets/js/app.js"></script>
</body>
</html>