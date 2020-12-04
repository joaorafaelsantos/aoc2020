<?php

namespace Tests\Day3;

use PHPUnit\Framework\TestCase;
use App\Helpers\File;
use App\Day3\Part1;

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

    public function testNumberOfTrees()
    {
        $this->assertEquals(7, $this->p1->getNumberOfTrees($this->data));
    }
}
