<?php

class Sorter
{
    public function bubbleSort(array $array): array
    {
        for ($j = 0; $j < count($array) - 1; $j++) {
            for ($i = 0; $i < count($array) - $j - 1; $i++) {
                if ($array[$i] > $array[$i + 1]) {
                    // Обмен элементов
                    [$array[$i], $array[$i + 1]] = [$array[$i + 1], $array[$i]];
                }
            }
        }
        return $array;
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

    public function easy_sort(array $array): array
    {
        for ($i = 1; $i < count($array); $i++) {
            $key = $array[$i];
            $j = $i - 1;

            while ($j >= 0 && $array[$j] > $key) {
                $array[$j + 1] = $array[$j];
                $j--;
            }
            $array[$j + 1] = $key;
        }
        return $array;
    }
}
