<?php

namespace Tests\Day4;

use App\Day4\Schema;
use PHPUnit\Framework\TestCase;
use App\Helpers\File;
use App\Day4\Part2;

class Part2Test extends TestCase
{
    private array $passports;
    private Part2 $p2;

    protected function setUp(): void
    {
        parent::setUp();
        $this->passports = [File::toArrayWithEmptyLines("input1.txt"), File::toArrayWithEmptyLines("input2.txt"), File::toArrayWithEmptyLines("input3.txt")];
        $this->p2 = new Part2();
    }

    public function testValidPasswords()
    {
        $this->assertEquals(2, sizeof($this->p2->getValidPassports($this->passports[0])));
        $this->assertEquals(4, sizeof($this->p2->getValidPassports($this->passports[2])));
    }

    public function testInvalidPasswords()
    {
        $this->assertEquals(0, sizeof($this->p2->getValidPassports($this->passports[1])));
    }

    public function testValidBirthYear()
    {
        $schema = new Schema(["byr" => 2002, "iyr" => null, "eyr" => null, "hgt" => null, "hcl" => null, "ecl" => null, "pid" => null]);
        $this->assertTrue($schema->getValidator()["byr"]);
    }

    public function testInvalidBirthYear()
    {
        $schema = new Schema(["byr" => 2003, "iyr" => null, "eyr" => null, "hgt" => null, "hcl" => null, "ecl" => null, "pid" => null]);
        $this->assertFalse($schema->getValidator()["byr"]);
    }

    public function testValidHeight()
    {
        $inchesSchema = new Schema(["byr" => null, "iyr" => null, "eyr" => null, "hgt" => "60in", "hcl" => null, "ecl" => null, "pid" => null]);
        $centimetersSchema = new Schema(["byr" => null, "iyr" => null, "eyr" => null, "hgt" => "190cm", "hcl" => null, "ecl" => null, "pid" => null]);
        $this->assertTrue($inchesSchema->getValidator()["hgt"]);
        $this->assertTrue($centimetersSchema->getValidator()["hgt"]);
    }

    public function testInvalidHeight()
    {
        $inchesSchema = new Schema(["byr" => null, "iyr" => null, "eyr" => null, "hgt" => "190in", "hcl" => null, "ecl" => null, "pid" => null]);
        $unitlessSchema = new Schema(["byr" => null, "iyr" => null, "eyr" => null, "hgt" => "190", "hcl" => null, "ecl" => null, "pid" => null]);
        $this->assertFalse($inchesSchema->getValidator()["hgt"]);
        $this->assertFalse($unitlessSchema->getValidator()["hgt"]);
    }

    public function testValidHairColor()
    {
        $schema = new Schema(["byr" => null, "iyr" => null, "eyr" => null, "hgt" => null, "hcl" => "#123abc", "ecl" => null, "pid" => null]);
        $this->assertTrue($schema->getValidator()["hcl"]);
    }

    public function testInvalidHairColor()
    {
        $withHashSchema = new Schema(["byr" => null, "iyr" => null, "eyr" => null, "hgt" => null, "hcl" => "#123abz", "ecl" => null, "pid" => null]);
        $withoutHashSchema = new Schema(["byr" => null, "iyr" => null, "eyr" => null, "hgt" => null, "hcl" => "123abc", "ecl" => null, "pid" => null]);
        $this->assertFalse($withHashSchema->getValidator()["hcl"]);
        $this->assertFalse($withoutHashSchema->getValidator()["hcl"]);
    }

    public function testValidEyeColor()
    {
        $schema = new Schema(["byr" => null, "iyr" => null, "eyr" => null, "hgt" => null, "hcl" => null, "ecl" => "brn", "pid" => null]);
        $this->assertTrue($schema->getValidator()["ecl"]);
    }

    public function testInvalidEyeColor()
    {
        $schema = new Schema(["byr" => null, "iyr" => null, "eyr" => null, "hgt" => null, "hcl" => null, "ecl" => "wat", "pid" => null]);
        $this->assertFalse($schema->getValidator()["ecl"]);
    }

    public function testValidPassportId()
    {
        $schema = new Schema(["byr" => null, "iyr" => null, "eyr" => null, "hgt" => null, "hcl" => null, "ecl" => null, "pid" => "000000001"]);
        $this->assertTrue($schema->getValidator()["pid"]);
    }

    public function testInvalidPassportId()
    {
        $schema = new Schema(["byr" => null, "iyr" => null, "eyr" => null, "hgt" => null, "hcl" => null, "ecl" => null, "pid" => "0123456789"]);
        $this->assertFalse($schema->getValidator()["pid"]);
    }
}
