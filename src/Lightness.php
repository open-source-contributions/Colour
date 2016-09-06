<?php
declare(strict_types = 1);

namespace Innmind\Colour;

use Innmind\Colour\Exception\InvalidValueRangeException;

final class Lightness
{
    private $value;

    public function __construct(int $value)
    {
        if ($value < 0 || $value > 100) {
            throw new InvalidValueRangeException;
        }

        $this->value = $value;
    }

    public function add(self $lightness): self
    {
        return new self(
            min(
                $this->value + $lightness->toInt(),
                100
            )
        );
    }

    public function subtract(self $lightness): self
    {
        return new self(
            max(
                $this->value - $lightness->toInt(),
                0
            )
        );
    }

    public function toInt(): int
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return (string) $this->value;
    }
}