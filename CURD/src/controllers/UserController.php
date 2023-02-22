<?php

require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../views/index.php';
require_once __DIR__ . '/../views/add.php';
require_once __DIR__ . '/../views/edit.php';
require_once __DIR__ . '/../views/delete.php';

class UserController
{
    private $users;

    public function __construct()
    {
        // initialize with some static data
        $this->users = [
            new User(1, 'John Doe', 'john.doe@example.com'),
            new User(2, 'Jane Doe', 'jane.doe@example.com'),
            new User(3, 'Bob Smith', 'bob.smith@example.com'),
        ];
    }

    public function index()
    {
        $users = $this->users;
        require_once __DIR__ . '/../views/index.php';
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = count($this->users) + 1;
            $name = $_POST['name'];
            $email = $_POST['email'];

            $user = new User($id, $name, $email);
            array_push($this->users, $user);

            header("Location: index.php");
            exit;
        }

        require_once __DIR__ . '/../views/add.php';
    }

    public function edit($id)
    {
        $user = $this->findUser($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];

            $user->setName($name);
            $user->setEmail($email);

            header("Location: index.php");
            exit;
        }

        require_once __DIR__ . '/../views/edit.php';
    }

    public function delete($id)
    {
        $user = $this->findUser($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $index = array_search($user, $this->users);
            array_splice($this->users, $index, 1);

            header("Location: index.php");
            exit;
        }

        require_once __DIR__ . '/../views/delete.php';
    }

    private function findUser($id)
    {
        foreach ($this->users as $user) {
            if ($user->getId() == $id) {
                return $user;
            }
        }

        header("Location: index.php");
        exit;
    }
}
