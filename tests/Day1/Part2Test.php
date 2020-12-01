<?php

namespace Tests\Day1;

use PHPUnit\Framework\TestCase;
use App\Helpers\File;
use App\Day1\Part2;

class Part2Test extends TestCase
{
    private array $entries;
    private Part2 $p2;

    protected function setUp(): void
    {
        parent::setUp();
        $this->entries = File::toArray("input1.txt");
        $this->p2 = new Part2();
    }

    public function testThreeEntriesSum()
    {
        $threeEntries = $this->p2->getThreeEntries($this->entries);
        $this->assertEquals(2020, $threeEntries[0] + $threeEntries[1] + $threeEntries[2]);
    }

    public function testEntriesMultiplication()
    {
        $threeEntries = [979, 366, 675];
        $this->assertEquals(241861950, $this->p2->getEntriesMultiplication($threeEntries));
    }
}
