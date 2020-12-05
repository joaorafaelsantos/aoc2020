<?php

namespace App\Day4;

class Part2
{
    public function getValidPassports($passports): array
    {
        return array_filter($passports, function ($passport) {
            return $this->isPassportValid($passport);
        });
    }

    public function isPassportValid($passport): bool
    {
        $attributes = $this->getAttributesFromPassport($passport);

        if (sizeof($attributes) === 8 || (sizeof($attributes) === 7 && !array_key_exists("cid", $attributes))) {
            return $this->areAttributesValid($attributes);
        }

        return false;
    }

    public function getAttributesFromPassport($passport): array
    {
        $attributes = [];
        $sequences = explode(" ", $passport);

        foreach ($sequences as $sequence) {
            $sequence = explode(":", $sequence);
            $attributes[$sequence[0]] = $sequence[1];
        }

        return $attributes;
    }

    public function areAttributesValid($attributes): bool
    {
        $schema = new Schema($attributes);
        $validator =  $schema->getValidator();

        return array_sum($validator) == count($validator);
    }
}