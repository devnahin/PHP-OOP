<?php

class Database {
    private static $users = [
        ['id' => 1, 'name' => 'John Doe', 'email' => 'john.doe@example.com'],
        ['id' => 2, 'name' => 'Jane Doe', 'email' => 'jane.doe@example.com'],
        ['id' => 3, 'name' => 'Bob Smith', 'email' => 'bob.smith@example.com'],
    ];

    public static function getUsers() {
        return self::$users;
    }

    public static function getUserById($id) {
        foreach (self::$users as $user) {
            if ($user['id'] == $id) {
                return $user;
            }
        }
        return null;
    }

    public static function addUser($user) {
        $id = count(self::$users) + 1;
        $user['id'] = $id;
        self::$users[] = $user;
        return $id;
    }

    public static function updateUser($user) {
        foreach (self::$users as &$existingUser) {
            if ($existingUser['id'] == $user['id']) {
                $existingUser = $user;
                break;
            }
        }
    }

    public static function deleteUser($id) {
        foreach (self::$users as $key => $user) {
            if ($user['id'] == $id) {
                unset(self::$users[$key]);
                break;
            }
        }
    }
}
