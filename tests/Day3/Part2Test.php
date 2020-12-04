<?php

namespace Tests\Day3;

use PHPUnit\Framework\TestCase;
use App\Helpers\File;
use App\Day3\Part2;

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

    public function testMultiplication()
    {
        $this->assertEquals(336, $this->p2->getMultiplication($this->data));
    }
}
