<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Helpers\File;
use App\Day5\Part2;

$p2 = new Part2();

$data = File::toArray("app/Day5/input1.txt");

// Puzzle solution
$seatsId = $p2->getSortedSeatsId($data);
echo $p2->getMissingSeatId($seatsId);