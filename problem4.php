<!-- Write a PHP script to remove all white spaces in an array.
 -->
<?php
function removeWhiteSpaces($array)
{
    return array_map('trim', $array);
}

$array = ['  apple  ', '  banana  ', '  cherry  '];
$result = removeWhiteSpaces($array);
print_r($result);
?>