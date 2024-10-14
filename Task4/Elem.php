<?php

class Elem
{
    public mixed $data;
    public ?Elem $next;
    public ?Elem $prev;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
        $this->prev = null;
    }
}
