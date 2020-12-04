<?php

namespace App\Day3;

class Part1
{
    public function getNumberOfTrees($map): int
    {
        $RIGHT_INCREMENT = 3;
        $DOWN_INCREMENT = 1;
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
}