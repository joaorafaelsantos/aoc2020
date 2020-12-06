<?php

namespace App\Day5;

class Part2
{
    public function getMissingSeatId($seatsId): int
    {
        for ($i = 0; $i < sizeof($seatsId); $i++) {
            $seatId = $seatsId[$i];

            if ($i > 0 && $seatId - 1 !== $seatsId[$i - 1]) {
                return $seatsId[$i - 1] + 1;
            }
        }

        return -1;
    }

    public function getSortedSeatsId($boardingPasses): array
    {
        $seatsId = array_map(function ($boardingPass) {
            $boardingPass = new BoardingPass($boardingPass);
            return $boardingPass->getSeatId();
        }, $boardingPasses);

        asort($seatsId);
        return array_values($seatsId);
    }
}