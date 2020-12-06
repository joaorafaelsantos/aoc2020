<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Helpers\File;
use App\Day5\Part1;

$p1 = new Part1();

$data = File::toArray("app/Day5/input1.txt");

// Puzzle solution
echo $p1->getHighestSeatId($data);