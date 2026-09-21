<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>

<h1>Tasks for Today Management System</h1>

<nav>
    <a href="/">Home</a> |
    <a href="/about">About</a> |
    <a href="/tasks">Task List</a> |
    <a href="/profile">Profile</a>
</nav>

<h1>Profile</h1>

<p>Username: <?= esc($user['username']) ?></p>
<p>Full Name: <?= esc($user['full_name']) ?></p>
<p>Email: <?= esc($user['email']) ?></p>

</body>
</html>