<?php
/**
 * in this class we know about rest parameters
 */
echo "hello world" . PHP_EOL;

function addMore(...$numbers): int
{
    // return array_sum($numbers);
    $sum = 0;
    foreach ($numbers as $number) {
        if ($number > 10) {
            $sum += $number;
        }

    }
    return $sum;
}

/**
 * @param  string $type
 * @param  int $condition
 * @param  array $numbers
 * @return int
 */
function mathFunction($type = '+', $condition = 10, ...$numbers): int
{
    $sum = 10000;
    foreach ($numbers as $number) {
        if ($number > $condition) {
            if ($type == '-') {
                $sum-+$number;
            }
            $sum += $number;
        }
    }
    return $sum;
}

echo addMore(100, 100, 100, 100, 9, 3) . PHP_EOL;

echo mathFunction('-', 25, 100, 1000, 19000, 1000) . PHP_EOL;

$numbers = [100, 200, 300, 400, 500];

echo mathFunction('-', 10, ...$numbers) . PHP_EOL;
