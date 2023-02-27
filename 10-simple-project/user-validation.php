<?php 


//Create a class called "User" with properties such as name, email, and password. Implement a method to validate the email format.


class User {
    private $name;
    private $email;
    private $password;
  
    public function __construct($name, $email, $password) {
      $this->name = $name;
      $this->email = $email;
      $this->password = $password;
    }
  
    public function getName() {
      return $this->name;
    }
  
    public function getEmail() {
      return $this->email;
    }
  
    public function getPassword() {
      return $this->password;
    }
  
    public function setEmail($email) {
      if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $this->email = $email;
      } else {
        throw new Exception("Invalid email format");
      }
    }
  }
  
  // create a new user instance
  $user = new User("John Doe", "john.doe@example.com", "password123");
  
  // try to set an invalid email address and catch the exception
  try {
    $user->setEmail("invalid_email");
  } catch (Exception $e) {
    echo "Error: " . $e->getMessage();
  }
  
  // try to set a valid email address
  try {
    $user->setEmail("new.email@example.com");
  } catch (Exception $e) {
    echo "Error: " . $e->getMessage();
  }
  
  $user->setEmail('nahin#gmail.com');
  // print the user's name and email
  echo $user->getName(); // "John Doe"
  echo $user->getEmail(); // "new.email@example.com"
  