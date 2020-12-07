<?php

namespace App\Day6;

class Part1
{
    public function getSumOfCounts($groups): int
    {
        $sum = 0;

        foreach ($groups as $group) {
            $group = explode(" ", $group);
            $allAnswersPerGroup = [];

            foreach ($group as $element) {
                $element = str_split($element);
                foreach ($element as $answer) {
                    array_push($allAnswersPerGroup, $answer);
                }
            }

            $uniqueAnswersPerGroup = array_unique($allAnswersPerGroup);

            $sum += sizeof($uniqueAnswersPerGroup);
        }

        return $sum;
    }
}