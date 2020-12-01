<?php

namespace App\Day1;

class Part1
{
    public function getTwoEntries(array $expenses): array
    {
        for ($i = 0; $i < sizeof($expenses); $i++) {
            for ($j = 1; $j < sizeof($expenses); $j++) {
                $firstEntry = $expenses[$i];
                $secondEntry = $expenses[$j];

                if ($firstEntry + $secondEntry === 2020) {
                    return [$firstEntry, $secondEntry];
                }
            }
        }
    }

    public function getEntriesMultiplication(array $entries): int
    {
        return $entries[0] * $entries[1];
    }
}