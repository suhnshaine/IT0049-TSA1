<!DOCTYPE html>
<html>
<head>
    <title>Today's Tasks</title>
</head>
<body>

<h1>Tasks for Today Management System</h1>

<nav>
    <a href="/">Home</a> |
    <a href="/about">About</a> |
    <a href="/tasks">Task List</a> |
    <a href="/profile">Profile</a>
</nav>

<h1>Today's Tasks</h1>

<ul>
<?php foreach ($tasks as $task): ?>
    <li>
        <?= esc($task['title']) ?>
        (<?= esc($task['status']) ?>)
    </li>
<?php endforeach; ?>
</ul>

</body>
</html>