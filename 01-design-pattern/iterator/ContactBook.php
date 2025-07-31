<?php

namespace iterator;

/**
 * Permet de parcourir un objet avec une structure itérative "foreach".
 */
class ContactBook implements \Iterator
{
    private $data = [
        'a' => [],
        'b' => [],
        'c' => [],
        'd' => [],
        'e' => [],
        'f' => [],
        'g' => [],
        'h' => [],
        'i' => [],
        'j' => [],
    ];

    private $currentLetter = 'a';
    private $currentLetterIndex = 0;

    public function add(Contact $contact)
    {
       $this->data[$contact->getLastName()[0]][] = $contact;
    }


    public function current(): mixed
    {
        return $this->data[$this->currentLetter][$this->currentLetterIndex];
    }

    public function next(): void
    {
       if ($this->currentLetterIndex < count($this->data[$this->currentLetter])) {
           $this->currentLetterIndex++;
       } else {
           $this->currentLetterIndex = 0;
           $this->currentLetter = chr(ord($this->currentLetter) + 1);
       }
    }

    public function key(): mixed
    {
        return [$this->currentLetter, $this->currentLetterIndex];
    }

    public function valid(): bool
    {
        // TODO: Implement valid() method.
    }

    public function rewind(): void
    {
        // TODO: Implement rewind() method.
    }
}