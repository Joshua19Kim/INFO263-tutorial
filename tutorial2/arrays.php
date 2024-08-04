<!DOCTYPE html>
<html>
<head>
    <title>Arrays and loops in PHP</title>
</head>
<body>
<h1>Tutorial 2 - Arrays!</h1>

<?php
    $nums = array(5, 11, 14, 52, -80, 2, 4, 3, 8, 15, -12, 142);
    $sentence = "Hello and welcome to the second tutorial of INFO 263";
    $people = array("Jeff"=>"Red", "Alice"=>"Black", "Alex"=>"Green", "Batman"=>"Yellow", "Bruce"=>"Green",
        "Sally"=>"Blue", "Ashley"=>"Yellow", "Steve"=>"Black", "Michael"=>"Yellow", "Charlie"=>"Blue", "Ben"=>"Yellow");

    echo "Exercise 1<br />";
    echo "-------------<br />";
    function print_array($nums) {
        for($i = 0; $i < count($nums); $i++) {
            echo $nums[$i] . "<br />";
        }
    }
    print_array($nums);
    echo "<br />";

    echo "Exercise 2<br />";
    echo "-------------<br />";
    echo "Smallest:<br />";
    function print_smallest_number($nums) {
        $min_num = $nums[0];
        for ($i = 1; $i < count($nums); $i++) {
            if ($nums[$i] < $min_num) {
                $min_num = $nums[$i];
            }
        }
        echo $min_num . "<br /><br />";
    }

    print_smallest_number($nums);

    echo "Largest :<br />";
    function print_largest_number($nums) {
        $max_num = $nums[0];
        for ($i = 1; $i < count($nums); $i++) {
            if ($nums[$i] > $max_num) {
                $max_num = $nums[$i];
            }
        }
        echo $max_num . "<br /><br />";
    }
    print_largest_number($nums);
    echo "<br />";

    echo "Exercise 3<br />";
    echo "-------------<br />";
    function print_odd_numbers($nums) {
        $odd_num_list = array();
        for($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] % 2 != 0) {
                array_push($odd_num_list, $nums[$i]);
            }

        }
        for ($i = 0; $i< count($odd_num_list); $i++) {
            echo $odd_num_list[$i] . "<br />";
        }
    }
    print_odd_numbers($nums);
    echo "<br />";

    echo "Exercise 4<br />";
    echo "-------------<br />";
    function remove_even_numbers($nums) {
        $even_nums = array();
        for($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] % 2 == 0) {
                array_push($even_nums, $nums[$i]);
            }
        }
        return array_values(array_diff($nums, $even_nums));
    }
    $remaining_numbers = remove_even_numbers($nums);
    print_array($remaining_numbers);
    echo "<br />";

    echo "Exercise 5<br />";
    echo "-------------<br />";
    function reverse_the_sentence($sentence) {
        $exploded_sentence =  explode(" ",$sentence);
        $final_answer = "";
        for ($i = count($exploded_sentence); $i >= 0; $i--) {
            $final_answer = $final_answer . " ". $exploded_sentence[$i];
        }
        return $final_answer;
    }
    echo reverse_the_sentence($sentence);
    echo "<br />";






    echo "Exercise 6<br />";
    echo "-------------<br />";
    function print_favourite_colours($people) {
        foreach($people as $person => $value) {
             echo $person ." : ".$value."<br />";
        }
    }
    print_favourite_colours($people);
    echo "<br />";





    echo "Exercise 7<br />";
    echo "-------------<br />";
    function print_colour_occurrences($people) {
        $new_array = array_count_values($people);
        foreach($new_array as $colour => $value) {
            $result = $value > 1 ? $value . " people have " :  $value ." person have ";
            echo $result. $colour. " as their favourite colour."."<br />";
        }


    }
    print_colour_occurrences($people);
    echo "<br />"

?>
</body>
</html>
