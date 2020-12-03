<?php

namespace App\Day2\ShopkeeperOldJob;

class Password
{
    private int $minOccurrences;
    private int $maxOccurrences;
    private string $char;
    private string $password;

    public function __construct(int $minOccurrences, int $maxOccurrences, string $char, string $password)
    {
        $this->minOccurrences = $minOccurrences;
        $this->maxOccurrences = $maxOccurrences;
        $this->char = $char;
        $this->password = $password;
    }

    public function isValid(): bool
    {
        $occurrences = substr_count($this->password, $this->char);
        if ($occurrences >= $this->minOccurrences && $occurrences <= $this->maxOccurrences) {
            return true;
        }

        return false;
    }
}