<?php

class Fizzbuzzing
{
    function speak()
    {
        echo "Hello, PHP world! \n";
        for ($i = 0; $i <= 100; $i++) {
            echo $this->fizzbuzz($i) . "\n";
        }
    }

    function fizzbuzz($number)
    {
        if ($number == 0) {
            echo $number;
        } elseif ($number % 3 == 0 && $number % 5 == 0) {
            echo "Fizzbuzz";
        } elseif ($number % 3 == 0) {
            echo "Fizz";
        } elseif ($number % 5 == 0) {
            echo "Buzz";
        } else {
            echo $number;
        }
    }
}

# Methods can be invoked in PHP by multiple approaches.
# E.g. Dynamically - invoke a method on an instance of an object
$obj = new Fizzbuzzing();
$obj->speak();

//# E.g. Statically - invoke a method on the class blueprint itself, if the method does not require parameters or object context
//Fizzbuzzing::speak();