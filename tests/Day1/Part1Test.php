<?php

namespace Tests\Day1;

use PHPUnit\Framework\TestCase;
use App\Helpers\File;
use App\Day1\Part1;

class Part1Test extends TestCase
{
    private array $entries;
    private Part1 $p1;

    protected function setUp(): void
    {
        parent::setUp();
        $this->entries = File::toArray("input1.txt");
        $this->p1 = new Part1();
    }

    public function testTwoEntriesSum()
    {
        $twoEntries = $this->p1->getTwoEntries($this->entries);
        $this->assertEquals(2020, $twoEntries[0] + $twoEntries[1]);
    }

    public function testEntriesMultiplication()
    {
        $twoEntries = [1721, 299];
        $this->assertEquals(514579, $this->p1->getEntriesMultiplication($twoEntries));
    }
}
