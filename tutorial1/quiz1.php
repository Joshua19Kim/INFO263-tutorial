<!--Q4-->
<!---->
<!--If the REMOTE_ADDR field in the $_SERVER variable is not empty print something like this:-->
<!---->
<!--    client IP: <REMOTE_ADDR field value>-->
<!---->
<!--Otherwise, have your code print this:-->
<!---->
<!--    client IP: UNKNOWN-->


<?php
if (!empty($_SERVER['REMOTE_ADDR'])) {
    echo "client IP: " . $_SERVER['REMOTE_ADDR'];
} else {
    echo "client IP: UNKNOWN";
}
?>





<!--Q5-->
<!--Get the REQUEST_TIME from the superglobal $_SERVER variable and print it in this sort of format:-->
<!---->
<!--01/Jan/22-01:01:01 AM, where the day of the month, and the hour show leading zeros when necessary; use the PHP date(string $format, ?int $timestamp = null): string function to achieve this.-->
<!---->
<!--You may find this resource helpful: https://www.php.net/manual/en/datetime.format.php where all date format parameters are listed along with explanations.-->
<!---->
<!--For example:-->
<!--Test 	Result-->
<!---->
<?php //$_SERVER['REQUEST_TIME'] = 1670800332; ?>
<!---->
<!---->
<!---->
<!--12/Dec/22-12:12:12 PM-->

<?php

 $date = $_SERVER['REMOTE_ADDR'];

// echo date(string $format, ?int $timestamp = null): string;

if (!empty($_SERVER['REMOTE_ADDR'])) {
    echo "client IP: " . $_SERVER['REMOTE_ADDR'];
} else {
    echo "client IP: UNKNOWN";
}
?>