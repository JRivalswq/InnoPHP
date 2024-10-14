<?php

include 'Sorter.php';

$sorter = new Sorter();

$testArrays = [
    [5, 2, 9, 1, 5, 6],
    [3, 0, 2, 7, 1, 4],
    [10, 7, 8, 9, 1, 5],
];

foreach ($testArrays as $index => $array) {
    echo "Original array $index: " . implode(', ', $array) . PHP_EOL;

    $sort1 = $sorter->bubblesort($array);
    echo 'Sorted by Insertion Sort: ' . implode(', ', $sort1) . PHP_EOL;
    $sort2 = $sorter->quick_sort($array);
    echo 'Sorted by Selection Sort: ' . implode(', ', $sort2) . PHP_EOL;
    $sort3 = $sorter->easy_sort($array);
    echo 'Sorted by Quick Sort: ' . implode(', ', $sort3) . PHP_EOL;

    echo PHP_EOL;
}
