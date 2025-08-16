<?php

/**
 * 
 * var_dump() is a built-in function that displays structured information about one or more expressions (variables) that includes its type and value.
 * var_dump() is a powerful tool for debugging and testing your code.
 */

echo 'Lesson on var_dump()' . PHP_EOL;
$balance = 50000;

var_dump($balance);

function get_balance(): int
{
    return 150000;
}

$my_current_balance = get_balance();
var_dump($my_current_balance, $balance, $balance + $my_current_balance);

function d($data) {
    echo 'This is from the dd() function' . PHP_EOL;
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    echo PHP_EOL;
}

// die() function is used to terminate the script execution
// you might be familiar with the dd() function in Laravel
function dd($data)
{
    echo 'This is from the dd() function' . PHP_EOL;
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    echo PHP_EOL;
    die();
}

d(data: $balance);
dd($my_current_balance);

echo 'unreachable code' . PHP_EOL;
