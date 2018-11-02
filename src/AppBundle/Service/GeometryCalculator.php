<?php

namespace AppBundle\Service;

class GeometryCalculator
{
    public function calculateSurface($objects)
    {
        $surface = [];

        foreach ($objects as $object)
        {
            $surface[] = $object->surface();
        }

        return number_format(array_sum($surface), 2);
    }

    public function calculateCircumference($objects)
    {
        $circumference = [];

        foreach ($objects as $object)
        {
            $circumference[] = $object->circumference();
        }

        return number_format(array_sum($circumference), 2);
    }
}