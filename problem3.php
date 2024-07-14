<!-- Write a function to calculate the factorial of a number (a non-negative integer).
 -->
<?php
function factorial($number)
{
    if ($number <= 1) {
        return 1;
    } else {
        return $number * factorial($number - 1);
    }
}

$number = 5;
echo "Factorial of $number is " . factorial($number);
?>