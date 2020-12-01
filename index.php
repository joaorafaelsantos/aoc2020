<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Helpers\File;
use App\Day1\Part2;

$p2 = new Part2();

$expenses = File::toArray("app/Day1/input1.txt");
$entries = $p2->getThreeEntries($expenses);

// Puzzle solution
echo $p2->getEntriesMultiplication($entries);