<?php

use PhpTheDay\Health;
use PHPUnit\Framework\TestCase;

/**
 * HealthTest
 * @group health
 */
class HealthTest extends TestCase
{
    /** @test */
    public function test_bmi()
    {
        $target = new Health();
        $expected = 22.0;
        $bmi = $target->bmi(165, 60);
        $this->assertEquals($expected, $bmi);
    }
}
