<?php

namespace App\Day5;

class Part1
{
    public function getHighestSeatId($boardingPasses): int
    {
        $seatsId = array_map(function ($boardingPass) {
            $boardingPass = new BoardingPass($boardingPass);
            return $boardingPass->getSeatId();
        }, $boardingPasses);

        return max($seatsId);
    }
}