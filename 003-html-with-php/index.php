<?php

echo 'This is the PHP file' . PHP_EOL;

$first_name = 'Adhitama';
$last_name = 'Fikri';
$full_name = $first_name . ' ' . $last_name;
$age = 28;

echo $full_name . ' is ' . $age . ' years old' . PHP_EOL . PHP_EOL . PHP_EOL;

function get_full_name()
{
    global $first_name;
    global $last_name;
    return $first_name . ' ' . $last_name;
}

require 'index.view.php';
