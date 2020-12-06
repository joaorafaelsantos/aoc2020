<?php

namespace App\Day5;

class BoardingPass
{
    private string $id;
    private int $row;
    private int $column;
    private int $seatId;

    public function __construct(string $id)
    {
        $this->id = $id;
        $this->row = $this->generateRow();
        $this->column = $this->generateColumn();
        $this->seatId = $this->generateSeatId();
    }

    public function getRow(): int
    {
        return $this->row;
    }

    private function generateRow(): int
    {
        $lowerLimit = 0;
        $higherLimit = 127;

        for ($i = 0; $i < 7; $i++) {
            $letter = $this->id[$i];

            if ($letter === "F") {
                $higherLimit = floor($higherLimit - (($higherLimit - $lowerLimit) / 2));
            }

            if ($letter === "B") {
                $lowerLimit = round($lowerLimit + (($higherLimit - $lowerLimit) / 2));
            }
        }

        return $higherLimit;
    }

    public function getColumn(): int
    {
        return $this->column;
    }

    private function generateColumn(): int
    {
        $lowerLimit = 0;
        $higherLimit = 7;

        for ($i = 7; $i < 10; $i++) {
            $letter = $this->id[$i];

            if ($letter === "L") {
                $higherLimit = floor($higherLimit - (($higherLimit - $lowerLimit) / 2));
            }

            if ($letter === "R") {
                $lowerLimit = round($lowerLimit + (($higherLimit - $lowerLimit) / 2));
            }
        }

        return $higherLimit;
    }

    public function getSeatId(): int
    {
        return $this->seatId;
    }

    private function generateSeatId(): int
    {
        return ($this->row * 8) + $this->column;
    }
}