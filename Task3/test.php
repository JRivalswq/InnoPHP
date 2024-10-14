<?php

require 'Stack.php';
require 'Node.php';

function reverseString($input): string
{
    $stack = new Stack();
    $length = mb_strlen($input);

    for ($i = 0; $i < $length; $i++) {
        $stack->push(mb_substr($input, $i, 1));
    }

    $reversed = '';

    while (!$stack->isEmpty()) {
        $value_out = $stack->pop();
        if ($value_out !== null) {
            $reversed .= $value_out;
        }
    }
    return $reversed;
}

$testStrings = [
    'Привет Hello, world!',
    '',
    'Лёша на полке клопа нашёл',
];

foreach ($testStrings as $testString) {
    echo "Original: \"$testString\" => Reversed: \"" . reverseString($testString) . "\"\n";
}
