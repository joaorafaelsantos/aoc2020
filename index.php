<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Helpers\File;
use App\Day6\Part1;

$p1 = new Part1();

$data = File::toArrayWithEmptyLines("app/Day6/input1.txt");

// Puzzle solution
$sum = $p1->getSumOfCounts($data);
echo $sum;