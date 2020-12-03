<?php

namespace App\Day2\TobogganCorporate;

class Password
{
    private int $firstPosition;
    private int $secondPosition;
    private string $char;
    private string $password;

    public function __construct(int $firstPosition, int $secondPosition, string $char, string $password)
    {
        $this->firstPosition = $firstPosition;
        $this->secondPosition = $secondPosition;
        $this->char = $char;
        $this->password = $password;
    }

    public function isValid(): bool
    {
        $firstOccurrence = $this->password[$this->firstPosition - 1];
        $secondOccurrence = $this->password[$this->secondPosition - 1];

        if (($firstOccurrence === $this->char && $secondOccurrence !== $this->char) ||
            ($firstOccurrence !== $this->char && $secondOccurrence === $this->char)) {
            return true;
        }
        return false;
    }
}