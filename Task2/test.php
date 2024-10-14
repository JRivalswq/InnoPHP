<?php

include 'Search.php';

$search = new Search();

$testArrays = [
    [5, 2, 9, 1, 5, 6],
    [3, 0, 2, 7, 1, 4],
    [10, 7, 8, 9, 1, 5],
];

foreach ($testArrays as $index => $array) {
    echo "Original array $index: " . implode(', ', $array) . PHP_EOL;

    $search1 = $search->line($array, 1);

    echo 'Linerial search:' .PHP_EOL;
    echo 'Find index: ' . $search1['index'] . PHP_EOL;
    echo 'Find num: ' . $search1['item'] . PHP_EOL;


    $array_sorted = $search->quick_sort($array);
    echo "Sorted array $index: " . implode(', ', $array_sorted) . PHP_EOL;

    echo 'Binary search:' .PHP_EOL;
    $search2 = $search->binary($array_sorted, 7);
    echo 'Find num: ' . $search2 . PHP_EOL;
    echo '--------------------------------' .PHP_EOL;
}
