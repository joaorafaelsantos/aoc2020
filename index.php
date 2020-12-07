<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Helpers\File;
use App\Day6\Part2;

$p2 = new Part2();

$data = File::toArrayWithEmptyLines("app/Day6/input1.txt");

// Puzzle solution
$sum = $p2->getSumOfCounts($data);
echo $sum;