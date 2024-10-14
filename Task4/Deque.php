<?php

class Deque
{
    private ?Elem $top;
    private ?Elem $bottom;

    public function __construct()
    {
        $this->head = null;
        $this->tail = null;
    }

    public function pushTop($data): void
    {
        $newElem = new Elem($data);

        if ($this->isEmpty()) {
            $this->head = $this->tail = $newElem;
        } else {
            $newElem->next = $this->head;
            $this->head->prev = $newElem;
            $this->head = $newElem;
        }
    }

    public function pushBottom($data): void
    {
        $newElem = new Elem($data);

        if ($this->isEmpty()) {
            $this->tail = $this->head = $newElem;
        } else {
            $newElem->prev = $this->tail;
            $this->tail->next = $newElem;
            $this->tail = $newElem;
        }
    }

    public function removeHead()
    {
        if ($this->isEmpty()) {
            return null;
        } else {
            $data = $this->head->data;
            $this->head = $this->head->next;

            if ($this->head !== null) {
                $this->head->prev = null;
            } else {
                $this->tail = null;
            }

            return $data;
        }
    }

    public function removeTail()
    {
        if ($this->isEmpty()) {
            return null;
        } else {
            $data = $this->tail->data;
            $this->tail = $this->tail->prev;


            if ($this->tail !== null) {
                $this->tail->next = null;
            } else {
                $this->head = null;
            }

            return $data;
        }
    }


    public function peekFirst()
    {
        if ($this->isEmpty()) {
            return null;
        } else {
            return $this->head;
        }
    }


    public function isEmpty(): bool
    {
        return $this->head === null;
    }

}
