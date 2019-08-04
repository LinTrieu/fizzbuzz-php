<?php

class Fizzbuzzing {

  public function fizzbuzz($number) {
      if ($number == 0) {
          return $number;
      } elseif ($number % 3 == 0 && $number % 5 == 0) {
          return "Fizzbuzz";
      } elseif ($number % 3 == 0) {
          return "Fizz";
      } elseif ($number % 5 == 0) {
          return "Buzz";
      } else {
          return $number;
      }
  }
}