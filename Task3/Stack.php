<?php

class Stack
{
    private ?Node $top;

    public function __construct()
    {
        $this->top = null;
    }
    public function push($data): void
    {
        $node = new Node($data);
        $node->next = $this->top;
        $this->top = $node;
    }

    public function pop(): mixed
    {

        if ($this->isEmpty()) {
            return null;
        }

        $node = $this->top;
        $this->top = $this->top->next;
        return $node->data;
    }

    public function isEmpty(): bool
    {
        return $this->top === null;
    }
}
