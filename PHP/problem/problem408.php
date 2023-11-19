<?php

class Point{
  public $x;
  public $y;

  function __construct($x, $y){
      $this->x = $x;
      $this->y = $y;
  }
}

class Line{
  public $startPoint;
  public $endPoint;

  function __construct(Point $startPoint, Point $endPoint){
    $this->startPoint = $startPoint;
    $this->endPoint = $endPoint;
  }

  function getLength(){
    $dx = $this->endPoint->x - $this->startPoint->x;
    $dy = $this->endPoint->y - $this->startPoint->y;
    return sqrt($dx * $dx + $dy * $dy);
  }
}

$a = new Point(3,1);
$b = new Point(3,6);
$lineAB = new Line($a, $b);
echo $lineAB->getLength() . PHP_EOL;

$c = new Point(1, 3);
$d = new Point(6,15);
$lineCD = new Line($c, $d);
echo $lineCD->getLength() . PHP_EOL;