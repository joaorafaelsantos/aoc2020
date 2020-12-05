<?php

namespace App\Day4;

class Validation
{
    public static function between($value, $start, $end): bool
    {
        if ($value >= $start && $value <= $end) {
            return true;
        }
        return false;
    }

    public static function regex($value, $regex): bool|int
    {
        return (bool) preg_match($regex, $value);
    }

    public static function betweenMeasures($value, $measures): bool
    {
        foreach ($measures as $key => $measure) {
            if (str_contains($value, $key)) {
                $value = str_replace($key, "", $value);
                return self::between($value, $measure["start"], $measure["end"]);
            }
        }
        return false;
    }
}