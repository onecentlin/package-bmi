<?php
namespace PhpTheDay;

class Health
{
    public function bmi(int $height, int $weight)
    {
        return round($weight / pow($height / 100.0, 2), 1);
    }
}
