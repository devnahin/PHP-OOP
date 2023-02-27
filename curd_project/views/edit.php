<?php
$content = __DIR__ . '/edit.php';
require_once __DIR__ . '/layout.php';
?>

<h1>Edit User</h1>

<form method="post">
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="<?= $user->getName(); ?>">
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?= $user->getEmail(); ?>">
    </div>
    <div>
        <button type="submit">Update</button>
    </div>
</form>
