<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Helpers\File;
use App\Day4\Part2;

$p2 = new Part2();

$data = File::toArrayWithEmptyLines("app/Day4/input1.txt");

// Puzzle solution
echo sizeof($p2->getValidPassports($data));