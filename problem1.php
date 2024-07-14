<!-- Exercises:
Write a PHP program to print alphabet pattern 'R'. -->

<?php
function printPatternR()
{
    $pattern = [
        "****",
        "*   *",
        "*   *",
        "****",
        "* *",
        "*  *",
        "*   *"
    ];

    foreach ($pattern as $line) {
        echo $line . "<br>";
    }
}

printPatternR();
?>