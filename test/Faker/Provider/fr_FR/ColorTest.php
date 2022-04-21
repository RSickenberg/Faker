<?php

namespace Faker\Test\Provider\fr_FR;

use Faker\Provider\fr_FR\Color;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class ColorTest extends TestCase
{
    public function testColor()
    {
        self::assertIsString($this->faker->colorName());
    }

    public function testAllColors()
    {
        self::assertIsString($this->faker->safeColorName());
    }

    public function testSafeColorName()
    {
        $color = new Color($this->faker);
        self::assertMatchesRegularExpression('/^[\w]+$/', $color::safeColorName());
    }

    public function testColorName()
    {
        $color = new Color($this->faker);
        self::assertMatchesRegularExpression('/^[\w]+$/', $color::colorName());
    }

    protected function getProviders(): iterable
    {
        yield new Color($this->faker);
    }
}
