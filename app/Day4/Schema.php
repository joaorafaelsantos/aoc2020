<?php

namespace App\Day4;

class Schema
{
    private array $attributes;
    private array $validator;

    public function __construct(array $attributes)
    {
        $this->attributes = $attributes;
        $this->validator = [
            "byr" => Validation::between($attributes["byr"], 1920, 2002),
            "iyr" => Validation::between($attributes["iyr"], 2010, 2020),
            "eyr" => Validation::between($attributes["eyr"], 2020, 2030),
            "hgt" => Validation::betweenMeasures($attributes["hgt"], ["in" => ["start" => 59, "end" => 76], "cm" => ["start" => 150, "end" => 193]]),
            "hcl" => Validation::regex($attributes["hcl"], "/^[#][0-9a-f]{6}$/"),
            "ecl" => Validation::regex($attributes["ecl"], "/^(amb|blu|brn|gry|grn|hzl|oth)$/"),
            "pid" => Validation::regex($attributes["pid"], "/^[0-9]{9}$/"),
        ];
    }

    public function getValidator(): array
    {
        return $this->validator;
    }
}