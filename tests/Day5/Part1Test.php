<?php

namespace Tests\Day5;

use App\Day5\BoardingPass;
use PHPUnit\Framework\TestCase;
use App\Helpers\File;
use App\Day5\Part1;

class Part1Test extends TestCase
{
    private array $boardingPasses;
    private Part1 $p1;

    protected function setUp(): void
    {
        parent::setUp();
        $this->boardingPasses = File::toArray("input1.txt");
        $this->p1 = new Part1();
    }

    public function testRowNumber()
    {
        $boardingPass = new BoardingPass("BFFFBBFRRR");
        $this->assertEquals(70, $boardingPass->getRow());
    }

    public function testColumnNumber()
    {
        $boardingPass = new BoardingPass("BFFFBBFRRR");
        $this->assertEquals(7, $boardingPass->getColumn());
    }

    public function testSeatIdNumber()
    {
        $boardingPass = new BoardingPass("BFFFBBFRRR");
        $this->assertEquals(567, $boardingPass->getSeatId());
    }

    public function testHighestSeatId() {
        $this->assertEquals(820, $this->p1->getHighestSeatId($this->boardingPasses));
    }
}
