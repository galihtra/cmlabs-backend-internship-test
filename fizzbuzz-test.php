<?php

class FizzBuzzTest {
    function fizzBuzz(int $total) {
        for ($i=1; $i <= $total; $i++) { 
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo "Fizz Buzz".PHP_EOL;
            }
            else if ($i % 3 == 0) {
                echo "Fizz".PHP_EOL;
            }
            else if ($i % 5 == 0) {
                echo "Buzz".PHP_EOL;
            }
            else {
                echo $i.PHP_EOL;
            }
        }
    }

    function testFizzBuzz() {
        $this->fizzBuzz(100);
    }
}

$test = new FizzBuzzTest();
$test->testFizzBuzz();