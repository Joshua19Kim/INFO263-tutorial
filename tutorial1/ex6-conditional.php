<?php
    function FizzBuzz($param) {
        if($param%5 == 0 && $param%3==0) {
            echo "FizzBuzz";
        } elseif ($param%3 == 0){
            echo "Fizz";
        } elseif ($param%5 == 0) {
            echo "Buzz";
        }
    }

    FizzBuzz(15) . "<br />";
    FizzBuzz(5) . "<br />";
    FizzBuzz(3);




?>