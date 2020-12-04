<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Helpers\File;
use App\Day3\Part2;

$p2 = new Part2();

$data = File::toArray("app/Day3/input1.txt");

// Puzzle solution
echo $p2->getMultiplication($data);