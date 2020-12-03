<?php

namespace Tests\Day2;

use PHPUnit\Framework\TestCase;
use App\Helpers\File;
use App\Day2\Part2;

class Part2Test extends TestCase
{
    private array $data;
    private Part2 $p2;

    protected function setUp(): void
    {
        parent::setUp();
        $this->data = File::toArray("input1.txt");
        $this->p2 = new Part2();
    }

    public function testNumberOfValidPasswords()
    {
        $passwords = $this->p2->transformInputArrayIntoPasswords($this->data);
        $validPasswords = $this->p2->getValidPasswords($passwords);
        $this->assertEquals(1, sizeof($validPasswords));
    }
}
