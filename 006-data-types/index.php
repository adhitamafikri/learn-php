<?php

/**
 * Scalar: bool, int, float, string
 * Compound: array, object, callable, iterable
 * Special: null, resource
 */

echo "Scalar Types" . PHP_EOL;
$num = 1;
$my_money = 1_480_000_000;
$floating_num = 1.245454;
$str = 'This is a variable with a string type';
$bool_type = true;
$bool_type_false = false;
echo $num . PHP_EOL;
echo $my_money . " Using _ to group numbers is new, since PHP 7.4 " . PHP_EOL;
echo $floating_num . PHP_EOL;
echo $str . PHP_EOL;
echo $bool_type . PHP_EOL;
echo $bool_type_false . PHP_EOL;

echo PHP_EOL . "String Interpolation" . PHP_EOL;
$value_1 = "Combro";
$value_2 = 25;
echo 'Interpolation Syntax: ' . 'Aku makan $value_1 sebanyak {$value_2} kali' . PHP_EOL;
echo "Aku makan $value_1 sebanyak {$value_2} kali" . PHP_EOL;
echo "Always resort to double quotes for string values, because you might need to use interpolation" . PHP_EOL;

// PHP treats the following values as false:

// The false keyword.
// The integer 0 and -0 (zero).
// The floats 0.0 and -0.0 (zero).
// The empty string ("", '') and the string “0”.
// The empty array (array() or []).
// The null.
// The SimpleXML objects created from attributeless empty elements.

// Compound Types
echo PHP_EOL . "Compoound Types" . PHP_EOL;
echo "Arrays:" . PHP_EOL;
$arr = [1, 2, 3, 4, 5];
$carts = ['card', 'bar', 'book'];
echo $arr[0] . PHP_EOL;
echo $carts[1] . PHP_EOL;

echo "Associative Arrays:" . PHP_EOL;
$tech_carts = ['monitor' => 2500, 'bar' => 250, 'mouse' => 1500];
echo 'Access values by $varname["key"], think of objects in JS' . PHP_EOL;
echo $tech_carts['monitor'] . PHP_EOL;

// Special Types
echo "defining a variable without a value will make the default value of it null" . PHP_EOL;
echo "A resource is a special variable that references to an external resource such as:
    - file
    - database connection
    - socket
    - etc
" . PHP_EOL;

echo "A callable is a special variable that references to a function" . PHP_EOL;

// Heredocs and Nowdocs
echo "Example of Heredocs and Nowdocs" . PHP_EOL;
$doc_var = 2342;
echo "Heredocs: " . PHP_EOL;
echo <<<EOT
    This is a heredoc string
    This is a heredoc string
    This is a heredoc string
    Heredoc can use var $doc_var
EOT;

echo PHP_EOL . "Nowdocs: " . PHP_EOL;
echo <<<'EOT'
    This is a nowdoc string
    This is a nowdoc string
    now doc cannot use var $doc_var
EOT;

// Type Castings
echo PHP_EOL . ' Type Casting ' . PHP_EOL;
echo <<<'TypeCasting'
    Cast Operators->Conversion
    ----------------------------
    (array) -> Array
    (bool) or (boolean) -> Boolean
    (int) or (integer) -> Integer
    (object) -> Object
    (real), (double), or (float) -> Float
    (string) -> String
TypeCasting . PHP_EOL;

print_r($tech_carts) . PHP_EOL;
echo count($tech_carts) . PHP_EOL;
print_r(count($tech_carts)) . PHP_EOL;

echo PHP_EOL . " Reference: https://www.phptutorial.net/php-tutorial/php-data-types/" . PHP_EOL;
