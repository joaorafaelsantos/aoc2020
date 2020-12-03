<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Helpers\File;
use App\Day2\Part1;

$p1 = new Part1();

$inputArray = File::toArray("app/Day2/input1.txt");
$passwords = $p1->transformInputArrayIntoPasswords($inputArray);

// Puzzle solution
echo sizeof($p1->getValidPasswords($passwords));