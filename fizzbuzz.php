<?php

class Fizzbuzzing {

  function speak() {
      echo "Hello, PHP world! \n";
      for ($i=0; $i<=100; $i++) {
        echo $this->fizzbuzz($i) . "\n";
      }
  }

  function fizzbuzz($number) {
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
  // work on this function. How do I get feedback in PHP to invoke another method and print list of numbers 1-100??
//  function numbers() {
//      for ($i = 0; $i < 100; $i++) {
//        fizzbuzz(i);
//      }
//  }
}

# Methods can be used dynamically
$obj = new Fizzbuzzing();
$obj->speak(5);

//#Methods can be used statically
//Fizzbuzzing::speak();