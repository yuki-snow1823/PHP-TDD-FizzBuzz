<?php
require './fizzBuzz.php';

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    $fizzBuzz = new FizzBuzz();

    // public function test__テストが正常に動くかのテスト()
    // {
    //     $stack = [];
    //     $this->assertEquals(0, count($stack));
    // }

    public function test__数字が入力されたら文字を返す(){
        $data = returnString();
        assertEquals($data, "hoge");
    }
}