<?php

namespace AppBundle\Model;

class Circle
{
    private $type = 'circle';
    private $r;
    private $surface;
    private $circumference;
    private $pi = 3.14;

    public function __construct($r)
    {
        $this->r = $r;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getR()
    {
        return $this->r;
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

    public function surface()
    {
        return pow($this->r, 2) * $this->pi;
    }

    public function circumference()
    {
        return 2 * $this->r * $this->pi;
    }
}