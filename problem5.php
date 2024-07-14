<!--Write a PHP program to remove duplicate values from an array which contains only strings or only integers.
 -->
<?php
function removeDuplicates($array)
{
    return array_unique($array);
}

$array = [1, 2, 2, 3, 4, 4, 5];
$result = removeDuplicates($array);
print_r($result);
?>