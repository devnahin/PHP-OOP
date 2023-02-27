<?php
$content = __DIR__ . '/add.php';
require_once __DIR__ . '/layout.php';
?>

<h1>Add User</h1>

<form method="post">
    <div>
       <label for="name">Name:</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <button type="submit">Add</button>
    </div>
</form>
