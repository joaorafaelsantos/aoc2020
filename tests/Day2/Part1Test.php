<?php

namespace Tests\Day2;

use PHPUnit\Framework\TestCase;
use App\Helpers\File;
use App\Day2\Part1;

class Part1Test extends TestCase
{
    private array $data;
    private Part1 $p1;

    protected function setUp(): void
    {
        parent::setUp();
        $this->data = File::toArray("input1.txt");
        $this->p1 = new Part1();
    }

    public function testNumberOfValidPasswords()
    {
        $passwords = $this->p1->transformInputArrayIntoPasswords($this->data);
        $validPasswords = $this->p1->getValidPasswords($passwords);
        $this->assertEquals(2, sizeof($validPasswords));
    }
}
