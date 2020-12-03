<?php

namespace App\Day2;

use App\Day2\TobogganCorporate\Password;

class Part2
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
            [$positions, $char, $password] = explode(" ", $input);
            [$firstPosition, $secondPosition] = explode("-", $positions);
            $char = $char[0];

            return new Password($firstPosition, $secondPosition, $char, $password);
        }, $inputArray);
    }
}