<!DOCTYPE html>
<html>
<head>
    <title>All Tasks</title>
</head>
<body>

<h1>Tasks for Today Management System</h1>

<nav>
    <a href="/">Home</a> |
    <a href="/about">About</a> |
    <a href="/tasks">Task List</a> |
    <a href="/profile">Profile</a>
</nav>

<h1>All Tasks</h1>

<table border="1">
    <tr>
        <th>Title</th>
        <th>Status</th>
        <th>Date</th>
    </tr>

    <?php foreach ($tasks as $task): ?>
    <tr>
        <td><?= esc($task['title']) ?></td>
        <td><?= esc($task['status']) ?></td>
        <td><?= esc($task['task_date']) ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>