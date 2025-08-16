<?php
echo 'STANDARD ARRAY' . PHP_EOL;
$product_names = ['simbadda', 'ryzen', 'intel', 'amd', 'corsair', 'kingston', 'samsung', 'toshiba', 'western digital', 'seagate'];
print_r($product_names) . PHP_EOL;

// foreach loop
echo 'foreach on $product_names' . PHP_EOL;
foreach ($product_names as $product) {
    echo $product . PHP_EOL;
}

echo PHP_EOL . 'ASSOCIATIVE ARRAY' . PHP_EOL;
echo 'Think of it as a JS object' . PHP_EOL;
$person = [];
$person['name'] = 'Adhitama Fikri';
$person['age'] = 28;
$person['address'] = 'Jl. Raya Cikarang';
$person['city'] = 'Bekasi';
$person['country'] = 'Indonesia';
print_r($person) . PHP_EOL;

// foreach loop
echo 'foreach on $person' . PHP_EOL;
foreach ($person as $key => $value) {
    echo $key . ': ' . $value . PHP_EOL;
}

// Using list()
echo PHP_EOL . 'using list() to assign variables in one go' . PHP_EOL;
$values_arr = ['My Fella', 28, 'Adhitama Fikri', ['brand' => 'Adidas', 'size' => 'L']];
list($l_nick, $l_age, $l_name, $l_brand) = $values_arr;
echo $l_nick  . PHP_EOL;
echo $l_age . PHP_EOL;
echo $l_name . PHP_EOL;
print_r($l_brand);


// Array destructuring
echo PHP_EOL . 'Array destructuring' . PHP_EOL;
$urls =parse_url('https://www.phptutorial.net/php-tutorial/php-array-destructuring/');
print_r($urls) . PHP_EOL;
['scheme' => $scheme, 'host' => $host, 'path' => $path] = $urls;
echo $scheme . PHP_EOL;
echo $host . PHP_EOL;
echo $path . PHP_EOL;
