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
        $color = $this->faker->colorName();
        self::assertIsString($color);
    }

    protected function getProviders(): iterable
    {
        yield new Color($this->faker);
    }
}
