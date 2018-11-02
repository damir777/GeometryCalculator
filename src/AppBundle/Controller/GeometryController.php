<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\SerializerInterface;

use AppBundle\Model\Triangle;
use AppBundle\Model\Circle;
use AppBundle\Validator\GeometryValidator;

class GeometryController extends Controller
{
    private $validator;

    public function __construct(GeometryValidator $validator)
    {
        $this->validator = $validator;
    }

    /**
     * @Route("triangle/{a}/{b}/{c}")
     */
    public function triangleCalculation($a, $b, $c, SerializerInterface $serializer)
    {
        $this->validator->validateTriangle($a, $b, $c);

        $triangle = new Triangle($a, $b, $c);

        $surface = $triangle->surface();
        $triangle->setSurface($surface);

        $circumference = $triangle->circumference();
        $triangle->setCircumference($circumference);

        $output = $serializer->serialize($triangle, 'json');

        return new Response($output);
    }

    /**
     * @Route("circle/{r}")
     */
    public function circleCalculation($r, SerializerInterface $serializer)
    {
        $this->validator->validateCircle($r);

        $circle = new Circle($r);

        $surface = $circle->surface();
        $circle->setSurface($surface);

        $circumference = $circle->circumference();
        $circle->setCircumference($circumference);

        $output = $serializer->serialize($circle, 'json');

        return new Response($output);
    }
}