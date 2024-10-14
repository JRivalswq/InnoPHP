<?php

require 'Deque.php';
require 'Elem.php';

$deque = new Deque();

$deque -> pushTop('2 елемент');
$deque -> pushTop('1 елемент');
$deque -> pushBottom('3 элемент');
$deque -> pushBottom('4 элемент');
$deque -> removeTail();
$deque -> removeHead();

function printDeque($deque): void
{
    $current = $deque->head;
    echo 'Элементы двусвязной очереди:' . PHP_EOL;

    while ($current !== null) {
        echo "{$current->data}" .PHP_EOL;
        $current = $current->next;
    }
}

printDeque($deque);
