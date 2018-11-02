<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

use AppBundle\Model\Triangle;
use AppBundle\Model\Circle;
use AppBundle\Validator\GeometryValidator;

class CalculatorController extends Controller
{
    private $validator;

    public function __construct(GeometryValidator $validator)
    {
        $this->validator = $validator;
    }

    /**
     * @Route("calculator/surface")
     */
    public function surfaceCalculation()
    {
        $a = 2;
        $b = 3;
        $c = 4;
        $r = 3;

        $this->validator->validateTriangle($a, $b, $c);

        $this->validator->validateCircle($r);

        $service = $this->container->get('app.geometry_calculator');

        $objects = [new Triangle($a, $b, $c), new Circle($r)];

        $output = $service->calculateSurface($objects);

        return new Response($output);
    }

    /**
     * @Route("calculator/circumference")
     */
    public function circumferenceCalculation()
    {
        $a = 2;
        $b = 3;
        $c = 4;
        $r = 3;

        $this->validator->validateTriangle($a, $b, $c);

        $this->validator->validateCircle($r);

        $service = $this->container->get('app.geometry_calculator');

        $objects = [new Triangle($a, $b, $c), new Circle($r)];

        $output = $service->calculateCircumference($objects);

        return new Response($output);
    }
}