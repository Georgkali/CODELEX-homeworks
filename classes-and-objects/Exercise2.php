<?php

class Point {
    private int $x;
    private int $y;
    public function __construct(int $x, int $y) {
        $this->x = $x;
        $this->y = $y;
    }
    public function getX(): int
    {
        return $this->x;
    }
    public function getY(): int
    {
        return $this->y;
    }
    public function setX($x):int {
        return $this->x = $x;
    }
    public function setY($y):int {
        return $this->y = $y;
    }
}


$p1 = new Point(5, 2);
$p2 = new Point(-3, 6);

function swapPoints(object $p1, object $p2): void {
    $p1X = $p1->getX();
    $p1Y = $p1->getY();
    $p2X = $p2->getX();
    $p2Y = $p2->getY();
    $p1->setX($p2X);
    $p1->setY($p2Y);
    $p2->setX($p1X);
    $p2->setY($p1Y);
}
swapPoints($p1, $p2);
echo "(" . $p1->getX() . ", " . $p1->getY() . ")";
echo "(" . $p2->getX() . ", " . $p2->getY() . ")";