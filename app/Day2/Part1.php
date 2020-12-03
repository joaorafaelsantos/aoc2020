<?php

namespace App\Day2;

use App\Day2\ShopkeeperOldJob\Password;

class Part1
{
    /**
     * @param Password[] $passwords
     * @return Password[]
     */
    public function getValidPasswords(array $passwords): array
    {
        return array_filter($passwords, function ($password) {
            return $password->isValid();
        });
    }

    public function transformInputArrayIntoPasswords($inputArray): array
    {
        return array_map(function ($input) {
            [$occurrences, $char, $password] = explode(" ", $input);
            [$minOccurrence, $maxOccurrence] = explode("-", $occurrences);
            $char = $char[0];
            
            return new Password($minOccurrence, $maxOccurrence, $char, $password);
        }, $inputArray);
    }
}