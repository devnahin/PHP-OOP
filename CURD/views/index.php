<?php

require_once __DIR__ . '/src/controllers/UserController.php';

$action = $_GET['action'] ?? 'index';

$userController = new UserController();

switch ($action) {
    case 'index':
        $userController->index();
        break;
    case 'add':
        $userController->add();
        break;
    case 'edit':
        $id = $_GET['id'] ?? null;
        $userController->edit($id);
        break;
    case 'delete':
        $id = $_GET['id'] ?? null;
        $userController->delete($id);
        break;
    default:
        header("Location: index.php");
        exit;
}
