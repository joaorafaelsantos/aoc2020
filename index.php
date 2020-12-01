<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Helpers\File;
use App\Day1\Part1;

$p1 = new Part1();

$expenses = File::toArray("app/Day1/input1.txt");
$entries = $p1->getTwoEntries($expenses);

// Puzzle solution
echo $p1->getEntriesMultiplication($entries);