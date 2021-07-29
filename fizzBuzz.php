<?php
namespace FizzBuzz;

class FizzBuzz
{
  public function returnString()
  {
    return 'hoge';
  }

  public function main($number)
  {
    if ($number % 15 == 0) {
      return 'FizzBuzz';
    } elseif ($number % 3 == 0) {
      return 'Fizz';
    } elseif ($number % 5 == 0) {
      return 'Buzz';
    }
  }
}

?>