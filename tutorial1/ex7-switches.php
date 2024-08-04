<?php
    function switchingF($result) {
        switch($result) {
            case "Fizz":
                echo "this is Fizz";
                break;
            case "Buzz":
                echo "this is Buzz";
                break;
            default:
                echo "NO result, so give you FizzBuzz";
        }

    }


switchingF("Fizz")



?>