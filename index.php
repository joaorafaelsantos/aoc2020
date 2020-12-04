<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Helpers\File;
use App\Day3\Part1;

$p1 = new Part1();

$data = File::toArray("app/Day3/input1.txt");

// Puzzle solution
echo $p1->getNumberOfTrees($data);