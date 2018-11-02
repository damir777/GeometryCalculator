<?php

namespace AppBundle\Validator;

use AppBundle\Exception\TriangleZeroSideException;
use AppBundle\Exception\TriangleDimensionsException;
use AppBundle\Exception\CircleZeroRadiusException;

class GeometryValidator
{
    public function validateTriangle($a, $b, $c)
    {
        $this->validateTriangleSides([$a, $b, $c]);

        $this->validateTriangleDimensions([$a, $b, $c]);
    }

    private function validateTriangleSides($sides)
    {
        foreach ($sides as $side)
        {
            if (!$side > 0)
            {
                throw new TriangleZeroSideException();
            }
        }
    }

    private function validateTriangleDimensions($sides)
    {
        $longestSide = max($sides);

        $s = ($sides[0] + $sides[1] + $sides[2]) / 2;

        if ($longestSide >= $s)
        {
            throw new TriangleDimensionsException();
        }
    }

    public function validateCircle($r)
    {
        if (!$r > 0)
        {
            throw new CircleZeroRadiusException();
        }
    }
}