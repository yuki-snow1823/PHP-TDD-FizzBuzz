<?php
require './fizzBuzz.php';

use PHPUnit\Framework\TestCase;


class FizzBuzzTest extends TestCase
{
    public $fizzBuzz;

    // public function test__テストが正常に動くかのテスト()
    // {
    //     $stack = [];
    //     $this->assertEquals(0, count($stack));
    // }

    public function test__数字が入力されたら文字を返す() {
        $fizzBuzz = new FizzBuzz();
        $data = $fizzBuzz->returnString();
        $this->assertEquals($data, 'hoge');
    }

    public function test__3の倍数を入力したらFizzと返して出力する() {
        $fizzBuzz = new FizzBuzz();
        $data = $fizzBuzz->fizzBuzz(3);
        $this->assertEquals($data, 'Fizz');
    }
}