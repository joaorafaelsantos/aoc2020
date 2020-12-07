<?php

namespace App\Day6;

class Part2
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
            $duplicatedValues = sizeof($allAnswersPerGroup) - sizeof($uniqueAnswersPerGroup);

            $uniqueAnswers = 0;
            // In case there's no duplicated values found, the
            // number of unique answers should be all available (if
            // there's only one group -- answered by everyone --)
            if ($duplicatedValues === 0) {
                if (sizeof($group) === 1) {
                    $uniqueAnswers = sizeof($allAnswersPerGroup);
                }
            } else {
                // A question is only considered answered by everyone if the
                // number of duplications matches the size of that group
                $duplicationsPerAnswer = array_count_values($allAnswersPerGroup);
                foreach ($duplicationsPerAnswer as $answer => $duplications) {
                    if ($duplications === sizeof($group)) {
                        $uniqueAnswers += 1;
                    }
                }
            }

            $sum += $uniqueAnswers;
        }

        return $sum;
    }
}