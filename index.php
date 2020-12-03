<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Helpers\File;
use App\Day2\Part2;

$p2 = new Part2();

$inputArray = File::toArray("app/Day2/input1.txt");
$passwords = $p2->transformInputArrayIntoPasswords($inputArray);

// Puzzle solution
echo sizeof($p2->getValidPasswords($passwords));