<?php

class Point{
    public $x;
    public $y;

    function __construct($x, $y){
        $this->x = $x;
        $this->y = $y;
    }
}

$a = new Point(3,1);
echo $a->x . PHP_EOL;
echo $a->y . PHP_EOL;

$b = new Point(3,6);
echo $b->x . PHP_EOL;
echo $b->y . PHP_EOL;
