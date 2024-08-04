<!DOCTYPE html>
<html>
<head>
    <title>Classes in PHP</title>
</head>
<body>
    <h1>Classes</h1>

    <?php
        // BEGIN EXERCISE 8b.

        $person1 = new Person("John", 21, "Green");
        $person2 = new Person("Sally", 24, "Yellow");
        $person3 = new Person("Alice", 19, "Red");
        $person4 = new Person("Patrick", 21, "Blue");
        $person5 = new Person("Batman", 30, "Black");
        $people = array($person1, $person2, $person3, $person4, $person5);

        echo "Exercise 9a<br />";
        echo "---------------<br />";
        // BEGIN EXERCISE 9a.
        // Replace this line with something that prints out a persons name.
        // Replace this line with something that sets the person's name to something else.
        // Replace this line with something that prints out a persons name and compare with the previous result.

        echo "<br />";
        echo "Exercise 9b<br />";
        echo "---------------<br />";
        function print_people($people) {
            // BEGIN EXERCISE 9b.
        }

        echo "<br />";
        echo "Exercise 9c<br />";
        echo "---------------<br />";
        // BEGIN EXERCISE 9c.
        // Make Batman and patrick eat a 'Carrot' and some 'French Fries
    ?>
</body>
</html>
