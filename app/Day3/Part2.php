<?php

namespace App\Day3;

class Part2
{
    public function getNumberOfTrees($map, $right, $down): int
    {
        $RIGHT_INCREMENT = $right;
        $DOWN_INCREMENT = $down;
        $position = new Position(0, 0);
        $trees = 0;

        for ($i = 0; $i < sizeof($map); $i += $DOWN_INCREMENT) {
            $line = $map[$i];

            if ($i === 0) {
                continue;
            }

            $position->setX($position->getX() + $RIGHT_INCREMENT);
            $position->setY($position->getY() + $DOWN_INCREMENT);

            while ($position->getX() >= strlen($line)) {
                $line .= $line;
            }

            $location = $line[$position->getX()];

            if ($location === "#") {
                $trees++;
            }
        }
        
        return $trees;
    }

    public function getMultiplication($map): int
    {
        $movements = [[1, 1], [3, 1], [5, 1], [7, 1], [1, 2]];
        $multiplication = 1;
        $p2 = new Part2();

        for ($i = 0; $i < sizeof($movements); $i++) {
            $movement = $movements[$i];
            $trees = $p2->getNumberOfTrees($map, $movement[0], $movement[1]);
            $multiplication *= $trees;
        }

        return $multiplication;
    }
}