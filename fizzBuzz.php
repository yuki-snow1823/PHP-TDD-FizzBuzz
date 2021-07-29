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
    if ($number % 3 == 0) {
      return "Fizz";
    }
  }
}
?>