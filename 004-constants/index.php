<?php

// Defining constants with define() function
define('NAME', 'Adhitama Fikri');
define('AGE', 28);
define('LAST_COORD', [0, 1.85, 0.24, 1.98]);

echo NAME . PHP_EOL;
echo AGE . PHP_EOL;
echo LAST_COORD . PHP_EOL;

// Defining constants with const keyword
const OTHER_NAME = 'Balenciaga Guy';
const WEIGHT = 68;
const NEW_COORD = [0, 1.85, 0.24, 1.98];

echo OTHER_NAME . PHP_EOL;
echo WEIGHT . PHP_EOL;
echo NEW_COORD . PHP_EOL;


// define() function defines constants at runtime
// const keyword defines constants at compile time

// define() allows you to define constant conditionally

// define() function allows you to define constant name that comes from expression
// const keyword does not allow you to define constant name that comes from expression
const C_PREFIX = 'CONSTANT_PREFIX';
define(C_PREFIX . '_1', 'This is the value from CONSTANT_1');
define(C_PREFIX . '_2', 'This is the value from CONSTANT_2');
define(C_PREFIX . '_3', 'This is the value from CONSTANT_3');

echo CONSTANT_PREFIX_1 . PHP_EOL;
echo C_PREFIX . '_2' . PHP_EOL;
echo C_PREFIX . '_3' . PHP_EOL;
