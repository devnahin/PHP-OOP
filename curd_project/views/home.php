<?php
$content = __DIR__ . '/home.php';
require_once __DIR__ . '/layout.php';
?>

<h1>Users</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user->getId(); ?></td>
            <td><?= $user->getName(); ?></td>
            <td><?= $user->getEmail(); ?></td>
            <td>
                <a href="index.php?action=edit&id=<?= $user->getId(); ?>">Edit</a>
                <a href="index.php?action=delete&id=<?= $user->getId(); ?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
