<?php
// ARRAY MAP
echo 'Array Map' . PHP_EOL;
const ORIGINAL_ARRAY = [1, 2, 3, 4, 5];

$new_array = array_map(function ($item) {
    return $item * 2;
}, ORIGINAL_ARRAY);

echo 'Original Array' . PHP_EOL;
print_r(ORIGINAL_ARRAY) . PHP_EOL;

echo 'New Array' . PHP_EOL;
print_r($new_array) . PHP_EOL;

// Mapping array of objects
echo 'Array Map On Array of Object' . PHP_EOL;
class Employee
{
    private $name;
    private $age;
    private $position;

    public function __construct(string $name, int $age, string $position)
    {
        $this->name = $name;
        $this->age = $age;
        $this->position = $position;
    }

    function getName(): string
    {
        return $this->name;
    }

    function getAge(): int
    {
        return $this->age;
    }

    function getPosition(): string
    {
        return $this->position;
    }
}

$employees = [
    new Employee('Adhitama Fikri', 28, 'Software Engineer'),
    new Employee('John Doe', 30, 'Product Manager'),
    new Employee('Jane Smith', 25, 'Marketing Specialist'),
];
print_r($employees) . PHP_EOL;
$employee_names = array_map(function ($employee) {
    return $employee->getName();
}, $employees);
echo 'The employee names are: ' . implode(', ', $employee_names) . PHP_EOL;

// Mapping array using static function as a callback
echo 'Array Map with static function as a callback' . PHP_EOL;
class Square
{
    public static function area(int $length): int
    {
        return $length * $length;
    }
}
$length_arr = [25, 5, 8];
$square_areas = array_map('Square::area', $length_arr);
echo 'The square areas are: ' . implode(', ', $square_areas) . PHP_EOL;

// Array Filter
// Array Reduce
