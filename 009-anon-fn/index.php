<?php
echo 'Anonymous Functions' . PHP_EOL;
$greet = fn($name) => "Hello, $name";
echo $greet('Adhitama') . PHP_EOL;

$v1 = 'This is a string from parent scope';
$v2 = 2025;

$my_fn = function (string $p1, int $p2) use ($v1, $v2) {
    echo "from my_fn() $p1 $p2" . PHP_EOL;
    echo 'can access parent scope variables by doing function(...$params) use (...$vars) {}' . PHP_EOL;
    echo "v1: $v1 - v2: $v2" .  PHP_EOL;
};
$my_fn('String P1', 2027);
