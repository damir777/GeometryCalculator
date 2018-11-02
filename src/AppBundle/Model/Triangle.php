<?php

namespace AppBundle\Model;

class Triangle
{
    private $type = 'triangle';
    private $a;
    private $b;
    private $c;
    private $surface;
    private $circumference;
    private $s;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;

        $this->setS();
    }

    public function getType()
    {
        return $this->type;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->b;
    }

    public function getC()
    {
        return $this->c;
    }

    public function getSurface()
    {
        return $this->surface;
    }

    public function getCircumference()
    {
        return $this->circumference;
    }

    public function setSurface($surface)
    {
        $this->surface = number_format($surface, 2);
    }

    public function setCircumference($circumference)
    {
        $this->circumference = number_format($circumference, 2);
    }

    private function setS()
    {
        $this->s = ($this->a + $this->b + $this->c) / 2;
    }

    public function surface()
    {
        return sqrt($this->s * ($this->s - $this->a) * ($this->s - $this->b) * ($this->s - $this->c));
    }

    public function circumference()
    {
        return $this->a + $this->b + $this->c;
    }
}