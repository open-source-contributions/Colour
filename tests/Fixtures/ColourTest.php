<?php
declare(strict_types = 1);

namespace Tests\Innmind\Colour\Fixtures;

use Fixtures\Innmind\Colour\Colour;
use Innmind\Colour\RGBA;
use Innmind\BlackBox\Set;
use PHPUnit\Framework\TestCase;

class ColourTest extends TestCase
{
    public function testInterface()
    {
        $set = Colour::any();

        $this->assertInstanceOf(Set::class, $set);

        foreach ($set->values() as $value) {
            $this->assertInstanceOf(RGBA::class, $value);
        }
    }
}