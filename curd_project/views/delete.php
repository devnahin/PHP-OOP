<?php
$content = __DIR__ . '/delete.php';
require_once __DIR__ . '/layout.php';
?>

<h1>Delete User</h1>

<p>Are you sure you want to delete this user?</p>

<form method="post">
    <div>
        <button type="submit">Delete</button>
    </div>
</form>
