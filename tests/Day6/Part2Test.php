<?php

namespace Tests\Day6;

use PHPUnit\Framework\TestCase;
use App\Helpers\File;
use App\Day6\Part2;

class Part2Test extends TestCase
{
    private array $answers;
    private Part2 $p2;

    protected function setUp(): void
    {
        parent::setUp();
        $this->answers = File::toArrayWithEmptyLines("input1.txt");
        $this->p2 = new Part2();
    }

    public function testSum()
    {
        $this->assertEquals(6, $this->p2->getSumOfCounts($this->answers));
    }
}
