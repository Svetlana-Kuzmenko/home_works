<?php

abstract class Figure{
    protected $perimetr;
    protected $square;
    protected $ratio;
    public function setPerimetr($perimetr)
    {
        $this->perimetr = $perimetr;
    }
    public function setSquare($square)
    {
        $this->square = $square;
    }
    public function setRatio($ratio)
    {
        $this->ratio = $ratio;
    }
    public function getRatio($square,$perimetr)
    {
        return $this->ratio=$square/$perimetr;
    }
    abstract function getSquare($a,$b,$c,$h);
    abstract function getPerimeter($a,$b,$c,$h);
}

class Rectangle extends Figure{
    public function getPerimeter($a,$b,$c,$h)
    {
       return $this->perimetr=$a+$b;
    }
    public function getSquare($a,$b,$c,$h)
    {
        return $this->square=$a*$b;
    }
}

class Square extends Figure{
    public function getPerimeter($a,$b,$c,$h)
    {
        return $this->perimetr=$a*4;
    }
    public function getSquare($a,$b,$c,$h)
    {
        return $this->square=$a*$a;
    }
}

class Triangle extends Figure{
    public function getPerimeter($a,$b,$c,$h)
    {
        return $this->perimetr=$a+$b+$c;
    }
    public function getSquare($a,$b,$c,$h)
    {
        return $this->square=0.5*$a*$h;
    }
}

$rectangle=new Rectangle();
$square=new Square();
$triangle=new Triangle();

echo 'Perimeter='.$rectangle->getPerimeter(10,20,0,0).'cm'.','.'Square='.$rectangle->getSquare(10,20,0,0).'cm'.','.
     'Ratio='.$rectangle->getRatio($rectangle->getPerimeter(10,20,0,0),$rectangle->getSquare(10,20,0,0))."\n";
echo 'Perimeter='.$square->getPerimeter(10,0,0,0).'cm'.','.'Square='.$square->getSquare(10,0,0,0).'cm'.','.
     'Ratio='.$square->getRatio($square->getPerimeter(10,0,0,0),$square->getSquare(10,0,0,0))."\n";
echo 'Perimeter='.$triangle->getPerimeter(10,15,20,0).'cm'.','.'Square='.$triangle->getSquare(10,0,0,15).'cm'.','.
     'Ratio='.$triangle->getRatio($triangle->getPerimeter(10,15,20,0),$triangle->getSquare(10,0,0,15))."\n";

