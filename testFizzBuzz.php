<?php

namespace FizzBuzzTest;
use PHPUnit\Framework\TestCase;
use fizzBuzz\FizzBuzz;
require './fizzBuzz.php';

class FizzBuzzTest extends TestCase
{
    
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
        $data = $fizzBuzz->main(3);
        $this->assertEquals($data, 'Fizz');
    }

    public function test__5の倍数を入力したらFizzと返して出力する() {
        $fizzBuzz = new FizzBuzz();
        $data = $fizzBuzz->main(5);
        $this->assertEquals($data, 'Buzz');
    }

}