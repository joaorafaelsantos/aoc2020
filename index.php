<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Helpers\File;
use App\Day4\Part1;

$p1 = new Part1();

$data = File::toArrayWithEmptyLines("app/Day4/input1.txt");

// Puzzle solution
echo sizeof($p1->getValidPassports($data));