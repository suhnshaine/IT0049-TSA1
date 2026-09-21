<!DOCTYPE html>
<html>
<head>
    <title>All Tasks</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<h1>Tasks for Today Management System</h1>

<nav>
    <a href="/">Home</a> |
    <a href="/about">About</a> |
    <a href="/tasks">Task List</a> |
    <a href="/profile">Profile</a>
</nav>

<div class="container">
<h1>All Tasks</h1>

<table border="1">
    <tr>
        <th>Title</th>
        <th>Status</th>
        <th>Date Created</th>
        <th>Due Date</th>
    </tr>

    <?php foreach ($tasks as $task): ?>
    <tr>
        <td><?= esc($task['title']) ?></td>
        <td><?= esc($task['status']) ?></td>
        <td><?= esc($task['created_at']) ?></td>
        <td><?= esc($task['task_date']) ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</div>

</body>
</html>