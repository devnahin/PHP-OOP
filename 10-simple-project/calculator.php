<?php 

class Calculator {
    // Add two numbers
    public function add($num1, $num2) {
      return $num1 + $num2;
    }
  
    // Subtract two numbers
    public function subtract($num1, $num2) {
      return $num1 - $num2;
    }
  
    // Multiply two numbers
    public function multiply($num1, $num2) {
      return $num1 * $num2;
    }
  
    // Divide two numbers
    public function divide($num1, $num2) {
      if ($num2 == 0) {
        throw new Exception("Division by zero error");
      }
      return $num1 / $num2;
    }
  }
  $calc = new Calculator();
  echo $result = $calc->add(2, 3) . "\n"; // $result = 5
  echo $result = $calc->subtract(5, 2) . "\n"; // $result = 3
  echo $result = $calc->multiply(4, 2) . "\n"; // $result = 8
  echo $result = $calc->divide(10, 2) . "\n"; // $result = 5  