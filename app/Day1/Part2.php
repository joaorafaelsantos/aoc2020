<?php

namespace App\Day1;

class Part2
{
    public function getThreeEntries(array $expenses): array
    {
        for ($i = 0; $i < sizeof($expenses); $i++) {
            for ($j = 1; $j < sizeof($expenses); $j++) {
                for ($k = 2; $k < sizeof($expenses); $k++) {
                    $firstEntry = $expenses[$i];
                    $secondEntry = $expenses[$j];
                    $thirdEntry = $expenses[$k];

                    if ($firstEntry + $secondEntry + $thirdEntry === 2020) {
                        return [$firstEntry, $secondEntry, $thirdEntry];
                    }
                }
            }
        }
    }

    public function getEntriesMultiplication(array $entries): int
    {
        return $entries[0] * $entries[1] * $entries[2];
    }
}