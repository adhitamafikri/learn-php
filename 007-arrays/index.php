<?php
echo 'STANDARD ARRAY' . PHP_EOL;
$product_names = ['simbadda', 'ryzen', 'intel', 'amd', 'corsair', 'kingston', 'samsung', 'toshiba', 'western digital', 'seagate'];
print_r($product_names) . PHP_EOL;

// Adding new item into array
$product_names[] = 'logitech';
$product_names[] = 'razer';

echo PHP_EOL . 'After adding new items' . PHP_EOL;
print_r($product_names) . PHP_EOL;

// mutating array item
$product_names[5] = 'adata';
$product_names[8] = 'huawei';
echo PHP_EOL . 'After updating items' . PHP_EOL;
print_r($product_names) . PHP_EOL;

// removing value from array
echo PHP_EOL . 'Can remove by doing unset($array[index])' . PHP_EOL;
unset($product_names[0]);
unset($product_names[8]);
echo PHP_EOL . 'After removing items' . PHP_EOL;
print_r($product_names) . PHP_EOL;

// getting array length
echo PHP_EOL . 'Getting array length' . PHP_EOL;
echo count($product_names) . PHP_EOL;


echo PHP_EOL . 'ASSOCIATIVE ARRAY' . PHP_EOL;
echo 'Think of it as a JS object' . PHP_EOL;
$person = [];
$person['name'] = 'Adhitama Fikri';
$person['age'] = 28;
$person['address'] = 'Jl. Raya Cikarang';
$person['city'] = 'Bekasi';
$person['country'] = 'Indonesia';
print_r($person) . PHP_EOL;

// getting value from associative array
echo PHP_EOL . 'Getting value from associative array by doing $arr["key"]' . PHP_EOL;
print_r($person['name']);
