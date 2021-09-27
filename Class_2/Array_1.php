<?php

// indexed array

//associative array

$student = [
    [
        "name" => "komol",
        "id"   => "123456789",
    ],
    [
        "name" => "jahid",
        "id"   => "1234567890",
    ],
    [
        "name" => "koko",
        "id"   => "123123123",
    ],
];

// foreach ($student as $key => $value) {
//     foreach ($value as $key_2 => $value_2) {
//         if ($key_2 == "name") {
//             echo "Name:" . $value_2 . " ";
//         }if ($key_2 == "id") {
//             echo "ID:" . $value_2 . PHP_EOL;
//         }
//     }
// }

$student_array = [
    "Kolo"  => 30,
    "jahid" => 40,
    "imran" => 10,
    "rohim" => 30,
    "Mohin" => 40,
];
// array_change_key_case
// print_r(array_change_key_case($student_array, CASE_UPPER));
// array push
$array = [1, 2, 3, 4, 5, 6];
// (array_push($array, 10));
/**
 * array pop
 * */
// array_pop($array);

/**
 * array unshift
 */
array_unshift($array, 100);

/**
 * array shift
 */
array_shift($array);
array_shift($array);
print_r($array) . PHP_EOL;
