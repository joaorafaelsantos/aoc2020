<?php

namespace Tests\Day6;

use PHPUnit\Framework\TestCase;
use App\Helpers\File;
use App\Day6\Part1;

class Part1Test extends TestCase
{
    private array $answers;
    private Part1 $p1;

    protected function setUp(): void
    {
        parent::setUp();
        $this->answers = File::toArrayWithEmptyLines("input1.txt");
        $this->p1 = new Part1();
    }

    public function testSum()
    {
        $this->assertEquals(11, $this->p1->getSumOfCounts($this->answers));
    }
}
