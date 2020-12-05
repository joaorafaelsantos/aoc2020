<?php

namespace Tests\Day4;

use PHPUnit\Framework\TestCase;
use App\Helpers\File;
use App\Day4\Part1;

class Part1Test extends TestCase
{
    private array $passports;
    private Part1 $p1;

    protected function setUp(): void
    {
        parent::setUp();
        $this->passports = File::toArrayWithEmptyLines("input1.txt");
        $this->p1 = new Part1();
    }

    public function testNumberOfValidPasswords()
    {
        $this->assertEquals(2, sizeof($this->p1->getValidPassports($this->passports)));
    }
}
