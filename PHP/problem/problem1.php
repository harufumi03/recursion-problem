<?php

function getLowestTemperature(int $x, int $y): int{
    return $x - $y;
}

echo getLowestTemperature(80,9) . PHP_EOL;