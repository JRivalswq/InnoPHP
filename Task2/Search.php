<?php

class Search
{
    public function line($array, $key): array
    {
        foreach ($array as $index => $item) {
            if ($item === $key) {
                return ['index' => $index, 'item' => $item];
            }
        }
        return ['index' => false, 'item' => false];
    }

    public function binary($array, $key): int
    {
        $left = 0;
        $right = count($array) - 1;

        while ($left <= $right) {
            $mid = intval(($left + $right) / 2);

            if ($array[$mid] === $key) {
                return $mid;
            }
            if ($array[$mid] < $key) {
                $left = $mid + 1;
            } else {
                $right = $mid - 1;
            }
        }
        return -1;
    }

    public function quick_sort(array $array): array
    {
        if (count($array) <= 1) {
            return $array;
        }
        $pivot = array_shift($array);
        $left = [];
        $right = [];

        foreach ($array as $val) {
            if ($val <= $pivot) {
                $left[] = $val;
            } else {
                $right[] = $val;
            }
        }
        return array_merge($this->quick_sort($left), [$pivot], $this->quick_sort($right));
    }
}
